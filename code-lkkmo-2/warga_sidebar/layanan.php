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
        .card-header,
        .card-title {
            background-color: rgba(29, 41, 81, 1);
            color: white;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
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
            <div class="col-md-4 mb-4">
                <div class="card" style="background-color: #2C5A9D; height: 20rem;">
                    <div class="card-header" style="color: white; font-weight: bold;">Pembuatan SKCK</div>
                    <div class="card-body mt-3"> <!-- Menambahkan margin-top di sini -->
                        <p class="card-text" style="color: white;">
                            SKCK diperlukan untuk
                            berbagai urusan
                            kelengkapan syarat
                            administrasi mulai dari
                            pelengkap persyaratan
                            administrasi untuk
                            mengikuti rekrutmen Calon
                            Pegawai Negeri Sipil (CPNS),
                            melamar pekerjaan,
                            pendanaran sekolah di
                            dalam maupun ke luar
                            negeri, pencalonan diri
                            sebagai pejabat dan lain-
                            lain.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="background-color: #2C5A9D; height: 20rem;">
                    <div class="card-header" style="color: white; font-weight: bold;">Pembuatan SKU</div>
                    <div class="card-body mt-3"> <!-- Menambahkan margin-top di sini -->
                        <p class="card-text" style="color: white;">
                            Desa Sabah Balau
                            melayani warga untuk
                            pembuatan surat
                            keterangan usaha
                            sebagai dokumen
                            otentik yang konkrit
                            untuk membuktikan
                            jika usaha yg dilakukan
                            adalah usaha yang
                            legal di mata hukum
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="background-color: #2C5A9D; height: 20rem;">
                    <div class="card-header" style="color: white; font-weight: bold;">Pembuatan SKTM</div>
                    <div class="card-body mt-3"> <!-- Menambahkan margin-top di sini -->
                        <p class="card-text" style="color: white;">
                            Desa Sabah Balau juga melayani
                            pembuatan surat SKTM Selain
                            untuk berobat, SKTM
                            juga bisa digunakan
                            untuk keringanan
                            BPJS, keringanan Biaya
                            Listrik, keringanan
                            biaya kuliah/KIP, dan
                            lain sebagainya yang
                            berkaitan
                            dengan kemiskinan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Sidebar -->

    <!-- Footer -->
    <footer class="footer">
    </footer>
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>