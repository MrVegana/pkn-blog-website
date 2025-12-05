<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Portofolio PKn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Portofolio PKn</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Halaman Utama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('modul') ? 'active' : '' }}" href="{{ route('modul') }}">Modul Mingguan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('showcase') ? 'active' : '' }}" href="{{ route('showcase') }}">Showcase Karya</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('refleksi') ? 'active' : '' }}" href="{{ route('refleksi') }}">Refleksi Akhir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mb-5">
    @yield('content')
</div>

<footer class="text-center py-3 border-top bg-white">
    <small>&copy; {{ date('Y') }} Portofolio PKn - Justin</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
