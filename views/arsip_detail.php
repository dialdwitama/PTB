<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pts WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Kode</td> <td><?= $data['kode'] ?></td>
                        </tr>
                        <tr>
                            <td>PTS</td> <td><?= $data['pt'] ?></td>
                        </tr>
                        <tr>
                            <td>Progress Terakhir</td> <td><?= $data['progressTerakhir'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Progress Terakhir</td> <td><?= $data['tglProgressTerakhir'] ?></td>
                        </tr>
                        <tr>
                            <td>Deadline</td> <td><?= $data['deadline'] ?></td>
                        </tr>
                        <tr>
                            <td>Status</td> <td><?= $data['stat'] ?></td>
                        </tr>
						<tr>
                            <td>Perhitungan</td> <td><?= $data['perhitungan'] ?></td>
                        </tr>
						<tr>
                            <td>PIC</td> <td><?= $data['pic'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Arsip </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

