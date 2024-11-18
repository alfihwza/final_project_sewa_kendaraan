<!-- Footer -->
<footer class="bg-dark text-white">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
                <h5 class="text-uppercase">Tentang Kami</h5>
                <p>
                    Kami adalah penyedia layanan sewa kendaraan terbaik dengan berbagai pilihan mobil untuk memenuhi kebutuhan Anda.
                </p>
                <button class="btn btn-outline-light rounded-pill" data-toggle="collapse" data-target="#aboutUs" aria-expanded="false" aria-controls="aboutUs">
                    Selengkapnya
                </button>
                <div class="collapse" id="aboutUs">
                    <div class="card card-body bg-light text-dark mt-2">
                        Kami berkomitmen untuk memberikan pengalaman terbaik dalam layanan sewa kendaraan dengan harga yang kompetitif.
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-uppercase">Hubungi Kami</h5>
                <ul class="list-unstyled">
                    <li style="display: flex; align-items: center;">
                        <i class="fas fa-phone" style="margin-right: 8px;"></i> +62 123 456 789
                    </li>
                    <li style="display: flex; align-items: center;">
                        <i class="fas fa-envelope" style="margin-right: 8px;"></i> info@sewakendaraan.com
                    </li>
                    <li style="display: flex; align-items: center;">
                        <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Jl. Contoh No. 123, Jakarta
                    </li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-4 mb-4">
                <h5 class="mb-4 fw-bold border-start border-success border-4 ps-3">Tautan Cepat</h5>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <a href="#services" class="text-white text-decoration-none link-hover">
                            <i class="fas fa-chevron-right" style="color: white; margin-right: 5px;"></i> Layanan Kami
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="../tentang_kami/visi_misi.php" class="text-white text-decoration-none link-hover">
                            <i class="fas fa-chevron-right" style="color: white; margin-right: 5px;"></i> Visi & Misi
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="../program/program_amtsilati.php" class="text-white text-decoration-none link-hover">
                            <i class="fas fa-chevron-right" style="color: white; margin-right: 5px;"></i> Program Amtsilati
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="../tentang_kami/struktur_organisasi.php" class="text-white text-decoration-none link-hover">
                            <i class="fas fa-chevron-right" style="color: white; margin-right: 5px;"></i> Struktur Organisasi
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="pendaftaran.php" class="text-white text-decoration-none link-hover">
                            <i class="fas fa-chevron-right" style="color: white; margin-right: 5px;"></i> Pendaftaran
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-uppercase">Butuh Bantuan?</h5>
                <p class="mb-0">Kami siap membantu Anda! Hubungi kami di <a href="mailto:info@sewakendaraan.com" class="text-light">info@sewakendaraan.com</a></p>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-uppercase">Ikuti Kami</h5>
                <ul class="list-unstyled d-flex social-links">
                    <li class="me-3">
                        <a href="https://facebook.com" class="btn rounded-circle" style="background-color: #3b5998; color: white; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; transition: transform 0.2s;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="me-3">
                        <a href="https://twitter.com" class="btn rounded-circle" style="background-color: #1da1f2; color: white; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; transition: transform 0.2s;">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="me-3">
                        <a href="https://instagram.com" class="btn rounded-circle" style="background-color: #e1306c; color: white; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; transition: transform 0.2s;">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/your_number" class="btn rounded-circle" style="background-color: #25D366; color: white; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; transition: transform 0.2s;">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr class="my-2" style="border-color: white; width: 80%; margin: 0 auto;">
    
    <div class="text-center p-3 bg-dark">
        <p class="mb-0">&copy; 2023 Vehicle Rental Management System. All rights reserved.</p>
    </div>
</footer>

<style>
    .btn:hover {
        transform: scale(1.1); /* Scale up on hover */
    }

    .btn:active {
        transform: scale(0.95); /* Scale down on click */
    }

    .link-hover:hover {
        text-decoration: underline; /* Tambahkan garis bawah saat hover */
        color: #f8f9fa; /* Ubah warna saat hover */
        transition: color 0.3s ease; /* Transisi warna */
    }
    .social-links a:hover {
        color: white;
        transform: translateY(-3px);
        transition: all 0.3s ease;
    }

.list-unstyled a:hover {
    padding-left: 10px;
    transition: all 0.3s ease;      
    color: white !important;
}
</style>