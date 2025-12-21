<?php
// Set header response sebagai JSON untuk memastikan client dapat parsing data dengan benar
header('Content-Type: application/json');

// Include file koneksi database
include 'koneksi.php';

// Cek apakah request menggunakan method POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Ambil dan sanitasi data dari form untuk mencegah SQL injection
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $jenis = mysqli_real_escape_string($conn, $_POST['jenis']); // Jenis wisata (misal: pantai, gunung, museum)
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    
    // Ambil koordinat geografis untuk mapping/peta
    $latitude = mysqli_real_escape_string($conn, $_POST['latitude']);
    $longitude = mysqli_real_escape_string($conn, $_POST['longitude']);
    
    // Set foto default karena belum ada upload foto di script ini
    $foto = 'default.jpg'; 

    // Query SQL untuk insert data tempat wisata ke database
    $sql = "INSERT INTO tb_pariwisata (nama, jenis, alamat, deskripsi, latitude, longitude, foto) 
            VALUES ('$nama', '$jenis', '$alamat', '$deskripsi', '$latitude', '$longitude', '$foto')";

    // Eksekusi query dan cek hasilnya
    if (mysqli_query($conn, $sql)) {
        // Jika berhasil, kirim response success beserta ID data yang baru ditambahkan
        echo json_encode([
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan',
            'id' => mysqli_insert_id($conn) // ID auto increment dari data yang baru diinsert
        ]);
    } else {
        // Jika gagal, kirim response error beserta pesan error dari database
        echo json_encode([
            'status' => 'error',
            'message' => 'Gagal menambahkan data: ' . mysqli_error($conn)
        ]);
    }
} else {
    // Jika bukan method POST, tolak request dan kirim pesan error
    echo json_encode([
        'status' => 'error',
        'message' => 'Method tidak diizinkan'
    ]);
}

// Tutup koneksi database setelah selesai
mysqli_close($conn);
?>