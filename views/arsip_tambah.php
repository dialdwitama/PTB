<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background: #1E90FF">
                    <h3 class="panel-title">Form Tambah Data PTB</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" id="inputEmail3" placeholder="Silahkan input Kode PTS" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="pt" class="col-sm-3 control-label">Nama PT</label>
                            <div class="col-sm-9">
                                <input type="text" name="pt" class="form-control" id="inputEmail3" placeholder="Inputkan Nama PTS" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="progressTerakhir" class="col-sm-3 control-label">Progress Terakhir</label>
                            <div class="col-sm-9">
                                <input type="text" name="progressTerakhir" class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl" class="col-sm-3 control-label">Tanggal Progress Terakhir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl" class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="deadline" class="col-sm-3 control-label">Deadline</label>
                            <div class="col-sm-9">
                                <input type="date" name="deadline" class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stat" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="stat" class="form-control">
                                    <option value="">---Pilih---</option>
									<option value="Aman">Aman</option>
									<option value="Menunggu Pergabungan">Menunggu Pergabungan</option>
									<option value="Menunggu Pelaporan">Menunggu Pelaporan</option>
                                    <option value="Sudah Kedaluwarsa">Sudah Kedaluwarsa</option>
                                    <option value="Sedang Ditindaklanjuti">Sedang Ditindaklanjuti</option>
                                    <option value="Tutup">Tutup</option>
								</select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="progressReport" class="col-sm-3 control-label">Progress Report</label>
                            <div class="col-sm-9">
                                <input type="text" name="progressReport" class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pic" class="col-sm-3 control-label">PIC</label>
                            <div class="col-sm-9">
                            <select name="pic" class="form-control">
                                <option value="">---Pilih---</option>
                                <option value="LLDIKTI 4">LLDIKTI 4</option></select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success" style="background: #1E90FF">
                                    <span class="fa fa-save"></span> Simpan Data</button>
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
    $sql="INSERT INTO pts VALUES ('','$kode','$pt','$progressTerakhir','$tgl','$deadline','$stat','$progressReport','$pic')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Error");
    }
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    

?>