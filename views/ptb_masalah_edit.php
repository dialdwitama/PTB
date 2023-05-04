<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM detail_ptb WHERE id_ptb ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background: #028abf">
                    <h3 class="panel-title">Form Update Data Permasalahan PT</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="tgl_ptb" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_ptb" value="<?=$data['tgl_ptb']?>" class="form-control" id="inputEmail3">
                             </div>
                        </div>
                        <div class="form-group">
                            <label for="permintaan" class="col-sm-3 control-label">Permintaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="permintaan" value="<?=$data['permintaan']?>"class="form-control" id="inputEmail3" placeholder="Nama Perguruan Tinggi" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="kegiatan" class="col-sm-3 control-label">Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kegiatan" value="<?=$data['kegiatan']?>"class="form-control" id="inputEmail3" placeholder="Progress Terakhir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hasil_keg" class="col-sm-3 control-label">Hasil Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="hasil_keg" value="<?=$data['hasil_keg']?>"class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lampiran" class="col-sm-3 control-label">Lampiran</label>
                            <div class="col-sm-9">
                                <input type="text" name="lampiran" value="<?=$data['lampiran']?>"class="form-control" id="inputEmail3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>"class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success" name="submit" style="background: #028abf">
                                    <span class="fa fa-edit"></span> Update Data PTB</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a href="?page=ptb&actions=masalah_detail" class="btn btn-danger btn-sm">
                        Kembali Ke Data Permasalahan PT
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    // Ambil data dari form
    $tgl_ptb = $_POST['tgl_ptb'];
    $permintaan = $_POST['permintaan'];
    $kegiatan = $_POST['kegiatan'];
    $hasil_keg = $_POST['hasil_keg'];
    $lampiran = $_POST['lampiran'];
    $ket = $_POST['ket'];
    
    // Variabel $id_ptb yang diperlukan untuk update data
    $id_ptb = $_POST['id_ptb'];

    // Buat sql 
    $sql = "UPDATE detail_ptb SET tgl_ptb='$tgl_ptb', permintaan='$permintaan', kegiatan='$kegiatan', hasil_keg='$hasil_keg', ket='$ket' WHERE id_ptb ='$id_ptb'"; 
    $query = mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error: " . mysqli_error($koneksi));

    
    if ($query){
        echo "<script>window.location.assign('?page=ptb&actions=masalah_detail');</script>";
    } else{
        echo "<script>alert('Edit Data Gagal');</script>";
    }
}
?>





