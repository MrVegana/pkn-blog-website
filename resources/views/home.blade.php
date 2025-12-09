@extends('layouts.main')

@section('title', 'Beranda')

@section('content')

<div class="row g-4 justify-content-center mb-5 fade-in-up">
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4 card-hover">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-3">
                    <i class="bi bi-journal-richtext fs-3"></i>
                </div>
                <h5 class="fw-bold mb-0">Modul Mingguan</h5>
            </div>
            <p class="text-muted small mb-4">
                Dokumentasi pembelajaran mingguan, mencakup ringkasan materi, pertanyaan inti, dan diskusi kelas.
            </p>
            <a href="{{ route('modul') }}" class="btn btn-outline-primary btn-sm w-100 mt-auto stretched-link">
                Buka Modul
            </a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4 card-hover">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-danger bg-opacity-10 text-danger rounded-3 p-3 me-3">
                    <i class="bi bi-play-circle fs-3"></i>
                </div>
                <h5 class="fw-bold mb-0">Showcase Karya</h5>
            </div>
            <p class="text-muted small mb-4">
                Kumpulan output kreatif project UAS: Video Podcast, Artikel Ilmiah, dan Proposal PKM.
            </p>
            <a href="{{ route('showcase') }}" class="btn btn-outline-danger btn-sm w-100 mt-auto stretched-link">
                Lihat Karya
            </a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4 card-hover">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-success bg-opacity-10 text-success rounded-3 p-3 me-3">
                    <i class="bi bi-person-workspace fs-3"></i>
                </div>
                <h5 class="fw-bold mb-0">Refleksi Akhir</h5>
            </div>
            <p class="text-muted small mb-4">
                Refleksi personal mengenai relevansi nilai-nilai kewarganegaraan dalam dunia teknologi informasi.
            </p>
            <a href="{{ route('refleksi') }}" class="btn btn-outline-success btn-sm w-100 mt-auto stretched-link">
                Baca Refleksi
            </a>
        </div>
    </div>
</div>

<div class="row align-items-center py-5 border-top border-bottom fade-in-up" style="animation-delay: 0.2s;">
    <div class="col-lg-6 mb-4 mb-lg-0">
        <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 mb-3 px-3 py-2 rounded-pill">
            <i class="bi bi-info-circle me-2"></i>Tentang Mata Kuliah
        </span>
        <h2 class="fw-bold mb-3">Kenapa Informatika Butuh PKn?</h2>
        <p class="lead text-muted mb-4">
            Mata Kuliah Pendidikan Kewarganegaraan (PKn) di Program Studi Informatika Universitas Matana bukan sekadar pelajaran tentang hukum dan negara.
        </p>
        <p class="text-muted">
            Dalam era digital, pemahaman tentang etika, regulasi siber (UU ITE), hak asasi digital, dan tanggung jawab sosial menjadi fondasi penting bagi seorang <em>software engineer</em>. Website ini mendokumentasikan bagaimana saya mengintegrasikan nilai-nilai kebangsaan ke dalam perspektif teknologi.
        </p>
        
        <div class="d-flex gap-3 mt-4">
            <div class="d-flex align-items-center">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                <span class="small fw-bold">Etika Digital</span>
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                <span class="small fw-bold">Wawasan Nusantara</span>
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                <span class="small fw-bold">Ketahanan Nasional</span>
            </div>
        </div>
    </div>
    
    <div class="col-lg-5 offset-lg-1">
        <div class="card bg-light border-0 rounded-4 p-4 text-center">
            <div class="card-body">
                <i class="bi bi-laptop display-1 text-primary opacity-25 mb-3"></i>
                <p class="text-muted small">Semester Ganjil 2024/2025</p>
                <hr class="w-25 mx-auto text-primary">
                <small class="d-block text-muted fst-italic">"Coding with Ethics"</small>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5 fade-in-up" style="animation-delay: 0.4s;">
    <div class="col-lg-10 mx-auto">
        <div class="card border-0 bg-dark text-white rounded-4 overflow-hidden position-relative">
            <div class="position-absolute top-0 end-0 p-3 opacity-25">
                <i class="bi bi-quote display-1"></i>
            </div>
            
            <div class="card-body p-5 text-center position-relative z-1">
                <figure class="mb-0">
                    <blockquote class="blockquote">
                        <p class="mb-3 fs-5 lh-base">
                            "Nasionalisme di era modern bukan lagi soal mengangkat senjata, tetapi bagaimana kita menggunakan keahlian teknologi kita untuk memajukan bangsa dan menjaga kedaulatan digital."
                        </p>
                    </blockquote>
                    <figcaption class="blockquote-footer text-white-50 mt-1">
                        Refleksi <cite title="Source Title">Mahasiswa Informatika</cite>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>

@endsection