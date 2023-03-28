<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
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
                            <label for="pt" class="col-sm-3 control-label">PTS</label>
                            <div class="col-sm-9">
                                <input type="text" name="pt" class="form-control" id="inputEmail3" placeholder="Inputkan Nama PTS" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="progressTerakhir" class="col-sm-3 control-label">Progress Terakhir</label>
                            <div class="col-sm-9">
                                <input type="date" name="progressTerakhir" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="deadline" class="col-sm-3 control-label">Deadline</label>
                            <div class="col-sm-9">
                                <input type="date" name="deadline" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>
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
						 <div class="form-group">
                            <label for="perhitungan" class="col-sm-3 control-label">Perhitungan</label>
                            <div class="col-sm-9">
                                <input type="text" name="para_pihak" class="form-control" id="inputEmail3" placeholder="Silahkan Input Perhitungan Mundur (hari)" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pic" class="col-sm-3 control-label">PIC</label>
                            <div class="col-sm-9">
                                <input type="text" name="pic" class="form-control" id="inputEmail3" placeholder="Silahkan Input PIC" required>
                            </div>
                        </div>
                        <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
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
  $ruang=$_POST['ruang_arsip'];
	$rak=$_POST['no_rak'];
	$laci=$_POST['no_laci'];
	$boks=$_POST['no_boks'];
  $arsip=$_POST['para_pihak'];
	$noperkara=$_POST['no_perkara'];
  $tglmasuk=$_POST['tgl_masuk'];
  $pengantar=$_POST['pengantar'];
	$penerima=$_POST['penerima'];
  $status=$_POST['status'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO arsip VALUES ('','$ruang','$rak','$laci','$boks','$arsip','$noperkara','$tglmasuk','$penerima','$pengantar','$status','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>