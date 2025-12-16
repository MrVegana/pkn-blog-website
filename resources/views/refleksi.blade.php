@extends('layouts.main')

@section('title', 'Refleksi Akhir')

@section('styles')
<style>
    /* Tipografi yang nyaman dibaca */
    .reflection-text {
        font-size: 1.05rem;
        line-height: 1.8;
        text-align: justify;
        color: #4b5563; 
    }
    
    /* Dark mode text adjustment */
    body.dark-mode .reflection-text {
        color: #cbd5e1;
    }

    /* Kartu Kaca (Glassmorphism) */
    .glass-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.6);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }
    
    /* Dark mode Glass Card */
    body.dark-mode .glass-card {
        background: rgba(30, 41, 59, 0.7);
        border-color: rgba(255, 255, 255, 0.1);
    }

    /* Icon Container */
    .icon-square {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
    }

    /* Animasi */
    .fade-in-up { animation: fadeInUp 0.8s ease-out; }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
</style>
@endsection

@section('content')

{{-- HEADER SECTION --}}
<div class="text-center mb-5 fade-in-up">
    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill px-3 py-2 mb-3 fw-semibold">
        <i class="bi bi-person-check me-2"></i>Self Reflection
    </span>
    <h1 class="display-5 fw-bold mb-3">Refleksi & <span class="text-success">Kontemplasi</span></h1>
    <p class="text-muted lead mx-auto" style="max-width: 600px;">
        Menghubungkan titik-titik antara teori kewarganegaraan dan tanggung jawab sebagai calon ahli teknologi.
    </p>
</div>

<div class="row justify-content-center fade-in-up" style="animation-delay: 0.1s;">
    {{-- KOLOM UTAMA --}}
    <div class="col-lg-8">
        
        {{-- Kartu Refleksi --}}
        <div class="card glass-card border-0 rounded-4 p-4 p-md-5 mb-5">
            <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                <div class="icon-square bg-success bg-opacity-10 text-success me-3">
                    <i class="bi bi-quote fs-3"></i>
                </div>
                <div>
                    <h4 class="fw-bold mb-0">Refleksi Pribadi</h4>
                    <small class="text-muted">Semester Ganjil 2024/2025</small>
                </div>
            </div>

            <div class="reflection-text">
                {!! nl2br(e($refleksiAkhir ?? 'Belum ada data refleksi yang dimasukkan.')) !!}
            </div>
        </div>

        {{-- SECTION: ACTION PLAN (RENCANA TINDAK LANJUT) --}}
        <div class="mb-4">
            <h4 class="fw-bold mb-4 text-center">
                <i class="bi bi-signpost-split me-2 text-primary"></i>Rencana Tindak Lanjut
            </h4>
            
            <div class="row g-3">
                {{-- Plan 1 --}}
                <div class="col-md-4">
                    {{-- HAPUS 'bg-white' DI SINI AGAR DARK MODE JALAN --}}
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3" style="border-top: 4px solid #0d6efd !important;">
                        <div class="card-body">
                            <div class="text-primary mb-3">
                                <i class="bi bi-code-square fs-2"></i>
                            </div>
                            <h6 class="fw-bold">Integrasi Kode & Etika</h6>
                            <p class="text-muted small mb-0">
                                Menerapkan prinsip etika digital secara ketat dalam setiap pengembangan perangkat lunak yang saya lakukan.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Plan 2 --}}
                <div class="col-md-4">
                    {{-- HAPUS 'bg-white' DI SINI --}}
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3" style="border-top: 4px solid #198754 !important;">
                        <div class="card-body">
                            <div class="text-success mb-3">
                                <i class="bi bi-book-half fs-2"></i>
                            </div>
                            <h6 class="fw-bold">Literasi Berkelanjutan</h6>
                            <p class="text-muted small mb-0">
                                Terus meningkatkan pemahaman tentang hak asasi manusia, demokrasi, dan kebijakan publik yang relevan.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Plan 3 --}}
                <div class="col-md-4">
                    {{-- HAPUS 'bg-white' DI SINI --}}
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3" style="border-top: 4px solid #dc3545 !important;">
                        <div class="card-body">
                            <div class="text-danger mb-3">
                                <i class="bi bi-megaphone fs-2"></i>
                            </div>
                            <h6 class="fw-bold">Aksi Nyata</h6>
                            <p class="text-muted small mb-0">
                                Berkontribusi aktif dalam kegiatan kemahasiswaan yang mengawal isu demokrasi dan pelanggaran HAM.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SIGNATURE --}}
        <div class="text-center mt-5 pt-3 opacity-50">
            <p class="small fst-italic mb-1">Ditulis dengan kesadaran penuh,</p>
            <h5 class="font-monospace">Justin Christian Adam</h5>
        </div>

    </div>
</div>

@endsection