@extends('layouts.main')

@section('title', 'Beranda')

@section('styles')
<style>
    /* Custom CSS untuk Halaman Beranda */
    
    /* Efek Gradient pada Teks */
    .text-gradient {
        background: linear-gradient(135deg, #0d6efd 0%, #0dcaf0 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 800;
    }

    /* Efek Glassmorphism pada Kartu */
    .glass-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .glass-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px 0 rgba(31, 38, 135, 0.15);
    }

    /* Gaya Terminal / Coding yang Lebih Rapi */
    .terminal-window {
        background-color: #1e1e1e !important; /* Force Dark Background */
        border-radius: 8px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.4);
        overflow: hidden;
        font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
        font-size: 0.9rem;
        line-height: 1.6;
        border: 1px solid #333;
    }

    .terminal-header {
        background-color: #252526 !important;
        padding: 10px 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        border-bottom: 1px solid #333;
    }

    .dot { height: 12px; width: 12px; border-radius: 50%; display: inline-block; }
    .red { background-color: #ff5f56; }
    .yellow { background-color: #ffbd2e; }
    .green { background-color: #27c93f; }

    .terminal-body { 
        padding: 25px; 
        color: #d4d4d4 !important; /* Force Text Color */
    }

    /* Syntax Highlighting Colors (Mirip VS Code) */
    .kwd { color: #569cd6 !important; font-weight: bold; } 
    .var { color: #9cdcfe !important; } 
    .str { color: #ce9178 !important; } 
    .fun { color: #dcdcaa !important; } 
    .prop { color: #9cdcfe !important; } 
    .cmt { color: #6a9955 !important; font-style: italic; } 
    
    .prompt { color: #27c93f !important; font-weight: bold; }
    .path { color: #57a1ff !important; font-weight: bold; }
    
    .cursor {
        display: inline-block;
        width: 8px;
        height: 18px;
        background-color: #d4d4d4;
        animation: blink 1s infinite;
        vertical-align: sub;
        margin-left: 2px;
    }

    @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }
</style>
@endsection

@section('content')

{{-- Bagian Intro Singkat --}}
<div class="text-center mb-5 fade-in-up">
    <h1 class="display-5 fw-bold mb-3">
        Ketika <span class="text-gradient">Logika Kode</span> <br> 
        Bertemu <span class="text-gradient">Etika Bangsa</span>
    </h1>
    <p class="text-muted lead mx-auto" style="max-width: 700px;">
        Selamat datang di portofolio digital saya. Sebuah ruang di mana algoritma pemrograman berjalan beriringan dengan nilai-nilai kewarganegaraan.
    </p>
</div>

{{-- Bagian Menu Kartu (Glassmorphism) --}}
<div class="row g-4 justify-content-center mb-5 fade-in-up">
    {{-- Card 1 --}}
    <div class="col-md-4">
        <div class="card h-100 border-0 glass-card p-4 rounded-4 position-relative overflow-hidden">
            <div class="position-absolute top-0 end-0 p-3 opacity-10">
                <i class="bi bi-journal-richtext display-1 text-primary"></i>
            </div>
            <div class="d-flex align-items-center mb-3">
                <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3">
                    <i class="bi bi-journal-text fs-4"></i>
                </div>
                <h5 class="fw-bold mb-0">Modul Mingguan</h5>
            </div>
            <p class="text-muted small mb-4">
                Arsip dokumentasi pembelajaran dari pertemuan awal hingga akhir, mencakup ringkasan dan diskusi kritis.
            </p>
            <a href="{{ route('modul') }}" class="btn btn-primary rounded-pill w-100 mt-auto stretched-link">
                Buka Arsip <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>

    {{-- Card 2 --}}
    <div class="col-md-4">
        <div class="card h-100 border-0 glass-card p-4 rounded-4 position-relative overflow-hidden">
            <div class="position-absolute top-0 end-0 p-3 opacity-10">
                <i class="bi bi-play-circle display-1 text-danger"></i>
            </div>
            <div class="d-flex align-items-center mb-3">
                <div class="bg-danger bg-opacity-10 text-danger rounded-circle p-3 me-3">
                    <i class="bi bi-collection-play fs-4"></i>
                </div>
                <h5 class="fw-bold mb-0">Showcase Karya</h5>
            </div>
            <p class="text-muted small mb-4">
                Galeri output kreatif UAS: Video Podcast Sejarah, Artikel Ilmiah Digital, dan Infografis Interaktif.
            </p>
            <a href="{{ route('showcase') }}" class="btn btn-danger rounded-pill w-100 mt-auto stretched-link">
                Lihat Galeri <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>

    {{-- Card 3 --}}
    <div class="col-md-4">
        <div class="card h-100 border-0 glass-card p-4 rounded-4 position-relative overflow-hidden">
            <div class="position-absolute top-0 end-0 p-3 opacity-10">
                <i class="bi bi-person-workspace display-1 text-success"></i>
            </div>
            <div class="d-flex align-items-center mb-3">
                <div class="bg-success bg-opacity-10 text-success rounded-circle p-3 me-3">
                    <i class="bi bi-lightning-charge fs-4"></i>
                </div>
                <h5 class="fw-bold mb-0">Refleksi Akhir</h5>
            </div>
            <p class="text-muted small mb-4">
                Kontemplasi personal mengenai peran mahasiswa IT dalam menjaga kedaulatan digital Indonesia.
            </p>
            <a href="{{ route('refleksi') }}" class="btn btn-success rounded-pill w-100 mt-auto stretched-link">
                Baca Refleksi <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</div>

{{-- Bagian Penjelasan (Layout Baru + Terminal) --}}
<div class="row align-items-center py-5 fade-in-up" style="animation-delay: 0.2s;">
    <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="ps-lg-3 border-start border-4 border-primary">
            <span class="text-uppercase text-primary fw-bold small letter-spacing-1">Integrasi Ilmu</span>
            <h2 class="fw-bold mb-3 display-6 mt-2">Kenapa Informatika <br> Butuh PKn?</h2>
        </div>
        <p class="lead text-muted my-4">
            Di era digital, nasionalisme bukan lagi sekadar mengangkat senjata, tapi bagaimana kita menggunakan baris kode untuk memajukan bangsa.
        </p>
        
        <ul class="list-unstyled">
            <li class="d-flex align-items-center mb-3">
                <i class="bi bi-shield-check text-primary fs-4 me-3"></i>
                <div>
                    <strong>Etika Digital (UU ITE)</strong>
                    <div class="small text-muted">Memahami batasan hukum dalam pengembangan software.</div>
                </div>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="bi bi-globe-asia-australia text-primary fs-4 me-3"></i>
                <div>
                    <strong>Wawasan Nusantara</strong>
                    <div class="small text-muted">Membangun teknologi yang inklusif untuk seluruh pelosok negeri.</div>
                </div>
            </li>
            <li class="d-flex align-items-center">
                <i class="bi bi-cpu text-primary fs-4 me-3"></i>
                <div>
                    <strong>Ketahanan Nasional Siber</strong>
                    <div class="small text-muted">Menjaga kedaulatan data dan infrastruktur digital Indonesia.</div>
                </div>
            </li>
        </ul>
    </div>
    
    {{-- VISUAL TERMINAL CODE --}}
    <div class="col-lg-6">
        <div class="terminal-window mx-auto" style="max-width: 550px;">
            <div class="terminal-header">
                <span class="dot red"></span>
                <span class="dot yellow"></span>
                <span class="dot green"></span>
                <span class="ms-auto text-muted small" style="font-size: 0.75rem;">code.js</span>
            </div>
            <div class="terminal-body">
                <div class="mb-3">
                    <span class="prompt">justin@matana</span>:<span class="path">~/portfolio</span>$ node philosophy.js
                </div>
                
                <div>
                    <span class="kwd">const</span> <span class="var">student</span> = {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="prop">name</span>: <span class="str">'Justin Christian Adam'</span>,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="prop">major</span>: <span class="str">'Informatics'</span>,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="prop">values</span>: [<span class="str">'Pancasila'</span>, <span class="str">'Innovation'</span>]<br>
                    };<br><br>
                    
                    <span class="cmt">// Function to integrate skills with ethics</span><br>
                    <span class="kwd">function</span> <span class="fun">createFuture</span>() {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="kwd">return</span> <span class="var">student</span>.<span class="prop">major</span> + <span class="str">" + Ethics"</span>;<br>
                    }<br><br>
                    
                    <span class="var">console</span>.<span class="fun">log</span>(<span class="fun">createFuture</span>());
                </div>
                
                {{-- PERBAIKAN: Style inline ini memaksa teks jadi putih 100% dan !important --}}
                <div class="mt-3">
                    <span style="color: #ff0101ff !important; font-weight: bold;">> "Informatics with Ethics"</span><span class="cursor"></span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection