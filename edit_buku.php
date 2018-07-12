<?php
	include "config/koneksi.php";

    if (isset($_GET['id'])) {

    $id = ($_GET["id"]);

    $query = "SELECT * FROM buku WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die ("Query Error: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
    }

    $data = mysqli_fetch_assoc($result);
                    
    } else {

    header("location:index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Crud Buku</title>
</head>
<body>
	<form method="POST" action="aksi_edit_buku.php" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

		<p>Nama :</p>
		<input type="text" name="nama" minlength="4" maxlength="255" value="<?php echo $data['nama']; ?>"><br>

		<p>Tahun Terbit :</p>
		<!-- <input type="date" data-date="" data-date-format="DD MMMM YYYY" value="<?php echo $data['tahun_terbit'] ?>"> -->
		<!-- <input type="date" name="tahun" value="<?php echo $data['tahun_terbit']; ?>"><br> -->
		<input type="text" name="tahun" value="<?php echo $data['tahun_terbit']; ?>"><br>

		<p>Penerbit :</p>
		<select name="penerbit">
             <?php
             $query = "SELECT * FROM penerbit";
             $hasil = mysqli_query($conn, $query);
             $tampil = mysqli_num_rows($hasil);

             if ( $tampil> 0) {
                 while ( $dat = mysqli_fetch_assoc($hasil)) {
                    if($dat['id']==$data['id_penerbit']){
                    ?>
                        <option value="<?php echo $dat['id']; ?>" selected="selected"><?php echo $dat['nama'];?></option>
                    <?php
                        }else{
                    ?>
                    <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nama']; ?></option>
             <?php
                 }
                 }
             }
             ?>
        </select>

        <p>Penulis :</p>
		<select name="penulis">
             <?php
             $query = "SELECT * FROM penulis";
             $hasil = mysqli_query($conn, $query);
             $tampil = mysqli_num_rows($hasil);

             if ( $tampil> 0) {
                 while ( $dat = mysqli_fetch_assoc($hasil)) {
                    if($dat['id']==$data['id_penulis']){
                    ?>
                        <option value="<?php echo $dat['id']; ?>" selected="selected"><?php echo $dat['nama'];?></option>
                    <?php
                        }else{
                    ?>
                    <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nama']; ?></option>
             <?php
                 }
                 }
             }
             ?>
        </select>

        <p>Kategori :</p>
		<select name="kategori">
             <?php
             $query = "SELECT * FROM kategori";
             $hasil = mysqli_query($conn, $query);
             $tampil = mysqli_num_rows($hasil);

             if ( $tampil> 0) {
                 while ( $dat = mysqli_fetch_assoc($hasil)) {
                    if($dat['id']==$data['id_kategori']){
                    ?>
                        <option value="<?php echo $dat['id']; ?>" selected="selected"><?php echo $dat['nama'];?></option>
                    <?php
                        }else{
                    ?>
                    <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nama']; ?></option>
             <?php
                 }
                 }
             }
             ?>
        </select>

		<p>Sinopsis :</p>
		<textarea name="sinopsis"><?php echo $data['sinopsis']; ?></textarea><br>

		<p>Sampul :</p>
        <img style="width: 150px; height: 150px;" src="sampul/<?php echo $data['sampul']; ?>"><br>
        <input type="hidden" name="sampul_buku_awal" value="<?php echo $data['sampul']?>">
		<input type="file" name="sampul"><br>

		<p>Berkas :</p>
        <p><?php echo $data['berkas']; ?></p>
        <input type="hidden" name="berkas_buku_awal" value="<?php echo $data['berkas']?>">
		<input type="file" name="berkas"><br><br>

		<button><a href="index.php">Kembali</a></button>
		<button>Simpan</button>
	</form>
</body>
</html>