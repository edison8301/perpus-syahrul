                <head>
                    <title><?php echo $_SESSION['username']; ?> - EDIT PETUGAS</title>
                </head>
                <?php
                  include '../config/koneksi.php';
                  include '../validasi/angka.php';

                  if (isset($_GET['id'])) {
                    
                    $id = ($_GET["id"]);

                    $query = "SELECT * FROM petugas INNER JOIN user ON petugas.id=user.id_petugas WHERE id_petugas='$id'";
                    $result = mysqli_query($conn, $query);

                    if(!$result){
                      die ("Query Error: ".mysqli_errno($conn).
                         " - ".mysqli_error($conn));
                    }

                    $data = mysqli_fetch_assoc($result);
                    $nama = $data["nama"];
                    
                  } else {

                    header("location:../../media.php?page=petugas");
                  }

                ?>
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Petugas
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form method="POST" action="halaman/mod_petugas/aksi_edit_petugas.php" class="cmxform form-horizontal" id="commentForm" novalidate="novalidate">
                                    <input type="hidden" name="id" value="<?php echo $data['id_petugas']; ?>">
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Username :</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cname" name="username" minlength="2" maxlength="45" type="text" required="" value="<?php echo $data['username']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Password :</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cname" name="password" minlength="2" maxlength="45" type="password" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Nama :</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cname" name="nama" minlength="2" maxlength="45" type="text" required="" value="<?php echo $data['nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Alamat :</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cname" name="alamat" minlength="2" maxlength="45" type="text" required="" value="<?php echo $data['alamat']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Telepon :</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cname" name="telepon" minlength="2" maxlength="13" type="text" required="" value="<?php echo $data['telepon']; ?>" onkeypress="return angka(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Email :</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cname" name="email" minlength="2" maxlength="45" type="text" required="" value="<?php echo $data['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-success" type="submit" name="edit">Save</button>
                                            <button class="btn btn-default" type="button" onclick="history.back()">Cancel</button>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </section>
                </div>