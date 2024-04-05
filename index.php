<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidebar">
  <h2><img src="car-outline.svg" alt="Car Logo">C-Rental</h2>
  <a href="#dashboard" id="Button-Dashboard">Dashboard</a>
  <a href="#data-peminjam" id="data-peminjam-button">Data Peminjam</a>
  <a href="#form-peminjaman" id="form-peminjaman-button">Form Peminjaman</a>
</div>

<div class="main">
  <h1>Rental Mobil</h1>
  <p>Rental Mobil Kepercayaan Keluarga</p>
  <input type="text" id="search-box" placeholder="Search...">
</div>
<div class="utama">
  <!-- Data peminjam table -->
</div>
<script>
  document.getElementById("Button-Dashboard").addEventListener("click", function() {
    var Dashboard = [
      {
        "No" : "1",
        "NamaMobil" : "Avanza",
        "Kapasitas" : "6 Penumpang",
        "Harga" : "200.000/hari"
      },
      {
        "No" : "2",
        "NamaMobil" : "Innova",
        "Kapasitas" : "8 Penumpang",
        "Harga" : "400.000/hari"
      },
      {
        "No" : "3",
        "NamaMobil" : "Ayla",
        "Kapasitas" : "5 Penumpang",
        "Harga" : "150.000/hari"
      },
      {
        "No" : "4",
        "NamaMobil" : "Alphard",
        "Kapasitas" : "8 Penumpang",
        "Harga" : "500.000/hari"
      }
    ];
    var table = `
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Mobil</th>
            <th>Kapasitas</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
    `;

    for (var i = 0; i < Dashboard.length; i++) {
      table += `
        <tr>
          <td>${Dashboard[i].No}</td>
          <td>${Dashboard[i].NamaMobil}</td>
          <td>${Dashboard[i].Kapasitas}</td>
          <td>${Dashboard[i].Harga}</td>
        </tr>
      `;
    }

    table += `
        </tbody>
      </table>
    `;

    document.querySelector(".utama").innerHTML = table;
    
  });
      
</script>
<script>
  document.getElementById("data-peminjam-button").addEventListener("click", function() {
  var dataPeminjam = [
    {
      "nama": "Agus",
      "mobil": "Avanza",
      "lamaSewa": 3,
      "tanggalSewa": "2023-03-15",
      "status": "Sedang Dipinjam"
    },
    {
      "nama": "Bambang",
      "mobil": "Ayla",
      "lamaSewa": 5,
      "tanggalSewa": "2023-03-10",
      "status": "Sudah Kembali"
    },
    {
      "nama": "Joko",
      "mobil": "Innova",
      "lamaSewa": 7,
      "tanggalSewa": "2023-03-05",
      "status": "Belum Kembali"
    }
  ];
  var table = `
    <table>
      <thead>
        <tr>
          <th>Nama Peminjam</th>
          <th>Jenis Mobil</th>
          <th>Lama Peminjaman</th>
          <th>Awal Peminjaman</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
  `;

  for (var i = 0; i < dataPeminjam.length; i++) {
    table += `
      <tr>
        <td>${dataPeminjam[i].nama}</td>
        <td>${dataPeminjam[i].mobil}</td>
        <td>${dataPeminjam[i].lamaSewa}</td>
        <td>${dataPeminjam[i].tanggalSewa}</td>
        <td>${dataPeminjam[i].status}</td>
        <td>
          <button class="edit-button">Edit</button>
          <button class="delete-button">Delete</button>
        </td>
      </tr>
    `;
  }

  table += `
      </tbody>
    </table>
  `;

  document.querySelector(".utama").innerHTML = table;
});

document.querySelector("#tambah-data").addEventListener("click", function() {
  // Logic for adding new data
});

document.querySelector("table").addEventListener("click", function(event) {
  if (event.target.tagName === "BUTTON" && event.target.classList.contains("edit-button")) {
    // Logic for editing data
  } else if (event.target.tagName === "BUTTON" && event.target.classList.contains("delete-button")) {
    // Logic for deleting data
  }
});
</script>
<script>
document.getElementById("form-peminjaman-button").addEventListener("click", function() {
  var form = `
    <form>
      <label for="nama">Nama:</label><br>
      <input type="text" id="nama" name="nama"><br>
      <label for="mobil">Jenis Mobil:</label><br>
      <select id="mobil" name="mobil">
        <option value="avanza">Avanza</option>
        <option value="ayla">Ayla</option>
        <option value="innova"></option>
        <option value="corolla">Corolla</option>
      </select><br>
      <label for="lama-sewa">Lama Penyewaan:</label><br>
      <input type="number" id="lama-sewa" name="lama-sewa" min="1"><br>
      <label for="tanggal-sewa">Awal Penyewaan:</label><br>
      <input type="date" id="tanggal-sewa" name="tanggal-sewa"><br>
      <input type="submit" value="Submit">
    </form>
  `;
    document.querySelector(".utama").innerHTML = form;
  });
</script>
</body>
</html>