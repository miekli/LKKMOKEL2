<?php
session_start();
include "../../admin_sidebar/proses/connect.php";

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
    <link rel="stylesheet" href="../../css/csswarga.css">
    <style>
        /* Card hover effects */
        .card {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card img {
            transition: transform 0.3s ease;
            will-change: transform;
        }

        .card:hover {
            transform: translateY(-10px) rotateY(5deg);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .card:hover img {
            transform: scale(1.05);
        }

        /* Sidebar form style */
        .form-container {
            background-color: #2C5A9D;
            /* Warna tabel */
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 50px;
            /* Jarak antara tabel dan footer */
        }

        .form-table {
            display: table;
            width: 100%;
        }

        .form-row {
            display: table-row;
        }

        .form-label,
        .form-input {
            display: table-cell;
            padding: 10px;
        }

        .form-label {
            text-align: left;
            color: white;
            font-weight: bold;
        }

        .form-input input,
        .form-input select {
            width: 100%;
            padding: 10px;
            background-color: #f8f9fa;
            color: white;
            border: 1px solid #555;
            border-radius: 5px;
        }

        .form-input input[type="date"],
        .form-input input[type="text"] {
            background-color: #f8f9fa;
            color: #000;
        }

        /* Custom button style */
        .submit-btn {
            background-color: #1d2951;
            /* Warna tombol biru tua */
            border: none;
            padding: 12px 24px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px;
            display: block;
            margin: 20px auto;
            margin-right: 55px;
            /* Posisikan tombol di tengah */
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #1E4478;
            /* Biru lebih tua saat hover */
            cursor: pointer;
        }

        /* Title table */
        .title-table {
            width: 100%;
            background-color: #1d2951;
            color: white;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body style="height: auto;">
    <!-- Navbar -->
    <?php include "header.php"; ?>
    <!-- End of Navbar -->

    <!-- Sidebar -->
    <div class="container-lg mt-5">
        <div class="max-w-4xl mx-auto">
            <!-- Title inside a table -->
            <div class="title-table">
                <h1>Surat Pengantar SKCK</h1>
            </div>
            <form action="../../admin_sidebar/proses/prosesskck.php" class="form-container" method="POST">
                <!-- Form presented as a table -->
                <div class="form-table">
                    <div class="form-label">username :</div>
                    <div class="form-input">
                        <input type="text" class="form-control" id="floatingInput" value="<?php echo $hasil['username']; ?>" name="username" readonly required>
                    </div>
                    <div class="form-row">
                        <div class="form-label">Nama :</div>
                        <div class="form-input">
                            <input type="" class="form-control" id="floatingpassword" placeholder="Nama Lengkap Anda" name="nama" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Tempat :</div>
                        <div class="form-input">
                            <input type="type" class="form-control" id="floatingpassword" placeholder="Tempat Tinggal Anda" name="tempat" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Tanggal Lahir :</div>
                        <div class="form-input">
                            <input type="date" class="form-control" id="floatingpassword" placeholder="Tanggal Lahir Anda" name="tanggal" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Status Perkawinan :</div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="floatingpassword" placeholder="Status Pernikahan Anda" name="status" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Pekerjaan :</div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="floatingpassword" placeholder="Perkerjaan Anda" name="perkerjaan" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Alamat :</div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="floatingpassword" placeholder="Alamat Domisili Anda" name="alamat" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Upload KTP :</div>
                        <div class="form-input">
                            <input class="form-control" id="input_ktp" type="file" accept="image/png, image/jpeg, image/jpg, application/pdf" name="upload" required>
                            <small class="text-muted">PNG, JPG, JPEG, PDF (Max 1 MB)</small>
                        </div>
                    </div>

                    <div class="form-row d-none" readonly >
                        <div class="form-label">Proses :</div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="floatingpassword" placeholder="Alamat Domisili Anda" value="Proses" name="info" required>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <!-- Submit button -->
                    <div class="form-row mt-4">
                        <div class="form-input">
                            <button type="submit" class="submit-btn">Kirim</button>
                        </div>
                    </div>
                </div>
            </form>
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