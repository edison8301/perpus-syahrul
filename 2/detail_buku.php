<title><?php echo $_SESSION['username']; ?> - DETAIL BUKU</title>
<?php
include "../config/koneksi.php";

$id     = $_GET['id'];
$ida    = $_SESSION['iduser'];

$query  = "SELECT * FROM buku WHERE id='$id'";
$hasil  = mysqli_query($conn, $query);
$tampil = mysqli_num_rows($hasil);

$i = 1;

if ( $tampil> 0) {
    while ( $data = mysqli_fetch_assoc($hasil)) {
?>

<div align="center" class="sss ssa">
	<form method="POST" action="aksi_peminjaman_buku.php" class="cmxform form-horizontal" id="commentForm" novalidate="novalidate">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="hidden" name="ida" value="<?php echo $ida ?>">
		<hr>
		<h1><?php echo $data['nama']?></h1>
		<hr>
		<img class="img00" src="../sampul/<?php echo "$data[sampul]"; ?>">
		<hr>
		<?php
			$data1 = mysqli_query($conn, "SELECT * FROM kategori WHERE id='$data[id_kategori]'"); 
			$id    = mysqli_fetch_array($data1);
			$mp1   = $id['nama'];
		?>
		<h4>Kategori : <?php echo $mp1; ?></h4>
		<?php
			$data1 = mysqli_query($conn, "SELECT * FROM penulis WHERE id='$data[id_penulis]'"); 
			$id    = mysqli_fetch_array($data1);
			$mp2   = $id['nama'];
		?>
		<h4>Penulis : <?php echo $mp2; ?></h4>
		<?php
			$data1 = mysqli_query($conn, "SELECT * FROM penerbit WHERE id='$data[id_penerbit]'"); 
			$id    = mysqli_fetch_array($data1);
			$mp3   = $id['nama'];
		?>
		<h4>Penerbit : <?php echo $mp3; ?></h4>
		<h4>Tahun Terbit : <?php echo "$data[tahun_terbit]"; ?></h4>
		<hr>
		<p>Sinopsis : <?php echo "$data[sinopsis]"; ?></p>
		<hr>
		<div align="left">
			<button class="btn btn-primary" type="button" onclick="history.back()">Kembali</button>
			<button class="btn btn-success" type="submit">Pinjam Buku</button>
		</div>
	</form>
</div>

<?php
    }
}
?>