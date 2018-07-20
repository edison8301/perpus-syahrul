<?php
  include "../../../config/koneksi.php";

  $id = $_POST['id'];
  $use = $_POST['username'];
  $pas = $_POST['password'];
  $nam = $_POST['nama'];
  $ala = $_POST['alamat'];
  $tel = $_POST['telepon'];
  $ema = $_POST['email'];

  if(!empty($_POST[password])){
    $simpan = mysqli_query($conn, "UPDATE user SET password = '$pas' WHERE id_petugas = $id");
  }

  $simpan1 =  mysqli_query($conn, "UPDATE petugas SET nama         = '$nam',
                                                      alamat       = '$ala',
                                                      telepon      = '$tel',
                                                      email        = '$ema'
                                                      WHERE id     = $id ");

  $simpan2 =  mysqli_query($conn, "UPDATE user SET username = '$use' WHERE id_petugas = $id");

  header('location:../../media.php?page=petugas');
?>