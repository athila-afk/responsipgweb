<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Pariwisata Sumatera Barat</title>

    <!-- Bootstrap CSS - Framework untuk styling responsive -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Leaflet CSS - Library untuk peta interaktif -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css">

    <!-- Font Awesome - Library untuk icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ===== STYLING BODY ===== */
        /* Background gradient untuk seluruh halaman */
        body {
            background: linear-gradient(135deg, #FF91C0 0%, #BED1E8 100%);
            margin: 0;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* ===== CONTAINER UTAMA ===== */
        /* Container utama dengan background putih dan shadow */
        .container-fluid {
            background: white;
            border-radius: 15px;
            padding: 0;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 1600px;
            margin: 0 auto;
        }

        /* ===== NAVBAR ===== */
        /* Navbar dengan gradient pink-purple */
        .navbar-custom {
            background: linear-gradient(135deg, #FFB7CF 0%, #CA9FB1 100%);
            padding: 20px 30px;
        }

        /* Judul navbar dengan icon peta */
        .navbar-title {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }

        /* Tombol navigasi ke halaman lain */
        .btn-back {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid white;
            padding: 8px 20px;
            border-radius: 25px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            margin-left: 10px;
        }

        /* Efek hover untuk tombol navigasi */
        .btn-back:hover {
            background: white;
            color: #C43670;
            transform: translateY(-2px);
        }

        /* ===== LAYOUT CONTENT ===== */
        /* Wrapper untuk peta dan tabel (layout vertikal) */
        .content-wrapper {
            display: flex;
            flex-direction: column;
        }

        /* ===== PETA ===== */
        /* Container peta dengan tinggi 600px */
        #map {
            width: 100%;
            height: 600px;
        }

        /* ===== SECTION TABEL ===== */
        /* Background abu-abu untuk section tabel */
        .table-section {
            background: #f8f9fa;
            padding: 30px;
        }

        /* Judul section tabel dengan warna pink */
        .table-section h4 {
            color: #C43670;
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* ===== STYLING TABEL ===== */
        /* Ukuran font tabel lebih kecil */
        .table {
            font-size: 0.85rem;
        }

        /* Header tabel dengan gradient */
        .table thead {
            background: linear-gradient(135deg, #C43670 0%, #FBF4EB 100%);
            color: white;
        }

        /* Baris tabel dapat diklik dengan efek hover */
        .table tbody tr {
            cursor: pointer;
            transition: all 0.2s ease;
        }

        /* Efek hover pada baris tabel */
        .table tbody tr:hover {
            background: #e9ecef;
            transform: scale(1.02);
        }

        /* ===== POPUP LEAFLET ===== */
        /* Wrapper popup dengan border radius */
        .leaflet-popup-content-wrapper {
            border-radius: 10px;
            padding: 0;
        }

        /* Konten popup dengan padding */
        .popup-content {
            padding: 15px;
        }

        /* Judul popup dengan border bawah */
        .popup-content h5 {
            color: #C43670;
            margin-bottom: 15px;
            font-weight: bold;
            border-bottom: 2px solid #C43670;
            padding-bottom: 10px;
        }

        /* Paragraf dalam popup */
        .popup-content p {
            margin: 8px 0;
            font-size: 0.9rem;
        }

        /* ===== BADGE & MARKER ===== */
        /* Badge untuk jenis wisata */
        .badge-jenis {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
        }

        /* Custom marker bulat dengan border putih */
        .custom-marker {
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* ===== DESKRIPSI TABEL ===== */
        /* Deskripsi tabel dengan ellipsis jika terlalu panjang */
        .table-description {
            max-width: 300px;
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
            padding: 20px;
            color: #C43670;
        }

        /* ===== LEAFLET CONTROL ===== */
        /* Layer control dengan shadow */
        .leaflet-control-layers {
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        /* ===== RESPONSIVE DESIGN ===== */
        /* Media query untuk layar mobile */
        @media (max-width: 768px) {
            /* Peta lebih pendek di mobile */
            #map {
                height: 400px;
                margin-bottom: 20px;
            }

            /* Padding lebih kecil untuk tabel di mobile */
            .table-section {
                padding: 15px;
            }

            /* Font tabel lebih kecil di mobile */
            .table {
                font-size: 0.75rem;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <!-- ===== NAVBAR ===== -->
        <!-- Navigation bar dengan judul dan tombol navigasi -->
        <div class="navbar-custom d-flex justify-content-between align-items-center flex-wrap">
            <h1 class="navbar-title">
                <i class="fas fa-map-marked-alt"></i> Peta Pariwisata Sumatera Barat
            </h1>
            <div>
                <!-- Tombol navigasi ke halaman data -->
                <a href="data.php" class="btn-back">
                    <i class="fas fa-table"></i> Data
                </a>
                <!-- Tombol navigasi ke halaman beranda -->
                <a href="index.php" class="btn-back">
                    <i class="fas fa-home"></i> Beranda
                </a>
            </div>
        </div>

        <!-- ===== CONTENT WRAPPER ===== -->
        <div class="content-wrapper">
            <!-- ===== PETA INTERAKTIF ===== -->
            <!-- Container untuk peta Leaflet -->
            <div id="map"></div>

            <!-- ===== SECTION TABEL ===== -->
            <!-- Tabel data lokasi wisata di bawah peta -->
            <div class="table-section">
                <h4><i class="fas fa-list"></i> Data Lokasi Wisata</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 5%;">No</th>
                                <th style="width: 25%;">Nama</th>
                                <th style="width: 12%;">Jenis</th>
                                <th style="width: 58%;">Alamat</th>
                                <th style="width: 33%;">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody id="data-body">
                            <!-- Loading indicator saat data belum dimuat -->
                            <tr>
                                <td colspan="4" class="loading">
                                    <i class="fas fa-spinner fa-spin fa-2x"></i>
                                    <p>Memuat data...</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== LIBRARY JAVASCRIPT ===== -->
    <!-- Leaflet JS - Library untuk peta interaktif -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>

    <!-- Bootstrap JS - Framework JavaScript untuk interaktivitas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // ===== INISIALISASI PETA =====
        // Membuat peta dengan center di Sumatera Barat (lat: -0.5, lng: 100.5) dengan zoom level 8
        var map = L.map('map').setView([-0.5, 100.5], 8);

        // ===== BASE LAYER 1: OPENSTREETMAP =====
        // Layer peta OpenStreetMap sebagai default
        var osmLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 18
        }).addTo(map);

        // ===== OVERLAY LAYER: GEOSERVER BASEMAP =====
        // Layer tambahan dari GeoServer (peta admin Sumatera Barat)
        var geoserverBasemap = L.tileLayer.wms('http://localhost:8080/geoserver/project/wms', {
            layers: 'project:Admin_sumbar',
            format: 'image/png',
            transparent: true,
        });

        // ===== BASE LAYER 2: SATELLITE =====
        // Layer peta satelit dari Esri
        var satelliteLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Esri',
            maxZoom: 18
        });

        // ===== LAYER CONTROL =====
        // Definisi base layers yang bisa dipilih user
        var baseLayers = {
            "🗺️ OpenStreetMap": osmLayer,
            "🛰️ Satellite": satelliteLayer
        };

        // Definisi overlay layers yang bisa ditambahkan di atas base layer
        var overlayLayers = {
            "🗺️ Basemap Sumatera Barat": geoserverBasemap
        };

        // Menambahkan control untuk switch antara layers
        L.control.layers(baseLayers, overlayLayers, {
            position: 'topright',
            collapsed: false
        }).addTo(map);

        // ===== FUNGSI WARNA MARKER =====
        // Fungsi untuk menentukan warna marker berdasarkan jenis wisata
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
            // Return warna sesuai jenis, atau default pink jika tidak ada
            return colors[jenis] || '#C43670';
        }

        // ===== ARRAY UNTUK MENYIMPAN SEMUA MARKER =====
        var allMarkers = [];

        // ===== FETCH DATA DARI API =====
        // Mengambil data pariwisata dari get_data.php
        fetch('get_data.php')
            .then(response => response.json()) // Parse response menjadi JSON
            .then(data => {
                // Ambil elemen tbody untuk menampilkan data
                let tbody = document.getElementById('data-body');
                tbody.innerHTML = ''; // Kosongkan loading indicator
                let no = 1; // Nomor urut

                // Cek jika data kosong
                if (data.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="4" class="text-center">Tidak ada data</td></tr>';
                    return;
                }

                // ===== LOOP SETIAP DATA WISATA =====
                data.forEach(item => {
                    // Ambil warna marker berdasarkan jenis wisata
                    var color = getColorByJenis(item.jenis);

                    // ===== BUAT CUSTOM ICON MARKER =====
                    // Membuat div icon dengan warna sesuai jenis wisata
                    var customIcon = L.divIcon({
                        className: 'custom-div-icon',
                        html: `<div class="custom-marker" style="background-color: ${color}; width: 30px; height: 30px;">
                            <i class="fas fa-map-marker-alt" style="color: white; font-size: 16px;"></i>
                           </div>`,
                        iconSize: [30, 30],
                        iconAnchor: [15, 15], // Anchor di tengah marker
                        popupAnchor: [0, -15] // Popup muncul di atas marker
                    });

                    // ===== TAMBAHKAN MARKER KE PETA =====
                    // Membuat marker dengan koordinat dari database
                    var marker = L.marker([parseFloat(item.latitude), parseFloat(item.longitude)], {
                        icon: customIcon
                    }).addTo(map);

                    // ===== BUAT KONTEN POPUP =====
                    // HTML untuk popup yang muncul saat marker diklik
                    var popupContent = `
                    <div class="popup-content">
                        <h5><i class="fas fa-map-pin"></i> ${item.nama}</h5>
                        <p><strong><i class="fas fa-tag"></i> Jenis:</strong> <span class="badge" style="background-color: ${color}">${item.jenis}</span></p>
                        <p><strong><i class="fas fa-map-marker-alt"></i> Alamat:</strong><br>${item.alamat}</p>
                        <p><strong><i class="fas fa-globe"></i> Koordinat:</strong><br>Lat: ${item.latitude}<br>Lng: ${item.longitude}</p>
                    </div>
                `;

                    // Bind popup ke marker
                    marker.bindPopup(popupContent, { maxWidth: 300 });

                    // ===== SIMPAN MARKER KE ARRAY =====
                    // Untuk digunakan fungsi focusMarker nanti
                    allMarkers.push({
                        marker: marker,
                        lat: parseFloat(item.latitude),
                        lng: parseFloat(item.longitude)
                    });

                    // ===== TAMBAHKAN BARIS KE TABEL =====
                    // Baris tabel yang bisa diklik untuk focus ke marker
                    tbody.innerHTML += `
                    <tr onclick="focusMarker(${item.latitude}, ${item.longitude}, ${no - 1})">
                        <td>${no++}</td>
                        <td><strong>${item.nama}</strong></td>
                        <td><span class="badge badge-jenis" style="background-color: ${color}">${item.jenis}</span></td>
                        <td style="font-size: 0.85rem;">${item.alamat}</td>
                        <td class="table-description" title="${item.deskripsi || 'Tidak ada deskripsi'}">${item.deskripsi || '-'}</td>
                    </tr>
                `;
                });

                // ===== AUTO FIT BOUNDS PETA =====
                // Zoom otomatis agar semua marker terlihat di peta
                if (data.length > 0) {
                    var group = new L.featureGroup(allMarkers.map(m => m.marker));
                    map.fitBounds(group.getBounds(), { padding: [50, 50] });
                }
            })
            .catch(error => {
                // ===== ERROR HANDLING =====
                // Tampilkan pesan error jika fetch gagal
                console.error('Error:', error);
                document.getElementById('data-body').innerHTML =
                    '<tr><td colspan="4" class="text-center text-danger">Gagal memuat data</td></tr>';
            });

        // ===== FUNGSI FOCUS MARKER =====
        // Fungsi untuk zoom ke marker saat baris tabel diklik
        function focusMarker(lat, lng, index) {
            map.setView([lat, lng], 15); // Zoom level 15
            // Buka popup marker yang dipilih
            if (allMarkers[index]) {
                allMarkers[index].marker.openPopup();
            }
        }
    </script>
</body>

</html>