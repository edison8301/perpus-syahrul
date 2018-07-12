                <head>
                    <title>ADMIN - EDIT PENERBIT</title>
                </head>
                <?php
                  include '../config/koneksi.php';

                  if (isset($_GET['id'])) {
                    
                    $id = ($_GET["id"]);

                    $query = "SELECT * FROM penerbit WHERE id='$id'";
                    $result = mysqli_query($conn, $query);

                    if(!$result){
                      die ("Query Error: ".mysqli_errno($conn).
                         " - ".mysqli_error($conn));
                    }

                    $data = mysqli_fetch_assoc($result);
                    $nama = $data["nama"];
                    
                  } else {

                    header("location:../../media.php?page=penerbit");
                  }

                ?>
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Penerbit
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form method="POST" action="halaman/mod_buku/aksi_edit_penerbit.php" class="cmxform form-horizontal" id="commentForm" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Nama Kategori:</label>
                                        <div class="col-lg-6">
                                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                            <input class="form-control" id="cname" name="penerbit" minlength="2" maxlength="45" type="text" required="" value="<?php echo $data['nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit" name="edit">Save</button>
                                            <button class="btn btn-default" type="button" onclick="history.back()">Cancel</button>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </section>
                </div>