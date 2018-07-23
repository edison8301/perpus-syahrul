<?php
  include "config/koneksi.php";

  $user   = $_POST['username'];
  $pass   = $_POST['password'];
  $login  = mysqli_query($conn, "SELECT * FROM user WHERE username='$user' AND password='$pass'");

  $ketemu = mysqli_num_rows($login);
  $r      = mysqli_fetch_array($login);

  $iusr   = mysqli_query($conn, "SELECT * FROM user WHERE id='$r[id_anggota]'");
  $img    = mysqli_fetch_array($iusr); 

  //buat mendefault foto jika tidak ada foto profil
  if(isset($img['foto'])){
  	$image=$img['foto'];
  }else{
  	$image="default.png";
  }


  if ($ketemu > 0){
    session_start();
    
    $_SESSION['username'] = $r['username']; //buat login masuk
    $_SESSION['image']	  = $image;         //buat menampilkan gambar user
    $_SESSION['iduser']   = $r['id_anggota'];       //buat edit profil
    $_SESSION['password'] = $r['password']; //buat password login masuk
    $_SESSION['login']    = 1;              //buat cek apakah ada data guru, user/siswa/i dan hanya bisa satu saja yang masuk

    header('location:'.$r['status']);       //buat menentukan mana admin, guru dan user/siswa/i
  }
  else{
    include "404.php";
  }
?>