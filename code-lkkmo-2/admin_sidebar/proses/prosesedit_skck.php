<?php
include "connect.php";

// Inisialisasi variabel $message
$message = "";

$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$tempat = (isset($_POST['tempat'])) ? htmlentities($_POST['tempat']) : "";
$tanggal = (isset($_POST['tanggal'])) ? htmlentities($_POST['tanggal']) : "";
$status = (isset($_POST['status'])) ? htmlentities($_POST['status']) : "";
$perkerjaan = (isset($_POST['perkerjaan'])) ? htmlentities($_POST['perkerjaan']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$upload = (isset($_POST['upload'])) ? htmlentities($_POST['upload']) : "";
$info = (isset($_POST['info'])) ? htmlentities($_POST['info']) : "";

$query = mysqli_query($conn, "UPDATE tb_skck SET info='$info' WHERE id='$id'");
if (!$query) {
    $message = '<script>alert("data gagal dimasukkan")</script>';
} else {
    $message = '<script>alert("data berhasil diupdate");
                window.location="../verifikasi.php"</script>
                </script>';
}
// Pastikan variabel $message selalu terdefinisi sebelum dicetak
echo $message;
