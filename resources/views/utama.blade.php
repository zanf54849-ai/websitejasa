<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIGA PUTRA | Jasa Pemasangan Plafon PVC, Gypsum & Partisi</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/plafond/tigaputra.jpg') }}">
<link rel="apple-touch-icon" href="{{ asset('images/plafond/tigaputra.jpg') }}">
    <meta name="description" content="Spesialis jasa pemasangan plafon PVC, plafon gypsum, partisi sekat ruangan, dan interior modern Jabodetabek. Dikerjakan langsung tukangnya tanpa perantara dengan garansi pengerjaan rapi.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/plafond.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ================= TOPBAR ================= -->
    <div class="topbar">
        <div class="container topbar-content">
            <div class="top-left">
                <span class="badge-status"><span class="pulse-dot"></span> Buka Siaga</span>
                <i class="fa-solid fa-location-dot ms-2"></i>
                <span>Area Layanan Jabodetabek & Sekitarnya (Tangsel, Jakarta, Bogor, Depok, Bekasi)</span>
            </div>
            <div class="top-right">
                <a href="https://wa.me/6287885847447" target="_blank">
                    <i class="fa-brands fa-whatsapp text-success"></i>
                    <span>0878-8584-7447</span>
                </a>
                <a href="mailto:jasaplafondpartisi@gmail.com">
                    <i class="fa-solid fa-envelope"></i>
                    <span>bapapadli@gmail.com</span>
                </a>
            </div>
        </div>
    </div>

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar-custom">
        <div class="container nav-container">
            <a href="/" class="brand-logo">
                <img src="/images/plafond/tigaputra.jpg" alt="">
            </a>

            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#paket">Paket & Harga</a></li>
                <li><a href="#galeri">Galeri Proyek</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>

            <div class="nav-actions">
                <!-- Theme Switcher Dropdown -->
                <div class="dropdown theme-dropdown">
                    <button class="btn-theme-toggle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" title="Ubah Tema Warna">
                        <i class="fa-solid fa-palette"></i>
                        <span class="d-none d-md-inline">Tema</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow">
                        <li><h6 class="dropdown-header">Pilihan Tema Warna</h6></li>
                        <li><a class="dropdown-item theme-option active" href="#" data-theme="amber"><span class="theme-color-dot dot-amber"></span> Amber Gold (Modern)</a></li>
                        <li><a class="dropdown-item theme-option" href="#" data-theme="emerald"><span class="theme-color-dot dot-emerald"></span> Emerald Luxe (Hijau)</a></li>
                        <li><a class="dropdown-item theme-option" href="#" data-theme="terracotta"><span class="theme-color-dot dot-terracotta"></span> Terracotta (Bata Modern)</a></li>
                        <li><a class="dropdown-item theme-option" href="#" data-theme="sapphire"><span class="theme-color-dot dot-sapphire"></span> Sapphire (Biru Royal)</a></li>
                        <li><a class="dropdown-item theme-option" href="#" data-theme="nordic"><span class="theme-color-dot dot-nordic"></span> Nordic Walnut (Kayu Hangat)</a></li>
                    </ul>
                </div>

                @if (!Auth::check())
                    <a href="/admin/login" class="btn-nav-login">
                        <i class="fa-solid fa-user me-1"></i> Login
                    </a>
                    <a href="https://wa.me/6285652244210" target="_blank" class="btn-nav-cta">
                        <i class="fa-brands fa-whatsapp"></i> Survey Gratis
                    </a>
                @else
                    <a href="/admin" class="btn-nav-login">
                        <i class="fa-solid fa-gauge me-1"></i> Dashboard
                    </a>
                    <form method="post" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger" style="font-size:0.82rem; font-weight:600; padding: 7px 12px; border-radius: 9999px;">
                            <i class="fa-solid fa-right-from-bracket me-1"></i> Logout
                        </button>
                    </form>
                @endif
                <div class="hamburger" id="hamburger">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- ================= HERO ================= -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="hero-content">
                <span class="hero-badge">
                    <i class="fa-solid fa-award me-1"></i> TIGA PUTRA
                </span>
                <h1 class="hero-title">
                    Jasa Pemasangan <br>
                    <span>Plafon & Partisi</span>
                </h1>
                <p class="hero-desc">
                    Spesialis pemasangan Plafon PVC, Gypsum Datar/Drop Ceiling, dan Partisi Ruangan berkualitas tinggi untuk rumah, ruko, kantor, dan bangunan komersial. Hasil rapi, kuat, dan bergaransi.
                </p>

                <div class="hero-features">
                    <div class="hero-feat-item">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Kualitas Bahan SNI</span>
                    </div>
                    <div class="hero-feat-item">
                        <i class="fa-solid fa-user-gear"></i>
                        <span>Tukang Berpengalaman</span>
                    </div>
                    <div class="hero-feat-item">
                        <i class="fa-solid fa-medal"></i>
                        <span>Garansi Pekerjaan</span>
                    </div>
                </div>

                <div class="hero-buttons">
                    <a href="https://wa.me/6285652244210?text=Halo%20TIGA%20PUTRA,%20saya%20ingin%20konsultasi%20jasa%20pemasangan%20plafon/partisi" target="_blank" class="btn-gold">
                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                        Konsultasi via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= INFO STRIP ================= -->
    <section class="info-section">
        <div class="container">
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <div class="info-text">
                        <h4>Pengerjaan Tepat Waktu</h4>
                        <p>Sesuai jadwal tenggat yang disepakati bersama</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-shield-cat"></i>
                    </div>
                    <div class="info-text">
                        <h4>Material Berkualitas</h4>
                        <p>Bahan pilihan tahan lama, anti rayap & kuat</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                    </div>
                    <div class="info-text">
                        <h4>Hasil Rapi & Presisi</h4>
                        <p>Detail sambungan halus standar estetika tinggi</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <div class="info-text">
                        <h4>Layanan Responsif</h4>
                        <p>Konsultasi & survei lokasi gratis Jabodetabek</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= TENTANG KAMI ================= -->
    <section class="about-section" id="tentang">
        <div class="container">
            <div class="about-grid">
                <div class="about-img-box">
                    <img src="/images/plafond/padli2.jpeg" alt="Pekerjaan Plafon TIGA PUTRA" class="about-main-img">
                    <div class="about-badge-float">
                        <i class="fa-solid fa-award"></i>
                        <div>
                            <strong>10+ Tahun</strong>
                            <span>Pengalaman Interior Plafon</span>
                        </div>
                    </div>
                </div>

                <div class="about-content">
                    <span class="section-tag">TENTANG KAMI</span>
                    <h2>Solusi Profesional Plafon & Partisi Interior Modern</h2>
                    <p>
                        <strong>TIGA PUTRA</strong> hadir sebagai solusi terpercaya dalam jasa pemasangan plafon PVC, gypsum, partisi ruangan, dan dekorasi ornamen interior modern dengan standar pengerjaan presisi dan rapi.
                    </p>

                    <div class="highlight-box">
                        <i class="fa-solid fa-hand-holding-dollar me-2"></i>
                        <strong>Dikerjakan langsung tukangnya tanpa perantara.</strong> Jaminan kepuasan pelanggan: garansi perbaikan jika hasil pekerjaan tidak sesuai atau tidak rapi!
                    </div>

                    <p>
                        Didukung oleh tenaga ahli spesialis plafon berpengalaman serta material berstandar SNI, kami siap mewujudkan hunian maupun ruang usaha yang sejuk, elegan, kuat, dan nyaman bagi Anda di wilayah Jabodetabek.
                    </p>

                    <div class="about-checklist">
                        <div class="check-item">
                            <i class="fa-solid fa-check"></i>
                            <span>Tukang Ahli & Berpengalaman</span>
                        </div>
                        <div class="check-item">
                            <i class="fa-solid fa-check"></i>
                            <span>Material Pilihan & Bergaransi</span>
                        </div>
                        <div class="check-item">
                            <i class="fa-solid fa-check"></i>
                            <span>Pengerjaan Cepat & Bersih</span>
                        </div>
                        <div class="check-item">
                            <i class="fa-solid fa-check"></i>
                            <span>Melayani Area Jabodetabek</span>
                        </div>
                    </div>

                    <a href="https://wa.me/6285652244210?text=Halo%20TIGA%20PUTRA,%20saya%20tertarik%20dengan%20layanan%20Anda" target="_blank" class="btn-gold">
                        <i class="fa-brands fa-whatsapp fa-lg"></i> Hubungi Kami Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= LAYANAN UTAMA ================= -->
    <section class="services-section" id="layanan">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">LAYANAN KAMI</span>
                <h2 class="section-title">Solusi Plafon & Interior Terbaik</h2>
                <p class="section-subtitle">
                    Pilihan layanan instalasi interior lengkap yang disesuaikan dengan anggaran, konsep arsitektur, dan kebutuhan ruangan Anda.
                </p>
            </div>

            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="service-media">
                        <img src="/images/plafond/padli2.jpeg" alt="Plafon PVC">
                    </div>
                    <div class="service-body">
                        <div class="service-icon-wrap">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <h3>Plafon PVC</h3>
                        <p>Plafon PVC modern anti bocor, anti rayap, tidak lapuk, mudah dibersihkan dengan berbagai pilihan motif serat kayu & elegan.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card">
                    <div class="service-media">
                        <video autoplay loop muted playsinline>
                            <source src="/images/plafond/vidpadli1.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="service-body">
                        <div class="service-icon-wrap">
                            <i class="fa-solid fa-border-all"></i>
                        </div>
                        <h3>Plafon Gypsum Flat</h3>
                        <p>Pemasangan papan gypsum rata/flat rapi tanpa sambungan terlihat. Memberikan kesan plafon mewah, halus, dan sejuk.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card">
                    <div class="service-media">
                        <img src="/images/plafond/padli3.png" alt="Partisi Gypsum">
                    </div>
                    <div class="service-body">
                        <div class="service-icon-wrap">
                            <i class="fa-solid fa-table-columns"></i>
                        </div>
                        <h3>Partisi Gypsum</h3>
                        <p>Solusi sekat pembatas ruangan praktis, kuat, fleksibel, serta kedap suara untuk kantor, ruang kerja, dan kamar tidur.</p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="service-card">
                    <div class="service-media">
                        <img src="/images/plafond/padlicrop.jpeg" alt="Custom Design & Drop Ceiling">
                    </div>
                    <div class="service-body">
                        <div class="service-icon-wrap">
                            <i class="fa-solid fa-wand-magic"></i>
                        </div>
                        <h3>Custom Drop Ceiling</h3>
                        <p>Desain plafon bertingkat mewah dengan indirect lighting LED warm white yang membuat ruangan terlihat spektakuler dan hangat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PAKET & HARGA (DYNAMIC DARI DATABASE) ================= -->
    <section class="catalog-section" id="paket">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">PAKET & BIAYA</span>
                <h2 class="section-title">Katalog Paket Pekerjaan Terpasang</h2>
                <p class="section-subtitle">
                    Harga transparan langsung tukang. Biaya sudah termasuk bahan material berkualitas SNI, rangka hollow galvanis, dan upah pengerjaan profesional.
                </p>
            </div>

            <div class="catalog-grid">
                @foreach ($produk as $p)
                    <div class="catalog-card">
                        <div class="catalog-img-wrap">
                            <img src="/storage/{{ $p->image }}?v={{ filemtime(public_path('storage/' . $p->image)) }}" 
                                 alt="{{ $p->nama }}" 
                                 loading="lazy"
                                 onerror="this.onerror=null; this.src='/images/plafond/{{ basename($p->image) }}';">
                            <span class="badge-tag">{{ $p->tipe }}</span>
                        </div>
                        <div class="catalog-body">
                            <h3 class="catalog-title">{{ $p->nama }}</h3>
                            <span class="catalog-spec"><i class="fa-solid fa-cube me-1"></i> {{ $p->jenis }}</span>
                            <div class="catalog-price-row">
                                

                                <div>
                                    @if (Auth::check() && Auth::user()->role == 'Guest')
                                        <button type="button" class="btn btn-sm btn-gold text-white" data-bs-toggle="modal" data-bs-target="#ModalPesan{{ $p->id }}">
                                            <i class="fa-solid fa-cart-plus me-1"></i> Pesan / Survey
                                        </button>
                                    @elseif (Auth::check() && Auth::user()->role == 'Admin')
                                        <a href="/admin/produks" class="btn btn-sm btn-outline-primary">
                                            <i class="fa-solid fa-pen-to-square me-1"></i> Edit Paket
                                        </a>
                                    @else
                                        <button type="button" class="btn btn-sm btn-gold text-white" data-bs-toggle="modal" data-bs-target="#ModalGuest{{ $p->id }}">
                                            <i class="fa-brands fa-whatsapp me-1"></i> Pesan Jasa
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL UNTUK LOGGED IN USER (DIRECT PURCHASE / SURVEY REGISTRATION) -->
                    @if (Auth::check())
                        <div class="modal fade custom-modal" id="ModalPesan{{ $p->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Form Booking Pekerjaan / Survey</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <div class="d-flex gap-3 mb-3 pb-3 border-bottom">
                                            <img src="/storage/{{ $p->image }}" onerror="this.onerror=null; this.src='/images/plafond/{{ basename($p->image) }}';" style="width: 80px; height: 80px; object-fit: cover; border-radius: 8px;">
                                            <div>
                                                <h5 class="mb-1 text-primary fw-bold">{{ $p->nama }}</h5>
                                                <small class="text-muted d-block">{{ $p->jenis }}</small>
                                                <span class="fw-bold text-warning">
                                                    {{ $p->harga > 0 ? 'Rp. ' . number_format($p->harga, 0, ',', '.') : 'GRATIS' }}
                                                </span>
                                            </div>
                                        </div>

                                        <form action="{{ route('storeInputpembelian') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="kodeproduk" value="{{ $p->id }}">
                                            <input type="hidden" name="harga" value="{{ $p->harga }}">

                                            <div class="mb-3">
                                                <label class="form-label fw-bold small text-secondary">Estimasi Luasan Area (m²)</label>
                                                <input type="number" name="banyak" value="20" min="1" max="1000" class="form-control" required>
                                                <small class="text-muted">Masukkan perkiraan luas ruangan (misal: 4x5m = 20 m²). Survey riil akan diukur di lokasi.</small>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label fw-bold small text-secondary">Catatan / Alamat Survey</label>
                                                <textarea class="form-control" rows="2" placeholder="Tuliskan alamat lokasi Anda di Jabodetabek atau rincian khusus..."></textarea>
                                            </div>

                                            <button type="submit" class="btn btn-gold w-100 py-2 text-white fw-bold">
                                                <i class="fa-solid fa-paper-plane me-1"></i> Konfirmasi Booking Survey / Order
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- MODAL UNTUK GUEST (OPTION TO WHATSAPP OR LOGIN) -->
                        <div class="modal fade custom-modal" id="ModalGuest{{ $p->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Pesan Layanan: {{ $p->nama }}</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4 text-center">
                                        <div class="mb-3">
                                            <img src="/storage/{{ $p->image }}" onerror="this.onerror=null; this.src='/images/plafond/{{ basename($p->image) }}';" style="height: 120px; width: 100%; object-fit: cover; border-radius: 10px;" class="mb-2">
                                            <h5 class="fw-bold mb-1">{{ $p->nama }}</h5>
                                            <p class="text-muted small mb-0">{{ $p->jenis }} - {{ $p->harga > 0 ? 'Rp. ' . number_format($p->harga, 0, ',', '.') . ' / m²' : 'Survey Gratis' }}</p>
                                        </div>

                                        <p class="small text-secondary mb-4">
                                            Anda dapat langsung menghubungi tim tukang kami via WhatsApp untuk konsultasi cepat & booking jadwal survey gratis, atau login untuk melacak status pesanan secara online.
                                        </p>

                                        <div class="d-grid gap-2">
                                            <a href="https://wa.me/6285652244210?text=Halo%20TIGA%20PUTRA,%20saya%20tertarik%20pesan%20paket%20{{ urlencode($p->nama) }}%20({{ $p->kode }})" target="_blank" class="btn btn-success py-2 fw-bold">
                                                <i class="fa-brands fa-whatsapp fa-lg me-1"></i> Pesan Cepat via WhatsApp
                                            </a>
                                            <a href="/admin/login" class="btn btn-outline-dark py-2">
                                                <i class="fa-solid fa-user-lock me-1"></i> Login Akun Pelanggan
                                            </a>
                                            <a href="/register" class="btn btn-link text-muted small">
                                                Belum punya akun? Daftar gratis di sini
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- ================= GALERI & DOKUMENTASI ================= -->
    <section class="gallery-section" id="galeri">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">GALERI PROYEK</span>
                <h2 class="section-title">Dokumentasi Hasil Pekerjaan Kami</h2>
                <p class="section-subtitle">
                    Bukti nyata ketelitian, kerapian, dan kualitas pengerjaan tim TIGA PUTRA di berbagai lokasi Jabodetabek.
                </p>

                <!-- Filter Buttons -->
                <div class="d-flex justify-content-center gap-2 mt-4">
                    <button class="btn btn-sm btn-gold gallery-filter-btn" data-filter="all">Semua Dokumentasi</button>
                    <button class="btn btn-sm btn-outline-secondary gallery-filter-btn" data-filter="photo">Foto Pekerjaan</button>
                    <button class="btn btn-sm btn-outline-secondary gallery-filter-btn" data-filter="video">Video Lapangan</button>
                </div>
            </div>

            <div class="gallery-grid">
                <!-- Video 1 -->
                <div class="gallery-card gallery-item-wrap" data-category="video">
                    <video autoplay loop muted playsinline controls>
                        <source src="/images/plafond/vidpadli2.mp4" type="video/mp4">
                    </video>
                    <div class="gallery-overlay">
                        <div>
                            <h5>Instalasi Rangka & Plafon Gypsum</h5>
                            <span>Video Pengerjaan Lapangan</span>
                        </div>
                    </div>
                </div>

                <!-- Photo 1 -->
                <div class="gallery-card gallery-item-wrap" data-category="photo">
                    <img src="/images/plafond/padlicrop.jpeg" alt="Plafon Gypsum Mewah">
                    <div class="gallery-overlay">
                        <div>
                            <h5>Plafon Gypsum Flat Rumah Tinggal</h5>
                            <span>Pondok Aren, Tangsel</span>
                        </div>
                    </div>
                </div>

                <!-- Photo 2 -->
                <div class="gallery-card gallery-item-wrap" data-category="photo">
                    <img src="/images/plafond/padli2.jpeg" alt="Plafon PVC Motif">
                    <div class="gallery-overlay">
                        <div>
                            <h5>Plafon PVC Elegan Anti Bocor</h5>
                            <span>BSD City, Tangerang</span>
                        </div>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="gallery-card gallery-item-wrap" data-category="video">
                    <video autoplay loop muted playsinline controls>
                        <source src="/images/plafond/vidpadli3.mp4" type="video/mp4">
                    </video>
                    <div class="gallery-overlay">
                        <div>
                            <h5>Finishing Drop Ceiling Bertingkat</h5>
                            <span>Video Detail Sambungan Halus</span>
                        </div>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="gallery-card gallery-item-wrap" data-category="video">
                    <video autoplay loop muted playsinline controls>
                    <source src="/images/plafond/vidpadli5.mp4" type="video/mp4">
                    </video>
                    <div class="gallery-overlay">
                        <div>
                            <h5>Drop Ceiling dengan Hidden Lamp LED</h5>
                            <span>Bintaro Sektor 9</span>
                        </div>
                    </div>
                </div>

                <!-- Photo 4 -->
                <div class="gallery-card gallery-item-wrap" data-category="photo">
                    <img src="/images/plafond/padli4.png" alt="Partisi Sekat Gypsum">
                    <div class="gallery-overlay">
                        <div>
                            <h5>Partisi Dinding Kantor 2 Sisi</h5>
                            <span>TB Simatupang, Jaksel</span>
                        </div>
                    </div>
                </div>

                <!-- Photo 5 -->
                <div class="gallery-card gallery-item-wrap" data-category="video">
                    <video autoplay loop muted playsinline controls>
                     <source src="/images/plafond/vidpadli7.mp4" type="video/mp4">
                    </video>
                    <div class="gallery-overlay">
                        <div>
                            <h5>Wall Lining Gypsum Rapi</h5>
                            <span>Ciputat, Tangerang Selatan</span>
                        </div>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="gallery-card gallery-item-wrap" data-category="video">
                    <video autoplay loop muted playsinline controls>
                        <source src="/images/plafond/vidpadli4.mp4" type="video/mp4">
                    </video>
                    <div class="gallery-overlay">
                        <div>
                            <h5>Pemasangan List Profil Presisi</h5>
                            <span>Dokumentasi Video Tukang</span>
                        </div>
                    </div>
                </div>

                <!-- Photo 6 -->
                <div class="gallery-card gallery-item-wrap" data-category="video">
                    <video autoplay loop muted playsinline controls>
                        <source src="/images/plafond/vidpadli9.mp4" type="video/mp4">
                    </video>
                    <div class="gallery-overlay">
                        <div>
                            <h5>Hasil Akhir Rapi & Presisi</h5>
                            <span>Depok & Jakarta Barat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= TESTIMONI PELANGGAN ================= -->
    <section class="testimonial-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">TESTIMONI</span>
                <h2 class="section-title">Apa Kata Klien Kami?</h2>
                <p class="section-subtitle">
                    Kepuasan klien atas ketepatan waktu, kejujuran spesifikasi bahan, dan kerapian pengerjaan adalah kebanggaan kami.
                </p>
            </div>

            <div class="testimonial-grid">
                <div class="testi-card">
                    <div class="testi-stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="testi-text">
                        "Sangat puas dengan hasil drop ceiling di ruang tamu kami. Pengerjaannya cepat, sambungan komponnya mulus tanpa gelombang, dan tukangnya sopan serta rajin bersih-bersih setelah selesai."
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">H</div>
                        <div class="testi-info">
                            <h5>Hendra Gunawan</h5>
                            <span>Pemilik Rumah di BSD City</span>
                        </div>
                    </div>
                </div>

                <div class="testi-card">
                    <div class="testi-stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="testi-text">
                        "Plafon PVC di dapur dan kamar mandi dipasang sangat rapi dan rapat. Yang paling saya apresiasi adalah harganya langsung tukang tanpa calo, jauh lebih hemat dibanding kontraktor lain."
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">R</div>
                        <div class="testi-info">
                            <h5>Rina Kartika</h5>
                            <span>Warga Bintaro Jaya</span>
                        </div>
                    </div>
                </div>

                <div class="testi-card">
                    <div class="testi-stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="testi-text">
                        "Pesan partisi gypsum untuk pembatas ruangan kantor di TB Simatupang. Selesai tepat waktu sesuai deadline yang ketat. Hasilnya kokoh dan peredam suaranya berfungsi optimal."
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">A</div>
                        <div class="testi-info">
                            <h5>Agus Prasetyo</h5>
                            <span>Manajer Operasional Ruko</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CTA BANNER ================= -->
    <section class="cta-banner">
        <div class="container cta-flex">
            <div>
                <h2>BUTUH KONSULTASI ATAU SURVEY GRATIS?</h2>
                <p>Hubungi teknisi spesialis kami sekarang juga dan dapatkan estimasi RAB transparan!</p>
            </div>
            <a href="https://wa.me/6285652244210?text=Halo%20TIGA%20PUTRA,%20saya%20butuh%20survey%20lokasi%20gratis" target="_blank" class="btn-gold">
                <i class="fa-brands fa-whatsapp fa-xl"></i>
                0878-8584-7447
            </a>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="footer-main" id="kontak">
        <div class="container">
            <div class="footer-grid">
                <!-- Col 1 -->
                <div class="footer-brand">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="/images/plafond/tigaputra.jpg" alt="Logo Tiga Putra">
                        <div>
                            <h4 class="mb-0 fw-bold text-white letter-spacing-1">TIGA</h4>
                            <span class="text-warning small fw-bold">PUTRA</span>
                        </div>
                    </div>
                    <p>
                        TIGA PUTRA spesialis jasa pemasangan plafon PVC, gypsum, dan partisi ruangan berkualitas dengan hasil presisi, rapi, dan bergaransi resmi untuk area Jabodetabek.
                    </p>
                    <div class="footer-socials">
                        <a href="https://www.facebook.com/profile.php?id=61589857567493" target="_blank" class="social-circle">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-circle">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="social-circle">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                        <a href="https://wa.me/6285652244210" target="_blank" class="social-circle">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2 -->
                <div>
                    <h4 class="footer-title">MENU CEPAT</h4>
                    <ul class="footer-links">
                        <li><a href="#home"><i class="fa-solid fa-angle-right me-1"></i> Home</a></li>
                        <li><a href="#tentang"><i class="fa-solid fa-angle-right me-1"></i> Tentang Kami</a></li>
                        <li><a href="#layanan"><i class="fa-solid fa-angle-right me-1"></i> Layanan Plafon</a></li>
                        <li><a href="#paket"><i class="fa-solid fa-angle-right me-1"></i> Paket & Harga</a></li>
                        <li><a href="#galeri"><i class="fa-solid fa-angle-right me-1"></i> Galeri Proyek</a></li>
                        <li><a href="#kontak"><i class="fa-solid fa-angle-right me-1"></i> Kontak Kami</a></li>
                    </ul>
                </div>

                <!-- Col 3 -->
                <div>
                    <h4 class="footer-title">KONTAK KAMI</h4>
                    <ul class="footer-contact list-unstyled">
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <span>0878-8584-7447</span>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp text-success"></i>
                            <span>0878-8584-7447 (WhatsApp Siaga)</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <span>bapapadli@gmail.com</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Jl. Telaga Jaya VIII No.41, RT.13/RW.5, Sunter Jaya, Kec. Tj. Priok, Jkt Utara, Daerah Khusus Ibukota Jakarta 14360</span>
                        </li>
                    </ul>
                </div>

                <!-- Col 4 -->
                <div class="footer-maps">
                    <h4 class="footer-title">LOKASI WORKSHOP</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8494733640496!2d106.86282437440873!3d-6.150908060290036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f575f3770ad9%3A0xfd05e82fe1f2ddb9!2sJl.%20Telaga%20Jaya%20VIII%20No.41%2C%20RT.13%2FRW.5%2C%20Sunter%20Jaya%2C%20Kec.%20Tj.%20Priok%2C%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2014360!5e0!3m2!1sen!2sid!4v1795437150782!5m2!1sen!2sid" style="border:0; width:100%; height:200px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>

            <div class="footer-bottom">
                &copy; {{ date('Y') }} TIGA PUTRA. All Rights Reserved. Spesialis Plafon & Partisi Interior Modern.
            </div>
        </div>
    </footer>

  

    <!-- ================= FLOATING WHATSAPP BUTTON ================= -->
    <a href="https://wa.me/6285652244210?text=Halo%20TIGA%20PUTRA,%20saya%20ingin%20konsultasi%20pemasangan%20plafon/partisi" target="_blank" class="float-wa-btn" aria-label="Chat WhatsApp">
        <span class="float-wa-tooltip">Tanya Tukang via WhatsApp</span>
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/plafond.js') }}"></script>
</body>
</html>
