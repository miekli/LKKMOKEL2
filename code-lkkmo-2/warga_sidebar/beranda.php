<?php
session_start();
include "../admin_sidebar/proses/connect.php";
if (!isset($_SESSION['username_elpaper'])) {
    echo "You need to log in to view this page.";
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
</head>

<body>
    <!-- Navbar -->
    <?php include "header.php"; ?>
    <!-- End of Navbar -->

    <div class="bg d-flex align-items-center justify-content-center">
        <div class="carousel-container position-relative">
            <button class="carousel-button prev">❮</button>
            <div class="carousel d-flex">
                <div class="carousel-item">
                    <img src="../data/foto_beranda/image.png" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="../data/foto_beranda/image2.png" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="../data/foto_beranda/image3.png" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="../data/foto_beranda/image4.png" alt="Image 4">
                </div>
                <div class="carousel-item">
                    <img src="../data/foto_beranda/image5.png" alt="Image 5">
                </div>
            </div>
            <button class="carousel-button next">❯</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        const carousel = document.querySelector('.carousel');
        const items = document.querySelectorAll('.carousel-item');
        const nextButton = document.querySelector('.carousel-button.next');
        const prevButton = document.querySelector('.carousel-button.prev');
        let currentIndex = 0;
        const totalItems = items.length;

        function updateCarousel() {
            items.forEach((item, index) => {
                item.style.transform = 'scale(0.7) translateX(0)';
                item.style.opacity = '0';
                item.style.zIndex = '0';

                // Kartu tengah (utama)
                if (index === currentIndex) {
                    item.style.transform = 'scale(1) translateX(0)';
                    item.style.opacity = '1';
                    item.style.zIndex = '2';
                }

                // Kartu di sebelah kanan
                if (index === (currentIndex + 1) % totalItems) {
                    item.style.transform = 'scale(0.85) translateX(200px)';
                    item.style.opacity = '1';
                    item.style.zIndex = '1';
                }

                // Kartu di sebelah kiri
                if (index === (currentIndex - 1 + totalItems) % totalItems) {
                    item.style.transform = 'scale(0.85) translateX(-200px)';
                    item.style.opacity = '1';
                    item.style.zIndex = '1';
                }
            });
        }

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarousel();
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            updateCarousel();
        });

        updateCarousel(); // Initialize carousel
    </script>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .bg {
            background-image: url('../img/background_content.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
            position: relative;
        }

        .carousel-container {
            width: 500px;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            perspective: 1000px;
            z-index: 2;
        }

        .carousel {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            transform-style: preserve-3d;
        }

        .carousel-item {
            position: absolute;
            width: 100%;
            height: 150%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            transition: transform 0.5s ease, opacity 0.5s ease, z-index 0.5s ease;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 2rem;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
        }

        .carousel-button.prev {
            left: 270px;
        }

        .carousel-button.next {
            right: -220px;
        }

        /* Foto kecil di kiri */
        .carousel-button.prev::before {
            content: url('../data/foto_beranda/fotokecil.png');
            position: absolute;
            left: -700px;
            width: 50px;
            height: 150px;
            top: 10%;
            transform: translateY(-50%);
        }
    </style> <!-- End of Sidebar -->

    <!-- Footer -->
    <footer class="footer">
    </footer>
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
