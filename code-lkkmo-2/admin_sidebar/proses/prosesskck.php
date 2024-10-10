<?php
include "connect.php";

// Inisialisasi variabel $message
$message = "";

$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$tempat = (isset($_POST['tempat'])) ? htmlentities($_POST['tempat']) : "";
$tanggal = (isset($_POST['tanggal'])) ? htmlentities($_POST['tanggal']) : "";
$status = (isset($_POST['status'])) ? htmlentities($_POST['status']) : "";
$perkerjaan = (isset($_POST['perkerjaan'])) ? htmlentities($_POST['perkerjaan']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$upload = (isset($_POST['upload'])) ? htmlentities($_POST['upload']) : "";
$info = (isset($_POST['info'])) ? htmlentities($_POST['info']) : "";

$query = mysqli_query($conn, "INSERT INTO tb_skck (username,nama,tempat,tanggal,status,perkerjaan,alamat,upload,info) values ('$username','$nama','$tempat','$tanggal','$status','$perkerjaan','$alamat','$upload','$info')");
if (!$query) {
    $message = '<script>alert("data gagal dimasukkan")</script>';
} else {
    $message = '<script>alert("data berhasil dimasukkan");
                window.location="../../layanan_sidebar/surat_sidebar/loading.php"</script>
                </script>';
}
// Pastikan variabel $message selalu terdefinisi sebelum dicetak
echo $message;
