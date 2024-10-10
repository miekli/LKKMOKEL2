<?php
if (!empty($_SESSION['username_elpaper'])) {
    header('location:home');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ElPaper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('../data/backgroundlogin.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
        }

        .container {
            display: flex;
            width: 850px;
            background: #007bff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .form-signin {
            padding: 40px;
            background: rgba(255, 255, 255, 0.8);
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-right: 2px solid #ddd;
        }

        .form-signin h2 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }

        .form-floating {
            margin-bottom: 15px;
        }

        .form-control {
            background-color: #e9ecef;
            border: 1px solid #ccc;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #0056b3;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #004494;
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.5);
        }

        .carousel-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        /* Header Section */
        .header {
            background-color: #2C5A9D;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
        }

        .content {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .logo {
            margin-right: 20px;
        }

        .logo img {
            height: 80px;
            object-fit: contain;
        }

        .judul {
            color: white;
            text-align: center;
            width: 100%;
            font-size: 75px;
            margin: 0;
            font-family: "Poppins", sans-serif;
        }

        .judul h2 {
            font-weight: bold;
            margin: 0;
        }

        .judul p {
            font-size: 25px;
            margin: 0;
        }

        /* Navigation Styles */
        nav {
            background-color: #1d2951;
            display: flex;
            justify-content: space-between;
            padding: 5px 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
            font-family: 'Poppins';
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        nav a:hover {
            background-color: #2C5A9D;
            transform: translateY(-5px);
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        .footer {
            width: 200%;
            height: 25px;
            background-image: url('../data/bawah.png');
            background-repeat: repeat-x;
            background-size: 1039px;
            position: relative;
            margin-top: auto;
        }

        @media (max-width: 768px) {
            .navbar {
                background-color: #1d2951;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="tapis-container"></div>
        <div class="content">
            <div class="logo">
                <img src="../data/logo.png" alt="logo">
            </div>
            <div class="judul">
                <h2>Desa Sabah Balau</h2>
                <p>Kec.Tanjung Bintang, Kab.Lampung Selatan, Prov.Lampung</p>
            </div>
        </div>
    </div>

    <style>
        .header {
            background-color: #2C5A9D;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2px;
            margin-bottom: 5px;
            /* Mengurangi padding atas dan bawah */
        }

        .tapis-container {
            width: 100%;
            /* Lebar penuh */
            height: 45px;
            /* Atur tinggi tapis */
            background-image: url('../data/atas.png');
            background-repeat: repeat-x;
            /* Tapis berulang secara horizontal */
            background-size: 800px !important;
            /* Ukuran tapis diperkecil */
            margin-bottom: 0;
            /* Hapus margin bawah */
        }

        .content {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .logo {
            position: absolute;
            left: 51px;
        }

        .logo img {
            height: 100px;
            /* Perbesar ukuran logo */
        }

        .judul {
            color: white;
            text-align: center;
            width: 100%;
            font-size: 48px !important;
            /* Perbesar ukuran font untuk judul */
            margin: 0;
            /* Hapus margin judul */
            font-family: "Poppins" !important;
        }

        .judul h2 {
            font-weight: bold !important;
            margin: 0;
        }

        .judul p {
            font-size: 15px !important;
            /* Ukuran font untuk deskripsi */
            margin: 0;
            /* Hapus margin deskripsi */
            padding: 0;
        }
    </style>

    <!-- Centered Login Form Container -->
    <div class="content-container">
        <div class="container">
            <form class="needs-validation" novalidate action="proses/proseslogin.php" method="post">
                <div class="form-signin">
                    <h2><i class="bi bi-envelope-paper-heart-fill"></i> Masuk</h2>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" required>
                        <label for="floatingInput">Username</label>
                        <div class="invalid-feedback">
                            Please enter your username.
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                        <label for="floatingPassword">Password</label>
                        <div class="invalid-feedback">
                            Please enter your password.
                        </div>
                    </div>
                    <button class="w-100 btn btn-primary" type="submit" name="submit_validate">Masuk</button>
                    <p>Belum punya akun? <a href="../admin_sidebar/register.php">Daftar</a> </p>
                </div>
            </form>


            <!-- Carousel Container -->
            <div class="carousel-container">
                <div class="carousel-box">
                    <div id="carouselExampleCaptions1" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../data/foto_login/image.png" class="d-block w-100" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>DESA</h5>
                                    <p>Kenyamanan dan Keindahan</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../data/foto_login/image2.png" class="d-block w-100" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>KEBUDAYAAN</h5>
                                    <p>Kebersamaan dan Keharmonisan</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../data/foto_login/image3.png" class="d-block w-100" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>PROFESI</h5>
                                    <p>Kebahagiaan dan Kesejhateraan</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer"></div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        // Example JavaScript for validating the form
        (function() {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>