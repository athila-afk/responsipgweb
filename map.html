<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Pariwisata Sumatera Barat</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #FF91C0 0%, #BED1E8 100%);
            margin: 0;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container-fluid {
            background: white;
            border-radius: 15px;
            padding: 0;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 1600px;
            margin: 0 auto;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #FFB7CF 0%, #CA9FB1 100%);
            padding: 20px 30px;
        }

        .navbar-title {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }

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

        .btn-back:hover {
            background: white;
            color: #C43670;
            transform: translateY(-2px);
        }

        .content-wrapper {
            display: flex;
            flex-direction: column;
        }

        #map {
            width: 100%;
            height: 600px;
        }

        .table-section {
            background: #f8f9fa;
            padding: 30px;
        }

        .table-section h4 {
            color: #C43670;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .table {
            font-size: 0.85rem;
        }

        .table thead {
            background: linear-gradient(135deg, #C43670 0%, #FBF4EB 100%);
            color: white;
        }

        .table tbody tr {
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .table tbody tr:hover {
            background: #e9ecef;
            transform: scale(1.02);
        }

        .leaflet-popup-content-wrapper {
            border-radius: 10px;
            padding: 0;
        }

        .popup-content {
            padding: 15px;
        }

        .popup-content h5 {
            color: #C43670;
            margin-bottom: 15px;
            font-weight: bold;
            border-bottom: 2px solid #C43670;
            padding-bottom: 10px;
        }

        .popup-content p {
            margin: 8px 0;
            font-size: 0.9rem;
        }

        .badge-jenis {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
        }

        .custom-marker {
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .table-description {
            max-width: 300px;
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
            padding: 20px;
            color: #C43670;
        }

        .leaflet-control-layers {
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            #map {
                height: 400px;
                margin-bottom: 20px;
            }

            .table-section {
                padding: 15px;
            }

            .table {
                font-size: 0.75rem;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <!-- Navbar -->
        <div class="navbar-custom d-flex justify-content-between align-items-center flex-wrap">
            <h1 class="navbar-title">
                <i class="fas fa-map-marked-alt"></i> Peta Pariwisata Sumatera Barat
            </h1>
            <div>
                <a href="data.php" class="btn-back">
                    <i class="fas fa-table"></i> Data
                </a>
                <a href="index.php" class="btn-back">
                    <i class="fas fa-home"></i> Beranda
                </a>
            </div>
        </div>

        <!-- Content -->
        <div class="content-wrapper">
            <!-- Map Full Width -->
            <div id="map"></div>

            <!-- Table Section Below Map -->
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

    <!-- Leaflet JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Inisialisasi Peta
        var map = L.map('map').setView([-0.5, 100.5], 8);

        // Base Layer 1: OpenStreetMap 
        var osmLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 18
        }).addTo(map);

        // Overlay Layer: Basemap GeoServer 
        var geoserverBasemap = L.tileLayer.wms('http://localhost:8080/geoserver/project/wms', {
            layers: 'project:Admin_sumbar',
            format: 'image/png',
            transparent: true,    
        });

        // Base Layer 2: Satellite
        var satelliteLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Esri',
            maxZoom: 18
        });

        // Layer Control
        var baseLayers = {
            "🗺️ OpenStreetMap": osmLayer,
            "🛰️ Satellite": satelliteLayer
        };

        var overlayLayers = {
            "🗺️ Basemap Sumatera Barat": geoserverBasemap
        };

        L.control.layers(baseLayers, overlayLayers, {
            position: 'topright',
            collapsed: false
        }).addTo(map);

        // Fungsi warna marker
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
            return colors[jenis] || '#C43670';
        }

        var allMarkers = [];

        // Load data pariwisata
        fetch('get_data.php')
            .then(response => response.json())
            .then(data => {
                let tbody = document.getElementById('data-body');
                tbody.innerHTML = '';
                let no = 1;

                if (data.length === 0) {
                    tbody.innerHTML = '<tr><td colspan="4" class="text-center">Tidak ada data</td></tr>';
                    return;
                }

                data.forEach(item => {
                    var color = getColorByJenis(item.jenis);
                    var customIcon = L.divIcon({
                        className: 'custom-div-icon',
                        html: `<div class="custom-marker" style="background-color: ${color}; width: 30px; height: 30px;">
                            <i class="fas fa-map-marker-alt" style="color: white; font-size: 16px;"></i>
                           </div>`,
                        iconSize: [30, 30],
                        iconAnchor: [15, 15],
                        popupAnchor: [0, -15]
                    });

                    var marker = L.marker([parseFloat(item.latitude), parseFloat(item.longitude)], {
                        icon: customIcon
                    }).addTo(map);

                    var popupContent = `
                    <div class="popup-content">
                        <h5><i class="fas fa-map-pin"></i> ${item.nama}</h5>
                        <p><strong><i class="fas fa-tag"></i> Jenis:</strong> <span class="badge" style="background-color: ${color}">${item.jenis}</span></p>
                        <p><strong><i class="fas fa-map-marker-alt"></i> Alamat:</strong><br>${item.alamat}</p>
                        <p><strong><i class="fas fa-globe"></i> Koordinat:</strong><br>Lat: ${item.latitude}<br>Lng: ${item.longitude}</p>
                    </div>
                `;

                    marker.bindPopup(popupContent, { maxWidth: 300 });

                    allMarkers.push({
                        marker: marker,
                        lat: parseFloat(item.latitude),
                        lng: parseFloat(item.longitude)
                    });

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

                if (data.length > 0) {
                    var group = new L.featureGroup(allMarkers.map(m => m.marker));
                    map.fitBounds(group.getBounds(), { padding: [50, 50] });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('data-body').innerHTML =
                    '<tr><td colspan="4" class="text-center text-danger">Gagal memuat data</td></tr>';
            });

        function focusMarker(lat, lng, index) {
            map.setView([lat, lng], 15);
            if (allMarkers[index]) {
                allMarkers[index].marker.openPopup();
            }
        }
    </script>
</body>

</html>