<?php
if (isset($_POST['edit'])) {

  include("../../../config/koneksi.php");

  $id  = $_POST['id'];
	$pen = $_POST['penulis'];

  $query = "UPDATE penulis SET nama = '$pen' WHERE id = $id";

  $result = mysqli_query($conn, $query);
  
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
  }
  header("location:../../media.php?page=penulis");
}

echo "Gagal UPDATE";

?>