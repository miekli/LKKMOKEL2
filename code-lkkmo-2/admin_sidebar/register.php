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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins';
        }

        .bg {
            background-image: url('../img/background_content.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            /* Memusatkan secara horizontal */
            align-items: center;
            /* Memusatkan secara vertikal */
            height: 100vh;
            /* Tinggi seluruh viewport */
            width: 100%;
            position: relative;
            /* Untuk pseudo-elemen overlay */
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 465px;
            width: 400px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            background-color: #2C5A9D;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-login:hover {
            background-color: #1d2951;
        }

        a {
            color: #2C5A9D;
            text-decoration: none;
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

    <div class="bg">
        <div class="login-container">
            <div class="login-box">
                <h2>Daftar</h2>
                <form action="proses/prosesregister.php" method="POST">
                    <label for="floatingInput">Silahkan Buat Username dan Password</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" id="floatingpassword" placeholder="password" name="password" required>
                    </div>
                    <select class="form-select form-select-sm mb-3" aria-label="small select example" name="level">
                        <option selected hidden value="0">Daftar Sebagai</option>
                        <option value="2">Warga</option>
                    </select>
                    <button type="submit" class="btn-login mt-3" name="input_submit_user_validate" value="1234">Daftar</button>
                </form>
                <p>Sudah punya akun? <a href="../admin_sidebar/login.php">Masuk</a> </p>
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