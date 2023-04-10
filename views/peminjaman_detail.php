<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Monev PT</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM monev WHERE no='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>Alamat Monev</td> <td><?= $data['a_monev'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Direktori</td> <td><?= $data['a_direk'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat PDDIKTI </td> <td><?= $data['a_pddikti'] ?></td>
                        </tr>
                        <tr>
                            <td>Hasil Monev </td> <td><?= $data['h_monev'] ?></td>
                        </tr>
                    </table>

                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali ke Data Monev </a>
                        <tfoot> 
                        
                        </tfoot>
                        
                        <a href="?page=edit&actions=detail_monev&id=<?= $data['no'] ?>" class="btn btn-warning btn-sm">
                                            <span class="fa fa-edit"></span>
                                        </a>
                
                </div>
                <!--end panel footer-->

            </div>

        </div>
    </div>
</div>

