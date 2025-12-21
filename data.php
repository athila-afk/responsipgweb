<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pariwisata Sumatera Barat</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);
            min-height: 100vh;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            background: white;
            border-radius: 15px;
            padding: 0;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 1600px;
        }

        .header {
            background: linear-gradient(135deg, #F297A0 0%, #F3EBD8 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-weight: bold;
            font-size: 2rem;
        }

        .btn-group-custom {
            margin: 30px 0;
            text-align: center;
        }

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

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            color: white;
        }

        .btn-custom i {
            margin-right: 5px;
        }

        .table-container {
            padding: 30px;
        }

        .table {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead {
            background: linear-gradient(135deg, #F9CDD5 0%, #7A8450 100%);
            color: white;
        }

        .table thead th {
            border: none;
            padding: 15px;
            font-weight: 600;
        }

        .table tbody tr {
            transition: all 0.2s ease;
        }

        .table tbody tr:hover {
            background: #f0f0f0;
            transform: scale(1.01);
        }

        .table tbody td {
            padding: 15px;
            vertical-align: middle;
        }

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

        .btn-edit {
            background: #B83556;
            color: white;
        }

        .btn-edit:hover {
            background: #DC97A5;
            transform: scale(1.05);
            color: white;
        }

        .btn-delete {
            background: #55768C;
            color: white;
        }

        .btn-delete:hover {
            background: #FADED2;
            transform: scale(1.05);
        }

        .badge-jenis {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .table-description {
            max-width: 250px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: help;
        }

        .table-description:hover {
            white-space: normal;
            overflow: visible;
        }

        .loading {
            text-align: center;
            padding: 30px;
            color: #D8A48F;
        }

        .search-box {
            margin: 20px 30px;
        }

        .search-box input {
            border-radius: 25px;
            padding: 10px 20px;
            border: 2px solid #BB8588;
        }

        .search-box input:focus {
            box-shadow: 0 0 10px rgba(216, 164, 143, 0.3);
            border-color: #D8A48F;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.5rem;
            }

            .table {
                font-size: 0.85rem;
            }

            .btn-custom {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1><i class="fas fa-table"></i> Data Pariwisata Sumatera Barat</h1>
        </div>

        <!-- Button Group -->
        <div class="btn-group-custom">
            <a href="input.php" class="btn-custom">
                <i class="fas fa-plus"></i> Input Data Baru
            </a>
            <a href="map.php" class="btn-custom">
                <i class="fas fa-map"></i> Lihat Peta
            </a>
            <a href="index.php" class="btn-custom">
                <i class="fas fa-home"></i> Beranda
            </a>
        </div>

        <!-- Search Box -->
        <div class="search-box">
            <input type="text" class="form-control" id="searchInput"
                placeholder="🔍 Cari nama wisata, alamat, atau deskripsi...">
        </div>

        <!-- Table -->
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let allData = [];

        // Fungsi untuk mendapatkan warna badge berdasarkan jenis
        function getColorByJenis(jenis) {
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
            return colors[jenis] || '#BB8588';
        }

        // Fungsi load data
        function loadData() {
            fetch('get_data.php')
                .then(response => response.json())
                .then(data => {
                    allData = data;
                    displayData(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('data-table').innerHTML =
                        '<tr><td colspan="6" class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i> Gagal memuat data</td></tr>';
                });
        }

        // Fungsi display data ke tabel
        function displayData(data) {
            let tbody = document.getElementById('data-table');
            tbody.innerHTML = '';

            if (data.length === 0) {
                tbody.innerHTML = '<tr><td colspan="6" class="text-center">Tidak ada data</td></tr>';
                return;
            }

            let no = 1;
            data.forEach(item => {
                let color = getColorByJenis(item.jenis);
                tbody.innerHTML += `
                    <tr>
                        <td>${no++}</td>
                        <td><strong>${item.nama}</strong></td>
                        <td><span class="badge badge-jenis" style="background-color: ${color}">${item.jenis}</span></td>
                        <td>${item.alamat}</td>
                        <td class="table-description" title="${item.deskripsi || 'Tidak ada deskripsi'}">${item.deskripsi || '-'}</td>
                        <td>
                            <a href="edit/edit.php?id=${item.id}" class="btn btn-action btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <button onclick="deleteData(${item.id}, '${item.nama}')" class="btn btn-action btn-delete">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </td>
                    </tr>
                `;
            });
        }

        // Fungsi hapus data
        function deleteData(id, nama) {
            if (confirm(`Yakin ingin menghapus data "${nama}"?`)) {
                const formData = new FormData();
                formData.append('id', id);

                fetch('delete.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(result => {
                        if (result.status === 'success') {
                            alert('Data berhasil dihapus!');
                            loadData();
                        } else {
                            alert('Gagal menghapus data: ' + result.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat menghapus data');
                    });
            }
        }

        // Fungsi search/filter data
        document.getElementById('searchInput').addEventListener('keyup', function () {
            const searchText = this.value.toLowerCase();

            const filteredData = allData.filter(item => {
                return item.nama.toLowerCase().includes(searchText) ||
                    item.alamat.toLowerCase().includes(searchText) ||
                    item.jenis.toLowerCase().includes(searchText) ||
                    (item.deskripsi && item.deskripsi.toLowerCase().includes(searchText));
            });

            displayData(filteredData);
        });

        // Load data saat halaman dimuat
        loadData();
    </script>
</body>

</html>