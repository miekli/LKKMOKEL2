<?php
session_start();
include "../../admin_sidebar/proses/connect.php";

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
    <!-- End of Navbar -->
    <div class="sidebar" style="position: relative; height: 100vh; display: flex; justify-content: center; align-items: center; overflow: hidden;">
        <img src="../../data/foto_layananmandiri/loading.png" alt="Sidebar Image" style="max-width: 90%; max-height: 90%;">
    </div>
    <!-- End of Sidebar -->



    <!-- Footer -->
    <footer class="footer">
    </footer>
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>