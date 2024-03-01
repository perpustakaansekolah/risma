<?php
include "koneksi.php";
$id = $_GET['id'];
$hapus = $konek->query("delete from list_buku  where no ='$id'");

if ($hapus)
?>

<script>
 document.location.href = 'tampilbuku.php';
</script>
