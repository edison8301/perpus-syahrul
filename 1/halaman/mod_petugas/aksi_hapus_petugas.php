<?php
  include("../../../config/koneksi.php");

  $id = $_GET['id'];

  $del=mysqli_query($conn, "SELECT * FROM petugas INNER JOIN user ON petugas.id=user.id_petugas WHERE id_petugas='$id'");
  $r=mysqli_fetch_array($del);

  mysqli_query($conn, "DELETE FROM user WHERE id_petugas = '$id'");
  mysqli_query($conn, "DELETE FROM petugas WHERE id = '$id'");

  header("location:../../media.php?page=petugas");
?>