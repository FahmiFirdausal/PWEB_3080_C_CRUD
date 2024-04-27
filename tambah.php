<?php
include 'rental.php';

$rental = Rental::select();

if (isset($_POST["submit"])) {
    Rental::create($_POST['nama_peminjam'], $_POST['jenis_mobil'], $_POST['lama_peminjaman'], $_POST['awal_peminjaman'], $_POST['status']);
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="sidebar">
        <h2><img src="car-outline.svg" alt="Car Logo">C-Rental</h2>
        <a href="index.php" id="Button-Dashboard">Dashboard</a>
        <a href="tambah.php" id="form-peminjaman-button">Form Peminjaman</a>
    </div>

    <div class="main">
        <h1>Rental Mobil</h1>
        <p>Rental Mobil Kepercayaan Keluarga</p>
        <input type="text" id="search-box" placeholder="Search...">
    </div>
    <div class="utama">
        <form class="form" action="" method="post" enctype="multipart/form-data">
            <label for="nama_peminjam">Nama Peminjam: </label>
            <input type="text" name="nama_peminjam" id="nama_peminjam">
            <label for="jenis_mobil">Jenis Mobil: </label>
            <input type="text" name="jenis_mobil" id="jenis_mobil">
            <label for="lama_peminjaman">Lama Peminjaman: </label>
            <input type="text" name="lama_peminjaman" id="lama_peminjaman">
            <label for="awal_peminjaman">Awal Peminjaman: </label>
            <input type="date" name="awal_peminjaman" id="awal_peminjaman">
            <label for="status">Status : </label>
            <input type="text" name="status" id="status">

            <button type="submit" name="submit" class="create">Tambah Data</button>
        </form>
        </form>
    </div>
</body>

</html>