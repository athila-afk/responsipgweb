<?php
include '../koneksi.php';

// Ambil ID dari URL
$id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : '';

if (empty($id)) {
    header('Location: ../data.php');
    exit;
}

// Ambil data berdasarkan ID
$sql = "SELECT * FROM tb_pariwisata WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    header('Location: ../data.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pariwisata</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css">

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
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            max-width: 900px;
        }
        
        .header {
            background: linear-gradient(135deg, #F297A0 0%, #F3EBD8 100%);
            color: #893941;
            padding: 30px;
            text-align: center;
        }
        
        .header h1 {
            margin: 0;
            font-weight: bold;
            font-size: 2rem;
        }
        
        .form-container {
            padding: 40px;
        }
        
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        
        .form-control, .form-select {
            border-radius: 10px;
            border: 2px solid #e0e0e0;
            padding: 12px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #BB8588;
            box-shadow: 0 0 10px rgba(216, 164, 143, 0.3);
        }
        
        .btn-submit {
            background: linear-gradient(135deg, #D56989 0%, #F3EEF1 100%);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }
        
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(213, 105, 137, 0.3);
        }
        
        .btn-back {
            background: #6c757d;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }
        
        .btn-back:hover {
            background: #5a6268;
            transform: translateY(-2px);
            color: white;
        }
        
        .btn-sync-map {
            background: #B83556;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        
        .btn-sync-map:hover {
            background: #DC97A5;
            transform: scale(1.05);
        }
        
        #map {
            height: 350px;
            border-radius: 10px;
            margin-top: 10px;
            border: 2px solid #e0e0e0;
        }
        
        .info-box {
            background: #fde_loping;
            border-left: 4px solid #D56989;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .info-box i {
            color: #D56989;
            margin-right: 10px;
        }
        
        .coordinate-help {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 12px;
            border-radius: 5px;
            margin-top: 10px;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1><i class="fas fa-edit"></i> Edit Data Pariwisata</h1>
        </div>

        <!-- Form -->
        <div class="form-container">
            <a href="../data.php" class="btn-back">
                <i class="fas fa-arrow-left"></i> Kembali ke Data
            </a>

            <div class="info-box">
                <i class="fas fa-info-circle"></i>
                <strong>Edit Data:</strong> <?php echo htmlspecialchars($data['nama']); ?>
            </div>

            <form id="formEdit" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                <div class="mb-3">
                    <label for="nama" class="form-label">
                        <i class="fas fa-map-marker-alt"></i> Nama Tempat Wisata
                    </label>
                    <input type="text" class="form-control" id="nama" name="nama" required
                        value="<?php echo htmlspecialchars($data['nama']); ?>">
                </div>

                <div class="mb-3">
                    <label for="jenis" class="form-label">
                        <i class="fas fa-tag"></i> Jenis Wisata
                    </label>
                    <select class="form-select" id="jenis" name="jenis" required>
                        <option value="">-- Pilih Jenis --</option>
                        <option value="Landmark" <?php echo ($data['jenis'] == 'Landmark') ? 'selected' : ''; ?>>Landmark
                        </option>
                        <option value="Alam" <?php echo ($data['jenis'] == 'Alam') ? 'selected' : ''; ?>>Alam</option>
                        <option value="Danau" <?php echo ($data['jenis'] == 'Danau') ? 'selected' : ''; ?>>Danau</option>
                        <option value="Pantai" <?php echo ($data['jenis'] == 'Pantai') ? 'selected' : ''; ?>>Pantai
                        </option>
                        <option value="Budaya" <?php echo ($data['jenis'] == 'Budaya') ? 'selected' : ''; ?>>Budaya
                        </option>
                        <option value="Sejarah" <?php echo ($data['jenis'] == 'Sejarah') ? 'selected' : ''; ?>>Sejarah
                        </option>
                        <option value="Pulau" <?php echo ($data['jenis'] == 'Pulau') ? 'selected' : ''; ?>>Pulau</option>
                        <option value="Religi" <?php echo ($data['jenis'] == 'Religi') ? 'selected' : ''; ?>>Religi
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">
                        <i class="fas fa-location-arrow"></i> Alamat
                    </label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="2"
                        required><?php echo htmlspecialchars($data['alamat']); ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">
                        <i class="fas fa-info-circle"></i> Deskripsi
                    </label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"
                        placeholder="Deskripsi singkat tentang tempat wisata ini..."><?php echo htmlspecialchars($data['deskripsi']); ?></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="latitude" class="form-label">
                            <i class="fas fa-globe"></i> Latitude
                        </label>
                        <input type="text" class="form-control" id="latitude" name="latitude" required
                            value="<?php echo $data['latitude']; ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="longitude" class="form-label">
                            <i class="fas fa-globe"></i> Longitude
                        </label>
                        <input type="text" class="form-control" id="longitude" name="longitude" required
                            value="<?php echo $data['longitude']; ?>">
                    </div>
                </div>

                <div class="coordinate-help">
                    <i class="fas fa-lightbulb"></i> <strong>Tips:</strong> Edit koordinat secara manual atau klik pada
                    peta untuk mengubah lokasi
                </div>

                <button type="button" class="btn btn-sync-map" onclick="showOnMap()">
                    <i class="fas fa-map-marked-alt"></i> Tampilkan di Peta
                </button>

                <div class="mb-3 mt-3">
                    <label class="form-label">
                        <i class="fas fa-map"></i> Peta Lokasi
                    </label>
                    <div id="map"></div>
                    <small class="text-muted">Klik pada peta untuk mengubah koordinat lokasi</small>
                </div>

                <button type="submit" class="btn btn-submit">
                    <i class="fas fa-save"></i> Update Data
                </button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Leaflet JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>

    <script>
        // Koordinat existing dari database
        var existingLat = <?php echo $data['latitude']; ?>;
        var existingLng = <?php echo $data['longitude']; ?>;

        // Inisialisasi peta dengan koordinat existing
        var map = L.map('map').setView([existingLat, existingLng], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 18
        }).addTo(map);

        // Tambahkan marker existing
        var marker = L.marker([existingLat, existingLng]).addTo(map);
        marker.bindPopup(`<b>Lokasi Saat Ini</b><br>Lat: ${existingLat}<br>Lng: ${existingLng}`).openPopup();

        // Event klik pada peta
        map.on('click', function (e) {
            var lat = e.latlng.lat.toFixed(8);
            var lng = e.latlng.lng.toFixed(8);

            // Set nilai ke input
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;

            // Update marker
            updateMarker(lat, lng);
        });

        // Fungsi update marker di peta
        function updateMarker(lat, lng) {
            // Hapus marker lama
            if (marker) {
                map.removeLayer(marker);
            }

            // Tambah marker baru
            marker = L.marker([lat, lng]).addTo(map);
            marker.bindPopup(`<b>Lokasi Baru</b><br>Lat: ${lat}<br>Lng: ${lng}`).openPopup();

            // Zoom ke lokasi
            map.setView([lat, lng], 15);
        }

        // Fungsi tampilkan koordinat di peta
        function showOnMap() {
            var lat = document.getElementById('latitude').value;
            var lng = document.getElementById('longitude').value;

            if (!lat || !lng) {
                alert('Koordinat Latitude dan Longitude tidak boleh kosong!');
                return;
            }

            // Validasi format koordinat
            lat = parseFloat(lat);
            lng = parseFloat(lng);

            if (isNaN(lat) || isNaN(lng)) {
                alert('Format koordinat tidak valid! Gunakan format angka desimal.');
                return;
            }

            // Update marker
            updateMarker(lat, lng);
        }

        // Auto-update peta saat user selesai mengetik koordinat
        document.getElementById('latitude').addEventListener('blur', function () {
            var lat = this.value;
            var lng = document.getElementById('longitude').value;

            if (lat && lng) {
                lat = parseFloat(lat);
                lng = parseFloat(lng);

                if (!isNaN(lat) && !isNaN(lng)) {
                    updateMarker(lat, lng);
                }
            }
        });

        document.getElementById('longitude').addEventListener('blur', function () {
            var lat = document.getElementById('latitude').value;
            var lng = this.value;

            if (lat && lng) {
                lat = parseFloat(lat);
                lng = parseFloat(lng);

                if (!isNaN(lat) && !isNaN(lng)) {
                    updateMarker(lat, lng);
                }
            }
        });

        // Handle form submit
        document.getElementById('formEdit').addEventListener('submit', function (e) {
            e.preventDefault();

            // Validasi koordinat
            var lat = parseFloat(document.getElementById('latitude').value);
            var lng = parseFloat(document.getElementById('longitude').value);

            if (isNaN(lat) || isNaN(lng)) {
                alert('Koordinat tidak valid! Pastikan Latitude dan Longitude dalam format angka desimal.');
                return;
            }

            const formData = new FormData(this);

            fetch('proses_edit.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(result => {
                    if (result.status === 'success') {
                        alert('Data berhasil diupdate!');
                        window.location.href = '../data.php';
                    } else {
                        alert('Gagal mengupdate data: ' + result.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengupdate data');
                });
        });
    </script>
</body>

</html>