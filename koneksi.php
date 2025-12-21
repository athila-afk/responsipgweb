<?php
// ===== KONFIGURASI DATABASE =====
// Hostname server database (localhost untuk server lokal)
$host = "localhost";

// Username untuk login ke MySQL (default XAMPP: root)
$user = "root";

// Password untuk login ke MySQL (default XAMPP: kosong)
$pass = "";

// Nama database yang akan digunakan
$db = "db_pariwisata_sumbar";

// ===== MEMBUAT KONEKSI KE DATABASE =====
// Fungsi mysqli_connect untuk menghubungkan PHP dengan MySQL
$conn = mysqli_connect($host, $user, $pass, $db);

// ===== CEK KONEKSI =====
// Jika koneksi gagal, hentikan script dan tampilkan pesan error
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ===== SET CHARACTER SET =====
// Mengatur encoding UTF-8 agar support karakter Indonesia (seperti "ñ" di Minang)
mysqli_set_charset($conn, "utf8");
?>