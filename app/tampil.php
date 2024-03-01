<?php
include "boot.php";
include "koneksi.php";


?>

<div class="mt-3">
    <table class="table table-striped">
        <thead>
        <tr class="table-dark">
            <th scope="col">No</th>
            <th scope="col">Nama</th>  
            <th scope="col">Kelas</th>  
            <th scope="col">Kode Buku</th>  
            <th scope="col">Jenis Buku</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Peminjaman</th>
            <th scope="col">Pengembalian</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>

        <tbody>
        <?php

            $tampil = $konek->query("select*from Peminjam");
            while ($s = $tampil->fetch_array ()){
                @$no++;
        
        ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $s['nama'] ?></td>
                <td><?= $s['kelas'] ?></td>
                <td><?= $s['kode_buku'] ?></td>
                <td><?= $s['jenis_buku'] ?></td>
                <td><?= $s['judul_buku'] ?></td>
                <td><?= $s['peminjaman'] ?></td>
                <td><?= $s['pengembalian'] ?></td>
                <td><?= $s['status'] ?></td>
                <td>


                <a class="btn btn-danger btn btn-sm btn-xs" href="hapus.php?id=<?php echo $s['no'];?>" onclick="javascript:return confirm('Apakah anda ingin menghapus data ini?')"><i class="bi bi-trash"></i></a>


                <button class="btn btn-success btn btn-sm" onclick="document.location.href='update.php?id=<?= $s['no'] ?>'
                "><i class="bi bi-pencil-square"></i></i></button>
                </td>

               

<?php
}
?>
    
            </tr>
        </tbody>

    </table>
</div>