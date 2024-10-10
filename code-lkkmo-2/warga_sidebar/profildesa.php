<?php
session_start();
include "../admin_sidebar/proses/connect.php";

// Check if session is set
if (!isset($_SESSION['username_elpaper'])) {
    echo "Anda perlu login untuk mengakses halaman ini.";
    exit();
}
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_elpaper]'");
$hasil = mysqli_fetch_array($query);
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

    <link rel="stylesheet" href="../css/csswarga.css">
    <style>
        * {
            font-family: 'Poppins';
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .konten_profile {
            background-image: url('../img/background_content.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            position: relative;
        }

        .konten_profile::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .profil_wilayah,
        .gambar_peta {
            width: 45%;
            max-width: 600px;
            padding: 15px;
            margin: 5px;
            margin-left: 50px;
            position: relative;
            z-index: 2;
            color: white;
            background-color: rgba(29, 41, 81, 1);
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .profil_wilayah:hover,
        .gambar_peta:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .profil_wilayah h4,
        .profil_wilayah ol,
        .gambar_peta h4 {
            position: relative;
            z-index: 2;
        }

        .gambar_peta iframe {
            max-width: 100%;
        }

        h4 {
            padding-top: 5px;
            margin-left: 10px;
            font-weight: bold;
        }

        ol {
            margin-left: 20px;
            padding-top: 5px;
            line-height: 1.4;
        }

        .card-header,
        .card-title {
            background-color: rgba(29, 41, 81, 1);
            color: white;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        /* Navbar Styles */
        nav {
            background-color: #1d2951;
            display: flex;
            justify-content: space-between;
            padding: 15px 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins';
        }

        nav .nav-item {
            margin: 0 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        nav a:hover {
            background-color: #2C5A9D;
            transform: translateY(-3px);
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .dropdown:hover .dropdown-content {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s ease, padding-left 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #2C5A9D;
            color: white;
            padding-left: 20px;
        }

        .arrow {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .dropdown:hover .arrow {
            transform: rotate(180deg);
        }
    </style>
</head>

<body style="height: auto;">
    <!-- Navbar -->
    <?php include "header.php"; ?>
    <!-- End of Navbar -->
    <div class="container-lg">
        <div class="d-flex justify-content-center align-items-start" style="min-height: 70vh; margin-top: 40px;">
            <div class="card mb-3" style="background-color: #2C5A9D; width: 100rem; height: 30rem;">
                <div class="card-header">PROFILE DESA</div>
                <div class="card-body">
                    <div style="display: flex; justify-content: flex-start; align-items: flex-start;">
                        <div>
                            <h5 class="card-title">Profil Wilayah</h5>
                            <ol style="color: white;">
                                <li>Luas Wilayah: 1 ha/m2</li>
                                <li>Luas Permukiman: 345 ha/m2</li>
                                <li>Luas Perkebunan: 10 ha/m2</li>
                                <li>Luas Pekarangan: 10 ha/m2</li>
                                <li>Luas tanaman: 102 ha/m2</li>
                                <li>Luas perkantoran: 10 ha/m2</li>
                                <li>Luas lainnya: 1 ha/m2</li>
                            </ol>
                            <h5 class="card-title">Batas - batas Wilayah</h5>
                            <ol style="color: white;">
                                <li>Batas Sebelah Utara: Desa Way Huwi dan Way Galih</li>
                                <li>Batas Sebelah Selatan: Kelurahan Sukabumi dan Sukarame</li>
                                <li>Batas Sebelah Timur: Desa Sukanegara, Way Galih, dan Lematang: 10 ha/m2</li>
                                <li>Batas Sebelah Barat: Kelurahan Sukarame dan Harapan Jaya</li>
                            </ol>
                        </div>
                        <div class="gambar_peta">
                            <h4>Peta Wilayah</h4>
                            <!-- Nampilin peta -->
                            <br>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1992.2162197975634!2d105.3095!3d-5.4074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41f4e988b62305%3A0xc6307cb6e4299430!2sDesa%20Sabah%20Balau!5e0!3m2!1sen!2sid!4v1693491688998"
                                width="100%"
                                height="300"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Sidebar -->
    </div>
    <!-- Footer -->
    <footer class="footer">
    </footer>
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>