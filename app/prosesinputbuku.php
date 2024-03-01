<?php
include "koneksi.php";
$kode_buku = $_POST['kode_buku'];
$jenis_buku = $_POST['jenis_buku'];
$judul_buku = $_POST['judul_buku'];
if ($kode_buku == "") {
    echo "maaf nama wajib di isi";
} else {
    $simpan = $konek->query("insert into list_buku( kode_buku, jenis_buku,judul_buku ) values 
    ('$kode_buku','$jenis_buku', '$judul_buku')");
}

?>

<script>
 document.location.href = 'inputbuku.php?notif=berhasil';
</script>