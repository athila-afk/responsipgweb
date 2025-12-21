<?php
// Menghubungkan ke database menggunakan file koneksi eksternal
include '../koneksi.php';

// Query SQL untuk mengambil semua data pariwisata yang diurutkan berdasarkan nama secara ascending
$sql = "SELECT * FROM tb_pariwisata ORDER BY nama ASC";

// Mengeksekusi query dan menyimpan hasilnya dalam variabel $result
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Data untuk Edit</title>

    <!-- Menghubungkan Bootstrap CSS dari CDN untuk styling framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Menghubungkan Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Styling untuk body dengan gradient background dan padding */
        body {
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
            min-height: 100vh;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Styling untuk container utama dengan background putih dan efek shadow */
        .container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 1200px;
        }

        /* Styling untuk bagian header halaman */
        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        /* Styling untuk judul dengan warna ungu */
        .header h1 {
            color: #667eea;
            font-weight: bold;
        }

        /* Styling untuk tombol kembali dengan efek hover */
        .btn-back {
            background: #6c757d;
            color: white;
            padding: 10px 25px;
            border-radius: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        /* Efek hover untuk tombol kembali */
        .btn-back:hover {
            background: #5a6268;
            color: white;
            transform: translateY(-2px);
        }

        /* Styling untuk header tabel dengan gradient ungu */
        .table thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        /* Styling untuk tombol edit dengan warna hijau */
        .btn-edit {
            background: #4CAF50;
            color: white;
            padding: 5px 15px;
            border-radius: 15px;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        /* Efek hover untuk tombol edit dengan transformasi scale */
        .btn-edit:hover {
            background: #45a049;
            color: white;
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Bagian header dengan judul dan tombol kembali -->
        <div class="header">
            <h1><i class="fas fa-edit"></i> Pilih Data untuk Diedit</h1>
            <!-- Tombol navigasi kembali ke halaman data.php -->
            <a href="../data.php" class="btn-back">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>

        <!-- Wrapper tabel yang responsive untuk berbagai ukuran layar -->
        <div class="table-responsive">
            <table class="table table-hover">
                <!-- Header tabel dengan kolom: No, Nama, Jenis, Alamat, Aksi -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Inisialisasi nomor urut untuk penomoran data
                    $no = 1;

                    // Looping untuk menampilkan setiap baris data dari hasil query
                    while ($row = mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <!-- Menampilkan nomor urut dan increment -->
                            <td><?php echo $no++; ?></td>

                            <!-- Menampilkan nama pariwisata dengan htmlspecialchars untuk mencegah XSS -->
                            <td><?php echo htmlspecialchars($row['nama']); ?></td>

                            <!-- Menampilkan jenis pariwisata dengan htmlspecialchars untuk keamanan -->
                            <td><?php echo htmlspecialchars($row['jenis']); ?></td>

                            <!-- Menampilkan alamat pariwisata dengan htmlspecialchars untuk keamanan -->
                            <td><?php echo htmlspecialchars($row['alamat']); ?></td>

                            <!-- Kolom aksi dengan link ke halaman edit beserta parameter id -->
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn-edit">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Menghubungkan Bootstrap JavaScript untuk fungsi interaktif -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>