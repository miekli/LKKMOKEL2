<?php
session_start();
include "../../admin_sidebar/proses/connect.php";

// Check if session is set
if (!isset($_SESSION['username_elpaper'])) {
    echo "Anda perlu login untuk mengakses halaman ini.";
    exit();
}

// Get the user information based on the session username
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_elpaper]'");
$hasil = mysqli_fetch_array($query);

// Get all records from tb_skck
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
    <link rel="stylesheet" href="../../css/csswarga.css">
    <style>
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
    <?php include "header.php"; ?>
    <!-- End of Navbar -->
    <div class="container-lg">
        <div class="d-flex justify-content-center align-items-start" style="min-height: 70vh; margin-top: 40px;">
            <div class="card mb-3" style="background-color: #1F4068; width: 100rem; height: 30rem;">
                <div class="card-header text-white text-center" style="font-size: 1.5rem; font-weight: bold;">
                    Pengajuan SKCK
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Username</th>
                                <th scope="col">Status</th>
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
                                    <td><?php echo $row['info'] ?></td>
                                    <td>
                                        <?php if ($_SESSION['username_elpaper'] == $row['username']  && $row['info'] == "validasi") { ?>
                                            <!-- View button if the session username matches -->
                                            <button class="btn btn-info btn-sn" data-bs-toggle="modal" data-bs-target="#view<?php echo $row['id'] ?>"><i class="bi bi-download"></i></button>
                                        <?php } else { ?>
                                            <!-- Message if the session username does not match -->
                                            <span class="text-danger">Anda tidak bisa mengakses surat ini karena bukan username yang sama atau Belum Divalidasi</span>
                                        <?php } ?>
                                    </td>
                                </tr>

                                <!-- Modal for viewing details (only if allowed) -->
                                <?php if ($_SESSION['username_elpaper'] == $row['username']) { ?>
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
                                                            <label for="nama" class="form-label">Nama Pengaju :</label>
                                                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" value="<?php echo $row['nama'] ?>" readonly>
                                                        </div>

                                                        <div id="struckContent" class="d-none">
                                                            <style>
                                                                #struk {
                                                                    font-family: "Times New Roman", serif;
                                                                    font-size: 14px;
                                                                    max-width: 600px;
                                                                    border: 1px solid #000;
                                                                    padding: 20px;
                                                                    margin: 0 auto;
                                                                    line-height: 1.6;
                                                                    width: 210mm;
                                                                    /* Standar ukuran A4: 210mm */
                                                                }

                                                                #struk h2 {
                                                                    text-align: center;
                                                                    color: #000;
                                                                    font-size: 18px;
                                                                    margin-bottom: 20px;
                                                                    text-transform: uppercase;
                                                                }

                                                                #struk hr {
                                                                    border: none;
                                                                    border-top: 2px solid #000;
                                                                    margin: 20px 0;
                                                                }

                                                                #struk p {
                                                                    margin: 10px 0;
                                                                }

                                                                #struk p span {
                                                                    font-weight: bold;
                                                                    display: inline-block;
                                                                    width: 150px;
                                                                }

                                                                #signature {
                                                                    margin-top: 50px;
                                                                    text-align: right;
                                                                    font-family: "Arial", sans-serif;
                                                                    /* Font umum untuk teks */
                                                                }

                                                                #signature p {
                                                                    margin-bottom: 10px;
                                                                    /* Mengurangi jarak antar paragraf */
                                                                }

                                                                #signature h3 {
                                                                    font-family: "Cursive", serif;
                                                                    /* Gaya tulisan tangan sederhana */
                                                                    font-size: 22px;
                                                                    /* Ukuran font untuk tanda tangan */
                                                                    margin: 0;
                                                                    /* Menghilangkan margin untuk h3 */
                                                                    font-style: italic;
                                                                }

                                                                #signature .info {
                                                                    margin-bottom: 20px;
                                                                    /* Margin lebih besar untuk info agar lebih terpisah dari tanda tangan */
                                                                }
                                                            </style>

                                                            <div id="struk">
                                                                <h2>SURAT KETERANGAN CATATAN KEPOLISIAN (SKCK)</h2>

                                                                <hr>

                                                                <p><span>Nama:</span> <?php echo $row['nama'] ?></p>
                                                                <p><span>Tempat Lahir:</span> <?php echo $row['tempat'] ?></p>
                                                                <p><span>Tanggal Lahir:</span> <?php echo $row['tanggal'] ?></p>
                                                                <p><span>Status Perkawinan:</span> <?php echo $row['status'] ?></p>
                                                                <p><span>Pekerjaan:</span> <?php echo $row['perkerjaan'] ?></p>
                                                                <p><span>Alamat Domisili:</span> <?php echo $row['alamat'] ?></p>

                                                                <hr>

                                                                <!-- Additional details section -->
                                                                <p><span>Keperluan:</span> Menjaga Keseimbangan Negara</p>
                                                                <p><span>Kewarganegaraan:</span> Indonesia</p>

                                                                <div id="signature">
                                                                    <p class="info">Lampung Selatan, 8 September 2024</p>
                                                                    <h3><strong>Kelompok 2 LKKMO</strong></h3>
                                                                    <P>Bayu and The Gentelments+ladiess</P>
                                                                    <p><em>Pejabat Berwenang</em></p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button onclick="printStruck()" class="btn btn-secondary">Cetak Surat SKCK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function printStruck() {
            var struckCContent = document.getElementById("struckContent").innerHTML;

            var printFrame = document.createElement('iframe');
            printFrame.style.display = 'none';
            document.body.appendChild(printFrame);
            printFrame.contentDocument.write(struckCContent);
            printFrame.contentWindow.print();
            document.body.removeChild(printFrame);
        }
    </script>
    <!-- Footer -->
    <footer class="footer">
        <!-- Footer content here -->
    </footer>
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>