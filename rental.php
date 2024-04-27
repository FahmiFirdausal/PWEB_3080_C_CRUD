<?php
require_once 'koneksi.php';

class Rental
{
    static function select()
    {
        global $conn;
        $sql = "SELECT * FROM daftar_peminjam";
        $result = mysqli_query($conn, $sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($a = $result->fetch_array()) {
                $data[] = $a;
            }
        }
        return $data;
    }

    static function create($nama_peminjam, $jenis_mobil, $lama_peminjaman, $awal_peminjaman, $status)
    {
        global $conn;
        $sql = "INSERT INTO daftar_peminjam(nama_peminjam, jenis_mobil, lama_peminjaman, awal_peminjaman, status) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssiss', $nama_peminjam, $jenis_mobil, $lama_peminjaman, $awal_peminjaman, $status);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }
}



?>