<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<nav class="navbar navbar-expand-lg" style="background-color: #343a40;">
    <a class="navbar-brand" href="#" style="color: #FFA500;">
        <i class="fas fa-car" style="font-size: 30px; color: #FFA500; margin-right: 10px;"></i>
        Sewa Kendaraan Karawang
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" href="../index.php">Beranda</a> <!-- Menu Beranda ditambahkan -->
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="#about">Tentang Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cars">Available Vehicles</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan</a>
                <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Short Term Rental</a>
                    <a class="dropdown-item" href="#">Long Term Rental</a>
                    <a class="dropdown-item" href="#">Tour and Travel</a>  
                    <a class="dropdown-item" href="#">Wedding Car</a>                           
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">penawaran khusus</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Hubungi Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../login.php">Login</a>
            </li>
        </ul>
    </div>
</nav>
<style>
    .navbar {
        padding: 10px 20px; /* Padding untuk navbar */
    }
    .nav-link {
        color: #ffffff; /* Warna teks */
        transition: color 0.3s, transform 0.3s; /* Transisi halus untuk warna dan transformasi */
        text-decoration: none; /* Menghilangkan garis bawah */
    }
    .nav-link:hover {
        color: #FFA500; /* Warna teks saat hover - diubah menjadi oren */
        transform: translateY(-3px); /* Menggerakkan teks ke atas */
    }
    .dropdown-item {
        color: #343a40; /* Warna teks dropdown */
        transition: color 0.3s; /* Transisi halus untuk warna */
    }
    .dropdown-item:hover {
        background-color: transparent; /* Menghilangkan latar belakang saat hover */
        color: #007bff; /* Warna teks dropdown saat hover */
        transform: translateY(-2px); /* Menggerakkan teks dropdown ke atas */
    }
    .dropdown-menu {
        display: none; /* Sembunyikan dropdown secara default */
    }
</style>