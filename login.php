<?php
session_start();
$host = "localhost"; 
$user = "root";     
$password = "";     
$dbname = "rental_kendaraan";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Cari user di database
  $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->execute([$username]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && password_verify($password, $user['password'])) {
    // Set session
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['role'] = $user['role'];

    // Redirect berdasarkan role
    if ($user['role'] == 'admin') {
      header("Location: admin/admin_dashboard.php");
    } else {
      header("Location: user/user_dashboard.php");
    }
    exit();
  } else {
    echo "Username atau password salah.";
  }
}
?>

<form method="POST">
  <h2>LOGIN</h2>
  Username: <input type="text" name="username" required><br>
  Password: <input type="password" name="password" required><br>
  <button type="submit">Login</button>
</form>

<style>
    body {
    font-family: Arial, sans-serif;
    background-image: url(img/login2.jpg);
    background-position: center;
    background-size: cover;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color:  rgba(0, 0, 0, 0.5);
    padding: 30px 25px;
    border-radius: 24px;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    color: white;
}

form h2 {
    margin-bottom: 50px;
    font-family: rick waalders;
    color: white;
    text-align: center;
}

form label {
    font-size: 14px;
    color: #555;
}

form input {
    background-color: transparent;
    width: 100%;
    padding: 10px;
    margin: 8px 0 15px;
    border: 1px solid white;
    border-radius: 24px;
    font-size: 14px;
    color: white;
}

form button {
    width: 100%;
    padding: 10px;
    background-color: #1e90fF;
    color: white;
    border: none;
    border-radius: 24px;
    font-size: 16px;
    cursor: pointer;
}

form button:hover {
    background-color: blue;
}

form a {
    display: block;
    text-align: center;
    margin-top: 10px;
    font-size: 14px;
    color: #1e90ff;
    text-decoration: none;
}

form a:hover {
    text-decoration: underline;
}

</style>