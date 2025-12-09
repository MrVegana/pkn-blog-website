@extends('layouts.main')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="row fade-in-up">
    <div class="col-12 mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                
                <li class="breadcrumb-item active" aria-current="page"> </li>
            </ol>
        </nav>
        <h2 class="fw-bold">Profil Mahasiswa</h2>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card border-0 shadow-sm text-center p-4">
            <div class="card-body">
                <img src="{{ asset('images/justin.jpeg') }}"
                     alt="Foto Profil" 
                     class="rounded-circle img-thumbnail mb-3" 
                     style="width: 150px; height: 150px; object-fit: cover;">
                
                <h4 class="fw-bold mb-1">Justin Christian Adam</h4>
                <p class="text-muted mb-4">Mahasiswa Informatika</p>

                <div class="text-start border-top pt-3 small">
                    <div class="mb-2">
                        <strong class="d-block text-secondary">NIM</strong>
                        <span>202455200006</span>
                    </div>
                    <div class="mb-2">
                        <strong class="d-block text-secondary">Email</strong>
                        <span class="text-break">justin.adam@student.matanauniversity.ac.id</span>
                    </div>
                    <div class="mb-3">
                        <strong class="d-block text-secondary">Universitas</strong>
                        <span>Universitas Matana</span>
                    </div>
                </div>

                <div class="d-grid gap-2 mb-3">
                    <h6 class="text-muted small fw-bold text-uppercase mt-2 mb-1">Terhubung dengan saya</h6>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="https://api.whatsapp.com/send/?phone=6285782952242&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-success rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;" title="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        
                        <a href="https://instagram.com/justinnadam" target="_blank" class="btn text-white rounded-circle" style="background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="https://www.linkedin.com/in/justin-adam-382312328" target="_blank" class="btn btn-primary rounded-circle" style="background-color: #0077b5; border-color: #0077b5; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;" title="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        
                         <a href="https://github.com/MrVegana" target="_blank" class="btn btn-dark rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;" title="GitHub">
                            <i class="bi bi-github"></i>
                        </a>
                    </div>
                </div>
                <hr>
                <a href="{{ route('home') }}" class="btn btn-outline-secondary w-100">
                    <i class="bi bi-arrow-left me-2"></i>Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card border-0 shadow-sm p-4 h-100">
            <div class="card-body">
                <h5 class="fw-bold mb-3"><i class="bi bi-person-lines-fill me-2 text-primary"></i>Tentang Saya</h5>
                <p class="text-muted leading-relaxed">
                    Mahasiswa Informatika yang memiliki ketertarikan mendalam pada pengembangan perangkat lunak, basis data, dan algoritma. 
                    Selain aspek teknis, saya juga menaruh perhatian besar pada isu-isu sosial, demokrasi, dan penerapan etika dalam teknologi.
                </p>

                <h5 class="fw-bold mb-3 mt-5"><i class="bi bi-lightbulb me-2 text-warning"></i>Keahlian & Minat</h5>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge bg-light text-dark border px-3 py-2">Pemrograman Web (Laravel)</span>
                    <span class="badge bg-light text-dark border px-3 py-2">Basis Data (MySQL)</span>
                    <span class="badge bg-light text-dark border px-3 py-2">UI/UX Design</span>
                    <span class="badge bg-light text-dark border px-3 py-2">Isu Demokrasi & HAM</span>
                    <span class="badge bg-light text-dark border px-3 py-2">Teknologi & Etika</span>
                </div>

                <div class="mt-5 p-3 bg-primary bg-opacity-10 rounded-3 border border-primary border-opacity-25">
                    <div class="d-flex">
                        <i class="bi bi-quote fs-1 text-primary me-3 opacity-50"></i>
                        <div>
                            <p class="mb-0 fst-italic">
                                "Teknologi bukan sekadar barisan kode yang kita tulis, melainkan sebuah instrumen untuk memecahkan masalah nyata dan menciptakan dampak positif yang berkelanjutan bagi masyarakat luas."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection