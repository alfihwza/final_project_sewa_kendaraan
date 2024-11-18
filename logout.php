<?php
require 'fungsi/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama_lengkap = $_POST['nama_lengkap'];
  $nomor_hp = $_POST['nomor_hp'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

  // Periksa apakah role diatur (untuk admin), jika tidak, default ke 'user'
  $role = isset($_POST['role']) ? $_POST['role'] : 'user';

  // Simpan data awal pengguna tanpa foto untuk mendapatkan user_id
  $stmt = $pdo->prepare("INSERT INTO users (nama_lengkap, nomor_hp, username, email, password, role, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())");
  if ($stmt->execute([$nama_lengkap, $nomor_hp, $username, $email, $password, $role])) {
    // Ambil user_id dari pengguna yang baru disimpan
    $user_id = $pdo->lastInsertId();

    // Proses upload foto
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
      $foto = $_FILES['foto'];
      $foto_name = $user_id . "_" . $username . "." . strtolower(pathinfo($foto["name"], PATHINFO_EXTENSION));
      $target_dir = "uploads/";
      $target_file = $target_dir . $foto_name;

      // Validasi tipe file
      $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

      if (in_array($file_type, $allowed_types)) {
        // Pindahkan file ke folder uploads
        if (move_uploaded_file($foto["tmp_name"], $target_file)) {
          // Update kolom foto di database
          $stmt = $pdo->prepare("UPDATE users SET foto = ? WHERE user_id = ?");
          $stmt->execute([$foto_name, $user_id]);

          echo "Registrasi berhasil. Silakan <a href='login.php'>login</a>.";
        } else {
          echo "Gagal mengupload foto.";
        }
      } else {
        echo "Format file foto tidak didukung. Hanya JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
      }
    } else {
      echo "Foto wajib diupload.";
    }
  } else {
    echo "Registrasi gagal.";
  }
}
?>

<form method="POST" enctype="multipart/form-data">
  Nama Lengkap: <input type="text" name="nama_lengkap" required><br>
  Nomor HP: <input type="number" name="nomor_hp" required><br>
  Username: <input type="text" name="username" required><br>
  Email: <input type="email" name="email" required><br>
  Password: <input type="password" name="password" required><br>
  Foto: <input type="file" name="foto" required><br>

  <!-- Pilihan Role, bisa hanya ditampilkan untuk admin -->
  Role:
  <select name="role" required>
    <option value="user">User</option>
    <option value="admin">Admin</option>
  </select><br>

  <button type="submit">Register</button>
  <a href="login.php">Login</a>
</form>