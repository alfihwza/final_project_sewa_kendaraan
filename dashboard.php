<?php
// super_admin/dashboard.php

session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php'); // Arahkan ke halaman login jika belum login
    exit;
}

// ... kode dashboard lainnya ...

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Super Admin</title>
</head>
<body>
    <h1>Selamat datang di Dashboard Super Admin</h1>
    <!-- Konten dashboard lainnya -->
</body>
</html>
