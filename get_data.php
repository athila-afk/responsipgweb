<?php
header('Content-Type: application/json');
require 'koneksi.php';

$query = "SELECT id, nama, jenis, alamat, deskripsi, latitude, longitude, foto FROM tb_pariwisata 
          ORDER BY id ASC";
$result = mysqli_query($conn, $query);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>