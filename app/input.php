<?php
    include "boot.php";
    include "koneksi.php";
    $kode=$konek->query("select * from list_buku order by no desc");
    $k=$kode->fetch_array();
    ?>

<div class="container mt-3">
    <form class="form-control mt-3 bg-secondary text-light" action ="prosesinput.php" method = "post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>

        <label for="exampleInputEmail1" class="form-label">kelas :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kelas" required>

        <label for="exampleInputEmail1" class="form-label">kelas :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kelas" required>

        <option selected>jenis buku :</option>
        <select class="form-select mt-3 button" aria-label="jenis_buku" name="jenis_buku">
            <option value=""></option>
            <?php
        include "koneksi.php";
    $kode=$konek->query("select * from list_buku order by no desc");
   while ($k=$kode->fetch_array()){
    ?>
        <option ><?=$k['jenis_buku']?></option>
    <?php
    }
    ?>
    </select>

    <option selected>judul buku :</option>
        <select class="form-select mt-3 button" aria-label="judul_buku" name="judul_buku">
            <option value=""></option>
            <?php
        include "koneksi.php";
    $kode=$konek->query("select * from list_buku order by no desc");
   while ($k=$kode->fetch_array()){
    ?>
        <option ><?=$k['judul_buku']?></option>
    <?php
    }
    ?>
    </select>

        <label for="exampleInputEmail1" class="form-label">peminjaman :</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="peminjaman" required>

        <label for="exampleInputEmail1" class="form-label"> pengembalian :</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pengembalian" required>
       
        <option selected>status :</option>
        <select class="form-select mt-3 button" aria-label="status" name="status">
        <option >pinjam</option>
    </select>
        

        <div class="text-end">
            <button type="submit" class="btn btn-primary mt-3 ">Simpan</button>
        </div>
    </form>
</div>

<?php
if (isset($_GET['notif'])=="berhasil"){
?>
<div class="alert-alert-succes" role="alert">
    Input Data Berhasil <a href='tampil.php'> Lihat</a>
</div>
<?php
}
?>
