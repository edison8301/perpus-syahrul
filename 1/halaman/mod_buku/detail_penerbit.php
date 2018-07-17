<title><?php echo $_SESSION['username']; ?> - DETAIL KATEGORI</title>
<?php
include "../config/koneksi.php";

$id=$_GET['id'];

$query = "SELECT * FROM penerbit WHERE id='$id'";
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
                    <div class="panel-heading">DETAIL PENERBIT</div>
                        
                        <div class="table-responsive sr">
                          <table class="table table-striped b-t b-light">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Opsi</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td>
                                        <a href="media.php?page=edit_penerbit&id=<?php echo $data['id'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-pencil"></i></button></a>
                                        <a href="halaman/mod_buku/aksi_hapus_penerbit.php?id=<?php echo $data['id'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-trash-o"></i></button></a>
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

<div class="row">
    <div class="panel-body">
        <div class="col-md-12 w3ls-graph">
            <div class="agileinfo-grap">
                <div class="panel panel-default">
                    <div class="panel-heading">YANG TERKAIT DENGAN PENULIS</div>
                        
                        <div class="table-responsive sr">
                          <table id="data" class="table table-striped b-t b-light">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tahun Terbit</th>
                                <th>Penerbit</th>
                                <th>Penulis</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $query  = "SELECT * FROM buku WHERE id_penerbit='$id'";
                                    $hasil  = mysqli_query($conn, $query);
                                    $tampil = mysqli_num_rows($hasil);

                                    $i = 1;

                                    if ( $tampil> 0) {
                                        while ( $data = mysqli_fetch_assoc($hasil)) {
                                ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $data['id']; ?></td>
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

<?php
    }
}
?>