<?php
  include "../../../config/koneksi.php";

  $nam = $_POST['nama'];
  $ala = $_POST['alamat'];
  $tel = $_POST['telepon'];
  $ema = $_POST['email'];

  $simpan = mysqli_query($conn, "INSERT INTO penulis SET nama    = '$nam',
  														 alamat  = '$ala',
  														 telepon = '$tel',
  														 email   = '$ema'") or die (mysqli_error());
  if($simpan) {
    header('location:../../media.php?page=penulis');
   } else{
    include "../../media.php?page=404";
   }
 ?>