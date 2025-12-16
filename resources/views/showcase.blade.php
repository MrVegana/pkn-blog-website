@extends('layouts.main')

@section('title', 'Showcase Karya')

@section('styles')
<style>
    /* Hover Effect */
    .card-hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .card-hover-lift:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }

    /* Ukuran Preview */
    .preview-container {
        height: 250px; 
        width: 100%;
        background-color: #f8f9fa;
        border: 1px solid #e9ecef;
    }
    .preview-container iframe,
    .preview-container object,
    .preview-container embed { width: 100%; height: 100%; border: none; }
    
    /* Penyesuaian Dark Mode */
    body.dark-mode .preview-container { background-color: #0f172a; border-color: #334155; }
    body.dark-mode .preview-fallback { background-color: #0f172a !important; border-color: #334155 !important; }

    /* Canva Overlay */
    .canva-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0,0,0,0.3); opacity: 0; transition: opacity 0.3s;
        display: flex; align-items: center; justify-content: center;
    }
    .canva-container:hover .canva-overlay { opacity: 1; }
</style>
@endsection

@section('content')
    <div class="mb-5 text-center" style="max-width: 700px; margin: 0 auto;">
        <h1 class="fw-bold mb-3 display-5">Showcase Karya</h1>
        <p class="text-muted lead">
            Kumpulan portofolio terbaik saya, mencakup <span class="text-danger fw-medium">podcast</span>, <span class="text-secondary fw-medium">artikel ilmiah</span>, dan <span class="text-info fw-medium">infografis kreatif</span> yang dikerjakan selama masa perkuliahan.
        </p>
    </div>

    <div class="row g-4">
        @foreach ($karya as $item)
            {{-- Grid Responsif --}}
            {{-- Tambahkan 'd-flex' di kolom agar kartu bisa meregang sama tinggi --}}
            <div class="col-12 col-md-6 col-lg-4 d-flex"> 
                
                {{-- KARTU UTAMA --}}
                <div class="card w-100 shadow-sm border-0 rounded-4 overflow-hidden card-hover-lift d-flex flex-column">

                    {{-- MEDIA VISUAL --}}
                    <div class="px-4 pt-4 pb-2">
                        @if ($item['tipe'] === 'youtube')
                            <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow-sm">
                                <iframe src="https://www.youtube.com/embed/{{ $item['video_id'] }}" allowfullscreen></iframe>
                            </div>

                        @elseif ($item['tipe'] === 'canva')
                            <div class="canva-container rounded-3 overflow-hidden shadow-sm position-relative" style="padding-top: 56.25%; background-color: #f0f2f5;">
                                <iframe loading="lazy" style="position: absolute; top:0; left:0; width:100%; height:100%; border:none;" src="{{ $item['embed_url'] }}" allowfullscreen></iframe>
                                <a href="{{ $item['embed_url'] }}" target="_blank" class="canva-overlay text-decoration-none">
                                    <span class="btn btn-light rounded-pill fw-bold px-4 shadow-sm"><i class="bi bi-arrows-fullscreen me-2"></i>Buka Layar Penuh</span>
                                </a>
                            </div>

                        @elseif ($item['tipe'] === 'ppt')
                            <img src="{{ asset($item['image'] ?? 'images/default-cover.jpg') }}" class="img-fluid rounded-3 shadow-sm w-100" alt="{{ $item['judul'] }}" style="height: 200px; object-fit: cover;">

                        @elseif (($item['tipe'] === 'gdoc' || $item['tipe'] === 'pdf') && !empty($item['viewer']))
                             <div class="preview-container rounded-3 overflow-hidden shadow-sm">
                                 <iframe src="{{ $item['viewer'] }}" allowfullscreen></iframe>
                             </div>

                        @elseif ($item['tipe'] === 'native_pdf' && !empty($item['file_path']))
                             <div class="preview-container rounded-3 overflow-hidden shadow-sm">
                                 <object data="{{ asset($item['file_path']) }}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf">
                                     <embed src="{{ asset($item['file_path']) }}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" />
                                     <div class="d-flex align-items-center justify-content-center h-100 preview-fallback bg-light text-muted">
                                         <small>Preview PDF tidak tersedia</small>
                                     </div>
                                 </object>
                             </div>
                             
                        @else
                             <div class="rounded-3 preview-fallback bg-light border d-flex flex-column align-items-center justify-content-center text-center p-4" style="height: 200px;">
                                 <i class="bi bi-file-earmark-break text-muted display-4 mb-2"></i>
                                 <small class="text-muted">Preview dokumen</small>
                             </div>
                        @endif
                    </div>


                    {{-- BODY KARTU --}}
                    {{-- Tambahkan 'flex-grow-1' agar bagian ini mengisi sisa ruang --}}
                    <div class="card-body px-4 pt-3 pb-0 flex-grow-1">
                        <h5 class="card-title fw-bolder lh-sm mb-3" style="font-size: 1.15rem;">
                            {{ $item['judul'] }}
                        </h5>
                        
                        <p class="card-text text-muted" style="font-size: 0.95rem; line-height: 1.6;">
                            {{ $item['deskripsi'] }}
                        </p>
                    </div>


                    {{-- FOOTER --}}
                    {{-- Tambahkan 'mt-auto' agar footer selalu didorong ke paling bawah --}}
                    <div class="card-footer bg-transparent border-0 p-4 pt-2 pb-4 mt-auto">
                        <div class="d-grid">
                            @php
                                $btnClass = 'btn-primary'; $btnText = 'Lihat Karya'; $btnIcon = 'bi-eye-fill'; $linkTarget = '_blank';
                                $finalLink = $item['link'] ?? '#';

                                if ($item['tipe'] === 'youtube') {
                                    $btnClass = 'btn-danger'; $btnText = 'Tonton Video'; $btnIcon = 'bi-play-circle-fill';
                                } elseif ($item['tipe'] === 'canva') {
                                    $btnClass = 'btn-info text-white'; $btnText = 'Buka Canva'; $btnIcon = 'bi-sliders'; $finalLink = $item['embed_url'];
                                } elseif ($item['tipe'] === 'native_pdf') {
                                    $btnClass = 'btn-dark'; $btnText = 'Download PDF'; $btnIcon = 'bi-download'; $finalLink = asset($item['file_path'] ?? '#'); $linkTarget = '_self';
                                } elseif (in_array($item['tipe'], ['ppt', 'pdf', 'gdoc'])) {
                                    $btnClass = 'btn-primary'; $btnText = 'Baca Dokumen'; $btnIcon = 'bi-book-half';
                                    $finalLink = $item['link'] ?? $item['viewer'] ?? (isset($item['file']) ? asset($item['file']) : '#');
                                }
                            @endphp

                            <a href="{{ $finalLink }}" target="{{ $linkTarget }}" class="btn {{ $btnClass }} rounded-pill py-2 fw-bold shadow-sm">
                                <i class="bi {{ $btnIcon }} me-2"></i> {{ $btnText }}
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection