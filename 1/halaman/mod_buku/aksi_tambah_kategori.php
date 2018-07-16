<?php
  include "../../../config/koneksi.php";

  $kate  = $_POST['kategori'];

  $simpan = mysqli_query($conn, "INSERT INTO kategori SET nama='$kate'") or die (mysqli_error());
  if($simpan) {
    header('location:../../media.php?page=kategori');
   } else{
    include "../../media.php?page=404";
   }
 ?>