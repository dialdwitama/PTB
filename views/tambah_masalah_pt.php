<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background: #1E90FF">
                    <h3 class="panel-title">Form Tambah Data Permasalahan PT</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="tgl_ptb" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_ptb" class="form-control" id="inputEmail3">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="permintaan" class="col-sm-3 control-label">Permintaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="permintaan" class="form-control" id="inputEmail3" placeholder="Inputkan Nama PTS" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="kegiatan" class="col-sm-3 control-label">Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kegiatan" class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hasil_keg" class="col-sm-3 control-label">Hasil Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="hasil_keg" class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="surat" class="col-sm-3 control-label">Surat Undangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="surat" class="form-control" id="inputEmail3" placeholder="Inputkan Lampiran berupa link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berita_acara" class="col-sm-3 control-label">Berita Acara</label>
                            <div class="col-sm-9">
                                <input type="text" name="berita_acara" class="form-control" id="inputEmail3" placeholder="Inputkan Lampiran berupa link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-sm-3 control-label">Foto</label>
                            <div class="col-sm-9">
                                <input type="text" name="foto" class="form-control" id="inputEmail3" placeholder="Inputkan Lampiran berupa link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="absensi" class="col-sm-3 control-label">Absensi</label>
                            <div class="col-sm-9">
                                <input type="text" name="absensi" class="form-control" id="inputEmail3" placeholder="Inputkan Lampiran berupa link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputEmail3" placeholder="">
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
                    <a href="?page=edit&actions=detail_ptb" class="btn btn-danger btn-sm">
                        Kembali Ke Data Permasalahan PT
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$tgl_ptb=$_POST['tgl_ptb'];
	$permintaan=$_POST['permintaan'];
	$kegiatan=$_POST['kegiatan'];
    $hasil_keg=$_POST['hasil_keg'];
    $ket=$_POST['ket'];
    $surat=$_POST['surat'];
    $berita_acara=$_POST['berita_acara'];
    $foto=$_POST['foto'];
    $absensi=$_POST['absensi'];
    //buat sql
    $sql="INSERT INTO detail_ptb VALUES ('$tgl_ptb','$permintaan','$kegiatan','$hasil_keg','','$ket')";
    //$query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Error");
    $query=  mysqli_query($koneksi, $sql, $sql2, $sql3) or die ("SQL Simpan Error");

    if ($query){
        echo "<script>window.location.assign('?page=detail&actions=editptb');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
}
?>