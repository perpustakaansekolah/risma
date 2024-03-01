<?php
include "koneksi.php";
include "boot.php";

$query = isset($_GET['query']) ? $_GET['query'] : '';
$result = mysqli_query($konek, "SELECT*FROM Peminjam WHERE nama LIKE '%$query%' or judul buku LIKE '%$query%'")






echo "<h2>Serach Result for: ". htmlspecialchars($query) ."</h2>";
echo "<table class='table'>";
echo "<th>no</th>";
echo "<th>nama</th>";
echo "<th>kelas</th>";
echo "<th>kode buku</th>";
echo "<th>jenis buku</th>";
echo "<th>judul buku</th>";
echo "<th>peminjaman</th>";
echo "<th>pengembalian</th>";

$no = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $no++;
    echo "<tr>";
    echo "<th scope= 'row'>$no</th>";
    echo "<td>{$row['nama']}</td>";
    echo "<td>{$row['kelas']}</td>";
    echo "<td>{$row['kode_buku']}</td>";
    echo "<td>{$row['jenis_buku']}</td>";
    echo "<td>{$row['judul_buku']}</td>";
    echo "<td>{$row['peminjaman']}</td>";
    echo "<td>{$row['pengembalian']}</td>";



}
$konek->close();
    ?>  




