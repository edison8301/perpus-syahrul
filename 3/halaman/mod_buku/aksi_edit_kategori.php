<?php
if (isset($_POST['edit'])) {

  include("../../../config/koneksi.php");

  $id    = $_POST['id'];
	$kate  = $_POST['kategori'];

  $query = "UPDATE kategori SET nama = '$kate' WHERE id = $id";

  $result = mysqli_query($conn, $query);
  
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
  }
  header("location:../../media.php?page=kategori");
}

echo "Gagal UPDATE";

?>