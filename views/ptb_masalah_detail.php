<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background: #028abf">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Permasalahan PT</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                            <th>No</th><th>Tanggal</th><th>Permintaan</th><th>Kegiatan</th><th padding="30%">Hasil Kegiatan</th><th>Lampiran</th><th>Keterangan</th><th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM detail_ptb";
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
                                    <td><?= $data['tgl_ptb'] ?></td>
                                    <td><?= $data['permintaan'] ?></td>
                                    <td><?= $data['kegiatan'] ?></td>
                                    <td><?= $data['hasil_keg'] ?></td>
                                    <td><?= $data['lampiran'] ?></td>
                                    <td><?= $data['ket'] ?></td> 
                                    <td>
                                        </a>
                                        <a href="?page=detail&actions=editptb&id=<?= $data['id_ptb'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=delete&actions=masalah_pt&id=<?= $data['id_ptb'] ?>" class="btn btn-danger btn-xs">
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
                                    <a href="?page=ptb&actions=masalah_tambah" class="btn btn-info btn-sm">
                                        Tambah Data Permasalahan
                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>