<?php
session_start();
include "../admin_sidebar/proses/connect.php";

// Check if session is set
if (!isset($_SESSION['username_elpaper'])) {
    echo "Anda perlu login untuk mengakses halaman ini.";
    exit();
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
    <link rel="stylesheet" href="../css/csswarga.css">
    <style>
        .card {
            position: relative;
            /* Memungkinkan efek bayangan */
            overflow: hidden;
            /* Mencegah gambar melampaui batas kartu */
            transition: transform 0.3s ease;
            /* Transisi untuk efek 3D */
        }

        .card img {
            transition: transform 0.3s ease;
            /* Transisi gambar */
            will-change: transform;
            /* Meningkatkan performa saat hover */
        }

        .card:hover {
            transform: translateY(-10px) rotateY(5deg);
            /* Mengangkat dan memutar kartu */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            /* Bayangan untuk efek 3D */
        }

        .card:hover img {
            transform: scale(1.05);
            /* Memperbesar gambar saat hover */
        }
    </style>
</head>

<body style="height: auto;">
    <!-- Navbar -->
    <?php include "header.php"; ?>
    <!-- End of Navbar -->
    <div class="container-lg mt-5">
        <!-- Sidebar -->
        <div class="row justify-content-center align-items-start" style="min-height: 70vh;">
            <div class="col-md-6 mb-4 col-sm-12">
                <a href="surat_sidebar/sku.php" class="card" style="cursor: pointer; background-color: #2C5A9D;">
                    <img src="../data/foto_layananmandiri/image1.png" class="card-img-top" alt="Gambar 1" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-white">Buat SKU</h5>
                    </div>
                </a>
            </div>

            <div class="col-md-6 mb-4 col-sm-12">
                <a href="surat_sidebar/skck.php" class="card" style="cursor: pointer; background-color: #2C5A9D;">
                    <img src="../data/foto_layananmandiri/image3.png" class="card-img-top" alt="Gambar 2" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-white">Buat SKCK</h5>
                    </div>
                </a>
            </div>

            <div class="col-md-6 mb-4 col-sm-12">
                <a href="surat_sidebar/sktm.php" class="card" style="cursor: pointer; background-color: #2C5A9D;">
                    <img src="../data/foto_layananmandiri/image2.png" class="card-img-top" alt="Gambar 3" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-white">Buat SKTM</h5>
                    </div>
                </a>
            </div>

            <div class="col-md-6 mb-4 col-sm-12">
                <a href="status_sidebar/status.php" class="card" style="cursor: pointer; background-color: #2C5A9D;">
                    <img src="../data/foto_layananmandiri/image4.png" class="card-img-top" alt="Gambar 4" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-white">Lihat Status</h5>
                    </div>
                </a>
            </div>
        </div>
        <!-- End of Sidebar -->
    </div>

    <!-- Footer -->
    <footer class="footer">
        <!-- Footer content here -->
    </footer>
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
