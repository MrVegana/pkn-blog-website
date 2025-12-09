@extends('layouts.main')

@section('title', 'Refleksi Akhir')

@section('content')
    <h1 class="mb-3">Refleksi Akhir</h1>

    <div class="card shadow-soft card-animate p-3">
        <div class="card-body">
            <h5 class="mb-3">Refleksi Pribadi</h5>
            <p class="muted">
                {!! nl2br(e($refleksiAkhir ?? 'Belum ada refleksi')) !!}
            </p>

            <hr>

            <h6 class="mb-2">Rencana Tindak Lanjut</h6>
            <ul>
                <li>Menerapkan etika digital dalam pengembangan perangkat lunak.</li>
                <li>Meningkatkan literasi soal hak asasi, demokrasi, dan kebijakan publik.</li>
                <li>Berkontribusi dalam kegiatan kemahasiswaan terkait demokrasi & pelanggaran HAM.</li>
            </ul>
        </div>
    </div>
@endsection
@push('head')
    <style>
        /* Gaya khusus untuk halaman refleksi */
        .card-body p {
            text-align: justify;
            line-height: 1.6;
        }
    </style>