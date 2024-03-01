<?php
include "boot.php";
$date =date("y-m-d");
echo $date;

?>

<div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="../images/buku.png" class="card-img-top" alt="..." width="200">
            <div class="card-body">
                <p class="card-text"> Buku Di Pinjam 
                    <?php
                    include "koneksi.php";
                    $lihat =$konek->query("select status from Peminjam where status like 'pinjam'");
                    $jumlah =$lihat->num_rows;
                    echo $jumlah;
                    ?>
                </p>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 15rem;">
            <img src="../images/buku2.png" class="card-img-top" alt="card-img-top" width="200px">
            <div class="card-body">
                <p class="card-text"> Buku Di Kembalikan 
                    <?php

                    $date=date('m');   

                    include "koneksi.php";
                    $lihat =$konek->query("select status from Peminjam where status like 'di Kembalikan'");
                    $jumlah =$lihat->num_rows;
                    echo $jumlah;
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>

