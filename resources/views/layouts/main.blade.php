<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Portofolio PKn') - Portofolio PKn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portofolio Pendidikan Kewarganegaraan — Justin Christian Adam.">
    <meta name="author" content="Justin Christian Adam">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --brand: #0d6efd;
            --brand-dark: #0a58ca;
            --muted: #64748b;
            --card-bg: #ffffff;
            --page-bg: #f8fafc;
            --text-main: #1e293b;
        }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background: var(--page-bg);
            color: var(--text-main);
            height: 100%;
            display: flex;
            flex-direction: column;
            
            /* --- UPDATE: Transisi Smooth untuk Body --- */
            transition: background-color 0.5s ease, color 0.5s ease;
        }

        /* --- UPDATE: Transisi Smooth untuk Elemen Lain --- */
        .navbar, .card, .floating-info-card, footer, .btn, .badge, .hero {
            transition: background-color 0.5s ease, 
                        border-color 0.5s ease, 
                        color 0.5s ease, 
                        box-shadow 0.5s ease !important;
        }

        /* Transisi untuk teks agar tidak kaget */
        h1, h2, h3, h4, h5, h6, p, span, i, strong, b, .text-muted, .info-value, .info-label {
             transition: color 0.5s ease !important;
        }

        .navbar {
            backdrop-filter: blur(10px);
            background-color: rgba(33, 37, 41, 0.95) !important;
        }

        .navbar-brand {
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .nav-link {
            font-weight: 500;
            transition: all 0.2s; /* Transisi hover tetap cepat */
        }

        .nav-link:hover {
            color: #fff !important;
            transform: translateY(-1px);
        }

        .nav-link.active {
            color: #3b82f6 !important;
            font-weight: 700;
        }

        .hero {
            position: relative;
            padding: 80px 0 60px;
            background: radial-gradient(circle at top right, rgba(13, 110, 253, 0.1), transparent 40%), linear-gradient(180deg, #f8fafc 0%, #fff 100%);
            overflow: hidden;
        }

        .hero h1 {
            font-weight: 800;
            letter-spacing: -1px;
            line-height: 1.1;
            color: #0f172a;
        }

        .hero .lead {
            font-size: 1.15rem;
            line-height: 1.6;
            color: var(--muted);
            max-width: 90%;
        }

        .profile-wrapper {
            position: relative;
            display: inline-block;
            padding: 20px;
        }

        .profile-box {
            width: 260px;
            height: 260px;
            object-fit: cover;
            border-radius: 30px;
            box-shadow: 15px 15px 40px rgba(13, 110, 253, 0.15);
            /* Update transition untuk menyertakan box-shadow */
            transition: transform 0.3s ease, box-shadow 0.5s ease;
        }

        .profile-box:hover {
            transform: scale(1.02);
        }

        .floating-info-card {
            position: absolute;
            bottom: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            padding: 24px;
            border-radius: 24px;
            box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.1);
            min-width: 260px;
            z-index: 2;
        }

        .info-label {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--muted);
            font-weight: 700;
            margin-bottom: 4px;
            display: block;
        }

        .info-value {
            font-weight: 800;
            color: #212529;
            line-height: 1.2;
        }

        .card {
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 16px;
            background: var(--card-bg);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
            /* Transition sudah dihandle di group selector atas, tapi bisa dipertegas disini jika perlu */
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05);
        }

        .btn-brand {
            background-color: var(--brand);
            color: white;
            font-weight: 600;
            padding: 12px 28px;
            border-radius: 12px;
        }

        .btn-brand:hover {
            background-color: var(--brand-dark);
            box-shadow: 0 10px 20px rgba(13, 110, 253, 0.2);
            transform: translateY(-2px);
        }

        .icon-box-primary {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(13, 110, 253, 0.1);
            color: var(--brand);
            border-radius: 16px;
            font-size: 1.5rem;
        }

        footer {
            margin-top: auto;
            border-top: 1px solid #e2e8f0;
            padding: 30px 0;
            color: var(--muted);
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Dark Mode */
        body.dark-mode {
            --page-bg: #0f172a;
            --card-bg: #1e293b;
            --text-main: #ffffffff;
            --muted: #868686ff;
        }

        body.dark-mode .navbar {
            background-color: rgba(15, 23, 42, 0.95) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        body.dark-mode .hero {
            background: radial-gradient(circle at top right, rgba(56, 189, 248, 0.15), transparent 50%), linear-gradient(180deg, #0f172a 0%, #020617 100%);
        }

        body.dark-mode .hero h1,
        body.dark-mode .hero .display-4 {
            color: #ffffff !important;
        }

        body.dark-mode .card {
            background-color: var(--card-bg);
            color: var(--text-main);
            border-color: rgba(245, 206, 206, 0.1);
        }

        body.dark-mode h1, body.dark-mode h2, body.dark-mode h3,
        body.dark-mode h4, body.dark-mode h5, body.dark-mode h6,
        body.dark-mode strong, body.dark-mode b {
            color: #ffffffff !important;
        }

        body.dark-mode .text-muted {
            color: #94a3b8 !important;
        }

        body.dark-mode .btn-outline-dark,
        body.dark-mode .btn-outline-secondary {
            color: #e2e8f0;
            border-color: #475569;
        }

        body.dark-mode .btn-outline-dark:hover,
        body.dark-mode .btn-outline-secondary:hover {
            background-color: #475569;
            color: #fff;
        }

        body.dark-mode footer {
            border-top-color: #1e293b;
            color: #64748b;
        }

        /* Fix floating card in dark mode */
        body.dark-mode .floating-info-card {
            background: rgba(30, 41, 59, 0.9);
            border-color: rgba(255, 255, 255, 0.1);
        }
        body.dark-mode .info-value {
            color: #ffffff;
        }

        @media (max-width: 991px) {
            .hero {
                text-align: center;
                padding: 40px 0;
            }

            .hero .lead {
                margin: 0 auto;
            }

            .profile-wrapper {
                margin-top: 40px;
            }

            .floating-info-card {
                position: relative;
                bottom: auto;
                right: auto;
                margin-top: -30px;
                display: inline-block;
            }
        }
    </style>

    @stack('head')
</head>
<body id="top">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                <i class="bi bi-mortarboard-fill text-primary"></i> Portofolio PKn
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('modul*') ? 'active' : '' }}" href="{{ route('modul') }}">Modul</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('showcase') ? 'active' : '' }}" href="{{ route('showcase') }}">Showcase</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('refleksi') ? 'active' : '' }}" href="{{ route('refleksi') }}">Refleksi</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('profil') ? 'active' : '' }}" href="{{ route('profil') }}">Tentang Saya</a></li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <button id="themeToggle" class="btn btn-sm btn-outline-secondary rounded-circle" title="Ganti Tema">
                            <i class="bi bi-moon-stars"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- HERO SECTION: Hanya muncul di Halaman Home --}}
    @if(request()->routeIs('home'))
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 fade-in-up">
                    <span class="badge bg-primary bg-opacity-10 text-primary mb-3 px-3 py-2 rounded-pill">
                        Portofolio UAS Semester 3
                    </span>
                    <h1 class="display-4 mb-3">Blog <br><span class="text-primary">Pendidikan Kewarganegaraan</span></h1>
                    <p class="lead mb-4">
                        Halo, saya <strong>Justin Christian Adam</strong>. Selamat datang di ruang digital saya.
                        Website ini mendokumentasikan perjalanan pembelajaran saya, mulai dari modul mingguan, proyek kreatif, hingga refleksi akhir.
                    </p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                        <a href="{{ route('modul') }}" class="btn btn-brand">
                            <i class="bi bi-book-half me-2"></i>Baca Modul
                        </a>
                        <a href="{{ route('showcase') }}" class="btn btn-outline-secondary border-2 rounded-3 px-4 fw-bold">
                            <i class="bi bi-play-circle me-2"></i>Lihat Karya
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 text-center mt-5 mt-lg-0 fade-in-up" style="animation-delay: 0.2s">
                    <div class="profile-wrapper">
                        {{-- Ganti URL gambar di sini jika perlu --}}
                        <div class="profile-box" style="background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);"></div>

                        <div class="floating-info-card">
                            <div class="d-flex align-items-start gap-3 mb-4">
                                <div class="icon-box-primary flex-shrink-0">
                                    <i class="bi bi-person-video3"></i>
                                </div>
                                <div>
                                    <span class="info-label">Dosen Pengampu</span>
                                    <div class="info-value fs-5">Althien John<br>Pesurnay S.T M.Phil</div>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between border-top pt-3">
                                <div class="text-center pe-3">
                                    <span class="info-label">Tahun</span>
                                    <span class="info-value">2025</span>
                                </div>
                                <div class="text-center px-3 border-start border-end">
                                    <span class="info-label">Semester</span>
                                    <span class="info-value">3</span>
                                </div>
                                <div class="text-center ps-3">
                                    <span class="info-label">Prodi</span>
                                    <span class="info-value">TI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    {{-- KONTEN UTAMA --}}
    <main class="main-content py-5">
        <div class="container">
            @if(!request()->routeIs('home'))
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active text-muted" aria-current="page">@yield('title')</li>
                </ol>
            </nav>
            @endif

            @yield('content')
        </div>
    </main>
     {{-- BAGIAN BAWAH HOME (Hanya muncul di halaman Home) --}}
    @if(request()->routeIs('home'))
    
        {{-- 1. KODE ETIK INSINYUR DIGITAL (Dikembalikan) --}}
        <section class="py-5 my-5" style="background: linear-gradient(to bottom, rgba(13, 110, 253, 0.05), transparent); border-radius: 24px;">
            <div class="container py-4">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 rounded-pill px-3 py-2 mb-3 fw-semibold">
                            <i class="bi bi-terminal me-2"></i>Core Values
                        </span>
                        <h2 class="fw-bold display-6 mb-3">Kode Etik <span class="text-primary">Insinyur Digital</span></h2>
                        <p class="lead text-muted">
                            Mengintegrasikan prinsip kebangsaan ke dalam setiap baris kode untuk menciptakan teknologi yang bertanggung jawab dan bermanfaat bagi Indonesia.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    {{-- Card 1 --}}
                    <div class="col-md-4 d-flex">
                        <div class="card h-100 w-100 border-0 shadow-sm p-4 rounded-4" style="background: var(--card-bg); transition: all 0.3s; border: 1px solid rgba(255,255,255,0.05);">
                            <div class="mb-4">
                                <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary rounded-3" style="width: 64px; height: 64px;">
                                    <i class="bi bi-shield-lock-fill fs-2"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold mb-3">Etika & Integritas Digital</h4>
                            <p class="text-muted mb-0">
                                Memahami implikasi hukum (UU ITE) dan moral dalam pengembangan perangkat lunak. Menjaga privasi data pengguna dan mencegah penyalahgunaan teknologi.
                            </p>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="col-md-4 d-flex">
                        <div class="card h-100 w-100 border-0 shadow-sm p-4 rounded-4" style="background: var(--card-bg); transition: all 0.3s; border: 1px solid rgba(255,255,255,0.05);">
                            <div class="mb-4">
                                <div class="d-inline-flex align-items-center justify-content-center bg-danger bg-opacity-10 text-danger rounded-3" style="width: 64px; height: 64px;">
                                    <i class="bi bi-globe-asia-australia fs-2"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold mb-3">Nasionalisme di Era Siber</h4>
                            <p class="text-muted mb-0">
                                Berkontribusi pada kedaulatan digital bangsa dengan menciptakan solusi teknologi lokal yang inovatif dan berdaya saing global.
                            </p>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="col-md-4 d-flex">
                        <div class="card h-100 w-100 border-0 shadow-sm p-4 rounded-4" style="background: var(--card-bg); transition: all 0.3s; border: 1px solid rgba(255,255,255,0.05);">
                            <div class="mb-4">
                                <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success rounded-3" style="width: 64px; height: 64px;">
                                    <i class="bi bi-people-fill fs-2"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold mb-3">Tanggung Jawab Sosial</h4>
                            <p class="text-muted mb-0">
                                Menggunakan keahlian teknis untuk memecahkan masalah sosial dan membangun teknologi yang inklusif, aksesibel, dan berkeadilan bagi seluruh masyarakat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- BAGIAN BAWAH HOME (Hanya muncul di halaman Home) --}}
    @if(request()->routeIs('home'))
        
        {{-- 1. KUTIPAN REFLEKSI (TETAP ADA DI PALING BAWAH) --}}
        <section class="py-5 mb-4">
            <div class="container">
                <div class="p-5 rounded-4 text-center" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); color: white; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                    {{-- Tanda Kutip Besar --}}
                    <div style="position: absolute; top: -10px; right: 20px; font-size: 150px; opacity: 0.1; font-family: serif; line-height: 1;">“</div>

                    <div class="row justify-content-center position-relative" style="z-index: 1;">
                        <div class="col-lg-9">
                            <blockquote class="blockquote mb-0">
                                <p class="fs-4 fw-medium mb-4 lh-base font-monospace" style="font-family: 'Plus Jakarta Sans', sans-serif !important; letter-spacing: -0.5px;">
                                    "Nasionalisme di era modern bukan lagi soal mengangkat senjata, tetapi bagaimana kita menggunakan keahlian teknologi kita untuk memajukan bangsa dan menjaga kedaulatan digital."
                                </p>
                                <footer class="blockquote-footer text-white-50 mt-2" style="font-size: 0.9rem;">
                                    Refleksi <cite title="Source Title" class="text-white fst-italic fw-bold">Mahasiswa Informatika</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif

    <footer class="text-center">
        <div class="container">
            <p class="mb-0 small fw-medium">
                &copy; {{ date('Y') }} Justin Christian Adam.
                <span class="text-muted mx-2">|</span>
                Dibuat dengan Laravel & Bootstrap 5
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function() {
            const toggle = document.getElementById('themeToggle');
            const icon = toggle?.querySelector('i');
            const body = document.body;
            const saved = localStorage.getItem('theme') || 'light';

            if (saved === 'dark') {
                body.classList.add('dark-mode');
                if (icon) icon.className = 'bi bi-sun-fill';
            }

            toggle?.addEventListener('click', () => {
                body.classList.toggle('dark-mode');
                const isDark = body.classList.contains('dark-mode');
                localStorage.setItem('theme', isDark ? 'dark' : 'light');
                if (icon) icon.className = isDark ? 'bi bi-sun-fill' : 'bi bi-moon-stars';
            });
        })();
    </script>

    @stack('scripts')
</body>
</html>