<?php
session_start();
error_reporting(0);
include  '../assets/conn/koneksi.php';
include  '../assets/conn/cek.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendukung Keputusan</title>
    <link rel="icon" type="images/x-icon" href="../assets/images/logo1.png" />
    <!-- <link rel="stylesheet" href="../assets/css/cosmo.min.css"> -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&family=Quicksand:wght@300..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div>
        <div class="nav">
            <div>
                <a href="index.php">
                    <img src="../assets\images\logo1.png" alt="">
                </a>
            </div>
            <div>
                <ul class="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="alternatif.php">Alternatif</a></li>
                    <li><a href="kriteria.php">Kriteria</a></li>
                    <li><a href="nilai.php">Nilai</a></li>
                    <li><a href="metode.php">Metode SAW</a></li>
                    <li><a href="hasil.php">Hasil Analisa</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>