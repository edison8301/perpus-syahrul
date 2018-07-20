<head>
	<title><?php echo $_SESSION['username']; ?> - BUKU</title>
</head>
<?php
    include "../config/koneksi.php";
?>
<!-- |==========================================================| -->
<!-- |====================| navigasi start |====================| -->
<!-- |==========================================================| -->
<div class="market-updates">

	<div class="col-md-3 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-4 market-update-right">
				<a href="media.php?page=tambah_buku"><i class="fa fa-file-text"></i></a>
			</div>
			<div class="col-md-8 market-update-left">
				<a href="media.php?page=tambah_buku"><h4>Buku</h4></a>
				<p>Tambah Buku</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="col-md-3 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-4 market-update-right">
				<a href="media.php?page=kategori"><i class="fa fa-file-text"></i></a>
			</div>
			<div class="col-md-8 market-update-left">
				<a href="media.php?page=kategori"><h4>Katagori</h4></a>
				<p>Lihat Kategori</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="col-md-3 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-4 market-update-right">
				<a href="media.php?page=penulis"><i class="fa fa-file-text"></i></a>
			</div>
			<div class="col-md-8 market-update-left">
				<a href="media.php?page=penulis"><h4>Penulis</h4></a>
				<p>Lihat Penulis</p>
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
					<div class="panel-heading">List Buku</div>
					    
					    <div class="table-responsive sr">
					      <table id="data" class="table table-striped b-t b-light">
					        <thead>
					          <tr>
					          	<th>No</th>
								<th>Nama</th>
								<th>Tahun Terbit</th>
								<th>Penerbit</th>
								<th>Penulis</th>
								<th>Kategori</th>
								<th>Sampul</th>
								<th>Berkas</th>
								<th>Opsi</th>
					          </tr>
					        </thead>
					        <tbody>
					        	<?php

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
									<td><img style="height: 80px; width: 80px; border-radius: 8px;" src="../sampul/<?php echo $data['sampul']; ?>"></td>
									<td>
										<a href="../berkas/<?php echo $data['berkas']; ?>"><button class="btn btn-success" type="submit"><i class="fa fa-download"></i></button></a>
									</td>
						            <td>
						            	<a href="media.php?page=detail_buku_satu&id=<?php echo $data['id']?>"><button class="btn btn-success" type="submit"><i class="fa fa-eye"></i></button></a><br>
	                                    <a href="media.php?page=edit_buku&id=<?php echo $data['id'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-pencil"></i></button></a><br>
	                                    <a href="halaman/mod_buku/aksi_hapus_buku.php?id=<?php echo $data['id'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-trash-o"></i></button></a>
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

						<script type="text/javascript">
							$(document).ready(function() {
							    $('#data').DataTable( {
							        dom: 'Bfrtip',
							        buttons: [
							            'colvis'
							        ]
							    } );
							} );
						</script>
					  	</div>
					</footer>
				</div>
			</div>
		</div>
	</div>
</div>