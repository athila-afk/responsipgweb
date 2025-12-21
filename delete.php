<?php
// ===== SET HEADER JSON =====
// Mengatur content type menjadi JSON agar response dapat di-parse oleh JavaScript
header('Content-Type: application/json');

// ===== INCLUDE KONEKSI DATABASE =====
// Memanggil file koneksi.php untuk mengakses variable $conn
include 'koneksi.php';

// ===== CEK METHOD REQUEST =====
// Memastikan request menggunakan method POST (keamanan)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // ===== AMBIL DAN ESCAPE INPUT =====
    // Mengambil ID dari POST dan membersihkannya dari karakter berbahaya (SQL Injection prevention)
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // ===== QUERY DELETE =====
    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM tb_pariwisata WHERE id = '$id'";

    // ===== EKSEKUSI QUERY =====
    // Menjalankan query delete ke database
    if (mysqli_query($conn, $sql)) {
        // ===== JIKA BERHASIL =====
        // Return response sukses dalam format JSON
        echo json_encode([
            'status' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    } else {
        // ===== JIKA GAGAL =====
        // Return response error dengan pesan error dari MySQL
        echo json_encode([
            'status' => 'error',
            'message' => 'Gagal menghapus data: ' . mysqli_error($conn)
        ]);
    }

} else {
    // ===== JIKA BUKAN METHOD POST =====
    // Return error jika request menggunakan method selain POST (GET, PUT, DELETE, dll)
    echo json_encode([
        'status' => 'error',
        'message' => 'Method tidak diizinkan'
    ]);
}

// ===== TUTUP KONEKSI =====
// Menutup koneksi database untuk menghemat resource server
mysqli_close($conn);
?>