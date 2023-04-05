<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM monev WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div style="background: #1E90FF" class="panel-heading">
                    <h3 class="panel-title">Update Data Monev PT</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode</label>
                             <div class="col-sm-9">
								<input type="text" name="kode" value="<?=$data['kode']?>"class="form-control" id="inputEmail3" placeholder="Input Kode"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pt" class="col-sm-3 control-label">Nama Perguruan Tinggi</label>
                            <div class="col-sm-9">
                                <input type="text" name="pt" value="<?=$data['pt']?>"class="form-control" id="inputEmail3" placeholder="Input Nama Perguruan Tinggi">
                            </div>
                        </div>
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                       
                        <div class="form-group">
                            <label for="tglmonev" class="col-sm-3 control-label">Tanggal Monev</label>
                            <div class="col-sm-9">
                                <input type="date" name="tglmonev" value="<?=$data['tglmonev']?>"class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>
             
                  <div class="form-group">
                  <label for="masalah" class="col-sm-3 control-label">Permasalahan</label>
                  <div class="col-sm-9">
                  <input type="text" name="masalah" value="<?=$data['masalah']?>"class="form-control" id="inputEmail3">
        </div>
    </form>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" style="background: #1E90FF">
                                    <span class="fa fa-edit"></span> Update Data Monev PT</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Monev PT
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
    //buat sql
    $sql="UPDATE monev SET kode='$kode', pt='$pt', tglmonev='$tglmonev', masalah='$masalah' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



