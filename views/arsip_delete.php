<?php
//membuat query untuk hapus data
$sql="DELETE FROM pts WHERE no ='".$_GET['id_pts']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=arsip&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=peminjaman&actions=tampil');</scripr>";
}
