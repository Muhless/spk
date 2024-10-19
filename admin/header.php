<?php
session_start();
include  '../assets/conn/koneksi.php';
include  '../assets/conn/cek.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendukung Keputusan</title>
    <link rel="stylesheet" href="../assets/css/cosmo.min.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="alternatif.php">ALTERNATIF</a></li>
                    <li><a href="kriteria.php">KRITERIA</a></li>
                    <li><a href="nilai.php">NILAI</a></li>
                    <li><a href="metode.php">METODE SAW</a></li>
                    <li><a href="hasil.php">HASIL ANALISA</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>