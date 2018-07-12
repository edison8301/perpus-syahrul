<?php
  include("config/koneksi.php");

  if (isset($_GET['id'])) {

      $id         = $_GET['id'];
      $del        = mysqli_query($conn, "SELECT * FROM buku WHERE id = '$_GET[id]'");
      $r          = mysqli_fetch_array($del);
      $file_cover = "sampul/$r[sampul]";
      $file_book  = "berkas/$r[berkas]";

    if (file_exists($file_cover) && file_exists($file_book)){
      unlink($file_cover);
      unlink($file_book);
    }
  }
  mysqli_query($conn, "DELETE FROM buku  WHERE  id = '$_GET[id]'");
  
  header("location:buku.php");
?>