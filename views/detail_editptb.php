<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM detail_ptb WHERE id_ptb ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background: #1E90FF">
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
                                <button type="submit" class="btn btn-success" name="submit" style="background: #1E90FF">
                                    <span class="fa fa-edit"></span> Update Data PTB</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data PTB
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $kode=$_POST['kode'];
    $pt=$_POST['pt'];
	$progressTerakhir=$_POST['progressTerakhir'];
    $tgl=$_POST['tgl'];
	$deadline=$_POST['deadline'];
    $stat=$_POST['stat'];
    $progressReport=$_POST['progressReport'];
	$pic=$_POST['pic'];
    //buat sql 
    $sql="UPDATE pts SET kode='$kode', pt='$pt', progressTerakhir='$progressTerakhir', tgl='$tgl', deadline='$deadline', stat='$stat', progressReport='$progressReport', pic='$pic' WHERE id_pts ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    }
    
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }



?>



