                <head>
                    <title><?php echo $_SESSION['username']; ?> - EDIT ANGGOTA</title>
                </head>
                <?php
                  include '../config/koneksi.php';

                  if (isset($_GET['id'])) {
                    
                    $id = ($_GET["id"]);

                    $query = "SELECT * FROM anggota WHERE id='$id'";
                    $result = mysqli_query($conn, $query);

                    if(!$result){
                      die ("Query Error: ".mysqli_errno($conn).
                         " - ".mysqli_error($conn));
                    }

                    $data = mysqli_fetch_assoc($result);
                    $nama = $data["nama"];
                    
                  } else {

                    header("location:../../media.php?page=anggota");
                  }

                ?>
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Anggota
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form method="POST" action="halaman/mod_buku/aksi_edit_anggota.php" class="cmxform form-horizontal" id="commentForm" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Nama :</label>
                                        <div class="col-lg-6">
                                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
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
                                            <input class="form-control" id="cname" name="telepon" minlength="2" maxlength="45" type="text" required="" value="<?php echo $data['telepon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Email :</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cname" name="email" minlength="2" maxlength="45" type="text" required="" value="<?php echo $data['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Status Aktif :</label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="status_aktif">
                                                <?php
                                                $query = "SELECT * FROM anggota";
                                                $hasil = mysqli_query($conn, $query);
                                                $tampil = mysqli_num_rows($hasil);

                                                if ( $tampil> 0) {
                                                    while ( $dat = mysqli_fetch_assoc($hasil)) {
                                                        if($dat['id']==$data['status_aktif']){
                                                            ?>
                                                            <option value="<?php echo $dat['status_aktif']; ?>" selected="selected"><?php echo $dat['status_aktif'];?></option>
                                                        <?php
                                                        }else{
                                                ?>
                                                    <option value="1">Aktif</option>
                                                    <option value="2">Tidak Aktif</option>
                                                <?php
                                                    }
                                                    }
                                                }
                                                ?>
                                            </select>
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