<head>
	<title><?php echo $_SESSION['username']; ?> - ANGGOTA</title>
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
				<a href="media.php?page=tambah_anggota"><i class="fa fa-users"></i></a>
			</div>
			<div class="col-md-8 market-update-left">
				<a href="media.php?page=tambah_anggota"><h4>Anggota</h4></a>
				<p>Tambah Anggota</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"> </div>
	
</div>
<!-- |========================================================| -->
<!-- |====================| navigasi end |====================| -->
<!-- |========================================================| -->


<!-- |=========================================================| -->
<!-- |====================| anggota start |====================| -->
<!-- |=========================================================| -->
<div class="row">
	<div class="panel-body">
		<div class="col-md-12 w3ls-graph">
			<div class="agileinfo-grap">
				<div class="panel panel-default">
					<div class="panel-heading">List Anggota</div>
					    
					    <div class="table-responsive sr">
					      <table id="anggota" class="table table-striped b-t b-light">
					        <thead>
					          <tr>
					          	<th>No</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Telepon</th>
								<th>Email</th>
								<th>Status</th>
								<th>Opsi</th>
					          </tr>
					        </thead>
					        <tbody>
					        	<?php

									$query  = "SELECT * FROM anggota";
									$hasil  = mysqli_query($conn, $query);
									$tampil = mysqli_num_rows($hasil);

									$i = 1;

									if ( $tampil> 0) {
									    while ( $data = mysqli_fetch_assoc($hasil)) {
								?>
								<tr>
									<td><?php echo $i++ ?></td>
									<td><?php echo $data['nama']; ?></td>
									<td><?php echo $data['alamat']; ?></td>
									<td><?php echo $data['telepon']; ?></td>
									<td><?php echo $data['email']; ?></td>
									<td><?php echo $data['status_aktif']; ?></td>
						            <td>
						            	<a href="media.php?page=detail_anggota&id=<?php echo $data['id']?>"><button class="btn btn-success" type="submit"><i class="fa fa-eye"></i></button></a><br>
	                                    <a href="media.php?page=edit_anggota&id=<?php echo $data['id'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-pencil"></i></button></a><br>
	                                    <a href="halaman/mod_anggota/aksi_hapus_anggota.php?id=<?php echo $data['id'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-trash-o"></i></button></a>
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
							    $('#anggota').DataTable( {
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
<!-- |=========================================================| -->
<!-- |====================| anggota start |====================| -->
<!-- |=========================================================| -->