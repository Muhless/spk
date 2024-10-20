<?php
include 'header.php';
if (isset($_GET['aksi'])) {
    if ($_GET['aksi']=='tambah') { ?>
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <h4>NILAI/TAMBAH DATA</h4>
        </ol>
    </div>
    <div class="panel panel-container">
        <div class="bootsrap-table">
            <form action="nilai_proses.php?proses=proses_tambah" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nama Alternatif</label>
                    <select class="form-control" name="id_alternatif">
                        <option disabled selected>pilih</option>
                        <?php
                        $b1 = mysqli_query($koneksi, "SELECT * FROM tbl_alternatif order by id_alternatif");
                        while ($b=mysqli_fetch_array($b1)) {?>
                        <option value="<?php echo $b1['id_alternatif'] ?>"><?php echo $b1['id_alternatif'] ?>
                            - <?php echo $b1['nama_alternatif'] ?>
                        </option>
                        <?php } ?>
                        ?>
                    </select>
                </div>
                <?php
                        $hasil=mysqli_query($koneksi, "SELECT * FROM tbl_kriteria order by id_kriteria");
                        while ($baris=mysqli_fetch_array($hasil)) {
                            $idK = $baris['id_kriteria'];
                            $labelK=$baris['nama_kriteria'];

                            echo "<div class='form-group'>
                            <label>.$labelK.</label>";

                            echo "<select name=".$idK." class='form-control'>";
                            
                        
                        }
                        ?>


                <div class="modal-footer">
                    <a href="alternatif.php" class="btn btn-primary">KEMBALI</a>
                    <input type="submit" class="btn btn-success" value="SIMPAN">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
}elseif ($_GET['aksi']=='ubah') { ?>
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <h4>NILAI/UBAH DATA</h4>
        </ol>
    </div>
    <div class="panel panel-container">
        <div class="bootstrap-table">
            <?php
                        $tabel="SELECT * FROM tbl_alternatif WHERE id_alternatif=$_GET[id_alternatif]";
                        $query=mysqli_query($koneksi, $tabel) or die(mysqli_error($koneksi));
                        while ($a=mysqli_fetch_array($query)) {
                        ?>
            <form action="nilai_proses.php?proses=proses_ubah" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id_alternatif" value="<?php echo $a['id_alternatif']; ?>">

                <div class="form-group">
                    <label for="">Nama Alternatif</label>
                    <input type="text" name="nama_alternatif" class="form-control" placeholder="nama alternatif"
                        value="<?php echo $a['nama_alternatif']; ?>">
                </div>
                <div class="modal-footer">
                    <a href="alternatif.php" class="btn btn-primary">KEMBALI</a>
                    <input type="submit" class="btn btn-success" value="UBAH">
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>

<?php } } ?>