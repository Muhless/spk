<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <h4>Kriteria</h4>
        </ol>
    </div>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tabel="SELECT * FROM tbl_kriteria order by id_kriteria";
                        $query=mysqli_query($koneksi, $tabel) or die(mysqli_error($koneksi));
                        $no=1;
                        while ($a=mysqli_fetch_array($query)) {
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
                                <a href="kriteria_aksi.php?id_kriteria=<?php echo $a['id_kriteria'];?>&aksi=ubah"
                                    class="btn btn-success">UBAH</a>
                                <a href="kriteria_proses.php?id_kriteria=<?php echo $a['id_kriteria'];?>&proses=proses_hapus"
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