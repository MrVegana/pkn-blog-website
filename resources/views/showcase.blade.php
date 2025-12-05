@extends('layouts.main')
@php use Illuminate\Support\HtmlString; @endphp

@section('title', 'Showcase Karya')

@section('content')
    <h1 class="mb-3">Showcase Karya</h1>
    <p class="text-muted mb-4">
        Berikut adalah beberapa karya terbaik saya selama mengikuti mata kuliah
        <strong>Pendidikan Kewarganegaraan</strong>. Karya dapat berupa podcast, artikel ilmiah,
        maupun proposal penelitian yang relevan dengan materi PKn.
    </p>

    <div class="row g-4">
        @foreach ($karya as $item)
            <div class="col-md-4 d-flex">
                <div class="card shadow-sm card-animate w-100 d-flex flex-column">

                    <div class="card-body d-flex flex-column">

                        {{-- Badge jenis karya --}}
                        <div class="mb-2">
                            @if ($item['tipe'] === 'youtube')
                                <span class="badge bg-danger">
                                    <i class="bi bi-youtube me-1"></i>{{ $item['jenis'] }}
                                </span>
                            @elseif ($item['tipe'] === 'gdoc')
                                <span class="badge bg-success">
                                    <i class="bi bi-file-earmark-pdf me-1"></i>{{ $item['jenis'] }}
                                </span>
                            @else
                                <span class="badge bg-secondary">{{ $item['jenis'] }}</span>
                            @endif
                        </div>

                        {{-- Preview konten --}}
                        @if ($item['tipe'] === 'youtube')
                            <div class="ratio ratio-16x9 mb-3">
                                <iframe src="https://www.youtube.com/embed/{{ $item['video_id'] }}"
                                        class="rounded"
                                        allowfullscreen>
                                </iframe>
                            </div>

                        @elseif ($item['tipe'] === 'gdoc')
                            <div class="viewer-box mb-3" style="width: 100%; height: 280px; border: 1px solid #ddd; border-radius: 6px; overflow: hidden;">
                                <iframe src="{{ $item['viewer'] }}"
                                        style="width: 100%; height: 100%; border: none;">
                                </iframe>
                            </div>
                        @endif

                        {{-- Judul --}}
                        <h5 class="card-title mb-2">
                            {{ Str::limit($item['judul'], 80) }}
                        </h5>

                        {{-- Deskripsi --}}
                        <p class="card-text small flex-grow-1">
                            {{ $item['deskripsi'] }}
                        </p>

                        {{-- Tombol aksi --}}
                        <div class="mt-3">
                            @if ($item['tipe'] === 'youtube')
                                <a href="{{ $item['link'] }}" target="_blank" class="btn btn-primary w-100">
                                    <i class="bi bi-play-circle me-1"></i> Tonton di YouTube
                                </a>
                            @elseif ($item['tipe'] === 'gdoc')
                                <a href="{{ $item['viewer'] }}" target="_blank" class="btn btn-dark w-100">
                                    <i class="bi bi-box-arrow-up-right me-1"></i> Buka Dokumen
                                </a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
