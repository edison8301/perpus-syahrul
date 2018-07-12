<?php
if (isset($_POST['edit'])) {

  include("../../../config/koneksi.php");

  $id    = $_POST['id'];
	$pene  = $_POST['penerbit'];

  $query = "UPDATE penerbit SET nama = '$pene' WHERE id = $id";

  $result = mysqli_query($conn, $query);
  
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
  }
  header("location:../../media.php?page=penerbit");
}

echo "Gagal UPDATE";

?>