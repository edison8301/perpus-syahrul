<title>ADMIN - HOME</title>
<?php
    include "../config/koneksi.php";
    $query = "SELECT * FROM buku";
    $hasil = mysqli_query($conn, $query);

    if (isset($_GET['cari'])) {
        $car = $_GET['cari'];
        $hasil = mysqli_query($conn, "SELECT * FROM buku WHERE nama LIKE '%$car%'");
    }

    $tampil = mysqli_num_rows($hasil);

    if ( $tampil> 0) {
        echo "<div id='easyPaginate' class='row'>";
        while ( $data = mysqli_fetch_assoc($hasil)) {

            $d = $data['sinopsis'];
              if (strlen($d) > 10) {
                $d = substr($d, 0, 100) . '...';
            }
            
?>
<div class="col-md-4 market-update-gd s sss srr">
        <img style='height:330px; width: 100%; border-radius: 5px;' src='../sampul/<?php echo "$data[sampul]"; ?>' alt='cover'>
            <hr>
            <h3 align="center"><?php echo $data['nama']; ?></h3>
            <hr>
            <?php
				$data1 = mysqli_query($conn, "SELECT * FROM kategori WHERE id='$data[id_kategori]'"); 
				$id    = mysqli_fetch_array($data1);
				$mp1   = $id['nama'];
			?>
            <h4 align="center">Kategori Buku : <?php echo $mp1 ?></h4>
            <hr>
            <p align="center"><?php echo "$d"; ?><a href="media.php?page=detail_buku&id=<?php echo $data['id']?>">Detail</a></p>
</div>
<?php
        }
        echo "</div>";
    }
?>