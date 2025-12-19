<?php
header('Content-Type: application/json');
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $jenis = mysqli_real_escape_string($conn, $_POST['jenis']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $latitude = mysqli_real_escape_string($conn, $_POST['latitude']);
    $longitude = mysqli_real_escape_string($conn, $_POST['longitude']);

    $sql = "UPDATE tb_pariwisata SET 
            nama = '$nama',
            jenis = '$jenis',
            alamat = '$alamat',
            deskripsi = '$deskripsi',
            latitude = '$latitude',
            longitude = '$longitude'
            WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Data berhasil diupdate'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Gagal mengupdate data: ' . mysqli_error($conn)
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