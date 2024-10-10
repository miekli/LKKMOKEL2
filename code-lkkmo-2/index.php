<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Website Biru</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1d2951; /* Warna latar belakang biru */
            color: white; /* Warna teks putih */
            height: 100vh; /* Tinggi 100% viewport */
            display: flex; /* Menggunakan flexbox untuk tata letak */
            justify-content: center; /* Memusatkan secara horizontal */
            align-items: center; /* Memusatkan secara vertikal */
        }

        .image-container {
            text-align: center; /* Memusatkan teks di dalam kontainer */
        }

        .clickable-image {
            width: 200px; /* Ukuran lebar gambar */
            cursor: pointer; /* Menunjukkan kursor klik */
            transition: transform 0.3s; /* Animasi saat hover */
        }

        .clickable-image:hover {
            transform: scale(1.1); /* Membesar gambar saat hover */
        }
    </style>
</head>
<body>

<div class="image-container">
    <a href="admin_sidebar/login.php"> <!-- Ganti dengan URL tujuan -->
        <img src="awal.png" alt="Gambar Klik" class="clickable-image">
    </a>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
