@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
<div class="row g-4 justify-content-center">
    
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4 card-hover">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-3">
                    <i class="bi bi-journal-richtext fs-3"></i>
                </div>
                <h5 class="fw-bold mb-0">Modul Mingguan</h5>
            </div>
            <p class="text-muted small mb-4">
                Dokumentasi pembelajaran per pertemuan. Berisi ringkasan materi, jawaban pertanyaan inti, dan bukti kegiatan.
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
                    <i class="bi bi-youtube fs-3"></i>
                </div>
                <h5 class="fw-bold mb-0">Showcase Karya</h5>
            </div>
            <p class="text-muted small mb-4">
                Output kreatif project UAS berupa Video Podcast, Artikel Ilmiah, dan Proposal Program Kreativitas Mahasiswa.
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
                    <i class="bi bi-check-circle fs-3"></i>
                </div>
                <h5 class="fw-bold mb-0">Refleksi Akhir</h5>
            </div>
            <p class="text-muted small mb-4">
                Kesimpulan personal mengenai relevansi mata kuliah Pendidikan Kewarganegaraan dengan jurusan Informatika.
            </p>
            <a href="{{ route('refleksi') }}" class="btn btn-outline-success btn-sm w-100 mt-auto stretched-link">
                Baca Refleksi
            </a>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-lg-10 mx-auto">
        <div class="card border-0 bg-dark text-white rounded-4 overflow-hidden position-relative">
            <div class="position-absolute top-0 end-0 p-3 opacity-25">
                <i class="bi bi-quote display-1"></i>
            </div>
            
            <div class="card-body p-5 text-center position-relative z-1">
                <figure class="mb-0">
                    <blockquote class="blockquote">
                        <p class="mb-3 fs-5">"Pendidikan bukan hanya persoalan ke sekolah dan ke kampus lalu mendapatkan ijazah, tapi soal memperluas wawasan serta menyerap ilmu kehidupan."</p>
                    </blockquote>
                    <figcaption class="blockquote-footer text-white-50 mt-1">
                        Dikutip untuk <cite title="Source Title">Portofolio PKn</cite>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>
@endsection