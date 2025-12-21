<?php
// Mengatur header response menjadi format JSON untuk API endpoint
header('Content-Type: application/json');

// Menghubungkan ke database menggunakan file koneksi eksternal
include '../koneksi.php';

// Memeriksa apakah request method adalah POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Mengambil dan membersihkan data dari POST untuk mencegah SQL Injection
    // Escape string untuk ID pariwisata
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // Escape string untuk nama pariwisata
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);

    // Escape string untuk jenis pariwisata (misal: pantai, gunung, museum, dll)
    $jenis = mysqli_real_escape_string($conn, $_POST['jenis']);

    // Escape string untuk alamat lokasi pariwisata
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);

    // Escape string untuk deskripsi detail pariwisata
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    // Escape string untuk koordinat latitude (garis lintang)
    $latitude = mysqli_real_escape_string($conn, $_POST['latitude']);

    // Escape string untuk koordinat longitude (garis bujur)
    $longitude = mysqli_real_escape_string($conn, $_POST['longitude']);

    // Query SQL untuk mengupdate data pariwisata berdasarkan ID
    $sql = "UPDATE tb_pariwisata SET 
            nama = '$nama',
            jenis = '$jenis',
            alamat = '$alamat',
            deskripsi = '$deskripsi',
            latitude = '$latitude',
            longitude = '$longitude'
            WHERE id = '$id'";

    // Mengeksekusi query update dan memeriksa hasilnya
    if (mysqli_query($conn, $sql)) {
        // Jika berhasil, kirim response JSON dengan status success
        echo json_encode([
            'status' => 'success',
            'message' => 'Data berhasil diupdate'
        ]);
    } else {
        // Jika gagal, kirim response JSON dengan status error dan pesan error dari database
        echo json_encode([
            'status' => 'error',
            'message' => 'Gagal mengupdate data: ' . mysqli_error($conn)
        ]);
    }
} else {
    // Jika request method bukan POST, kirim response error
    echo json_encode([
        'status' => 'error',
        'message' => 'Method tidak diizinkan'
    ]);
}

// Menutup koneksi database untuk membebaskan resource
mysqli_close($conn);
?>