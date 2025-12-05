@extends('layouts.main')

@section('title', 'Modul Mingguan')

@section('content')
<h1 class="mb-4">Modul Mingguan</h1>
<p class="mb-4">
    Halaman ini berisi rangkuman setiap topik mingguan, pertanyaan inti, bukti pembelajaran,
    dan refleksi singkat saya sebagai bentuk portofolio pembelajaran.
</p>

@foreach ($moduls as $modul)
    <div class="card mb-3 shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Minggu {{ $modul['minggu'] }}: {{ $modul['judul'] }}</h5>
            <p><strong>Pertanyaan Inti:</strong> {{ $modul['pertanyaan_inti'] }}</p>
            <p><strong>Ringkasan:</strong> {{ $modul['ringkasan'] }}</p>
            <p><strong>Bukti Pembelajaran:</strong> {{ $modul['bukti_pembelajaran'] }}</p>
            <p><strong>Refleksi:</strong> {{ $modul['refleksi'] }}</p>
        </div>
    </div>
@endforeach
@endsection
