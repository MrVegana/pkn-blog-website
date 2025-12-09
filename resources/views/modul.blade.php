@extends('layouts.main')

@section('title', 'Modul Mingguan')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="mb-1">Modul Mingguan</h1>
            <p class="muted mb-0">Ringkasan perjalanan belajar saya pada mata kuliah <strong>Pendidikan Kewarganegaraan</strong>. Disusun per minggu.</p>
        </div>

        <span class="badge bg-primary fs-6">
            {{ count($moduls) }} Minggu Pembelajaran
        </span>
    </div>

    {{-- Navigasi Minggu --}}
    <div class="card shadow-soft mb-4">
        <div class="card-body py-3">
            <div class="d-flex flex-wrap gap-2">
                @foreach ($moduls as $modul)
                    <a href="#minggu-{{ $modul['minggu'] }}" class="btn btn-sm {{ $loop->first ? 'btn-primary' : 'btn-outline-primary' }}">
                        Minggu {{ $modul['minggu'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- List Modul --}}
    <div class="row g-4">
        @foreach ($moduls as $modul)
            <div class="col-12">
                <div id="minggu-{{ $modul['minggu'] }}" class="card shadow-soft card-animate p-3">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div>
                            @if (!empty($modul['kategori']) && $modul['kategori'] === 'pre')
                                <span class="badge bg-info mb-2"><i class="bi bi-journal-text me-1"></i>Pre-UTS</span>
                            @else
                                <span class="badge bg-warning text-dark mb-2"><i class="bi bi-bookmark-star me-1"></i>Post-UTS</span>
                            @endif

                            <h4 class="mb-1"><i class="bi bi-book-half me-1"></i> {{ $modul['judul'] }}</h4>

                            <p class="muted mb-0"><i class="bi bi-tag me-1"></i> {{ $modul['tema'] }}</p>
                        </div>
                        <div class="text-end">
                            <a href="{{ route('modul.detail', $modul['minggu']) }}" class="small text-decoration-none">
                                <i class="bi bi-box-arrow-up-right me-1"></i> Lihat detail minggu ini
                            </a>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-uppercase text-muted small"><i class="bi bi-question-circle me-1"></i> Pertanyaan Inti</h6>
                            <p>{{ $modul['pertanyaan_inti'] }}</p>

                            <h6 class="text-uppercase text-muted small mt-3"><i class="bi bi-lightbulb me-1"></i> Ringkasan Materi</h6>
                            <p>{{ $modul['ringkasan'] }}</p>
                        </div>

                        <div class="col-md-6">
                            <h6 class="text-uppercase text-muted small"><i class="bi bi-clipboard2-check me-1"></i> Bukti Pembelajaran</h6>
                            <p>{{ $modul['bukti_pembelajaran'] }}</p>

                            <h6 class="text-uppercase text-muted small mt-3"><i class="bi bi-pen me-1"></i> Refleksi Pribadi</h6>
                            <p>{{ $modul['refleksi'] }}</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <a href="#top" class="small text-decoration-none"><i class="bi bi-arrow-up-circle me-1"></i> Kembali ke atas</a>

                        @if (!$loop->last)
                            <a href="#minggu-{{ $moduls[$loop->index + 1]['minggu'] }}" class="btn btn-outline-primary btn-sm">
                                Selanjutnya: Minggu {{ $moduls[$loop->index + 1]['minggu'] }} <i class="bi bi-arrow-right-circle ms-1"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
