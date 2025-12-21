<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata di Sumatera Barat</title>

    <!-- Bootstrap CSS - Framework untuk styling responsive -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        /* Judul navbar */
        .navbar-title {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }

        /* Tombol navigasi */
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

        /* Efek hover tombol navigasi */
        .btn-back:hover {
            background: white;
            color: #C43670;
            transform: translateY(-2px);
        }

        /* ===== WELCOME SECTION ===== */
        /* Section welcome dengan background abu-abu terang */
        .welcome-section {
            padding: 60px 40px;
            text-align: center;
            background-color: #F8F9FA;
        }

        /* Judul utama welcome section */
        .welcome-title {
            font-size: 2.8rem;
            font-weight: bold;
            color: #C43670;
            margin-bottom: 15px;
        }

        /* Subtitle welcome section */
        .welcome-subtitle {
            font-size: 1.25rem;
            margin-bottom: 30px;
            color: #6c757d;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Tombol custom (base style) */
        .btn-custom {
            padding: 12px 35px;
            font-size: 1.1rem;
            border-radius: 50px;
            margin: 5px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            border: 2px solid #C43670;
            font-weight: 500;
        }

        /* Tombol primary (solid pink) */
        .btn-primary-custom {
            background-color: #C43670;
            color: white;
        }

        /* Efek hover tombol primary */
        .btn-primary-custom:hover {
            background-color: #A92C5F;
            border-color: #A92C5F;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Tombol secondary (outline) */
        .btn-secondary-custom {
            background-color: transparent;
            color: #C43670;
        }

        /* Efek hover tombol secondary */
        .btn-secondary-custom:hover {
            background-color: #C43670;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* ===== STATISTICS SECTION ===== */
        /* Section statistik dengan background abu-abu */
        .stats-section {
            background: #F8F9FA;
            padding: 40px 20px;
            margin-top: 0;
        }

        /* Angka statistik besar */
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #C43670;
        }

        /* Label statistik */
        .stat-label {
            font-size: 1.1rem;
            color: #6c757d;
            margin-top: 5px;
        }

        /* ===== GALLERY SECTION ===== */
        /* Section galeri foto dengan background putih */
        .gallery-section {
            background: white;
            padding: 60px 40px;
        }

        /* Judul section */
        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #C43670;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Subtitle section */
        .section-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 50px;
            text-align: center;
        }

        /* Card galeri foto */
        .gallery-card {
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }

        /* Efek hover card galeri */
        .gallery-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(196, 54, 112, 0.3);
        }

        /* Gambar dalam card galeri */
        .gallery-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        /* Efek zoom gambar saat hover */
        .gallery-card:hover img {
            transform: scale(1.05);
        }

        /* Body card dengan padding */
        .card-body {
            padding: 20px;
        }

        /* Judul card galeri */
        .gallery-title {
            font-size: 1.15rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        /* Lokasi dalam card galeri */
        .gallery-location {
            font-size: 0.9rem;
            color: #777;
        }

        /* ===== COMMENTS SECTION ===== */
        /* Section komentar dengan background abu-abu */
        .comments-section {
            background: #F8F9FA;
            padding: 60px 40px;
        }

        /* Form komentar dengan background putih */
        .comment-form {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        /* Judul form komentar */
        .comment-form h4 {
            color: #C43670;
            font-weight: bold;
            margin-bottom: 25px;
        }

        /* Card komentar individual */
        .comment-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        /* Efek hover card komentar */
        .comment-card:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 20px rgba(196, 54, 112, 0.15);
        }

        /* Header komentar dengan layout flex */
        .comment-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        /* Avatar komentar (inisial nama) */
        .comment-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #FFB7CF 0%, #CA9FB1 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            margin-right: 15px;
        }

        /* Nama pemberi komentar */
        .comment-info h5 {
            margin: 0;
            color: #C43670;
            font-weight: bold;
            font-size: 1.1rem;
        }

        /* Tanggal komentar */
        .comment-date {
            font-size: 0.85rem;
            color: #999;
        }

        /* Rating bintang */
        .comment-rating {
            color: #ffc107;
            margin-left: auto;
            font-size: 1.1rem;
        }

        /* Teks komentar */
        .comment-text {
            color: #555;
            line-height: 1.6;
        }

        /* ===== RATING INPUT ===== */
        /* Container input rating bintang */
        .rating-input {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
            gap: 5px;
            margin-bottom: 15px;
        }

        /* Sembunyikan radio button asli */
        .rating-input input[type="radio"] {
            display: none;
        }

        /* Label bintang dengan icon */
        .rating-input label {
            font-size: 2rem;
            color: #ddd;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        /* Bintang yang dipilih dan hover menjadi kuning */
        .rating-input input[type="radio"]:checked~label,
        .rating-input label:hover,
        .rating-input label:hover~label {
            color: #ffc107;
        }

        /* ===== TOMBOL SUBMIT KOMENTAR ===== */
        /* Tombol submit komentar dengan gradient */
        .btn-submit-comment {
            background: linear-gradient(135deg, #FFB7CF 0%, #CA9FB1 100%);
            color: white;
            border: none;
            padding: 12px 40px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        /* Efek hover tombol submit komentar */
        .btn-submit-comment:hover {
            background: linear-gradient(135deg, #C43670 0%, #A92C5F 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(196, 54, 112, 0.3);
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <!-- ===== NAVBAR ===== -->
        <!-- Navigation bar dengan judul dan tombol navigasi -->
        <div class="navbar-custom">
            <h1 class="navbar-title">
                <i class="fas fa-mountain"></i> Jelajahi Wisata Sumatera Barat
            </h1>
            <div>
                <!-- Tombol ke halaman peta -->
                <a href="map.php" class="btn-back"><i class="fas fa-map-marked-alt"></i> Peta Interaktif</a>
                <!-- Tombol ke halaman data -->
                <a href="data.php" class="btn-back"><i class="fas fa-table"></i> Data Wisata</a>
            </div>
        </div>

        <!-- ===== WELCOME SECTION ===== -->
        <!-- Section sambutan dengan judul dan tombol CTA -->
        <section class="welcome-section">
            <div class="container">
                <h1 class="welcome-title">
                    <i class="fas fa-map-signs"></i><br>Pariwisata di Nagari Minangkabau
                </h1>
                <p class="welcome-subtitle">
                    Jelajahi Keindahan Alam dan Budaya Ranah Minang dengan Teknologi GIS
                </p>
                <div>
                    <!-- Tombol CTA utama -->
                    <a href="map.php" class="btn-custom btn-primary-custom">
                        <i class="fas fa-map"></i> Lihat Peta
                    </a>
                    <!-- Tombol CTA secondary -->
                    <a href="data.php" class="btn-custom btn-secondary-custom">
                        <i class="fas fa-table"></i> Lihat Data
                    </a>
                </div>
            </div>
        </section>

        <!-- ===== STATISTICS SECTION ===== -->
        <!-- Section statistik pariwisata -->
        <section class="stats-section">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <!-- Statistik total destinasi wisata (dinamis dari database) -->
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-number" id="total-wisata">0</div>
                        <div class="stat-label">Destinasi Wisata</div>
                    </div>
                    <!-- Statistik total kategori unik (dinamis dari database) -->
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-number" id="total-kategori">0</div>
                        <div class="stat-label">Kategori Unik</div>
                    </div>
                    <!-- Statistik total kabupaten/kota (statis) -->
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-number">19</div>
                        <div class="stat-label">Kabupaten/Kota</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== GALLERY SECTION ===== -->
        <!-- Section galeri foto wisata -->
        <section class="gallery-section">
            <div class="container">
                <h2 class="section-title">
                    <i class="fas fa-images"></i> Galeri Pesona Minangkabau
                </h2>
                <p class="section-subtitle">
                    Beberapa Sudut Keindahan Wisata di Ranah Minang
                </p>

                <!-- Container untuk card galeri (diisi oleh JavaScript) -->
                <div class="row" id="gallery-container">
                    <!-- Gallery akan dimuat dari database via JavaScript -->
                </div>
            </div>
        </section>

        <!-- ===== COMMENTS SECTION ===== -->
        <!-- Section komentar pengunjung -->
        <section class="comments-section">
            <div class="container">
                <h2 class="section-title">
                    <i class="fas fa-comments"></i> Komentar Pengunjung
                </h2>
                <p class="section-subtitle">
                    Bagikan pengalaman Anda tentang website kami
                </p>

                <!-- ===== FORM KOMENTAR ===== -->
                <!-- Form untuk menambahkan komentar baru -->
                <div class="comment-form">
                    <h4><i class="fas fa-pen"></i> Tulis Komentar</h4>
                    <form id="formKomentar">
                        <div class="row">
                            <!-- Input nama lengkap -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" required
                                    placeholder="Masukkan nama Anda">
                            </div>
                            <!-- Input email (opsional) -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email (Opsional)</label>
                                <input type="email" class="form-control" name="email" placeholder="email@example.com">
                            </div>
                        </div>

                        <!-- ===== INPUT RATING BINTANG ===== -->
                        <!-- Rating 1-5 bintang dengan radio button -->
                        <div class="mb-3">
                            <label class="form-label">Rating</label>
                            <div class="rating-input">
                                <input type="radio" name="rating" value="5" id="star5" checked>
                                <label for="star5"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating" value="4" id="star4">
                                <label for="star4"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating" value="3" id="star3">
                                <label for="star3"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating" value="2" id="star2">
                                <label for="star2"><i class="fas fa-star"></i></label>
                                <input type="radio" name="rating" value="1" id="star1">
                                <label for="star1"><i class="fas fa-star"></i></label>
                            </div>
                        </div>

                        <!-- Textarea komentar -->
                        <div class="mb-3">
                            <label class="form-label">Komentar</label>
                            <textarea class="form-control" name="komentar" rows="4" required
                                placeholder="Tulis komentar Anda di sini..."></textarea>
                        </div>

                        <!-- Tombol submit komentar -->
                        <button type="submit" class="btn-submit-comment">
                            <i class="fas fa-paper-plane"></i> Kirim Komentar
                        </button>
                    </form>
                </div>

                <!-- ===== DAFTAR KOMENTAR ===== -->
                <!-- Container untuk menampilkan komentar yang sudah ada -->
                <div id="komentar-container">
                    <!-- Loading indicator saat komentar belum dimuat -->
                    <div class="text-center">
                        <i class="fas fa-spinner fa-spin fa-2x" style="color: #C43670;"></i>
                        <p style="color: #6c757d;">Memuat komentar...</p>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- ===== LIBRARY JAVASCRIPT ===== -->
    <!-- Bootstrap JS - Framework JavaScript untuk interaktivitas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // ===== FETCH DATA WISATA DARI DATABASE =====
        // Mengambil data dari get_data.php untuk statistik dan galeri
        fetch('get_data.php')
            .then(response => response.json()) // Parse response menjadi JSON
            .then(data => {
                // ===== UPDATE STATISTIK =====
                // Update total destinasi wisata
                document.getElementById('total-wisata').textContent = data.length;

                // Hitung kategori unik menggunakan Set
                const uniqueCategories = new Set(data.map(item => item.jenis));
                document.getElementById('total-kategori').textContent = uniqueCategories.size;

                // ===== LOAD GALLERY =====
                // Panggil fungsi untuk menampilkan galeri foto
                loadGallery(data);
            })
            .catch(error => {
                // ===== ERROR HANDLING =====
                // Tampilkan N/A jika fetch gagal
                console.error('Error fetching data:', error);
                document.getElementById('total-wisata').textContent = 'N/A';
                document.getElementById('total-kategori').textContent = 'N/A';
            });

        // ===== FUNGSI LOAD GALLERY =====
        // Fungsi untuk menampilkan galeri foto wisata
        function loadGallery(data) {
            const galleryContainer = document.getElementById('gallery-container');
            galleryContainer.innerHTML = ''; // Kosongkan container

            // ===== AMBIL 6 DATA ACAK =====
            // Shuffle array dan ambil 6 data pertama
            const shuffledData = data.sort(() => 0.5 - Math.random());
            const displayData = shuffledData.slice(0, 6);

            // ===== LOOP SETIAP DATA =====
            displayData.forEach(item => {
                // Tentukan URL gambar (dari folder img atau Unsplash sebagai fallback)
                const imageUrl = item.foto ? `img/${item.foto}` : `https://source.unsplash.com/400x300/?${encodeURIComponent(item.jenis)},nature`;

                // ===== BUAT CARD GALERI =====
                const card = `
                    <div class="col-md-4 col-sm-6">
                        <div class="card gallery-card">
                            <img src="${imageUrl}" class="card-img-top" alt="${item.nama}" onerror="this.onerror=null;this.src='https://via.placeholder.com/400x250?text=Image+Not+Found';">
                            <div class="card-body">
                                <h5 class="gallery-title">${item.nama}</h5>
                                <p class="gallery-location">
                                    <i class="fas fa-map-marker-alt fa-fw"></i> ${item.alamat}
                                </p>
                            </div>
                        </div>
                    </div>
                `;

                // Tambahkan card ke container
                galleryContainer.innerHTML += card;
            });
        }

        // ===== FUNGSI LOAD KOMENTAR =====
        // Fungsi untuk mengambil dan menampilkan komentar dari database
        function loadKomentar() {
            fetch('get_komentar.php')
                .then(response => response.json()) // Parse response menjadi JSON
                .then(data => {
                    const container = document.getElementById('komentar-container');
                    container.innerHTML = ''; // Kosongkan loading indicator

                    // ===== CEK JIKA TIDAK ADA KOMENTAR =====
                    if (data.length === 0) {
                        container.innerHTML = '<p class="text-center text-muted">Belum ada komentar. Jadilah yang pertama!</p>';
                        return;
                    }

                    // ===== LOOP SETIAP KOMENTAR =====
                    data.forEach(item => {
                        // Ambil inisial nama untuk avatar
                        const initial = item.nama.charAt(0).toUpperCase();

                        // Format tanggal ke bahasa Indonesia
                        const date = new Date(item.created_at).toLocaleDateString('id-ID', {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        });

                        // Buat string bintang berdasarkan rating
                        const stars = '★'.repeat(item.rating) + '☆'.repeat(5 - item.rating);

                        // ===== BUAT CARD KOMENTAR =====
                        const card = `
                            <div class="comment-card">
                                <div class="comment-header">
                                    <div class="comment-avatar">${initial}</div>
                                    <div class="comment-info">
                                        <h5>${item.nama}</h5>
                                        <div class="comment-date">${date}</div>
                                    </div>
                                    <div class="comment-rating">${stars}</div>
                                </div>
                                <div class="comment-text">${item.komentar}</div>
                            </div>
                        `;

                        // Tambahkan card ke container
                        container.innerHTML += card;
                    });
                })
                .catch(error => {
                    // ===== ERROR HANDLING =====
                    console.error('Error:', error);
                    document.getElementById('komentar-container').innerHTML =
                        '<p class="text-center text-danger">Gagal memuat komentar</p>';
                });
        }

        // ===== HANDLE SUBMIT KOMENTAR =====
        // Event listener untuk form submit komentar
        document.getElementById('formKomentar').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            // Buat FormData dari form
            const formData = new FormData(this);

            // ===== KIRIM DATA KE SERVER =====
            // Fetch API untuk kirim komentar ke simpan_komentar.php
            fetch('simpan_komentar.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json()) // Parse response menjadi JSON
                .then(result => {
                    // ===== HANDLE RESPONSE =====
                    if (result.status === 'success') {
                        // Jika berhasil: tampilkan alert, reset form, reload komentar
                        alert('Terima kasih! Komentar Anda berhasil ditambahkan');
                        this.reset();
                        loadKomentar();
                    } else {
                        // Jika gagal: tampilkan pesan error
                        alert('Gagal menambahkan komentar: ' + result.message);
                    }
                })
                .catch(error => {
                    // ===== ERROR HANDLING =====
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengirim komentar');
                });
        });

        // ===== LOAD KOMENTAR SAAT HALAMAN DIMUAT =====
        // Panggil fungsi loadKomentar() saat halaman pertama kali dibuka
        loadKomentar();
    </script>
</body>

</html>