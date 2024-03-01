<button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer-fill fs=1 text-warning"></i></button>

<?php
include "boot.php";
include "koneksi.php";

?>

<form action="" method="post" class="form-control">
    Tangal Awal : <input type="date" name="tgl1" class="form-control">
    Tangal Akhir : <input type="date" name="tgl2" class="form-control">
    <div class="text-end">
        <input type="submit" class="btn btn-warning mt-2">
    </div>
</form>

<div class="float-right mt-5">

<div id="div1" style="display: <?php echo isset($_POST['tgl1']) ? 'block' : 'none'; ?>;">
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Process the form data and display the table if needed
            ?>
            <table class="table">
                <thead>
                <tr class="table-dark">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">kelas</th>
                    <th scope="col">kode_buku</th>
                    <th scope="col">jenis_buku</th>
                    <th scope="col">peminjaman</th>
                    <th scope="col">pengembalian</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $tampil = $konek->query("SELECT * FROM Peminjam where peminjaman between '$_POST[tgl1]' and '$_POST[tgl2]'");
                while ($s = $tampil->fetch_array()) {
                    @$no++;
                    ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $s['nama'] ?></td>
                        <td><?= $s['kelas'] ?></td>
                        <td><?= $s['kode_buku'] ?></td>
                        <td><?= $s['jenis_buku'] ?></td>
                        <td><?= $s['peminjaman'] ?></td>
                        <td><?= $s['pengembalian'] ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
         }
         ?>
        </div>
     </div>
    </div>
</div>

<script>
    function printDiv(el) {
        var a = document.body.innerHTML;
        var b = document.getElementById(el).innerHTML;
        document.body.innerHTML = b;
        window.print();
        document.body.innerHTML = a;
    }
</script>
