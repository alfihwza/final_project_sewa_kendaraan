<!-- Include your navbar here -->
<?php include '../fungsi/navbar.php'; ?>

<!-- Hero Section -->
<div class="hero-section" style="position: relative; text-align: left; color: white;">
        <img src="../img/form.jpg" class="d-block w-100" alt="Gambar 1">
        <div class="hero-caption" style="position: absolute; top: 50%; left: 10%; transform: translateY(-50%);">
            <h5 class="display-4 font-weight-bold animated fadeIn" style="font-family: 'Arial', sans-serif;">Form Booking</h5>
            <p class="lead font-weight-bold animated fadeIn" style="font-family: 'Arial', sans-serif; color: orange;">PT. Sewa kendaraan karawang</p>
        </div>
    </div>

<!-- Make sure to include Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Add Bootstrap Datepicker CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">

<style>
    /* Customizing the datepicker dropdown animation */
    .datepicker {
        animation: slideIn 0.3s ease-out;
    }

    /* Slide-in animation for the datepicker */
    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateY(-10px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Custom datepicker styles */
    .datepicker-dropdown {
        border-radius: 8px !important;  /* Rounded corners */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);  /* Light shadow */
        padding: 10px;
    }

    .datepicker table {
        width: 100%;
    }

    .datepicker .datepicker-days {
        border-radius: 8px;
    }

    .datepicker td.day:hover {
        background-color: #28a745;
        color: white;
        cursor: pointer;
    }

    .datepicker td.today {
        background-color: #f8f9fa;
        font-weight: bold;
    }

    /* Adjust input field styling for consistency */
    .form-control-datepicker {
        padding-right: 30px;  /* Make room for the calendar icon */
    }

    .input-group-append .input-group-text {
        cursor: pointer;
    }

    /* Custom datepicker icon */
    .datepicker-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
    }
</style>

<div class="container mt-5">
    <!-- Card containing the form with smaller size -->
    <div class="card shadow-sm" style="max-width: 500px; margin: 0 auto;">
        <div class="card-header border-0">
            <h4 class="text-left">Form Pembookingan</h4>
        </div>
        <div class="card-body p-3">
            <!-- Form -->
            <form id="whatsapp-form" onsubmit="sendWhatsApp(event)">
                <!-- Nama Lengkap -->
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-sm" id="name" placeholder="Masukkan nama lengkap" required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email" placeholder="Masukkan email" required>
                    <div class="invalid-feedback">
                        Mohon masukkan email yang valid.
                    </div>
                </div>

                <!-- Nomor Telepon -->
                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+62</span>
                        </div>
                        <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon" required>
                    </div>
                    <div class="invalid-feedback">
                        Mohon masukkan nomor telepon yang valid.
                    </div>
                </div>

                <!-- Jenis Mobil -->
                <div class="form-group">
                    <label for="car-type">Jenis Mobil</label>
                    <select class="form-control form-control-sm" id="car-type" required>
                        <option value="">Pilih Jenis Mobil</option>
                        <option value="sedan">Sedan</option>
                        <option value="suv">SUV</option>
                        <option value="minibus">Minibus</option>
                    </select>
                </div>

                <!-- Jenis Layanan -->
                <div class="form-group">
                    <label for="service-type">Jenis Layanan</label>
                    <select class="form-control form-control-sm" id="service-type" required>
                        <option value="">Pilih Jenis Layanan</option>       
                        <option value="self-drive">Self-Drive</option>
                        <option value="driver">Dengan Sopir</option>
                    </select>
                </div>

                <!-- Rencana Tanggal Penyewaan -->
                <div class="form-group">
                    <label for="rental-date">Rencana Tanggal Penyewaan</label>
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm form-control-datepicker" id="rental-date" placeholder="Pilih Tanggal Penyewaan" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="datepicker-icon fas fa-calendar"></i></span>
                        </div>
                    </div>
                </div>

                <!-- Rencana Tanggal Pengembalian -->
                <div class="form-group">
                    <label for="return-date">Rencana Tanggal Pengembalian</label>
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm form-control-datepicker" id="return-date" placeholder="Pilih Tanggal Pengembalian" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="datepicker-icon fas fa-calendar"></i></span>
                        </div>
                    </div>
                </div>

                <!-- Jenis Transmisi -->
                <div class="form-group">
                    <label for="transmission">Jenis Transmisi</label>
                    <select class="form-control form-control-sm" id="transmission" required>
                        <option value="">Pilih Jenis Transmisi</option>
                        <option value="manual">Manual</option>
                        <option value="matic">Matic</option>
                    </select>
                </div>

                <!-- Jaminan -->
                <div class="form-group">
                    <label for="deposit">Jaminan</label>
                    <input type="number" class="form-control form-control-sm" id="deposit" placeholder="Masukkan jumlah jaminan" required>
                </div>

                <!-- Submit Button for WhatsApp -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-block btn-sm" style="width: 150px;">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

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
 <?php include '../fungsi/footer.php'; ?>

<!-- Optional: Add Bootstrap JS for interactivity -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Include Bootstrap Datepicker JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- For Calendar Icon -->

<script>
    // Form validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        }, false);
    })();

    // Initialize Bootstrap Datepicker
    $(document).ready(function() {
        $('#rental-date').datepicker({
            format: 'yyyy-mm-dd',  // Set the date format
            startDate: 'today',    // Disallow past dates
            autoclose: true,       // Automatically close after selection
            todayHighlight: true   // Highlight today's date
        });

        $('#return-date').datepicker({
            format: 'yyyy-mm-dd',
            startDate: 'today',
            autoclose: true,
            todayHighlight: true
        });
    });

    function sendWhatsApp(event) {
        event.preventDefault(); // Prevent the default form submission
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        // Construct the WhatsApp message
        const message = `Nama: ${name}\nEmail: ${email}\nTelepon: ${phone}`;
        const whatsappUrl = `https://wa.me/62xxxxxxxxxx?text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl, '_blank'); // Open WhatsApp with the message
    }
</script>
