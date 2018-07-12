<head>
	<title>ADMIN - PENULIS</title>
</head>
<!-- |==========================================================| -->
<!-- |====================| navigasi start |====================| -->
<!-- |==========================================================| -->
<div class="market-updates">

	<div class="col-md-3 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-4 market-update-right">
				<a href="media.php?page=tambah_penulis"><i class="fa fa-file-text"></i></a>
			</div>
			<div class="col-md-8 market-update-left">
				<a href="media.php?page=tambah_penulis"><h4>Penulis</h4></a>
				<p>Tambah Penulis</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="col-md-3 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-4 market-update-right">
				<a href="media.php?page=penerbit"><i class="fa fa-file-text"></i></a>
			</div>
			<div class="col-md-8 market-update-left">
				<a href="media.php?page=penerbit"><h4>Penerbit</h4></a>
				<p>Lihat Penerbit</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="col-md-3 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-4 market-update-right">
				<a href="media.php?page=buku"><i class="fa fa-file-text"></i></a>
			</div>
			<div class="col-md-8 market-update-left">
				<a href="media.php?page=buku"><h4>Buku</h4></a>
				<p>Lihat Buku</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="col-md-3 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-4 market-update-right">
				<a href="media.php?page=tambah_kategori"><i class="fa fa-file-text"></i></a>
			</div>
			<div class="col-md-8 market-update-left">
				<a href="media.php?page=tambah_kategori"><h4>Katagori</h4></a>
				<p>Lihat Kategori</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="clearfix"> </div>
</div>
<!-- |========================================================| -->
<!-- |====================| navigasi end |====================| -->
<!-- |========================================================| -->


<!-- |=======================================================| -->
<!-- |====================| tabel start |====================| -->
<!-- |=======================================================| -->
<div class="row">
	<div class="panel-body">
		<div class="col-md-12 w3ls-graph">
			<div class="agileinfo-grap">
				<div class="panel panel-default">
					<div class="panel-heading">List Penulis</div>
					    
					    <div class="table-responsive sr">
					      <table id="data" class="table table-striped b-t b-light">
					        <thead>
					          <tr>
					          	<th>No :</th>
					            <th>Nama Penulis :</th>
					            <th>Edit Item :</th>
					          </tr>
					        </thead>
					        <tbody>
					        	<?php
					        	include "../config/koneksi.php";
					        	$query = "SELECT * FROM penulis";
					        	$hasil = mysqli_query($conn, $query);
					        	$tampil = mysqli_num_rows($hasil);

					        	$i = 1;

					        	if ( $tampil> 0) {
					        		while ( $data = mysqli_fetch_assoc($hasil)) {
					        	?>

					          <tr>
					          	<td><?php echo $i++ ?></td>
					            <td><?php echo $data['nama']; ?></td>
					            <td>
                                    <a href="media.php?page=edit_penulis&id=<?php echo $data['id'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-cogs"></i></button></a>
                                    <a href="halaman/mod_buku/aksi_hapus_penulis.php?id=<?php echo $data['id'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-trash-o"></i></button></a>
					            </td>
					          </tr>

					          	<?php
					        		}
					        	}
					        	?>
					        </tbody>
					      </table>
					    </div>
					<footer class="panel-footer">
					  	<div class="row">
					    <script>
					    	$(document).ready(function(){
					    		$('#data').DataTable();
					    	});
					    </script>
					  	</div>
					</footer>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- |=====================================================| -->
<!-- |====================| tabel end |====================| -->
<!-- |=====================================================| -->