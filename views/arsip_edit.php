<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pts WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data PTB</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode</label>
                        <div class="col-sm-9">
                            <input type="text" name="kode" value="<?=$data['kode']?>" class="form-control" id="inputEmail3" placeholder="Silahkan input Kode PTS" required>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="pt" class="col-sm-3 control-label">Nama Perguruan Tinggi</label>
                            <div class="col-sm-9">
                                <input type="text" name="pts" value="<?=$data['pt']?>"class="form-control" id="inputEmail3" placeholder="Nama Perguruan Tinggi">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="progress" class="col-sm-3 control-label">Progress Terrakhir</label>
                            <div class="col-sm-9">
                                <input type="text" name="progress" value="<?=$data['progressTerakhir']?>"class="form-control" id="inputEmail3" placeholder="Progress Terakhir">
                            </div>
                        </div>
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label for="tgl" class="col-sm-3 control-label">Tanggal Progress Terakhir</label>
                            <!--untuk tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2023;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->
						<!--untuk deadline form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label for="deadline" class="col-sm-3 control-label">Deadline</label>
                            <!--untuk tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2023;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->
                        
                        <!--Status-->
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Aman">Aman</option>
									<option value="Menunggu Pergabungan">Menunggu Pergabungan</option>
									<option value="Menunggu Pelaporan">Menunggu Pelaporan</option>
                                    <option value="Sudah Kedaluwarsa">Sudah Kedaluwarsa</option>
                                    <option value="Sedang Ditindaklanjuti">Sedang Ditindaklanjuti</option>
                                    <option value="Tutup">Tutup</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

                        <div class="form-group">
                            <label for="progrep" class="col-sm-3 control-label">Progress Report</label>
                            <div class="col-sm-9">
                                <input type="text" name="prog-rep" value="<?=$data['progressReport']?>" class="form-control" id="inputPassword3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pic" class="col-sm-3 control-label">Person In Charge (PIC)</label>
                            <div class="col-sm-9">
                                <input type="text" name="pic" value="<?=$data['pic']?>" class="form-control" id="inputPassword3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
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
	$progress=$_POST['progressTerakhir'];
    $tgl=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
	$deadline=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $status=$_POST['stat'];
    $progrep=$_POST['progressReport'];
	$pic=$_POST['pic'];
    //buat sql
    $sql="UPDATE pts SET kode='$kode',pt='$pt',progressTerakhir='$progress',tglProgressTerakhir='$tgl',deadline='$deadline',
	stat='$status',progressReport='$progrep',pic='$pic' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



