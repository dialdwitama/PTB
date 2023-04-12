<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div style="background: #028abf" class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data PTS Bermasalah</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                            <th>No</th><th>Kode</th><th>Nama Perguruan Tinggi</th><th padding="30%">Progress Terakhir</th><th>Tanggal Progress</th><th>Deadline</th><th>Status</th><th>Progress Report</th><th>Person In Charge(PIC)</th><th>ACTIONS</th>
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
                                    <td>
                                        <a href="?page=edit&actions=detail_ptb&id=<?= $data['id_pts'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=ptb&actions=edit&id=<?= $data['id_pts'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
										</a>
                                        <a href="?page=ptb&actions=delete&id=<?= $data['id_pts'] ?>" class="btn btn-danger btn-xs">
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
                                    <a href="?page=ptb&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data
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

<?php
if(isset($_POST['hapus_data'])) {
  // tampilkan pesan peringatan sebelum menghapus data
  echo '<script language="javascript">';
  echo 'if(confirm("Apakah anda yakin ingin menghapus data?")) {';
  // kode untuk menghapus data
  echo 'alert("Data telah berhasil dihapus.");';
  echo '} else {';
  echo 'alert("Penghapusan data dibatalkan.");';
  echo '}';
  echo '</script>';
}
?>