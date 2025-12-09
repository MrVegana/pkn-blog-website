@extends('layouts.main')
@php use Illuminate\Support\Str; @endphp

@section('title', 'Showcase Karya')

@section('content')
    <h1 class="mb-3">Showcase Karya</h1>
    <p class="muted mb-4">Kumpulan podcast, artikel ilmiah, dan proposal penelitian yang saya kerjakan selama perkuliahan.</p>

    <div class="row g-4">
        @foreach ($karya as $item)
            <div class="col-md-4 d-flex">
                <div class="card shadow-soft card-animate w-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column">

                        {{-- Badge --}}
                        <div class="mb-2">
                            @if ($item['tipe'] === 'youtube')
                                <span class="badge bg-danger"><i class="bi bi-youtube me-1"></i>{{ $item['jenis'] }}</span>
                            @elseif ($item['tipe'] === 'gdoc' || $item['tipe'] === 'pdf')
                                <span class="badge bg-success"><i class="bi bi-file-earmark-pdf me-1"></i>{{ $item['jenis'] }}</span>
                            @else
                                <span class="badge bg-secondary">{{ $item['jenis'] }}</span>
                            @endif
                        </div>

                        {{-- Preview --}}
                        @if ($item['tipe'] === 'youtube' && !empty($item['video_id']))
                            <div class="ratio ratio-16x9 mb-3">
                                <iframe src="https://www.youtube.com/embed/{{ $item['video_id'] }}" allowfullscreen></iframe>
                            </div>
                        @elseif (($item['tipe'] === 'gdoc' || $item['tipe'] === 'pdf') && !empty($item['viewer']))
                            <div class="viewer-box mb-3" style="height:260px; overflow:hidden; border-radius:8px; border:1px solid rgba(0,0,0,0.06);">
                                <iframe src="{{ $item['viewer'] }}" style="width:100%; height:100%; border:none;"></iframe>
                            </div>
                        @endif

                        {{-- Title & desc --}}
                        <h5 class="card-title mb-2">{{ Str::limit($item['judul'], 100) }}</h5>
                        <p class="card-text small flex-grow-1">{{ $item['deskripsi'] }}</p>

                        {{-- Buttons --}}
                        <div class="mt-3 d-grid gap-2">
                            @if ($item['tipe'] === 'youtube')
                                <a href="{{ $item['link'] }}" target="_blank" class="btn btn-primary"><i class="bi bi-play-circle me-1"></i> Tonton di YouTube</a>
                            @elseif ($item['tipe'] === 'gdoc' && !empty($item['viewer']))
                                <a href="{{ $item['viewer'] }}" target="_blank" class="btn btn-dark"><i class="bi bi-box-arrow-up-right me-1"></i> Buka </a>
                            @elseif ($item['tipe'] === 'pdf' && !empty($item['file']))
                                <a href="{{ asset($item['file']) }}" target="_blank" class="btn btn-dark"><i class="bi bi-file-earmark-pdf me-1"></i> Buka PDF</a>
                            @elseif (!empty($item['link']))
                                <a href="{{ $item['link'] }}" target="_blank" class="btn btn-outline-primary">Lihat Karya</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
