@extends('layouts.main')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <div class="card-body text-center">
               <div class="text-center mb-3">
    <img src="{{ asset($profil['foto']) }}" 
         class="rounded-circle shadow-sm"
         alt="Foto Justin"
         style="width: 140px; height: 140px; object-fit: cover;">
</div>

                <h4>{{ $profil['nama'] }}</h4>
                <p class="text-muted mb-1">{{ $profil['program_studi'] }}</p>
                <p class="text-muted">{{ $profil['universitas'] }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-8 mb-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Data Mahasiswa</h5>
                <table class="table table-sm">
                    <tr>
                        <th style="width: 150px;">NIM</th>
                        <td>{{ $profil['nim'] }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $profil['email'] }}</td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td>{{ $profil['program_studi'] }}</td>
                    </tr>
                    <tr>
                        <th>Universitas</th>
                        <td>{{ $profil['universitas'] }}</td>
                    </tr>
                </table>

                <h5 class="mt-3">Tentang Saya</h5>
                <p>{{ $profil['deskripsi'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
