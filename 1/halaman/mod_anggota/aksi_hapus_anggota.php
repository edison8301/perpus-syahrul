<?php
  include("../../../config/koneksi.php");

  $id = $_GET['id'];

	$del=mysqli_query($conn, "SELECT * FROM anggota WHERE id = '$_GET[id]'");
	$r=mysqli_fetch_array($del);

  mysqli_query($conn, "DELETE FROM user WHERE id_anggota = '$_GET[id]'");
  mysqli_query($conn, "DELETE FROM anggota WHERE id = '$_GET[id]'");

  header("location:../../media.php?page=anggota");
?>