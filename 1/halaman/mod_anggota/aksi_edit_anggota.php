<?php
  include "../../../config/koneksi.php";

  $id = $_POST['id'];

  $use = $_POST['username'];
  $pas = $_POST['password'];
  $nam = $_POST['nama'];
  $ala = $_POST['alamat'];
  $tel = $_POST['telepon'];
  $ema = $_POST['email'];
  $sta = $_POST['status_aktif'];

  if(!empty($_POST[password])){
    $simpan = mysqli_query($conn, "UPDATE user SET password = '$pas' WHERE id = $id");
  }

  $simpan1 =  mysqli_query($conn, "UPDATE anggota SET nama         = '$nam',
                                                      alamat       = '$ala',
                                                      telepon      = '$tel',
                                                      email        = '$ema',
                                                      status_aktif = '$sta'
                                                      WHERE id = $id ");

  $simpan2 =  mysqli_query($conn, "INSERT INTO user SET username = '$use',
                                                        password = '$pas',
                                                        WHERE id_anggota = $id");

  if($simpan1 == true && $simpan2 == true) {
    header('location:../../media.php?page=anggota');
   } else{
    include "../../media.php?page=404";
   }
?>