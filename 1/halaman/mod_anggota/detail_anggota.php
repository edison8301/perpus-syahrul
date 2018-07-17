<title><?php echo $_SESSION['username']; ?> - DETAIL ANGGOTA</title>
<?php
include "../config/koneksi.php";

$id=$_GET['id'];

$query = "SELECT anggota.*, user.* FROM anggota, user WHERE anggota.id = user.id LIKE $id";
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
                    <div class="panel-heading">DETAIL ANGGOTA</div>
                        
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
									<th>Status Aktif</th>
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
									<td><?php echo $data['status_aktif']; ?></td>
									<td>
	                                    <a href="media.php?page=edit_anggota&id=<?php echo $data['id'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-pencil"></i></button></a>
	                                    <a href="halaman/mod_anggota/aksi_hapus_anggota.php?id=<?php echo $data['id'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-trash-o"></i></button></a>
						            </td>
					          	</tr>

					        </tbody>
					      </table>
                    </div>

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