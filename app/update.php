<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$ubah=$konek->query("select*from Peminjam where no='$id'");
$a = $ubah->fetch_array();


?>
<div class="container">
<form class="form form-control " action="" method="POST">

 
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">status</label>
    <select class="form-select mt-3 button" aria-label="status" name="status">
        <option >di Kembalikan</option>
    </select>
 

<div class="text-end">
  <button type="submit" class="btn btn-primary mt-3">simpan</button>
</div>
  </div>


<?php
if (!isset($_POST['edit'])) {
  @$update = $konek->query("update Peminjam set status='$_POST[status]' where no='$id'");
    ?>
    <div class="alert alert-info mt-3" role="alert">
        <?php
        echo "Input buku berhasil diubah<a href='tampil.php'> kembali</a>";
        ?>
    </div>
<?php
}
?>



