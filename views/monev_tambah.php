<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div style="background: #028abf" class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Monev PT</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode</label>
                            <div class="col-sm-9">
								<input type="text" name="kode" class="form-control" id="inputEmail3" placeholder="Input Kode" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="pt" class="col-sm-3 control-label">Nama Perguruan Tinggi</label>
                            <div class="col-sm-9">
                                <input type="text" name="pt" class="form-control" id="inputEmail3" placeholder="Input Nama PTS" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tglmonev" class="col-sm-3 control-label">Tanggal Monev</label>
                            <div class="col-sm-3">
                                <input type="date" name="tglmonev" class="form-control" id="inputEmail3" placeholder="Tanggal Monev" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="masalah" class="col-sm-3 control-label">Permasalahan</label>
                            <div class="col-sm-9">
                                <input type="text" name="masalah" class="form-control" id="inputEmail3" placeholder="Input Permasalahan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="a_monev" class="col-sm-3 control-label">Alamat Monev</label>
                             <div class="col-sm-9">
								<input type="text" name="a_monev" class="form-control" id="inputEmail3" placeholder="Input Alamat Monev"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="a_direk" class="col-sm-3 control-label">Input Alamat Direktori</label>
                            <div class="col-sm-9">
                                <input type="text" name="a_direk" class="form-control" id="inputEmail3" placeholder="Input Alamat Direktori">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="a_pddikti" class="col-sm-3 control-label">Alamat PDDIKTI</label>
                            <div class="col-sm-9">
                                <input type="text" name="a_pddikti"  class="form-control" id="inputPassword3" placeholder="Input Alamat PDDIKTI">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="h_monev" class="col-sm-3 control-label">Hasil Monev</label>
                            <div class="col-sm-9">
                            <input type="text" name="h_monev" class="form-control" id="inputPassword3" placeholder="Input Hasil Monev">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button style="background: #028abf" type="submit">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=monev&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Monev
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
	$tglmonev=$_POST['tglmonev'];
    $masalah=$_POST['masalah']; 
    $a_monev=$_POST['a_monev'];
	$a_direk=$_POST['a_direk'];
	$a_pddikti=$_POST['a_pddikti'];
    $h_monev=$_POST['h_monev'];
    //buat sql
    $sql="INSERT INTO monev VALUES ('$no','$kode','$pt','$tglmonev','$masalah','$a_monev','$a_direk','$a_pddikti','$h_monev')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Error");
    if ($query){
        echo "<script>window.location.assign('?page=monev&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>