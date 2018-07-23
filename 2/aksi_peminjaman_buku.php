<?php

	include "../config/koneksi.php";
	
	$id = $_POST['id'];
	$ida = $_POST['ida'];
	$tan_p = date('Y-m-d');
	$tan_k = date('Y-m-d', strtotime('+7 days'));

	$simpan1 =  mysqli_query($conn, "INSERT INTO peminjaman SET id_buku = '$id',
																id_anggota = '$ida',
																tanggal_pinjam = '$tan_p',
																tanggal_kembali = '$tan_k'");

	header('location:media.php?page=daftar_peminjaman_buku');
?>