<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<style>
    td:nth-child(5) {
        height: auto !important;
        white-space: normal;
    }
</style>


<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div style="background: #028abf" class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Monev</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>Kode</th><th>Nama Perguruan Tinggi</th><th>Tanggal Monev</th><th>Permasalahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM monev";
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
									<td><?= $data['tglmonev'] ?></td>
                                    <td style="vertical-align: middle" width="50%"><?php echo nl2br($data['masalah']); ?></td>


                                    <td>
                                        <a href="?page=monev&actions=detail&id=<?= $data['no'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=monev&actions=edit&id=<?= $data['no'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=monev&actions=delete&id=<?= $data['no'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot> 
                            <tr>
                                 <td colspan="7">
                                    <a href="?page=monev&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data

                                    </a>  
                                <td> 
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
