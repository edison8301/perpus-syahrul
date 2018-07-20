<?php
if (isset($_POST['edit'])) {

  include("../../../config/koneksi.php");

  $id  = $_POST['id'];
	$nam = $_POST['nama'];
  $ala = $_POST['alamat'];
  $tel = $_POST['telepon'];
  $ema = $_POST['email'];

  $query = "UPDATE penulis SET nama    = '$nam',
                               alamat  = '$ala',
                               telepon = '$tel',
                               email   = '$ema' WHERE id = $id";

  $result = mysqli_query($conn, $query);
  
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
  }
  header("location:../../media.php?page=penulis");
}

echo "Gagal UPDATE";

?>