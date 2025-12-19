<?php
header('Content-Type: application/json');
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $komentar = mysqli_real_escape_string($conn, $_POST['komentar']);
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : 5;
    
    if (empty($nama) || empty($komentar)) {
        echo json_encode(['status' => 'error', 'message' => 'Nama dan komentar harus diisi']);
        exit;
    }
    
    $sql = "INSERT INTO tb_komentar (nama, email, komentar, rating) 
            VALUES ('$nama', '$email', '$komentar', '$rating')";
    
    if (mysqli_query($conn, $sql)) {
        echo json_encode(['status' => 'success', 'message' => 'Komentar berhasil ditambahkan']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Gagal: ' . mysqli_error($conn)]);
    }
}

mysqli_close($conn);
?>