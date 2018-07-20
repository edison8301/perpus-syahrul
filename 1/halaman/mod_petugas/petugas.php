<head>
	<title><?php echo $_SESSION['username']; ?> - PETUGAS</title>
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
				<a href="media.php?page=tambah_petugas"><i class="fa fa-users"></i></a>
			</div>
			<div class="col-md-8 market-update-left">
				<a href="media.php?page=tambah_petugas"><h4>Petugas</h4></a>
				<p>Tambah Petugas</p>
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
					<div class="panel-heading">List Petugas</div>
					    
					    <div class="table-responsive sr">
					      <table id="petugas" class="table table-striped b-t b-light">
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

									$query  = "SELECT * FROM petugas INNER JOIN user ON petugas.id=user.id_petugas";
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
									<?php
										$data1 = mysqli_query($conn, "SELECT * FROM user_role WHERE id='$data[status]'"); 
										$id    = mysqli_fetch_array($data1);
										$mp1   = $id['nama'];
									?>
									<td><?php echo $mp1; ?></td>
						            <td>
						            	<a href="media.php?page=detail_petugas&id=<?php echo $data['id_petugas']?>"><button class="btn btn-success" type="submit"><i class="fa fa-eye"></i></button></a><br>
	                                    <a href="media.php?page=edit_petugas&id=<?php echo $data['id_petugas'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-pencil"></i></button></a><br>
	                                    <a href="halaman/mod_petugas/aksi_hapus_petugas.php?id=<?php echo $data['id_petugas'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-trash-o"></i></button></a>
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
							    $('#petugas').DataTable( {
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