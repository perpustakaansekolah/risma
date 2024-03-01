<?php
include "koneksi.php";
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jenis_buku = $_POST['jenis_buku'];
$judul_buku = $_POST['judul_buku'];
$peminjaman= $_POST['peminjaman'];
$pengembalian = $_POST['pengembalian'];
$status = $_POST['status'];

$carikode=$konek->query("select*from list_buku where judul_buku='$judul_buku'");
$kod=$carikode->fetch_array();

$kode_buku = $kod['kode_buku'];

if ($nama == "") {
    echo "maaf nama wajib di isi";
} else {
    $simpan = $konek->query("insert into Peminjam(nama, kelas ,kode_buku, jenis_buku,judul_buku,peminjaman,pengembalian,status  ) values 
    ('$nama','$kelas','$kode_buku','$jenis_buku','$judul_buku', '$peminjaman', '$pengembalian','$status')");
}

?>

<script>
 document.location.href = 'input.php?notif=berhasil';
</script>


