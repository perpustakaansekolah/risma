<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$ubah=$konek->query("select*from list_buku where no='$id'");
$a = $ubah->fetch_array();


?>
<div class="container">
<form class="form form-control " action="" method="POST">

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_buku"value="<?=$a['kode_buku'] ?>">
   
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis Buku</label>
    <select class="form-select mt-3 button" aria-label="jenis_buku" name="jenis_buku">
        <option><?=$a['jenis_buku'] ?></option>
        <option >Pelajaran</option>
        <option >Komik</option>
        <option >Novel</option>
    </select> 
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Judul Buku</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul_buku"value="<?=$a['judul_buku'] ?>">
   
   
 

<div class="text-end">
  <button type="submit" class="btn btn-primary mt-3"> Simpan </button>
</div>
  </div>


  <?php
if (!isset($_POST['edit'])) {
    @$update = $konek->query("update list_buku set kode_buku='$_POST[kode_buku]',jenis_buku='$_POST[jenis_buku]',judul_buku='$_POST[judul_buku]' where no='$id'");
    ?>
    <div class="alert alert-info mt-3" role="alert">
        <?php
        echo "Data buku berhasil diubah<a href='tampilbuku.php'> kembali</a>";
        ?>
    </div>
<?php
}
?>