<?php
header('Content-Type: application/json');
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $jenis = mysqli_real_escape_string($conn, $_POST['jenis']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $latitude = mysqli_real_escape_string($conn, $_POST['latitude']);
    $longitude = mysqli_real_escape_string($conn, $_POST['longitude']);
    $foto = 'default.jpg'; // Default foto

    $sql = "INSERT INTO tb_pariwisata (nama, jenis, alamat, deskripsi, latitude, longitude, foto) 
            VALUES ('$nama', '$jenis', '$alamat', '$deskripsi', '$latitude', '$longitude', '$foto')";

    if (mysqli_query($conn, $sql)) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan',
            'id' => mysqli_insert_id($conn)
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Gagal menambahkan data: ' . mysqli_error($conn)
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Method tidak diizinkan'
    ]);
}

mysqli_close($conn);
?>