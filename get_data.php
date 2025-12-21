<?php
// ===== SET HEADER JSON =====
// Mengatur content type menjadi JSON agar response dapat di-parse oleh JavaScript
header('Content-Type: application/json');

// ===== INCLUDE KONEKSI DATABASE =====
// Memanggil file koneksi.php untuk mengakses variable $conn
require 'koneksi.php';

// ===== QUERY DATABASE =====
// Query untuk mengambil semua data pariwisata dengan kolom yang dibutuhkan
// Diurutkan berdasarkan ID dari yang terkecil (ASC = Ascending)
$query = "SELECT id, nama, jenis, alamat, deskripsi, latitude, longitude, foto FROM tb_pariwisata 
          ORDER BY id ASC";

// ===== EKSEKUSI QUERY =====
// Menjalankan query ke database menggunakan koneksi yang sudah dibuat
$result = mysqli_query($conn, $query);

// ===== ARRAY UNTUK MENAMPUNG DATA =====
// Membuat array kosong untuk menyimpan hasil query (syntax modern PHP)
$data = [];

// ===== FETCH DATA =====
// Loop untuk mengambil setiap baris hasil query dan memasukkannya ke array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row; // Tambahkan setiap row ke array $data
}

// ===== OUTPUT JSON =====
// Mengubah array PHP menjadi format JSON dan mengirimkannya ke client
// Data akan dikirim dalam format array of objects
echo json_encode($data);

// ===== CATATAN =====
// Koneksi tidak ditutup dengan mysqli_close() karena script akan otomatis
// menutup koneksi saat eksekusi selesai. Namun bisa ditambahkan jika diinginkan.
?>