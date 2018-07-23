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

			case 'detail_buku_satu':
				include "halaman/mod_buku/detail_buku_satu.php";
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

			case 'detail_kategori':
				include "halaman/mod_buku/detail_kategori.php";
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

			case 'detail_penulis':
				include "halaman/mod_buku/detail_penulis.php";
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

			case 'detail_penerbit':
				include "halaman/mod_buku/detail_penerbit.php";
				break;

			/* |=========================================================| */
			/* |====================| Anggota index |====================| */
			/* |=========================================================| */
			case 'anggota':
				include "halaman/mod_anggota/anggota.php";
				break;

			case 'tambah_anggota':
				include "halaman/mod_anggota/tambah_anggota.php";
				break;

			case 'edit_anggota':
				include "halaman/mod_anggota/edit_anggota.php";
				break;

			case 'detail_anggota':
				include "halaman/mod_anggota/detail_anggota.php";
				break;

			/* |=========================================================| */
			/* |====================| Petugas index |====================| */
			/* |=========================================================| */
			case 'petugas':
				include "halaman/mod_petugas/petugas.php";
				break;

			case 'tambah_petugas':
				include "halaman/mod_petugas/tambah_petugas.php";
				break;

			case 'edit_petugas':
				include "halaman/mod_petugas/edit_petugas.php";
				break;

			case 'detail_petugas':
				include "halaman/mod_petugas/detail_petugas.php";
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