@extends('layouts.main')

@section('title', 'Modul Minggu ' . $modul['minggu'])

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-0">Minggu {{ $modul['minggu'] }}</h1>
    <a href="{{ route('modul') }}" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i>Kembali ke daftar modul
    </a>
</div>

<div class="card shadow-sm card-animate">
    <div class="card-body">
        @if ($modul['kategori'] === 'pre')
            <span class="badge bg-info mb-2">
                <i class="bi bi-journal-text me-1"></i>Pre-UTS
            </span>
        @else
            <span class="badge bg-warning text-dark mb-2">
                <i class="bi bi-bookmark-star me-1"></i>Post-UTS
            </span>
        @endif

        <h3 class="mb-1">
            <i class="bi bi-book-half me-1"></i>{{ $modul['judul'] }}
        </h3>
        <p class="text-muted mb-3">
            <i class="bi bi-tag me-1"></i>{{ $modul['tema'] }}
        </p>

        <h6 class="text-uppercase text-muted">
            <i class="bi bi-question-circle me-1"></i>Pertanyaan Inti
        </h6>
        <p>{{ $modul['pertanyaan_inti'] }}</p>

        <h6 class="text-uppercase text-muted mt-3">
            <i class="bi bi-lightbulb me-1"></i>Ringkasan Materi
        </h6>
        <p>{{ $modul['ringkasan'] }}</p>

        <h6 class="text-uppercase text-muted mt-3">
            <i class="bi bi-clipboard2-check me-1"></i>Bukti Pembelajaran
        </h6>
        <p>{{ $modul['bukti_pembelajaran'] }}</p>

        <h6 class="text-uppercase text-muted mt-3">
            <i class="bi bi-pen me-1"></i>Refleksi Pribadi
        </h6>
        <p>{{ $modul['refleksi'] }}</p>

        <div class="d-flex justify-content-between mt-4">
            @if($prev)
                <a href="{{ route('modul.detail', $prev['minggu']) }}" class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-arrow-left-circle me-1"></i>Minggu {{ $prev['minggu'] }}
                </a>
            @else
                <span></span>
            @endif

            @if($next)
                <a href="{{ route('modul.detail', $next['minggu']) }}" class="btn btn-outline-primary btn-sm">
                    Minggu {{ $next['minggu'] }}<i class="bi bi-arrow-right-circle ms-1"></i>
                </a>
            @endif
        </div>
    </div>
</div>
@endsection
