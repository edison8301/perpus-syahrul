<?php 
session_start();
if(isset($_SESSION['username'])){
	header('location:media.php');
}
else{
  header('location:../index.php');
}
?>