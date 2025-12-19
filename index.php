<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata di Sumatera Barat</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
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

        /* Welcome Section */
        .welcome-section {
            padding: 60px 40px;
            text-align: center;
            background-color: #F8F9FA;
        }

        .welcome-title {
            font-size: 2.8rem;
            font-weight: bold;
            color: #C43670;
            margin-bottom: 15px;
        }

        .welcome-subtitle {
            font-size: 1.25rem;
            margin-bottom: 30px;
            color: #6c757d;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

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

        .btn-primary-custom {
            background-color: #C43670;
            color: white;
        }

        .btn-primary-custom:hover {
            background-color: #A92C5F;
            border-color: #A92C5F;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary-custom {
            background-color: transparent;
            color: #C43670;
        }

        .btn-secondary-custom:hover {
            background-color: #C43670;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Statistics Section */
        .stats-section {
            background: #F8F9FA;
            padding: 40px 20px;
            margin-top: 0;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #C43670;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #6c757d;
            margin-top: 5px;
        }

        /* Gallery Section */
        .gallery-section {
            background: white;
            padding: 60px 40px;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #C43670;
            margin-bottom: 20px;
            text-align: center;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 50px;
            text-align: center;
        }

        .gallery-card {
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }

        .gallery-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(196, 54, 112, 0.3);
        }

        .gallery-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .gallery-card:hover img {
            transform: scale(1.05);
        }

        .card-body {
            padding: 20px;
        }

        .gallery-title {
            font-size: 1.15rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .gallery-location {
            font-size: 0.9rem;
            color: #777;
        }

        /* === TAMBAHAN: Komentar Section === */
        .comments-section {
            background: #F8F9FA;
            padding: 60px 40px;
        }

        .comment-form {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .comment-form h4 {
            color: #C43670;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .comment-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .comment-card:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 20px rgba(196, 54, 112, 0.15);
        }

        .comment-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

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

        .comment-info h5 {
            margin: 0;
            color: #C43670;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .comment-date {
            font-size: 0.85rem;
            color: #999;
        }

        .comment-rating {
            color: #ffc107;
            margin-left: auto;
            font-size: 1.1rem;
        }

        .comment-text {
            color: #555;
            line-height: 1.6;
        }

        .rating-input {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
            gap: 5px;
            margin-bottom: 15px;
        }

        .rating-input input[type="radio"] {
            display: none;
        }

        .rating-input label {
            font-size: 2rem;
            color: #ddd;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .rating-input input[type="radio"]:checked~label,
        .rating-input label:hover,
        .rating-input label:hover~label {
            color: #ffc107;
        }

        .btn-submit-comment {
            background: linear-gradient(135deg, #FFB7CF 0%, #CA9FB1 100%);
            color: white;
            border: none;
            padding: 12px 40px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-submit-comment:hover {
            background: linear-gradient(135deg, #C43670 0%, #A92C5F 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(196, 54, 112, 0.3);
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <!-- Navbar -->
        <div class="navbar-custom">
            <h1 class="navbar-title">
                <i class="fas fa-mountain"></i> Jelajahi Wisata Sumatera Barat
            </h1>
            <div>
                <a href="map.php" class="btn-back"><i class="fas fa-map-marked-alt"></i> Peta Interaktif</a>
                <a href="data.php" class="btn-back"><i class="fas fa-table"></i> Data Wisata</a>
            </div>
        </div>

        <!-- Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <h1 class="welcome-title">
                    <i class="fas fa-map-signs"></i><br>Pariwisata di Nagari Minangkabau
                </h1>
                <p class="welcome-subtitle">
                    Jelajahi Keindahan Alam dan Budaya Ranah Minang dengan Teknologi GIS
                </p>
                <div>
                    <a href="map.php" class="btn-custom btn-primary-custom">
                        <i class="fas fa-map"></i> Lihat Peta
                    </a>
                    <a href="data.php" class="btn-custom btn-secondary-custom">
                        <i class="fas fa-table"></i> Lihat Data
                    </a>
                </div>
            </div>
        </section>

        <!-- Statistics -->
        <section class="stats-section">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-number" id="total-wisata">0</div>
                        <div class="stat-label">Destinasi Wisata</div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-number" id="total-kategori">0</div>
                        <div class="stat-label">Kategori Unik</div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-number">19</div>
                        <div class="stat-label">Kabupaten/Kota</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Album Foto Section -->
        <section class="gallery-section">
            <div class="container">
                <h2 class="section-title">
                    <i class="fas fa-images"></i> Galeri Pesona Minangkabau
                </h2>
                <p class="section-subtitle">
                    Beberapa Sudut Keindahan Wisata di Ranah Minang
                </p>

                <div class="row" id="gallery-container">
                    <!-- Gallery akan dimuat dari database -->
                </div>
            </div>
        </section>

        <!-- === TAMBAHAN: Komentar Section === -->
        <section class="comments-section">
            <div class="container">
                <h2 class="section-title">
                    <i class="fas fa-comments"></i> Komentar Pengunjung
                </h2>
                <p class="section-subtitle">
                    Bagikan pengalaman Anda tentang website kami
                </p>

                <!-- Form Komentar -->
                <div class="comment-form">
                    <h4><i class="fas fa-pen"></i> Tulis Komentar</h4>
                    <form id="formKomentar">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" required
                                    placeholder="Masukkan nama Anda">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email (Opsional)</label>
                                <input type="email" class="form-control" name="email" placeholder="email@example.com">
                            </div>
                        </div>

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

                        <div class="mb-3">
                            <label class="form-label">Komentar</label>
                            <textarea class="form-control" name="komentar" rows="4" required
                                placeholder="Tulis komentar Anda di sini..."></textarea>
                        </div>

                        <button type="submit" class="btn-submit-comment">
                            <i class="fas fa-paper-plane"></i> Kirim Komentar
                        </button>
                    </form>
                </div>

                <!-- Daftar Komentar -->
                <div id="komentar-container">
                    <div class="text-center">
                        <i class="fas fa-spinner fa-spin fa-2x" style="color: #C43670;"></i>
                        <p style="color: #6c757d;">Memuat komentar...</p>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Ambil data dari database
        fetch('get_data.php')
            .then(response => response.json())
            .then(data => {
                // Update stats
                document.getElementById('total-wisata').textContent = data.length;
                const uniqueCategories = new Set(data.map(item => item.jenis));
                document.getElementById('total-kategori').textContent = uniqueCategories.size;

                // Load gallery
                loadGallery(data);
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                document.getElementById('total-wisata').textContent = 'N/A';
                document.getElementById('total-kategori').textContent = 'N/A';
            });

        // Fungsi untuk load gallery
        function loadGallery(data) {
            const galleryContainer = document.getElementById('gallery-container');
            galleryContainer.innerHTML = '';

            // Ambil 6 data acak untuk ditampilkan
            const shuffledData = data.sort(() => 0.5 - Math.random());
            const displayData = shuffledData.slice(0, 6);

            displayData.forEach(item => {
                const imageUrl = item.foto ? `img/${item.foto}` : `https://source.unsplash.com/400x300/?${encodeURIComponent(item.jenis)},nature`;

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

                galleryContainer.innerHTML += card;
            });
        }

        // === TAMBAHAN: Fungsi Load Komentar ===
        function loadKomentar() {
            fetch('get_komentar.php')
                .then(response => response.json())
                .then(data => {
                    const container = document.getElementById('komentar-container');
                    container.innerHTML = '';

                    if (data.length === 0) {
                        container.innerHTML = '<p class="text-center text-muted">Belum ada komentar. Jadilah yang pertama!</p>';
                        return;
                    }

                    data.forEach(item => {
                        const initial = item.nama.charAt(0).toUpperCase();
                        const date = new Date(item.created_at).toLocaleDateString('id-ID', {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        });

                        const stars = '★'.repeat(item.rating) + '☆'.repeat(5 - item.rating);

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

                        container.innerHTML += card;
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('komentar-container').innerHTML =
                        '<p class="text-center text-danger">Gagal memuat komentar</p>';
                });
        }

        // === TAMBAHAN: Handle Submit Komentar ===
        document.getElementById('formKomentar').addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch('simpan_komentar.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(result => {
                    if (result.status === 'success') {
                        alert('Terima kasih! Komentar Anda berhasil ditambahkan');
                        this.reset();
                        loadKomentar();
                    } else {
                        alert('Gagal menambahkan komentar: ' + result.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengirim komentar');
                });
        });

        // === TAMBAHAN: Load komentar saat halaman dimuat ===
        loadKomentar();
    </script>
</body>

</html>