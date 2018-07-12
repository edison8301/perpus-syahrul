<?php
  include "../../../config/koneksi.php";

  if (isset($_GET['id'])) {

      $id         = $_GET['id'];
      $del        = mysqli_query($conn, "SELECT * FROM buku WHERE id = '$_GET[id]'");
      $r          = mysqli_fetch_array($del);
      $sampul = "../../../sampul/$r[sampul]";
      $berkas  = "../../../berkas/$r[berkas]";

    if (file_exists($sampul) && file_exists($berkas)){
      unlink($sampul);
      unlink($berkas);
    }
  }
  mysqli_query($conn, "DELETE FROM buku  WHERE  id = '$_GET[id]'");
  
  header("location:../../media.php?page=buku");
?>