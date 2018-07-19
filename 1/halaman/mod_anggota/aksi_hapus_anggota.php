<?php
  include("../../../config/koneksi.php");

  $id = $_GET['id'];

  $del=mysqli_query($conn, "SELECT * FROM anggota INNER JOIN user ON anggota.id=user.id_anggota WHERE id_anggota='$id'");
  $r=mysqli_fetch_array($del);

  mysqli_query($conn, "DELETE FROM user WHERE id_anggota = '$id'");
  mysqli_query($conn, "DELETE FROM anggota WHERE id = '$id'");

  header("location:../../media.php?page=anggota");
?>