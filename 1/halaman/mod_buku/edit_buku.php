                <title><?php echo $_SESSION['username']; ?> - EDIT BUKU</title>
                <?php
                    include "../config/koneksi.php";

                    if (isset($_GET['id'])) {

                    $id = ($_GET["id"]);

                    $query = "SELECT * FROM buku WHERE id='$id'";
                    $result = mysqli_query($conn, $query);

                    if(!$result){
                        die ("Query Error: ".mysqli_errno($conn).
                            " - ".mysqli_error($conn));
                    }

                    $data = mysqli_fetch_assoc($result);
                                    
                    } else {

                    header("location:buku.php");
                    }
                ?>
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Buku
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="commentForm" method="POST" action="halaman/mod_buku/aksi_edit_buku.php" novalidate="novalidate" enctype="multipart/form-data">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Nama Buku:</label>
                                        <div class="col-lg-6">
                                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                            <input class=" form-control" id="cname" name="nama" minlength="2" maxlength="45" type="text" required="" value="<?php echo $data['nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Penulis :</label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="penulis">
                                                <?php
                                                    $query = "SELECT * FROM penulis";
                                                    $hasil = mysqli_query($conn, $query);
                                                    $tampil = mysqli_num_rows($hasil);

                                                    if ( $tampil> 0) {
                                                        while ( $dat = mysqli_fetch_assoc($hasil)) {
                                                            if($dat['id']==$data['id_penulis']){
                                                            ?>
                                                            <option value="<?php echo $dat['id']; ?>" selected="selected"><?php echo $dat['nama'];?></option>
                                                        <?php
                                                            }else{
                                                        ?>
                                                        <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nama']; ?></option>
                                                <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Penerbit :</label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="penerbit">
                                                <?php
                                                 $query = "SELECT * FROM penerbit";
                                                 $hasil = mysqli_query($conn, $query);
                                                 $tampil = mysqli_num_rows($hasil);

                                                 if ( $tampil> 0) {
                                                     while ( $dat = mysqli_fetch_assoc($hasil)) {
                                                        if($dat['id']==$data['id_penerbit']){
                                                        ?>
                                                            <option value="<?php echo $dat['id']; ?>" selected="selected"><?php echo $dat['nama'];?></option>
                                                        <?php
                                                            }else{
                                                        ?>
                                                        <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nama']; ?></option>
                                                 <?php
                                                     }
                                                     }
                                                 }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Tahun Terbit :</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="tahun" minlength="2" type="text" required="" value="<?php echo $data['tahun_terbit']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Kategori :</label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="kategori">
                                                <?php
                                                 $query = "SELECT * FROM kategori";
                                                 $hasil = mysqli_query($conn, $query);
                                                 $tampil = mysqli_num_rows($hasil);

                                                 if ( $tampil> 0) {
                                                     while ( $dat = mysqli_fetch_assoc($hasil)) {
                                                        if($dat['id']==$data['id_kategori']){
                                                        ?>
                                                            <option value="<?php echo $dat['id']; ?>" selected="selected"><?php echo $dat['nama'];?></option>
                                                        <?php
                                                            }else{
                                                        ?>
                                                        <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nama']; ?></option>
                                                 <?php
                                                     }
                                                     }
                                                 }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Sinopsis :</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="ccomment" name="sinopsis" required=""><?php echo $data['sinopsis']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Berkas :</label>
                                        <div class="col-lg-6">
                                            <a href="../berkas/<?php echo $data['berkas']?>"><?php echo $data['berkas']?></a>
                                            <input type="hidden" name="berkas_buku_awal" value="<?php echo $data['berkas']?>">
                                            <input type="file" name="berkas">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Sampul :</label>
                                        <div class="col-lg-6">
                                            <input type="hidden" name="sampul_buku_awal" value="<?php echo $data['sampul']?>">
                                            <img style="width: 120px; height: 120px" src="../sampul/<?php echo $data['sampul']; ?>"><br><br>
                                            <input type="file" name="sampul">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-success" type="submit">Save</button>
                                            <button class="btn btn-default" type="button" onclick="history.back()">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>