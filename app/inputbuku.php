<?php
    include "boot.php";
    
?>

<div class="container mt-3">
    <form class="form-control mt-3 bg-secondary text-light" action ="prosesinputbuku.php" method = "post">
    <div class="mb-3">
       

        <label for="exampleInputEmail1" class="form-label">Kode Buku :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_buku" required>

        <option selected>jenis_buku :</option>
        <select class="form-select mt-3 button" aria-label="jenis_buku" name="jenis_buku">
        <option value=""></option>
        <option >Pelajaran</option>
        <option >Komik</option>
        <option >Novel</option>
    </select>

        <label for="exampleInputEmail1" class="form-label">Judul Buku :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul_buku" required>
        

        <div class="text-end">
            <button type="submit" class="btn btn-primary mt-3 ">Simpan</button>
        </div>
    </form>
</div>


<?php
if (isset($_GET['notif'])=="berhasil"){
?>
<div class="alert-alert-succes" role="alert">
    Input Data Berhasil <a href='tampilbuku.php'> Lihat</a>
</div>
<?php
}
?>