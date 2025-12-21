<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pariwisata Sumatera Barat</title>

    <!-- Bootstrap CSS - Framework untuk styling responsive -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome - Library untuk icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ===== STYLING BODY ===== */
        /* Background gradient untuk seluruh halaman */
        body {
            background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);
            min-height: 100vh;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* ===== CONTAINER UTAMA ===== */
        /* Container utama dengan background putih dan shadow */
        .container {
            background: white;
            border-radius: 15px;
            padding: 0;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 1600px;
        }

        /* ===== HEADER ===== */
        /* Header dengan gradient pink-cream */
        .header {
            background: linear-gradient(135deg, #F297A0 0%, #F3EBD8 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        /* Judul header */
        .header h1 {
            margin: 0;
            font-weight: bold;
            font-size: 2rem;
        }

        /* ===== BUTTON GROUP ===== */
        /* Group tombol navigasi dengan spacing */
        .btn-group-custom {
            margin: 30px 0;
            text-align: center;
        }

        /* Tombol custom dengan gradient */
        .btn-custom {
            background: linear-gradient(135deg, #D56989 0%, #F3EEF1 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            margin: 5px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        /* Efek hover tombol custom */
        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            color: white;
        }

        /* Icon dalam tombol dengan margin */
        .btn-custom i {
            margin-right: 5px;
        }

        /* ===== TABLE CONTAINER ===== */
        /* Container tabel dengan padding */
        .table-container {
            padding: 30px;
        }

        /* ===== TABEL ===== */
        /* Tabel dengan shadow dan border radius */
        .table {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        /* Header tabel dengan gradient */
        .table thead {
            background: linear-gradient(135deg, #F9CDD5 0%, #7A8450 100%);
            color: white;
        }

        /* Header kolom tabel */
        .table thead th {
            border: none;
            padding: 15px;
            font-weight: 600;
        }

        /* Baris tabel dengan efek transisi */
        .table tbody tr {
            transition: all 0.2s ease;
        }

        /* Efek hover baris tabel */
        .table tbody tr:hover {
            background: #f0f0f0;
            transform: scale(1.01);
        }

        /* Cell tabel dengan padding dan vertical align */
        .table tbody td {
            padding: 15px;
            vertical-align: middle;
        }

        /* ===== TOMBOL AKSI ===== */
        /* Base style untuk tombol aksi (edit & hapus) */
        .btn-action {
            padding: 6px 15px;
            border-radius: 20px;
            margin: 2px;
            font-size: 0.85rem;
            border: none;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-block;
        }

        /* Tombol edit dengan warna pink */
        .btn-edit {
            background: #B83556;
            color: white;
        }

        /* Efek hover tombol edit */
        .btn-edit:hover {
            background: #DC97A5;
            transform: scale(1.05);
            color: white;
        }

        /* Tombol hapus dengan warna biru-abu */
        .btn-delete {
            background: #55768C;
            color: white;
        }

        /* Efek hover tombol hapus */
        .btn-delete:hover {
            background: #FADED2;
            transform: scale(1.05);
        }

        /* ===== BADGE JENIS ===== */
        /* Badge untuk jenis wisata */
        .badge-jenis {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        /* ===== DESKRIPSI TABEL ===== */
        /* Deskripsi dengan ellipsis jika terlalu panjang */
        .table-description {
            max-width: 250px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: help;
        }

        /* Tampilkan full text saat hover */
        .table-description:hover {
            white-space: normal;
            overflow: visible;
        }

        /* ===== LOADING ===== */
        /* Styling untuk loading indicator */
        .loading {
            text-align: center;
            padding: 30px;
            color: #D8A48F;
        }

        /* ===== SEARCH BOX ===== */
        /* Container search box dengan margin */
        .search-box {
            margin: 20px 30px;
        }

        /* Input search dengan border radius dan border berwarna */
        .search-box input {
            border-radius: 25px;
            padding: 10px 20px;
            border: 2px solid #BB8588;
        }

        /* Efek focus pada search box */
        .search-box input:focus {
            box-shadow: 0 0 10px rgba(216, 164, 143, 0.3);
            border-color: #D8A48F;
        }

        /* ===== RESPONSIVE DESIGN ===== */
        /* Media query untuk layar mobile */
        @media (max-width: 768px) {

            /* Judul header lebih kecil di mobile */
            .header h1 {
                font-size: 1.5rem;
            }

            /* Font tabel lebih kecil di mobile */
            .table {
                font-size: 0.85rem;
            }

            /* Tombol lebih kecil di mobile */
            .btn-custom {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- ===== HEADER ===== -->
        <!-- Header dengan judul halaman -->
        <div class="header">
            <h1><i class="fas fa-table"></i> Data Pariwisata Sumatera Barat</h1>
        </div>

        <!-- ===== BUTTON GROUP ===== -->
        <!-- Tombol navigasi ke halaman lain -->
        <div class="btn-group-custom">
            <!-- Tombol ke halaman input data baru -->
            <a href="input.php" class="btn-custom">
                <i class="fas fa-plus"></i> Input Data Baru
            </a>
            <!-- Tombol ke halaman peta -->
            <a href="map.php" class="btn-custom">
                <i class="fas fa-map"></i> Lihat Peta
            </a>
            <!-- Tombol ke halaman beranda -->
            <a href="index.php" class="btn-custom">
                <i class="fas fa-home"></i> Beranda
            </a>
        </div>

        <!-- ===== SEARCH BOX ===== -->
        <!-- Input untuk mencari/filter data -->
        <div class="search-box">
            <input type="text" class="form-control" id="searchInput"
                placeholder="🔍 Cari nama wisata, alamat, atau deskripsi...">
        </div>

        <!-- ===== TABLE CONTAINER ===== -->
        <!-- Container untuk tabel data -->
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 4%">No</th>
                            <th style="width: 18%">Nama Wisata</th>
                            <th style="width: 10%">Jenis</th>
                            <th style="width: 20%">Alamat</th>
                            <th style="width: 28%">Deskripsi</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="data-table">
                        <!-- Loading indicator saat data belum dimuat -->
                        <tr>
                            <td colspan="6" class="loading">
                                <i class="fas fa-spinner fa-spin fa-2x"></i>
                                <p>Memuat data...</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ===== LIBRARY JAVASCRIPT ===== -->
    <!-- Bootstrap JS - Framework JavaScript untuk interaktivitas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // ===== VARIABLE GLOBAL =====
        // Variable untuk menyimpan semua data dari database
        let allData = [];

        // ===== FUNGSI GET COLOR BY JENIS =====
        // Fungsi untuk menentukan warna badge berdasarkan jenis wisata
        function getColorByJenis(jenis) {
            // Object dengan mapping jenis ke warna
            const colors = {
                'Landmark': '#E4568B',
                'Alam': '#F6C94D',
                'Danau': '#A7C7E4',
                'Pantai': '#5D7B3D',
                'Budaya': '#F29BB9',
                'Sejarah': '#66A5ED',
                'Pulau': '#7758A3',
                'Religi': '#3A345B'
            };
            // Return warna sesuai jenis, atau default jika tidak ada
            return colors[jenis] || '#BB8588';
        }

        // ===== FUNGSI LOAD DATA =====
        // Fungsi untuk mengambil data dari database via API
        function loadData() {
            fetch('get_data.php') // Fetch data dari get_data.php
                .then(response => response.json()) // Parse response menjadi JSON
                .then(data => {
                    // Simpan data ke variable global untuk keperluan search
                    allData = data;
                    // Tampilkan data ke tabel
                    displayData(data);
                })
                .catch(error => {
                    // ===== ERROR HANDLING =====
                    // Tampilkan pesan error jika fetch gagal
                    console.error('Error:', error);
                    document.getElementById('data-table').innerHTML =
                        '<tr><td colspan="6" class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i> Gagal memuat data</td></tr>';
                });
        }

        // ===== FUNGSI DISPLAY DATA =====
        // Fungsi untuk menampilkan data ke tabel
        function displayData(data) {
            let tbody = document.getElementById('data-table');
            tbody.innerHTML = ''; // Kosongkan tabel

            // ===== CEK JIKA DATA KOSONG =====
            if (data.length === 0) {
                tbody.innerHTML = '<tr><td colspan="6" class="text-center">Tidak ada data</td></tr>';
                return;
            }

            // ===== LOOP SETIAP DATA =====
            let no = 1; // Nomor urut
            data.forEach(item => {
                // Ambil warna badge berdasarkan jenis
                let color = getColorByJenis(item.jenis);

                // ===== BUAT BARIS TABEL =====
                tbody.innerHTML += `
                    <tr>
                        <td>${no++}</td>
                        <td><strong>${item.nama}</strong></td>
                        <td><span class="badge badge-jenis" style="background-color: ${color}">${item.jenis}</span></td>
                        <td>${item.alamat}</td>
                        <td class="table-description" title="${item.deskripsi || 'Tidak ada deskripsi'}">${item.deskripsi || '-'}</td>
                        <td>
                            <!-- Tombol Edit dengan link ke halaman edit -->
                            <a href="edit/edit.php?id=${item.id}" class="btn btn-action btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <!-- Tombol Hapus dengan onclick event -->
                            <button onclick="deleteData(${item.id}, '${item.nama}')" class="btn btn-action btn-delete">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </td>
                    </tr>
                `;
            });
        }

        // ===== FUNGSI DELETE DATA =====
        // Fungsi untuk menghapus data dengan konfirmasi
        function deleteData(id, nama) {
            // ===== KONFIRMASI PENGHAPUSAN =====
            // Tampilkan dialog konfirmasi sebelum hapus
            if (confirm(`Yakin ingin menghapus data "${nama}"?`)) {
                // Buat FormData dengan ID yang akan dihapus
                const formData = new FormData();
                formData.append('id', id);

                // ===== FETCH DELETE API =====
                // Kirim request DELETE ke delete.php
                fetch('delete.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json()) // Parse response menjadi JSON
                    .then(result => {
                        // ===== HANDLE RESPONSE =====
                        if (result.status === 'success') {
                            // Jika berhasil: tampilkan alert dan reload data
                            alert('Data berhasil dihapus!');
                            loadData(); // Reload tabel
                        } else {
                            // Jika gagal: tampilkan pesan error
                            alert('Gagal menghapus data: ' + result.message);
                        }
                    })
                    .catch(error => {
                        // ===== ERROR HANDLING =====
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat menghapus data');
                    });
            }
        }

        // ===== EVENT LISTENER SEARCH =====
        // Event listener untuk search box (filter data secara real-time)
        document.getElementById('searchInput').addEventListener('keyup', function () {
            // Ambil teks search dan convert ke lowercase
            const searchText = this.value.toLowerCase();

            // ===== FILTER DATA =====
            // Filter data berdasarkan nama, alamat, jenis, atau deskripsi
            const filteredData = allData.filter(item => {
                return item.nama.toLowerCase().includes(searchText) ||
                    item.alamat.toLowerCase().includes(searchText) ||
                    item.jenis.toLowerCase().includes(searchText) ||
                    (item.deskripsi && item.deskripsi.toLowerCase().includes(searchText));
            });

            // Tampilkan hasil filter ke tabel
            displayData(filteredData);
        });

        // ===== LOAD DATA SAAT HALAMAN DIMUAT =====
        // Panggil fungsi loadData() saat halaman pertama kali dibuka
        loadData();
    </script>
</body>

</html>