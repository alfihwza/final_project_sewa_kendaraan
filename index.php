<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Rental Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .hover-shadow {
            transition: transform 0.2s;
        }

        .hover-shadow:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .animated {
            opacity: 0;
            animation: fadeIn 1s forwards; /* Animation for fade in effect */
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px); /* Slide in effect */
            }
            100% {
                opacity: 1;
                transform: translateY(0); /* Final position */
            }
        }

        .animated-button {
            transition: transform 0.2s, box-shadow 0.2s, background-color 0.2s; /* Smooth transition for hover effect */
        }

        .animated-button:hover {
            transform: scale(1.05); /* Scale effect on hover */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Shadow effect on hover */
            background-color: rgba(255, 255, 255, 0.8); /* Slightly change background color on hover */
        }
    </style>
</head>
<body>

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
               <a class="nav-link" href="#home">Beranda</a> <!-- Menu Beranda ditambahkan -->
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

    <!-- Hero Section -->
    <div class="hero-section" style="position: relative; text-align: left; color: white;">
        <img src="img/form.jpg" class="d-block w-100" alt="Gambar 1">
        <div class="hero-caption" style="position: absolute; top: 50%; left: 10%; transform: translateY(-50%);">
            <h5 class="display-4 font-weight-bold animated fadeIn" style="font-family: 'Arial', sans-serif;">Sewa Kendaraan</h5>
            <p class="lead text-primary font-weight-bold animated fadeIn" style="font-family: 'Arial', sans-serif;">Menyediakan berbagai pilihan kendaraan untuk disewa.</p>
            <div class="btn-group mt-3">
                <a href="#cars" class="btn btn-light btn-lg mr-2 rounded-pill animated-button">View Available Vehicles</a>
                <a href="#requirements" class="btn btn-secondary btn-lg rounded-pill animated-button">Persyaratan</a>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Tentang Kami</h2>
            <p class="text-center">Di layanan persewaan kendaraan kami, kami bangga memberikan pengalaman persewaan luar biasa yang disesuaikan dengan kebutuhan Anda. Dengan beragam armada kendaraan yang terpelihara dengan baik, kami memastikan Anda menemukan perjalanan yang sempurna untuk setiap kesempatan.</p>
            <p class="text-center">Tim kami yang berdedikasi berkomitmen untuk memberikan layanan pelanggan yang luar biasa, memastikan perjalanan Anda bersama kami lancar dan menyenangkan. Baik Anda merencanakan perjalanan singkat atau petualangan panjang, kami siap membantu Anda di setiap langkah.</p>
            <div class="text-center mt-4">
                <a href="#services" class="btn btn-primary btn-lg">Explore Our Services</a>
            </div>
        </div>
    </section>

     <!-- Why Choose Us Section -->
     <section id="why-choose-us" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Why Choose Us?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-car fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Quality Vehicles</h5>
                            <p class="card-text">We offer a wide range of well-maintained vehicles to ensure your comfort and safety.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-dollar-sign fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Affordable Prices</h5>
                            <p class="card-text">Our rental prices are competitive, providing you with the best value for your money.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm hover-shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-thumbs-up fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Excellent Customer Service</h5>
                            <p class="card-text">Our team is dedicated to providing you with the best service and support throughout your rental experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Apa Kata Mereka Section -->
     <section id="reviews" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Apa Kata Mereka?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm border-light">
                        <div class="card-body text-center">
                            <img src="img/asri.JPG" alt="John Doe" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">"Layanan yang sangat baik! Mobilnya bersih dan nyaman. Sangat merekomendasikan!"</p>
                            <div class="star-rating mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                            <small class="text-muted">Tanggal: 12 Maret 2023</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm border-light">
                        <div class="card-body text-center">
                            <img src="img/ellah.JPG" alt="Jane Smith" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text">"Pengalaman sewa mobil yang luar biasa. Prosesnya cepat dan mudah!"</p>
                            <div class="star-rating mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <small class="text-muted">Tanggal: 15 Maret 2023</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm border-light">
                        <div class="card-body text-center">
                            <img src="img/nurul.JPG" alt="Ali Ahmad" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                            <h5 class="card-title">Ali Ahmad</h5>
                            <p class="card-text">"Harga yang sangat bersaing dan layanan pelanggan yang ramah. Pasti akan kembali!"</p>
                            <div class="star-rating mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                            <small class="text-muted">Tanggal: 20 Maret 2023</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="YOUR_GOOGLE_REVIEW_LINK" class="btn btn-primary btn-lg" target="_blank">Ulas Kami di Google</a>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4" style="font-size: 2.5rem; font-family: 'Arial', sans-serif;">Layanan Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm hover-shadow">
                        <div class="card-body d-flex align-items-start">
                            <i class="fas fa-car fa-2x text-primary" style="margin-right: 15px; align-self: flex-start;"></i>
                            <div>
                                <h5 class="card-title" style="margin-bottom: 0;">Short Term Rental</h5>
                                <p class="card-text" style="margin-top: 10px;">Opsi persewaan fleksibel untuk jangka waktu pendek untuk memenuhi kebutuhan mendesak Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm hover-shadow">
                        <div class="card-body d-flex align-items-start">
                            <i class="fas fa-calendar-alt fa-2x text-primary" style="margin-right: 15px; align-self: flex-start;"></i>
                            <div>
                                <h5 class="card-title" style="margin-bottom: 0;">Long Term Rental</h5>
                                <p class="card-text" style="margin-top: 10px;">Tarif terjangkau untuk masa sewa yang diperpanjang, cocok untuk perjalanan jauh.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm hover-shadow">
                        <div class="card-body d-flex align-items-start">
                            <i class="fas fa-suitcase-rolling fa-2x text-primary" style="margin-right: 15px; align-self: flex-start;"></i>
                            <div>
                                <h5 class="card-title" style="margin-bottom: 0;">Tour and Travel</h5>
                                <p class="card-text" style="margin-top: 10px;">Jelajahi tujuan terbaik dengan layanan tur dan perjalanan kami yang dirancang khusus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm hover-shadow">
                        <div class="card-body d-flex align-items-start">
                            <i class="fas fa-heart fa-2x text-primary" style="margin-right: 15px; align-self: flex-start;"></i>
                            <div>
                                <h5 class="card-title" style="margin-bottom: 0;">Wedding Car</h5>
                                <p class="card-text" style="margin-top: 10px;">Kendaraan elegan untuk hari istimewa Anda, memastikan pengalaman yang tak terlupakan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Available Vehicles Section -->
        <section id="cars" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">List Kendaraan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/toyota_avanza.jpg" class="card-img-top" alt="Toyota Avanza">
                        <div class="card-body">
                            <h5 class="card-title">Toyota Avanza</h5>
                            <p class="card-text" style="margin-top: 50px;">
                            <i class="fas fa-car text-primary"></i> Compact MPV with spacious interior.</p> <!-- Deskripsi mobil -->
                            <p class="card-text"><i class="fas fa-users text-primary"></i> Seats: 7</p> <!-- Jumlah kursi -->
                            <p class="card-text"><i class="fas fa-gas-pump text-primary"></i> Fuel Type: Petrol</p> <!-- Jenis bahan bakar -->
                            <p class="card-text"><i class="fas fa-cogs text-primary"></i> Transmission: Automatic</p> <!-- Manual atau otomatis -->
                            <div class="text-center" style="margin-top: 30px;">
                                <a href="#" class="btn btn-primary">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/honda_jazz.jpeg" class="card-img-top" alt="Honda Jazz">
                        <div class="card-body">
                            <h5 class="card-title">Honda Jazz</h5>
                            <p class="card-text" style="margin-top: 50px;">
                            <i class="fas fa-car text-primary"></i> Stylish hatchback with great fuel efficiency.</p> <!-- Deskripsi mobil -->
                            <p class="card-text"><i class="fas fa-users text-primary"></i> Seats: 5</p> <!-- Jumlah kursi -->
                            <p class="card-text"><i class="fas fa-gas-pump text-primary"></i> Fuel Type: Petrol</p> <!-- Jenis bahan bakar -->
                            <p class="card-text"><i class="fas fa-cogs text-primary"></i> Transmission: Manual</p> <!-- Manual atau otomatis -->
                            <div class="text-center" style="margin-top: 30px;">
                                <a href="booking/form_booking.php" class="btn btn-primary">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/suzuki_ertiga.jpg" class="card-img-top" alt="Suzuki Ertiga">
                        <div class="card-body"> 
                            <h5 class="card-title">Suzuki Ertiga</h5>
                            <p class="card-text" style="margin-top: 50px;">
                            <i class="fas fa-car text-primary"></i> Versatile MPV perfect for family trips.</p> <!-- Deskripsi mobil -->
                            <p class="card-text"><i class="fas fa-users text-primary"></i> Seats: 7</p> <!-- Jumlah kursi -->
                            <p class="card-text"><i class="fas fa-gas-pump text-primary"></i> Fuel Type: Diesel</p> <!-- Jenis bahan bakar -->
                            <p class="card-text"><i class="fas fa-cogs text-primary"></i> Transmission: Automatic</p> <!-- Manual atau otomatis -->
                            <div class="text-center" style="margin-top: 30px;">
                                <a href="#" class="btn btn-primary">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="YOUR_ALL_VEHICLES_LINK" class="btn btn-secondary btn-lg">Lihat Semua Kendaraan</a>
            </div>
        </div>
    </section>

    <!-- Google Maps Location Section -->
    <section id="location" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Our Location</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="embed-responsive" style="position: relative; height: 400px; width: 100%;">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509198!2d144.9537353153163!3d-37.81627997975157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11f3b3%3A0x5045675218ceed0!2sYour%20Business%20Name!5e0!3m2!1sen!2sus!4v1616161616161!5m2!1sen!2sus" allowfullscreen="" loading="lazy" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include your footer here -->
    <?php include 'fungsi/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>