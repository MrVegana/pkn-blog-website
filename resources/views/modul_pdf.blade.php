<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul Mingguan PKn - PDF</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        h1, h2, h3, h4 { margin: 0; padding: 0; }
        .modul { margin-bottom: 20px; page-break-inside: avoid; }
        .judul { font-weight: bold; font-size: 14px; }
        .badge { font-size: 11px; padding: 2px 6px; border-radius: 4px; }
        .badge-pre { background: #d0ebff; }
        .badge-post { background: #fff3bf; }
        .section-title { font-weight: bold; margin-top: 6px; }
    </style>
</head>
<body>
    <h1>Portofolio Modul Mingguan PKn</h1>
    <p>Nama: Justin Christian Adam</p>
    <hr>

    @foreach ($moduls as $modul)
        <div class="modul">
            <div>
                @if($modul['kategori'] === 'pre')
                    <span class="badge badge-pre">Pre-UTS</span>
                @else
                    <span class="badge badge-post">Post-UTS</span>
                @endif
            </div>
            <div class="judul">
                Minggu {{ $modul['minggu'] }} - {{ $modul['judul'] }}
            </div>
            <div><em>{{ $modul['tema'] }}</em></div>

            <div class="section-title">Pertanyaan Inti</div>
            <div>{{ $modul['pertanyaan_inti'] }}</div>

            <div class="section-title">Ringkasan Materi</div>
            <div>{{ $modul['ringkasan'] }}</div>

            <div class="section-title">Bukti Pembelajaran</div>
            <div>{{ $modul['bukti_pembelajaran'] }}</div>

            <div class="section-title">Refleksi Pribadi</div>
            <div>{{ $modul['refleksi'] }}</div>
        </div>
        <hr>
    @endforeach
</body>
</html>
