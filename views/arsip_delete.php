<?php
if(isset($_GET['id'])) {
  // tampilkan pesan peringatan sebelum menghapus data
  echo '<script language="javascript">';
  echo 'if(confirm("Apakah anda yakin ingin menghapus data ini?")) {';
  
  // membuat query untuk hapus data
  $sql="DELETE FROM pts WHERE id ='".$_GET['id']."'";
  $query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
  
  // jika query berhasil dijalankan
  if($query){
      echo 'alert("Data berhasil dihapus.");';
      echo 'window.location.assign("?page=arsip&actions=tampil");';
  } else {
      echo 'alert("Maaf, data tidak berhasil dihapus.");';
      echo 'window.location.assign("?page=arsip&actions=tampil");';
  }
  
  echo '} else {';
  echo 'window.location.assign("?page=arsip&actions=tampil");';
  echo '}';
  echo '</script>';
}
?>
