                <title>ADMIN - TAMBAH BUKU</title>
                <?php
                    include "../config/koneksi.php";
                ?>
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Buku
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="commentForm" method="POST" action="halaman/mod_buku/aksi_tambah_buku.php" novalidate="novalidate" enctype="multipart/form-data">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Nama :</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="nama" minlength="2" maxlength="45" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Penulis :</label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="id_penulis">
                                                <?php
                                                    $query = "SELECT * FROM penulis";
                                                    $hasil = mysqli_query($conn, $query);
                                                    $tampil = mysqli_num_rows($hasil);

                                                    if ( $tampil> 0) {
                                                        while ( $data = mysqli_fetch_assoc($hasil)) {
                                                    ?>
                                                <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Penerbit :</label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="id_penerbit">
                                                <?php
                                                    $query = "SELECT * FROM penerbit";
                                                    $hasil = mysqli_query($conn, $query);
                                                    $tampil = mysqli_num_rows($hasil);

                                                    if ( $tampil> 0) {
                                                        while ( $data = mysqli_fetch_assoc($hasil)) {
                                                    ?>
                                                <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Tahun Terbit :</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="tahun" minlength="2" type="date" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Kategori :</label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="id_kategori">
                                                <?php
                                                    $query = "SELECT * FROM kategori";
                                                    $hasil = mysqli_query($conn, $query);
                                                    $tampil = mysqli_num_rows($hasil);

                                                    if ( $tampil> 0) {
                                                        while ( $data = mysqli_fetch_assoc($hasil)) {
                                                    ?>
                                                <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Sinopsis :</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="ccomment" name="sinopsis" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Berkas :</label>
                                        <div class="col-lg-6">
                                            <input type="file" name="berkas">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Sampul :</label>
                                        <div class="col-lg-6">
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