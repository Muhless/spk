<?php
include 'header.php';
?>

<!-- TODO: DROPDOWN -->
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:../../partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="../../index.html">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <!-- FIXME -->
      <li class="nav-item nav-category">Manajemen</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
          aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Penjualan</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/buttons.html">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/dropdowns.html">Dropdowns</a></li>
            <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/typography.html">Typography</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
          aria-controls="form-elements">
          <i class="menu-icon mdi mdi-card-text-outline"></i>
          <span class="menu-title">Karyawan</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="../pages/forms/basic_elements.html">Basic Elements</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi mdi-chart-line"></i>
          <span class="menu-title">Customers</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../pages/charts/chartjs.html">ChartJs</a></li>
          </ul>
        </div>

      <li class="nav-item nav-category">Sistem Pendukung Keputusan</li>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">Kriteria</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="kriteria.php">Kriteria</a></li>
            <li class="nav-item"> <a class="nav-link" href="subkriteria.php">Sub Kriteria</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="alternatif.php">
          <i class="menu-icon mdi mdi-account-circle-outline"></i>
          <span class="menu-title">Alternatif</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nilai.php">
          <i class="menu-icon mdi mdi-file-document"></i>
          <span class="menu-title">Nilai</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hasil.php">
          <i class="menu-icon mdi mdi-file-document"></i>
          <span class="menu-title">Hasil</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="menu-icon mdi mdi-logout-variant"></i>
          <span class="menu-title">Logout</span>
        </a>
      </li>
      <!-- FIXME -->

    </ul>
  </nav>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Kriteria</h2>
              <div class="row">
                <!-- TODO -->
                <div class="container">
                  <div class="panel panel-container">
                    <div class="bootstrap-table">
                      <a href="kriteria_aksi.php?aksi=tambah" class="btn btn-primary">TAMBAH DATA</a>
                      <hr>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th class="text-center">No</th>
                              <th class="text-center">Nama Kriteria</th>
                              <th class="text-center">Bobot</th>
                              <th class="text-center">Tipe</th>
                              <th class="text-center">Opsi</th>
                              <th class="text-center">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $tabel = "SELECT * FROM tbl_kriteria order by id_kriteria";
                            $query = mysqli_query($koneksi, $tabel) or die(mysqli_error($koneksi));
                            $no = 1;
                            while ($a = mysqli_fetch_array($query)) {
                            ?>
                              <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $a['nama_kriteria']; ?></td>
                                <td class="text-center"><?php echo $a['bobot_kriteria']; ?></td>
                                <td class="text-center"><?php echo $a['tipe_kriteria']; ?></td>
                                <td class="text-center">
                                  <a href="subkriteria.php?id_kriteria=<?php echo $a['id_kriteria']; ?>"
                                    class="btn btn-primary">LIHAT</a>
                                </td>
                                <td class="text-center">
                                  <a href="kriteria_aksi.php?id_kriteria=<?php echo $a['id_kriteria']; ?>&aksi=ubah"
                                    class="btn btn-success">UBAH</a>
                                  <a href="kriteria_proses.php?id_kriteria=<?php echo $a['id_kriteria']; ?>&proses=proses_hapus"
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