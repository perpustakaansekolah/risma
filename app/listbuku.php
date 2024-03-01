<?php
    include "boot.php";
    include "koneksi.php";
    $kode=$konek->query("select * from list_buku order by no desc");
    $k=$kode->fetch_array();
?>

<div class="container mt-3">
    <form class="form-control mt-3 bg-secondary text-light" action ="prosesinputbuku.php" method = "post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">kode buku :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_buku" value="BK<?=$k['no']+1?>">

        <option selected>jenis buku :</option>
        <select class="form-select mt-3 button" aria-label="jenis_buku" name="jenis_buku">
        <option value=""></option>
        <option >pelajaran</option>
        <option >komik</option>
        <option >Novel</option>
    </select>

        <label for="exampleInputEmail1" class="form-label">judul buku :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul_buku" required>


        
        <div class="text-end">
            <button type="submit" class="btn btn-primary mt-3 ">Simpan</button>
        </div>
    </form>
</div>
