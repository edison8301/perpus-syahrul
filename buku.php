<!DOCTYPE html>
<html>
<head>
	<title>Buku</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tahun Terbit</th>
			<th>Penerbit</th>
			<th>Penulis</th>
			<th>Kategori</th>
			<th>Sinopsis</th>
			<th>Sampul</th>
			<th>Berkas</th>
			<th>Opsi</th>
		</tr>
		<?php
			include "config/koneksi.php";

			$query  = "SELECT * FROM buku";
			$hasil  = mysqli_query($conn, $query);
			$tampil = mysqli_num_rows($hasil);

			$i = 1;

			if ( $tampil> 0) {
			    while ( $data = mysqli_fetch_assoc($hasil)) {
		?>
		<tr>
			<td><?php echo $i++ ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['tahun_terbit']; ?></td>

			<?php
				$data1 = mysqli_query($conn, "SELECT * FROM penerbit WHERE id='$data[id_penerbit]'"); 
				$id    = mysqli_fetch_array($data1);
				$mp1   = $id['nama'];
			?>
			<td><?php echo $mp1; ?></td>

			<?php
				$data2 = mysqli_query($conn, "SELECT * FROM penulis WHERE id='$data[id_penulis]'"); 
				$id    = mysqli_fetch_array($data2);
				$mp2   = $id['nama'];
			?>
			<td><?php echo $mp2; ?></td>

			<?php
				$data3 = mysqli_query($conn, "SELECT * FROM kategori WHERE id='$data[id_kategori]'"); 
				$id    = mysqli_fetch_array($data3);
				$mp3   = $id['nama'];
			?>
			<td><?php echo $mp3; ?></td>
			<td><?php echo $data['sinopsis']; ?></td>
			<td><img style="height: 80px; width: 80px;" src="sampul/<?php echo $data['sampul']; ?>"></td>
			<td><a href="berkas/<?php echo $data['berkas']; ?>">Download</a></td>
			<td>
				<button><a href="edit_buku.php?id=<?php echo $data['id'] ?>">Edit</a></button>
				<button><a href="aksi_hapus_buku.php?id=<?php echo $data['id'] ?>">Hapus</a></button>
			</td>
		</tr>
		<?php
		        }
		    }
		?>
	</table>
	<button><a href="tambah_buku.php">Tambah Buku</a></button>
</body>
</html>