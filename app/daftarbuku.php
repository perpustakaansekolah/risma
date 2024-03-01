<?php
include "boot.php";
include "koneksi.php";


?>

<div class="mt-3">
    <table class="table table-striped">
        <thead>
        <tr class="table-dark">
            <th scope="col">No</th>
            <th scope="col">Kode_Buku</th>  
            <th scope="col">jenis_buku</th>
            <th scope="col">judul_buku</th>
            <th scope="col">aksi</th>
        </tr>
        </thead>

        <tbody>
        <?php

            $tampil = $konek->query("select*from list_buku");
            while ($s = $tampil->fetch_array ()) {
                @$no++;
        
        ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $s['kode_buku'] ?></td>
                <td><?= $s['jenis_buku'] ?></td>
                <td><?= $s['judul_buku'] ?></td>
                <td>

                <button class="btn btn-danger" onclick="document.location.href='hapusbuku.php?id=<?= $s['no'] ?>'
                "><i class="bi bi-trash3"></i></button>
                
                <button class="btn btn-success" onclick="document.location.href='updatebuku.php?id=<?= $s['no'] ?>'
                "><i class="bi bi-pencil-square"></i></i></button>
                </td>

                <?php

                    }

                ?>
            </tr>
        </tbody>
    </table>
</div>