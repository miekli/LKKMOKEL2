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
        /* Styling form */
        .form-container {
            background-color: #2C5A9D;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 50px;
        }

        .form-container label {
            color: white;
        }

        .form-container input,
        .form-container select {
            background-color: #f8f9fa;
            color: #000;
            border: 1px solid #555;
        }

        .form-container input[type="file"] {
            background-color: #f8f9fa;
            color: #333;
        }

        /* Custom button style */
        .submit-btn {
            background-color: #1d2951;
            border: none;
            padding: 12px 24px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px;
            display: block;
            margin: 20px auto;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #1E4478;
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

        /* Sidebar table styling */
        .form-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-label {
            width: 30%;
            text-align: left;
            color: white;
            font-weight: bold;
        }

        .form-input {
            width: 70%;
        }
    </style>
</head>

<body style="height: auto;">
    <!-- Navbar -->
    <?php include "header.php"; ?>
    <!-- End of Navbar -->
    <div class="container-lg mt-5">
        <!-- Sidebar -->
        <div class="max-w-4xl mx-auto">
            <div class="title-table">
                <h1>Surat Keterangan Usaha</h1>
            </div>
            <form action="../../admin_sidebar/proses/prosessku.php" class="form-container" method="POST">
                <div class="form-table">
                    <div class="form-row">
                        <div class="form-label">username :</div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="floatingInput" value="<?php echo $hasil['username']; ?>" name="username" readonly required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">Nama Lengkap:</div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nama Lengkap Anda" name="nama" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">NIK:</div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nomor Induk Keluarga Anda" name="NIK" required>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Jenis Kelamin:</div>
                        <div class="form-input">
                            <select id="gender" class="form-control" nama="jenis" required>
                                <option value="pria">Laki-laki</option>
                                <option value="wanita">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Tempat Lahir:</div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Tempat Tinggal Anda" name="tempat" required>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Tanggal Lahir:</div>
                        <div class="form-input">
                            <input type="date" class="form-control" id="floatingInput" placeholder="Tanggal Lahir Anda" name="tanggal" required>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Agama:</div>
                        <div class="form-input">
                            <select id="agama" class="form-control" name="agama" required>
                                <option value="islam">Islam</option>
                                <option value="protestan">Protestan</option>
                                <option value="katholik">Katholik</option>
                                <option value="hindu">Hindu</option>
                                <option value="buddha">Buddha</option>
                                <option value="konghucu">Konghucu</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Pekerjaan:</div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Perkerjaan Anda" name="perkerjaan" required>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Alamat:</div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Alamat Domisili Anda" name="alamat" required>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label">Upload KTP:</div>
                        <div class="form-input">
                            <input class="form-control" id="input_ktp" type="file" aria-describedby="file_input_help">
                            <p class="mt-1 text-white">PNG, JPG, JPEG, PDF (Max 1 MB)</p>
                        </div>
                    </div>

                    <div class="form-row d-none" readonly >
                        <div class="form-label">Proses :</div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="floatingpassword" placeholder="Alamat Domisili Anda" value="Proses" name="info" required>
                        </div>
                    </div>
                </div>

                <!-- Submit button -->
                <div class="form-row mt-4">
                    <div class="form-input">
                        <button type="submit" class="submit-btn">Kirim</button>
                    </div>
                </div>
            </form>
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