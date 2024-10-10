<?php
session_start();
include "proses/connect.php";
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

        .full-height {
            height: 70vh;
            /* Adjust this value as needed */
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body style="height: auto;">
    <!-- Navbar -->
    <?php include "header.php"; ?>
    <?php include "sidebar.php"; ?>
    <!-- End of Navbar -->

    <?php
    include $page;
    ?>
    <!-- End of Sidebar -->

    <!-- Footer -->
    <footer class="footer">
        <!-- Footer content here -->
    </footer>
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>