<style type="text/css">
    .background{
        background-color: #028abf !important;
    }

    
</style>
<div class="container">
    <div class="row">
        <div class ="col-xs-12">
        </div>
    </div>
    <div class="row">
        <!--colomn kedua-->
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background:#028abf">
                    <h3 class="panel-title" style="color:white">SI PTB</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>Kode</th><th>PTS</th><th padding="30%">Progress Terakhir</th><th>Tanggal Progress Terakhir</th><th>Deadline</th><th>Status</th><th>Progress Report</th><th>PIC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pts";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['kode'] ?></td>
                                    <td><?= $data['pt'] ?></td>
                                    <td><?= $data['progressTerakhir'] ?></td>
                                    <td><?= $data['tgl'] ?></td>
                                    <td><?= $data['deadline'] ?></td>
                                    <td><?= $data['stat'] ?></td>
                                    <td><?= $data['progressReport'] ?></td>
                                    <td><?= $data['pic'] ?></td> 
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->
        <!--<div class="col-sm-3 col-xs-12">
            Jika terjadi login error tampilkan pesan ini
            <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Welcome <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>

            <div class="panel panel-success">
                <div style="background-color: #028abf" class="panel-heading">
                    <h3 class="panel-title">Masuk Ke Sistem</h3>
                </div>
                <div class="panel-body">
                    
                    <form class="form-horizontal" action="proses_login.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" name="pwd" class="form-control input-sm"
                                   placeholder="Password" required="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div style="background-color: #028abf"  class="col-sm-12">
                                <button type="submit" name="login" value="login"
                                        class="background"><span class="fa fa-unlock-alt"></span>
                                    Login Sistem
                                </button>
                            </div>
                    </form>
                </div>
            </div>

        </div>-->
            <?php } ?>
    </div>
</div>