                <?php include '../validasi/angka.php'; ?>
                <head>
                    <title><?php echo $_SESSION['username']; ?> - TAMBAH PENULIS</title>
                </head>
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Penulis
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form method="POST" action="halaman/mod_buku/aksi_tambah_penulis.php" class="cmxform form-horizontal" id="commentForm" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Nama :</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cname" name="nama" minlength="2" maxlength="45" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Alamat :</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cname" name="alamat" minlength="2" maxlength="45" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Telepon :</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cname" name="telepon" minlength="12" maxlength="13" type="text" required="" onkeypress="return angka(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Email :</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cname" name="email" minlength="2" maxlength="45" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-success" type="submit" name="simpan">Save</button>
                                            <button class="btn btn-default" type="button" onclick="history.back()">Cancel</button>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </section>
                </div>