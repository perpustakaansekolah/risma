<?php
include "boot.php";
include "koneksi.php";


?>

<div class="mt-10">
    <table class="table table-striped">
        <thead>
        <tr class="table-dark">
            <th scope="col">No</th>
            <th scope="col">Kode Buku</th>  
            <th scope="col">jenis buku</th>
            <th scope="col">judul buku</th>
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


                    

                

                <a class="btn btn-danger btn btn-sm btn-xs" href="hapusbuku.php?id=<?php echo $s['no'];?>" onclick="javascript:return confirm('Apakah anda ingin menghapus data ini?')"><i class="bi bi-trash"></i></a>
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