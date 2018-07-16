<?php

	include "../../../config/koneksi.php";

	$nam 		 = $_POST['nama'];
	$tah 		 = $_POST['tahun'];
  	$tah 		 = date('Y-m-d H:i:s',strtotime($tah));
  	$id_penulis  = $_POST['id_penulis'];
  	$id_penerbit = $_POST['id_penerbit'];
  	$id_kategori = $_POST['id_kategori'];
  	$sin 		 = $_POST['sinopsis'];

  	$ekstensi_diperbolehkan = array('png','jpg');
 	$sampul 				= $nam."_".$_FILES['sampul']['name'];
 	$x 						= explode('.', $sampul);
 	$ekstensi 				= strtolower(end($x));
 	$ukuran 				= $_FILES['sampul']['size'];
 	$file_tmp 				= $_FILES['sampul']['tmp_name'];

 	$folder		= '../../../berkas/';
	$file_type	= array('doc','docx','xls','xlsx','pdf' ,'ppt');
	$file		= $nam."_".$_FILES['berkas']['name'];
	$e 			= explode('.', $file);
	$ekst 		= strtolower(end($e));
	$file_size	= $_FILES['berkas']['size'];

	if((in_array($ekstensi, $ekstensi_diperbolehkan) === true) && (in_array($ekst, $file_type) === true)){
		if($ukuran < 2000000){

			move_uploaded_file($_FILES['berkas']['tmp_name'], $folder.$file);				
			move_uploaded_file($file_tmp, '../../../sampul/'.$sampul);
			
			$simpan = mysqli_query($conn, "INSERT INTO buku SET nama 		 = '$nam',
																tahun_terbit = '$tah',
																id_penulis   = '$id_penulis',
																id_penerbit  = '$id_penerbit',
																id_kategori  = '$id_kategori',
																sinopsis	 = '$sin',
																sampul		 = '$sampul',
																berkas		 = '$file'");	
		}
		else{
			echo "<script>alert('Ukuran Cover / Berkas Terlalu Besar!'); onclick=self.history.back()</script>";
		}
		header('location:../../media.php?page=buku');
	}
	else{
		header('location:../../media.php?page=404');
	}

?>