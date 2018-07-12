<?php
	include "config/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Crud Buku</title>
</head>
<body>
	<form method="POST" action="aksi_tambah_buku.php" enctype="multipart/form-data">
		<p>Nama :</p>
		<input type="text" name="nama" minlength="4" maxlength="255"><br>

		<p>Tahun Terbit :</p>
		<input type="date" name="tahun"><br>

		<p>Penulis :</p>
		<select name="id_penulis" class="form-control">
            <?php
                $query = "SELECT * FROM penulis";
                $hasil = mysqli_query($conn, $query);
                $tampil = mysqli_num_rows($hasil);

                if ( $tampil> 0) {
                    while ( $data = mysqli_fetch_assoc($hasil)) {
                ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
            <?php
                }
            }
            ?>
        </select><br>

		<p>Penerbit :</p>
		<select name="id_penerbit" class="form-control">
            <?php
                $query = "SELECT * FROM penerbit";
                $hasil = mysqli_query($conn, $query);
                $tampil = mysqli_num_rows($hasil);

                if ( $tampil> 0) {
                    while ( $data = mysqli_fetch_assoc($hasil)) {
                ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
            <?php
                }
            }
            ?>
        </select><br>

		<P>Kategori :</P>
		<select name="id_kategori" class="form-control">
            <?php
                $query = "SELECT * FROM kategori";
                $hasil = mysqli_query($conn, $query);
                $tampil = mysqli_num_rows($hasil);

                if ( $tampil> 0) {
                    while ( $data = mysqli_fetch_assoc($hasil)) {
                ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
            <?php
                }
            }
            ?>
        </select><br>

		<p>Sinopsis :</p>
		<textarea name="sinopsis"></textarea><br>

		<p>Sampul :</p>
		<input type="file" name="sampul"><br>

		<p>Berkas :</p>
		<input type="file" name="berkas"><br><br>

		<button><a href="index.php">Kembali</a></button>
		<button>Simpan</button>
	</form>
</body>
</html>