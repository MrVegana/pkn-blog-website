<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Portofolio PKn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
    /* Animasi card */
    .card-animate {
        opacity: 0;
        transform: translateY(10px);
        transition: all .4s ease-out;
    }
    .card-animate.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* LIGHT MODE default pakai bootstrap (tidak perlu banyak diubah) */

    /* DARK MODE: bikin kontras jelas */
    body.dark-mode {
        background-color: #121212 !important;
        color: #f8f9fa !important;   /* teks utama putih */
    }

    body.dark-mode .navbar {
        background-color: #000 !important;
    }

    body.dark-mode .navbar .navbar-brand,
    body.dark-mode .navbar .nav-link {
        color: #f8f9fa !important;
    }

    body.dark-mode .navbar .nav-link.active {
        color: #ffffff !important;
        font-weight: 600;
    }

    body.dark-mode .card {
        background-color: #1e1e1e !important;
        color: #f8f9fa !important;
        border-color: #2b2b2b !important;
    }

    body.dark-mode .card-title,
    body.dark-mode h1,
    body.dark-mode h2,
    body.dark-mode h3 {
        color: #f8f9fa !important;
    }

    /* sidebar navigasi kiri */
    body.dark-mode aside .card {
        background-color: #151515 !important;
    }

    body.dark-mode aside .card h6,
    body.dark-mode aside .card .nav-link {
        color: #e9ecef !important;
    }

    body.dark-mode aside .card .nav-link.fw-bold {
        color: #ffffff !important;
    }

    /* text-muted biar tetap kebaca di dark mode */
    body.dark-mode .text-muted {
        color: #adb5bd !important;
    }

    /* footer */
    body.dark-mode footer {
        background-color: #000 !important;
        color: #adb5bd !important;
        border-color: #2b2b2b !important;
    }

    /* tombol outline primary di dark mode */
    body.dark-mode .btn-outline-primary {
        color: #f8f9fa;
        border-color: #f8f9fa;
    }
    body.dark-mode .btn-outline-primary:hover {
        background-color: #f8f9fa;
        color: #000;
    }

    /* PRINT FRIENDLY */
    @media print {
        nav, footer {
            display: none !important;
        }
        body {
            padding: 10px;
            background: #fff !important;
            color: #000 !important;
        }
        .card {
            page-break-inside: avoid;
            border: 1px solid #ccc !important;
            box-shadow: none !important;
        }
        * {
            font-size: 13px;
            color: #000 !important;
        }
        a {
            text-decoration: none !important;
        }
    }
</style>

</head>

<body class="bg-light" id="top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Portofolio PKn</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      {{-- semua menu di kanan --}}
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
            Halaman Utama
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('modul*') ? 'active' : '' }}" href="{{ route('modul') }}">
            Modul Mingguan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('showcase') ? 'active' : '' }}" href="{{ route('showcase') }}">
            Showcase Karya
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('refleksi') ? 'active' : '' }}" href="{{ route('refleksi') }}">
            Refleksi Akhir
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('profil') ? 'active' : '' }}" href="{{ route('profil') }}">
            Profil
          </a>
        </li>

        {{-- tombol dark mode paling kanan --}}
        <li class="nav-item ms-2">
          <button id="themeToggle" class="btn btn-sm btn-outline-light">
            <i class="bi bi-moon-stars" id="themeIcon"></i>
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mb-5">
    <div class="row">
        <aside class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Navigasi</h6>
                    <ul class="nav flex-column small">
                        <li class="nav-item mb-1">
                            <a class="nav-link p-0 {{ request()->routeIs('home') ? 'fw-bold' : '' }}" href="{{ route('home') }}">
                                <i class="bi bi-house-door me-1"></i>Halaman Utama
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link p-0 {{ request()->routeIs('modul*') ? 'fw-bold' : '' }}" href="{{ route('modul') }}">
                                <i class="bi bi-journal-text me-1"></i>Modul Mingguan
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link p-0 {{ request()->routeIs('showcase') ? 'fw-bold' : '' }}" href="{{ route('showcase') }}">
                                <i class="bi bi-collection-play me-1"></i>Showcase Karya
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link p-0 {{ request()->routeIs('refleksi') ? 'fw-bold' : '' }}" href="{{ route('refleksi') }}">
                                <i class="bi bi-journal-check me-1"></i>Refleksi Akhir
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link p-0 {{ request()->routeIs('profil') ? 'fw-bold' : '' }}" href="{{ route('profil') }}">
                                <i class="bi bi-person-badge me-1"></i>Profil Mahasiswa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <main class="col-md-9">
            @yield('content')
        </main>
    </div>
</div>

<footer class="text-center py-3 border-top bg-white">
    <small>&copy; {{ date('Y') }} Portofolio PKn - Justin</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Animasi fade-in untuk card
    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.card-animate');

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            cards.forEach(card => observer.observe(card));
        } else {
            // fallback: langsung tampil
            cards.forEach(card => card.classList.add('visible'));
        }
    });
</script>

<script>
    // Dark mode toggle
    document.addEventListener('DOMContentLoaded', function () {
        const body = document.body;
        const toggle = document.getElementById('themeToggle');
        const icon = document.getElementById('themeIcon');

        function applyTheme(theme) {
            if (theme === 'dark') {
                body.classList.add('dark-mode');
                icon.classList.remove('bi-moon-stars');
                icon.classList.add('bi-sun');
            } else {
                body.classList.remove('dark-mode');
                icon.classList.remove('bi-sun');
                icon.classList.add('bi-moon-stars');
            }
        }

        const savedTheme = localStorage.getItem('theme') || 'light';
        applyTheme(savedTheme);

        if (toggle) {
            toggle.addEventListener('click', function () {
                const newTheme = body.classList.contains('dark-mode') ? 'light' : 'dark';
                localStorage.setItem('theme', newTheme);
                applyTheme(newTheme);
            });
        }
    });
</script>

</body>
</html>
