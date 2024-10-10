<?php
session_start();
include "../../../admin_sidebar/proses/connect.php";
// Check if session is set
if (!isset($_SESSION['username_elpaper'])) {
    echo "Anda perlu login untuk mengakses halaman ini.";
    exit();
}
// Ambil semua data dari tabel tb_skck berdasarkan username dari session
$query = mysqli_query($conn, "SELECT * FROM tb_skck");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
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
    <link rel="stylesheet" href="../../../css/csswarga.css">
    <style>
        /* Hilangkan efek hover pada card */
        .card {
            position: relative;
            overflow: hidden;
        }

        .card img {
            will-change: transform;
        }
    </style>
</head>

<body style="height: auto;">
    <!-- Navbar -->
    <?php include "sidebar.php"; ?>
    <!-- End of Navbar -->
    <div class="container-lg">
        <div class="d-flex justify-content-center align-items-start" style="min-height: 70vh; margin-top: 40px;">
            <div class="card mb-3" style="background-color: #1F4068; width: 100rem; height: 30rem;">
                <div class="card-header text-white text-center" style="font-size: 1.5rem; font-weight: bold;">
                    Pengajuan SKCK
                </div>

                <?php
                foreach ($result as $row) {
                ?>
                    <!-- Modal -->
                    <div class="modal fade" id="view<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Pengajuan SKCK</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <!-- Nama -->
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" value="<?php echo $row['nama'] ?> " readonly>
                                        </div>

                                        <!-- Tempat dan Tanggal -->
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="tempat" class="form-label">Tempat</label>
                                                <input type="text" class="form-control" id="tempat" placeholder="Masukkan tempat lahir" value="<?php echo $row['tempat'] ?> " readonly>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="tanggal" class="form-label">Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="tanggal" value="<?php echo $row['tanggal'] ?> " readonly>
                                            </div>
                                        </div>

                                        <!-- Status dan Pekerjaan -->
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="status" class="form-label">Status</label>
                                                <input type="text" class="form-control" id="status" placeholder="Masukkan status" value="<?php echo $row['status'] ?> " readonly>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                                <input type="text" class="form-control" id="pekerjaan" placeholder="Masukkan pekerjaan" value="<?php echo $row['perkerjaan'] ?> " readonly>
                                            </div>
                                            <!-- alamat -->
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Alamat Domisili</label>
                                                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" value="<?php echo $row['alamat'] ?> " readonly>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="verifikasi<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Validasi Pengajuan SKCK</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="../../../admin_sidebar/proses/prosesedit_skck.php" method="POST">
                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                        <div class="col-lg-12">
                                            Apakah Anda Ingin Validasi Pengajuan SKCK user <b><?php echo $row['username'] ?></b>
                                        </div>
                                        <div class="mb-3 d-none">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" value="validasi" name="info" readonly>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="sumbit" class="btn btn-danger" name="input_user_validate" value="1234">Validasi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="delete<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Pengajuan SKCK</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="../../proses/prosesdelete.php" method="POST">
                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                        <div class="col-lg-12">
                                            Apakah Anda Ingin Unvalidasi Pengajuan SKCK user <b><?php echo $row['username'] ?></b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="sumbit" class="btn btn-danger" name="input_user_validate" value="1234">Unvalidasi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">username</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $row['username'] ?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sn" data-bs-toggle="modal" data-bs-target="#verifikasi<?php echo $row['id'] ?>"><i class="bi bi-check2-all"></i></button>
                                        <button class="btn btn-info btn-sn" data-bs-toggle="modal" data-bs-target="#view<?php echo $row['id'] ?>"><i class="bi bi-eye-fill"></i></button>
                                        <button class="btn btn-danger btn-sn" data-bs-toggle="modal" data-bs-target="#delete<?php echo $row['id'] ?>"><i class="bi bi-x-circle"></i></button>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <!-- Footer content here -->
    </footer>
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>