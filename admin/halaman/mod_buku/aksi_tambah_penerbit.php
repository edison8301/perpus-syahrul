<?php
  include "../../../config/koneksi.php";

  $pene  = $_POST['penerbit'];

  $simpan = mysqli_query($conn, "INSERT INTO penerbit SET nama='$pene'") or die (mysqli_error());
  if($simpan) {
    header('location:../../media.php?page=penerbit');
   } else{
    include "../404.php";
   }
 ?>