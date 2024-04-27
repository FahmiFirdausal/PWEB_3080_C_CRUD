<?php 
include 'rental.php';

$rental = Rental::select()

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
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Peminjam</th>
          <th>Jenis Mobil</th>
          <th>Lama Peminjaman</th>
          <th>Awal Peminjaman</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tr>
        <?php 
        foreach ($rental as $row) :
        ?>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama_peminjam'] ?></td>
        <td><?= $row['jenis_mobil'] ?></td>
        <td><?= $row['lama_peminjaman'] ?></td>
        <td><?= $row['awal_peminjaman'] ?></td>
        <td><?= $row['status'] ?></td>
        <td>
          <button class="edit-button">Edit</button>
          <button class="delete-button">Delete</button>
        </td>
      </tr>

      <?php endforeach ?>
  </div>
</body>

</html>