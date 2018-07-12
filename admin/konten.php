<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		/* |==========================================================| */
		/* |====================| navigasi index |====================| */
		/* |==========================================================| */ 
		switch ($page) {
			case 'home':
				include "home.php";
				break;

			case 'detail_buku':
				include "detail_buku.php";
				break;

			/* |======================================================| */
			/* |====================| Buku index |====================| */
			/* |======================================================| */
			case 'buku':
				include "halaman/mod_buku/buku.php";
				break;

			case 'tambah_buku':
				include "halaman/mod_buku/tambah_buku.php";
				break;

			case 'edit_buku':
				include "halaman/mod_buku/edit_buku.php";
				break;

			/* |==========================================================| */
			/* |====================| Kategori index |====================| */
			/* |==========================================================| */
			case 'kategori':
				include "halaman/mod_buku/kategori.php";
				break;

			case 'tambah_kategori':
				include "halaman/mod_buku/tambah_kategori.php";
				break;

			case 'edit_kategori':
				include "halaman/mod_buku/edit_kategori.php";
				break;

			/* |=========================================================| */
			/* |====================| Penulis index |====================| */
			/* |=========================================================| */
			case 'penulis':
				include "halaman/mod_buku/penulis.php";
				break;

			case 'tambah_penulis':
				include "halaman/mod_buku/tambah_penulis.php";
				break;

			case 'edit_penulis':
				include "halaman/mod_buku/edit_penulis.php";
				break;

			/* |==========================================================| */
			/* |====================| Penerbit index |====================| */
			/* |==========================================================| */
			case 'penerbit':
				include "halaman/mod_buku/penerbit.php";
				break;

			case 'tambah_penerbit':
				include "halaman/mod_buku/tambah_penerbit.php";
				break;

			case 'edit_penerbit':
				include "halaman/mod_buku/edit_penerbit.php";
				break;

			/* |================================================================| */
			/* |====================| File Tidak Ditemukan |====================| */
			/* |================================================================| */	
			default:
				include "404.php";
				break;
		}
	}else{
		include "home.php";
	}
 
?>