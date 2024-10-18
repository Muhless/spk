<?php
include 'assets/conn/koneksi.php';

if (isset($_GET['aksi'])) {
    if ($_GET['aksi']=='login') {
        session_start();
        include 'assets/conn/koneksi.php';
        $username=$_POST['username'];
        $password=$_POST['password'];

        $tabel="SELECT * FROM tbl_akun WHERE username='$username' and password='$password'";
        $query=mysqli_query($koneksi, $tabel) or die(mysqli_error($koneksi));
        $cek=mysqli_num_rows($query);

        if ($cek > 0) {
            $data = mysqli_fetch_assoc($query);
            if ($data['level']=='Admin') {
                $_SESSION['username']=$username;
                $_SESSION['level']=$admin;
                header('location:admin/index.php');
            }else{
                header('location:index.php?pesan=gagal');
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendukung Keputusan</title>
    <link rel="stylesheet" type="text/css" href="assets/css/cosmo.min.css">
    <style type="text/css">
        .kotak {
            margin-top: 150px;
            margin-left: 300px;
        }

        .kotak .input-group {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="index.php?aksi=login" method="post" enctype="multipart/form-data">
            <div class="col-md-7 col-offset-4 kotak">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
                <div class="form-group">
                    <input type="submit" value="LOGIN" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</body>

</html>