<?php
  include "../../../config/koneksi.php";

  $pen  = $_POST['penulis'];

  $simpan = mysqli_query($conn, "INSERT INTO penulis SET nama='$pen'") or die (mysqli_error());
  if($simpan) {
    header('location:../../media.php?page=penulis');
   } else{
    include "../404.php";
   }
 ?>