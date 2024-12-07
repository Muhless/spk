<?php
include 'header.php';
?>


<?php
include 'header.php';
?>

<div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Halaman Awal</span>
                </a>
            </li>
            <li class="nav-item nav-category">Sistem Pendukung Keputusan</li>
            <li class="nav-item">
                <a class="nav-link" href="alternatif.php">
                    <i class="menu-icon mdi mdi-format-list-bulleted"></i>
                    <span class="menu-title">Alternatif</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kriteria.php">
                    <i class="menu-icon mdi mdi-playlist-plus"></i>
                    <span class="menu-title">Kriteria</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="nilai.php">
                    <i class="menu-icon mdi mdi-check-all"></i>
                    <span class="menu-title">Nilai</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="metode.php">
                    <i class="menu-icon mdi mdi-chart-bar"></i>
                    <span class="menu-title">Metode</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hasil.php">
                    <i class="menu-icon mdi mdi-crown"></i>
                    <span class="menu-title">Hasil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="menu-icon mdi mdi-logout-variant"></i>
                    <span class="menu-title">Logout</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Alternatif</h2>
                            <div class="row">
                                <div class="container">
                                    <div class="panel panel-container">
                                        <div class="bootstrap-table">
                                            <a href="alternatif_aksi.php?aksi=tambah" class="btn btn-primary">TAMBAH DATA</a>
                                            <hr>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Nama Alternatif</th>
                                                            <!-- <th class="text-center">Nilai SAW</th> -->
                                                            <!-- <th class="text-center">Ranking</th> -->
                                                            <th class="text-center">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $tabel = "SELECT * FROM tbl_alternatif order by id_alternatif";
                                                        $query = mysqli_query($koneksi, $tabel) or die(mysqli_error($koneksi));
                                                        $no = 1;
                                                        while ($a = mysqli_fetch_array($query)) {
                                                        ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $no++ ?></td>
                                                                <td class="text-center"><?php echo $a['nama_alternatif']; ?></td>
                                                                <!-- <td class="text-center"><?php echo number_format($a['nilai_saw'], 3); ?></td> -->
                                                                <!-- <td class="text-center"><?php echo $a['ranking']; ?></td> -->
                                                                <td class="text-center">
                                                                    <a href="alternatif_aksi.php?id_alternatif=<?php echo $a['id_alternatif']; ?>&aksi=ubah"
                                                                        class="btn btn-success">UBAH</a>
                                                                    <a href="alternatif_proses.php?id_alternatif=<?php echo $a['id_alternatif']; ?>&proses=proses_hapus"
                                                                        class="btn btn-danger">HAPUS</a>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- TODO -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- FIXME: DROPDOWN -->