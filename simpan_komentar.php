<?php
// Set header response sebagai JSON agar client dapat memproses response dengan benar
header('Content-Type: application/json');

// Include file koneksi database
include 'koneksi.php';

// Cek apakah request menggunakan method POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Ambil dan sanitasi data dari form untuk mencegah SQL injection
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $komentar = mysqli_real_escape_string($conn, $_POST['komentar']);
    
    // Ambil rating, jika tidak ada set default value 5
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : 5;
    
    // Validasi input: nama dan komentar wajib diisi
    if (empty($nama) || empty($empty($komentar)) {
        echo json_encode(['status' => 'error', 'message' => 'Nama dan komentar harus diisi']);
        exit; // Hentikan eksekusi script jika validasi gagal
    }
    
    // Query SQL untuk insert data komentar ke database
    $sql = "INSERT INTO tb_komentar (nama, email, komentar, rating) 
            VALUES ('$nama', '$email', '$komentar', '$rating')";
    
    // Eksekusi query dan cek hasilnya
    if (mysqli_query($conn, $sql)) {
        // Jika berhasil, kirim response success
        echo json_encode(['status' => 'success', 'message' => 'Komentar berhasil ditambahkan']);
    } else {
        // Jika gagal, kirim response error beserta pesan error dari database
        echo json_encode(['status' => 'error', 'message' => 'Gagal: ' . mysqli_error($conn)]);
    }
}

// Tutup koneksi database setelah selesai
mysqli_close($conn);
?>