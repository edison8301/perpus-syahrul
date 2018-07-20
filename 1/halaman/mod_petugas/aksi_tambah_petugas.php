<?php
  include "../../../config/koneksi.php";

  $use = $_POST['username'];
  $pas = $_POST['password'];
  $nam = $_POST['nama'];
  $ala = $_POST['alamat'];
  $tel = $_POST['telepon'];
  $ema = $_POST['email'];

  $simpan1 =  mysqli_query($conn, "INSERT INTO petugas SET nama         = '$nam',
                                                           alamat       = '$ala',
                                                           telepon      = '$tel',
                                                           email        = '$ema'");

  $cari = mysqli_query($conn, "SELECT id FROM petugas WHERE email='$ema'");
  $id   = mysqli_fetch_array($cari);
  $id_a = $id['id'];

  $simpan2 =  mysqli_query($conn, "INSERT INTO user SET username     = '$use',
                                                        password     = '$pas',
                                                        id_anggota   = '',
                                                        id_petugas   = '$id_a',
                                                        id_user_role = '3',
                                                        status       = '3'");

  if($simpan1 == true && $simpan2 == true) {
    header('location:../../media.php?page=petugas');
   } else{
    include "../../media.php?page=404";
   }
?>