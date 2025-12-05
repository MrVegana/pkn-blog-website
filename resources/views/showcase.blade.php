@extends('layouts.main')

@section('title', 'Showcase Karya')

@section('content')
<h1 class="mb-4">Showcase Karya</h1>
<p class="mb-4">
    Berikut adalah beberapa karya terbaik saya selama mengikuti mata kuliah Pendidikan Kewarganegaraan.
    Karya dapat berupa podcast, artikel, maupun infografis yang relevan dengan materi PKn.
</p>

<div class="row">
@foreach ($karya as $item)
    <div class="col-md-4 mb-3">
        <div class="card h-100 shadow-sm">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $item['judul'] }}</h5>
                <p class="text-muted mb-1">{{ $item['jenis'] }}</p>
                <p class="mb-3">{{ $item['deskripsi'] }}</p>

                @if($item['link'] !== '#')
                    <a href="{{ $item['link'] }}" class="btn btn-primary btn-sm mt-auto" target="_blank">
                        Lihat Karya
                    </a>
                @else
                    <span class="text-muted mt-auto"><small>Link karya belum ditambahkan.</small></span>
                @endif
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection
