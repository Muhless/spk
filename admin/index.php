<?php
include "header.php";
?>

<div class="container-fluid page-body-wrapper">
  <!-- sidebar -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Halaman Awal</span>
        </a>
      </li>
      <!--  -->
      <li class="nav-item nav-category">Dashboard</li>
      <li class="nav-item">
        <a class="nav-link" href="../dashboard/transaksi.php">
          <i class="menu-icon mdi mdi-clipboard-text"></i>
          <span class="menu-title">Transaksi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../dashboard/pelanggan.php">
          <i class="menu-icon mdi mdi-account"></i>
          <span class="menu-title">Pelanggan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../dashboard/karyawan.php">
          <i class="menu-icon mdi mdi-account-multiple"></i>
          <span class="menu-title">Karyawan</span>
        </a>
      </li>
      <!--  -->
      <!-- FIXME -->
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
      <li class="nav-item mt-5">
        <a class="nav-link" href="logout.php">
          <i class="menu-icon mdi mdi-logout-variant"></i>
          <span class="menu-title">Logout</span>
        </a>
      </li>
      <!-- FIXME -->

    </ul>
  </nav>
  <!-- end sidebar -->

  <!-- CONTENT -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-8 d-flex flex-column">
          <div class="row flex-grow">
            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
              <div class="card card-rounded">
                <div class="card-body">
                  <div class="d-sm-flex justify-content-between align-items-start">
                    <div>
                      <h4 class="card-title card-title-dash">Halaman Awal</h4>
                      <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                    </div>
                    <div id="performanceLine-legend"></div>
                  </div>
                  <div class="chartjs-wrapper mt-4">
                    <canvas id="performanceLine" width=""></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex flex-column">
          <div class="row flex-grow">
            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
              <div class="card bg-primary card-rounded">
                <div class="card-body pb-0">
                  <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                  <div class="row">
                    <div class="col-sm-4">
                      <p class="status-summary-ight-white mb-1">Closed Value</p>
                      <h2 class="text-info">357</h2>
                    </div>
                    <div class="col-sm-8">
                      <div class="status-summary-chart-wrapper pb-4">
                        <canvas id="status-summary"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
              <div class="card card-rounded">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                        <div class="circle-progress-width">
                          <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                        </div>
                        <div>
                          <p class="text-small mb-2">Total Visitors</p>
                          <h4 class="mb-0 fw-bold">26.80%</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="circle-progress-width">
                          <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                        </div>
                        <div>
                          <p class="text-small mb-2">Visits per day</p>
                          <h4 class="mb-0 fw-bold">9065</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 d-flex flex-column">
          <div class="row flex-grow">
            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
              <div class="card card-rounded">
                <div class="card-body">
                  <div class="d-sm-flex justify-content-between align-items-start">
                    <div>
                      <h4 class="card-title card-title-dash">Halaman Awal</h4>
                      <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                    </div>
                    <div id="performanceLine-legend"></div>
                  </div>
                  <div class="chartjs-wrapper mt-4">
                    <canvas id="performanceLine" width=""></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END CONTENT -->
  </div>