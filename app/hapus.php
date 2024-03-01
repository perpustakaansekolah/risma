<?php
include "koneksi.php";
$id = $_GET['id'];
$hapus = $konek->query("delete from peminjam  where no ='$id'");

if ($hapus)
?>

<script>
 document.location.href = 'tampil.php';
</script>
