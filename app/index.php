<?php
    session_start();
    $user = $_SESSION['user'];
    if ($user =="user") {

 ?>
    <script>
        document.location = '../index.php';
    </script>   
    
<?php
    }else{
    include "boot.php";
?>

<body>
    <div class="container">
    <!-- menu navbar -->

    <nav class="navbar navbar-expand-lg bg-dark mt-4">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#"> Perpustakaan Sekolah </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form class="d-flex" role="search" action="search.php" method="GET" target="konten">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name = "query">
                <button class="btn btn-outline-light" type="submit"> Search </button>
            </form>
            </div>
        </div>
    </nav>
    <!-- penutup navbar -->
    
    <!-- menu list -->
    <div class="row">
        <div class="col-2 mt-4">
        <ul class="list-group">
        <a href="dashboard.php" target="konten">
                <li class="list-group-item">Dasboard</li>
            </a>

            <a href="input.php" target="konten">
                <li class="list-group-item">Input Peminjam Buku</li>
            </a>
            <a href="tampil.php" target="konten">
                <li class="list-group-item"> Data Peminjam Buku</li>
            </a>

            <a href="Listbuku.php" target="konten">
                <li class="list-group-item"> Input Buku</li>
            </a>
            
            <a href="daftarbuku.php" target="konten">
                <li class="list-group-item"> Daftar Buku</li>
            </a>

            <a href="rekap.php" target="konten">
                <li class="list-group-item"> Rekap</li>
            </a>

            <a href="logout.php">
            <li class="list-group-item">log out</li>
            </a>
        </ul>

        </div>
        <div class="col mt-2">
            <iframe src="" name="konten" frameborder="0" width="960" height="950"></iframe>
        </div>
    </div>
    <!-- penutup list -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>
<?php
 }
 ?>