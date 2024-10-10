<?php
include "connect.php";

// Inisialisasi variabel $message
$message = "";

$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : "";

$select = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
if (mysqli_num_rows($select) > 0) {
    $message = '<script>alert("Username telah ada")</script>';
} else {
    $query = mysqli_query($conn, "INSERT INTO tb_user (username,password,level) values ('$username','$password','$level')");
    if (!$query) {
        $message = '<script>alert("data gagal dimasukkan")</script>';
    } else {
        $message = '<script>alert("data berhasil dimasukkan");
                window.location="../register.php"</script>
                </script>';
    }
}
// Pastikan variabel $message selalu terdefinisi sebelum dicetak
echo $message;
