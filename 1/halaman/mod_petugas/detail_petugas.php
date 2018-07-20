<title><?php echo $_SESSION['username']; ?> - DETAIL PETUGAS</title>
<?php
include "../config/koneksi.php";

$id=$_GET['id'];

$query = "SELECT * FROM petugas INNER JOIN user ON petugas.id=user.id_petugas WHERE id_petugas='$id'";
$hasil = mysqli_query($conn, $query);
$tampil = mysqli_num_rows($hasil);

$i = 1;

if ( $tampil> 0) {
    while ( $data = mysqli_fetch_assoc($hasil)) {
?>

<div class="row">
    <div class="panel-body">
        <div class="col-md-12 w3ls-graph">
            <div class="agileinfo-grap">
                <div class="panel panel-default">
                    <div class="panel-heading">DETAIL PETUGAS</div>
                        
                        <div class="table-responsive sr">
                          <table id="data" class="table table-striped b-t b-light">
					        <thead>
					          	<tr>
					          		<th>No</th>
					          		<th>ID</th>
					          		<th>Username</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Telepon</th>
									<th>Email</th>
									<th>Opsi</th>
					        	</tr>
					        </thead>
					        <tbody>

								<tr>
									<td><?php echo $i++ ?></td>
									<td><?php echo $data['id']; ?></td>
									<td><?php echo $data['username']; ?></td>
									<td><?php echo $data['nama']; ?></td>
									<td><?php echo $data['alamat']; ?></td>
									<td><?php echo $data['telepon']; ?></td>
									<td><?php echo $data['email']; ?></td>
									<td>
	                                    <a href="media.php?page=edit_petugas&id=<?php echo $data['id_petugas'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-pencil"></i></button></a>
	                                    <a href="halaman/mod_petugas/aksi_hapus_petugas.php?id=<?php echo $data['id_petugas'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-trash-o"></i></button></a>
						            </td>
					          	</tr>

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
                <div align="left">
                    <button class="btn btn-success" type="button" onclick="history.back()">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    }
}
?>