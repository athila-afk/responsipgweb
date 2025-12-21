<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Pariwisata</title>
    
    <!-- Bootstrap CSS - Framework untuk styling responsive -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome - Library untuk icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Leaflet CSS - Library untuk peta interaktif -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css">
    
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
        /* Container form dengan background putih dan shadow */
        .container {
            background: white;
            border-radius: 15px;
            padding: 0;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            max-width: 900px;
        }
        
        /* ===== HEADER ===== */
        /* Header dengan gradient pink-cream */
        .header {
            background: linear-gradient(135deg, #F297A0 0%, #F3EBD8 100%);
            color: #893941;
            padding: 30px;
            text-align: center;
        }
        
        /* Judul header */
        .header h1 {
            margin: 0;
            font-weight: bold;
            font-size: 2rem;
        }
        
        /* ===== FORM CONTAINER ===== */
        /* Container untuk form dengan padding */
        .form-container {
            padding: 40px;
        }
        
        /* ===== FORM ELEMENTS ===== */
        /* Label form dengan font tebal */
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        
        /* Styling untuk input dan select */
        .form-control, .form-select {
            border-radius: 10px;
            border: 2px solid #e0e0e0;
            padding: 12px;
            transition: all 0.3s ease;
        }
        
        /* Efek focus untuk input dan select */
        .form-control:focus, .form-select:focus {
            border-color: #BB8588;
            box-shadow: 0 0 10px rgba(216, 164, 143, 0.3);
        }
        
        /* ===== TOMBOL ===== */
        /* Tombol submit dengan gradient pink */
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
        
        /* Efek hover untuk tombol submit */
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(213, 105, 137, 0.3);
        }
        
        /* Tombol kembali dengan warna abu-abu */
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
        
        /* Efek hover untuk tombol kembali */
        .btn-back:hover {
            background: #5a6268;
            transform: translateY(-2px);
            color: white;
        }
        
        /* Tombol sync/tampilkan di peta */
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
        
        /* Efek hover untuk tombol sync peta */
        .btn-sync-map:hover {
            background: #DC97A5;
            transform: scale(1.05);
        }
        
        /* ===== PETA ===== */
        /* Container peta dengan tinggi 350px */
        #map {
            height: 350px;
            border-radius: 10px;
            margin-top: 10px;
            border: 2px solid #e0e0e0;
        }
        
        /* ===== INFO BOX ===== */
        /* Box informasi dengan border kiri pink */
        .info-box {
            background: #fde8ed;
            border-left: 4px solid #D56989;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        /* Icon dalam info box */
        .info-box i {
            color: #D56989;
            margin-right: 10px;
        }
        
        /* ===== COORDINATE HELP ===== */
        /* Box bantuan koordinat dengan background kuning */
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
        <!-- ===== HEADER ===== -->
        <!-- Header dengan judul halaman -->
        <div class="header">
            <h1><i class="fas fa-plus-circle"></i> Input Data Pariwisata Baru</h1>
        </div>
        
        <!-- ===== FORM CONTAINER ===== -->
        <div class="form-container">
            <!-- Tombol kembali ke halaman data -->
            <a href="data.php" class="btn-back">
                <i class="fas fa-arrow-left"></i> Kembali ke Data
            </a>
            
            <!-- ===== INFO BOX ===== -->
            <!-- Petunjuk penggunaan form -->
            <div class="info-box">
                <i class="fas fa-info-circle"></i>
                <strong>Petunjuk:</strong> Masukkan koordinat latitude dan longitude secara manual, atau klik pada peta di bawah untuk menentukan lokasi.
            </div>
            
            <!-- ===== FORM INPUT ===== -->
            <!-- Form untuk input data wisata baru -->
            <form id="formInput" method="POST">
                <!-- Input Nama Tempat Wisata -->
                <div class="mb-3">
                    <label for="nama" class="form-label">
                        <i class="fas fa-map-marker-alt"></i> Nama Tempat Wisata
                    </label>
                    <input type="text" class="form-control" id="nama" name="nama" required placeholder="Contoh: Jam Gadang">
                </div>
                
                <!-- Select Jenis Wisata -->
                <div class="mb-3">
                    <label for="jenis" class="form-label">
                        <i class="fas fa-tag"></i> Jenis Wisata
                    </label>
                    <select class="form-select" id="jenis" name="jenis" required>
                        <option value="">-- Pilih Jenis --</option>
                        <option value="Landmark">Landmark</option>
                        <option value="Alam">Alam</option>
                        <option value="Danau">Danau</option>
                        <option value="Pantai">Pantai</option>
                        <option value="Budaya">Budaya</option>
                        <option value="Sejarah">Sejarah</option>
                        <option value="Pulau">Pulau</option>
                        <option value="Religi">Religi</option>
                    </select>
                </div>
                
                <!-- Textarea Alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">
                        <i class="fas fa-location-arrow"></i> Alamat
                    </label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="2" required placeholder="Contoh: Jl. Jam Gadang, Bukittinggi, Sumatera Barat"></textarea>
                </div>
                
                <!-- Textarea Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">
                        <i class="fas fa-info-circle"></i> Deskripsi
                    </label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Deskripsi singkat tentang tempat wisata ini..."></textarea>
                </div>
                
                <!-- ===== INPUT KOORDINAT ===== -->
                <!-- Input Latitude dan Longitude dalam satu row -->
                <div class="row">
                    <!-- Input Latitude -->
                    <div class="col-md-6 mb-3">
                        <label for="latitude" class="form-label">
                            <i class="fas fa-globe"></i> Latitude
                        </label>
                        <input type="text" class="form-control" id="latitude" name="latitude" required placeholder="Contoh: -0.305291">
                    </div>
                    
                    <!-- Input Longitude -->
                    <div class="col-md-6 mb-3">
                        <label for="longitude" class="form-label">
                            <i class="fas fa-globe"></i> Longitude
                        </label>
                        <input type="text" class="form-control" id="longitude" name="longitude" required placeholder="Contoh: 100.369530">
                    </div>
                </div>
                
                <!-- ===== BANTUAN KOORDINAT ===== -->
                <!-- Tips untuk input koordinat -->
                <div class="coordinate-help">
                    <i class="fas fa-lightbulb"></i> <strong>Tips:</strong> 
                    <ul style="margin: 5px 0 0 0; padding-left: 20px;">
                        <li>Masukkan koordinat secara manual</li>
                        <li>Atau klik tombol di bawah untuk melihat lokasi di peta</li>
                        <li>Klik pada peta untuk mendapatkan koordinat lokasi</li>
                    </ul>
                </div>
                
                <!-- Tombol untuk menampilkan lokasi di peta -->
                <button type="button" class="btn btn-sync-map" onclick="showOnMap()">
                    <i class="fas fa-map-marked-alt"></i> Tampilkan di Peta
                </button>
                
                <!-- ===== CONTAINER PETA ===== -->
                <!-- Peta untuk memilih lokasi secara visual -->
                <div class="mb-3 mt-3">
                    <label class="form-label">
                        <i class="fas fa-map"></i> Peta Lokasi
                    </label>
                    <div id="map"></div>
                    <small class="text-muted">Klik pada peta untuk menentukan koordinat lokasi</small>
                </div>
                
                <!-- Tombol Submit Form -->
                <button type="submit" class="btn btn-submit">
                    <i class="fas fa-save"></i> Simpan Data
                </button>
            </form>
        </div>
    </div>

    <!-- ===== LIBRARY JAVASCRIPT ===== -->
    <!-- Bootstrap JS - Framework JavaScript untuk interaktivitas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Leaflet JS - Library untuk peta interaktif -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>
    
    <script>
        // ===== INISIALISASI PETA =====
        // Membuat peta dengan center di Sumatera Barat (lat: -0.5, lng: 100.5) dengan zoom level 9
        var map = L.map('map').setView([-0.5, 100.5], 9);
        
        // ===== TAMBAH TILE LAYER =====
        // Menambahkan layer OpenStreetMap sebagai basemap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 18
        }).addTo(map);
        
        // ===== VARIABLE MARKER =====
        // Variable untuk menyimpan marker yang dipilih user
        var marker;
        
        // ===== EVENT KLIK PADA PETA =====
        // Saat user klik peta, ambil koordinat dan update input form
        map.on('click', function(e) {
            // Ambil koordinat latitude dan longitude dengan 8 desimal
            var lat = e.latlng.lat.toFixed(8);
            var lng = e.latlng.lng.toFixed(8);
            
            // Set nilai koordinat ke input form
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;
            
            // Update marker di peta
            updateMarker(lat, lng);
        });
        
        // ===== FUNGSI UPDATE MARKER =====
        // Fungsi untuk menambah/update marker di peta
        function updateMarker(lat, lng) {
            // Hapus marker lama jika sudah ada
            if (marker) {
                map.removeLayer(marker);
            }
            
            // Tambah marker baru di koordinat yang dipilih
            marker = L.marker([lat, lng]).addTo(map);
            
            // Bind popup dengan informasi koordinat
            marker.bindPopup(`<b>Lokasi Dipilih</b><br>Lat: ${lat}<br>Lng: ${lng}`).openPopup();
            
            // Zoom ke lokasi marker dengan level 15
            map.setView([lat, lng], 15);
        }
        
        // ===== FUNGSI TAMPILKAN DI PETA =====
        // Fungsi untuk menampilkan koordinat dari input ke peta
        function showOnMap() {
            // Ambil nilai latitude dan longitude dari input
            var lat = document.getElementById('latitude').value;
            var lng = document.getElementById('longitude').value;
            
            // Validasi: cek apakah input kosong
            if (!lat || !lng) {
                alert('Masukkan koordinat Latitude dan Longitude terlebih dahulu!');
                return;
            }
            
            // Konversi string ke float
            lat = parseFloat(lat);
            lng = parseFloat(lng);
            
            // Validasi: cek apakah format angka valid
            if (isNaN(lat) || isNaN(lng)) {
                alert('Format koordinat tidak valid! Gunakan format angka desimal.\nContoh: -0.305291 untuk Latitude dan 100.369530 untuk Longitude');
                return;
            }
            
            // Update marker di peta dengan koordinat yang diinput
            updateMarker(lat, lng);
        }
        
        // ===== AUTO-UPDATE PETA SAAT BLUR =====
        // Event listener untuk input Latitude
        // Saat user selesai input latitude (blur), otomatis update peta
        document.getElementById('latitude').addEventListener('blur', function() {
            var lat = this.value;
            var lng = document.getElementById('longitude').value;
            
            // Cek apakah kedua input terisi
            if (lat && lng) {
                lat = parseFloat(lat);
                lng = parseFloat(lng);
                
                // Jika format valid, update marker
                if (!isNaN(lat) && !isNaN(lng)) {
                    updateMarker(lat, lng);
                }
            }
        });
        
        // Event listener untuk input Longitude
        // Saat user selesai input longitude (blur), otomatis update peta
        document.getElementById('longitude').addEventListener('blur', function() {
            var lat = document.getElementById('latitude').value;
            var lng = this.value;
            
            // Cek apakah kedua input terisi
            if (lat && lng) {
                lat = parseFloat(lat);
                lng = parseFloat(lng);
                
                // Jika format valid, update marker
                if (!isNaN(lat) && !isNaN(lng)) {
                    updateMarker(lat, lng);
                }
            }
        });
        
        // ===== HANDLE FORM SUBMIT =====
        // Event listener untuk submit form
        document.getElementById('formInput').addEventListener('submit', function(e) {
            // Prevent default form submission (agar tidak reload page)
            e.preventDefault();
            
            // ===== VALIDASI KOORDINAT =====
            // Ambil dan validasi koordinat sebelum submit
            var lat = parseFloat(document.getElementById('latitude').value);
            var lng = parseFloat(document.getElementById('longitude').value);
            
            // Cek apakah koordinat valid
            if (isNaN(lat) || isNaN(lng)) {
                alert('Koordinat tidak valid! Pastikan Latitude dan Longitude dalam format angka desimal.');
                return;
            }
            
            // ===== KIRIM DATA KE SERVER =====
            // Buat FormData dari form
            const formData = new FormData(this);
            
            // Fetch API untuk kirim data ke proses_input.php
            fetch('proses_input.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json()) // Parse response menjadi JSON
            .then(result => {
                // ===== HANDLE RESPONSE =====
                // Jika berhasil, tampilkan alert dan redirect ke data.php
                if (result.status === 'success') {
                    alert('Data berhasil disimpan!');
                    window.location.href = 'data.php';
                } else {
                    // Jika gagal, tampilkan pesan error
                    alert('Gagal menyimpan data: ' + result.message);
                }
            })
            .catch(error => {
                // ===== ERROR HANDLING =====
                // Tangkap error jika fetch gagal
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menyimpan data');
            });
        });
    </script>
</body>
</html>