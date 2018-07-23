<head>
	<title><?php echo $_SESSION['username']; ?> - ANGGOTA</title>
</head>
<?php
    include "../config/koneksi.php";
    $ida = $_SESSION['iduser'];
?>

<!-- |=========================================================| -->
<!-- |====================| anggota start |====================| -->
<!-- |=========================================================| -->
<div class="row">
	<div class="panel-body">
		<div class="col-md-12 w3ls-graph">
			<div class="agileinfo-grap">
				<div class="panel panel-default">
					<div class="panel-heading">List Peminjaman Buku</div>
					    
					    <div class="table-responsive sr">
					      <table id="anggota" class="table table-striped b-t b-light">
					        <thead>
					          <tr>
					          	<th>No</th>
								<th>Nama Buku</th>
								<th>Nama Peminjam</th>
								<th>Tanggal Pinjam</th>
								<th>Tanggal Kembali</th>
					          </tr>
					        </thead>
					        <tbody>
					        	<?php

									$query  = "SELECT * FROM peminjaman WHERE id_anggota='$ida'";
									$hasil  = mysqli_query($conn, $query);
									$tampil = mysqli_num_rows($hasil);

									$i = 1;

									if ( $tampil> 0) {
									    while ( $data = mysqli_fetch_assoc($hasil)) {
								?>
								<tr>
									<td><?php echo $i++ ?></td>
									<?php
										$data1 = mysqli_query($conn, "SELECT * FROM buku WHERE id='$data[id_buku]'"); 
										$id    = mysqli_fetch_array($data1);
										$mp1   = $id['nama'];
									?>
									<td><?php echo $mp1; ?></td>
									<?php
										$data1 = mysqli_query($conn, "SELECT * FROM anggota WHERE id='$data[id_anggota]'"); 
										$id    = mysqli_fetch_array($data1);
										$mp2   = $id['nama'];
									?>
									<td><?php echo $mp2; ?></td>
									<td><?php echo $data['tanggal_pinjam']; ?></td>
									<td><?php echo $data['tanggal_kembali']; ?></td>
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