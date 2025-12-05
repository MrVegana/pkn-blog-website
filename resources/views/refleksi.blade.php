@extends('layouts.main')

@section('title', 'Refleksi Akhir')

@section('content')
<h1 class="mb-4">Refleksi Akhir</h1>
<p class="mb-3">
    Halaman ini berisi refleksi akhir saya terkait pengetahuan, sikap, dan keterampilan kewarganegaraan
    setelah mengikuti mata kuliah Pendidikan Kewarganegaraan.
</p>

<div class="card shadow-sm">
    <div class="card-body" style="white-space: pre-line;">
        {{ $refleksiAkhir }}
    </div>
</div>
@endsection
