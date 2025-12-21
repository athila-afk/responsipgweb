<?php
// ===== SET HEADER JSON =====
// Mengatur content type menjadi JSON agar response dapat di-parse oleh JavaScript
header('Content-Type: application/json');

// ===== INCLUDE KONEKSI DATABASE =====
// Memanggil file koneksi.php untuk mengakses variable $conn
include 'koneksi.php';

// ===== QUERY DATABASE =====
// Query untuk mengambil 10 komentar terbaru, diurutkan dari yang paling baru
$sql = "SELECT * FROM tb_komentar ORDER BY created_at DESC LIMIT 10";

// ===== EKSEKUSI QUERY =====
// Menjalankan query ke database menggunakan koneksi yang sudah dibuat
$result = mysqli_query($conn, $sql);

// ===== ARRAY UNTUK MENAMPUNG DATA =====
// Membuat array kosong untuk menyimpan hasil query
$data = array();

// ===== FETCH DATA =====
// Loop untuk mengambil setiap baris hasil query dan memasukkannya ke array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row; // Tambahkan setiap row ke array $data
}

// ===== OUTPUT JSON =====
// Mengubah array PHP menjadi format JSON dan mengirimkannya ke client
echo json_encode($data);

// ===== TUTUP KONEKSI =====
// Menutup koneksi database untuk menghemat resource server
mysqli_close($conn);
?>