<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM monev WHERE no='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div style="background: #028abf" class="panel-heading">
                    <h3 class="panel-title">Update Detail Monev PT</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="a_monev" class="col-sm-3 control-label">Alamat Monev</label>
                             <div class="col-sm-9">
								<input type="text" name="a_monev" value="<?=$data['a_monev']?>"class="form-control" id="inputEmail3" placeholder="Input Alamat Monev"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="a_direk" class="col-sm-3 control-label">Input Alamat Direktori</label>
                            <div class="col-sm-9">
                                <input type="text" name="a_direk" value="<?=$data['a_direk']?>"class="form-control" id="inputEmail3" placeholder="Input Alamat Direktori">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="a_pddikti" class="col-sm-3 control-label">Alamat PDDIKTI</label>
                            <div class="col-sm-9">
                                <input type="text" name="a_pddikti" value="<?=$data['a_pddikti']?>" class="form-control" id="inputPassword3" placeholder="Input Alamat PDDIKTI">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="h_monev" class="col-sm-3 control-label">Hasil Monev</label>
                            <div class="col-sm-9">
                            <input type="text" name="h_monev" value="<?=$data['h_monev']?>" class="form-control" id="inputPassword3" placeholder="Input Hasil Monev">
                        </div>
                    </form>
                        <div  class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button style="background: #028abf" type="submit">
                                    <span class="fa fa-edit"></span> Update Data Monev PT</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=monev&actions=detail&id=<?=$data['no'] ?>" class="btn btn-danger btn-sm">
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
	$a_monev=$_POST['a_monev'];
    $a_direk=$_POST['a_direk'];
    $a_pddikti=$_POST['a_pddikti'];
    $h_monev=$_POST['h_monev'];
    //buat sql

    $sql="UPDATE monev SET a_monev='$a_monev', a_direk='$a_direk', a_pddikti='$a_pddikti', h_monev='$h_monev' WHERE no='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=monev&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');</script>";
    }
}
?>