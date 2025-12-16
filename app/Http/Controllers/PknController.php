<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PknController extends Controller
{   
    public function profil()
{
    $profil = [
        'nama' => 'Justin Christian Adam',
        'nim' => '202455200006',
        'program_studi' => 'Informatika',
        'universitas' => 'Universitas Matana',
        'email' => 'justin.adam@student.matanauniversity.ac.id',
        'deskripsi' => 'Mahasiswa Informatika yang tertarik pada pemrograman, basis data, dan isu-isu demokrasi serta hak asasi manusia.',
        'foto' => '/images/justin.jpeg' 
    ];

    return view('profil', compact('profil'));
}

    public function home()
    {
        return view('home');
    }

    public function modulPdf()
{
    $moduls = $this->getModuls();

    $pdf = Pdf::loadView('modul_pdf', compact('moduls'))
        ->setPaper('a4', 'portrait');

    return $pdf->download('portofolio-modul-pkn.pdf');
}


    private function getModuls()
{
    return [
        [
            'minggu' => 1,
            'kategori' => 'pre',
            'judul' => 'Pendahuluan Pendidikan Kewarganegaraan',
            'tema' => 'Pengantar PKn dan peran warga negara',
            'pertanyaan_inti' => 'Mengapa mahasiswa Informatika perlu mempelajari Pendidikan Kewarganegaraan?',
            'ringkasan' => 'Mengenal tujuan, ruang lingkup, dan kompetensi dasar PKn: pengetahuan, sikap, dan keterampilan kewarganegaraan.',
            'bukti_pembelajaran' => 'Mencatat poin penting dari slide dosen, mengikuti diskusi kelas, dan membaca materi pendahuluan.',
            'refleksi' => 'Saya menyadari bahwa PKn bukan hanya teori, tetapi fondasi untuk memahami peran saya sebagai warga negara di era digital.'
        ],
        [
            'minggu' => 2,
            'kategori' => 'pre',
            'judul' => 'Sejarah Pembentukan Identitas Nasional',
            'tema' => 'Nasionalisme dan lahirnya bangsa Indonesia',
            'pertanyaan_inti' => 'Bagaimana proses sejarah membentuk identitas nasional Indonesia?',
            'ringkasan' => 'Membahas Sumpah Pemuda, organisasi pergerakan, dan teori bangsa menurut Renan dan Anderson.',
            'bukti_pembelajaran' => 'Menganalisis Sumpah Pemuda dan peran organisasi Boedi Oetomo dalam tugas ringkasan.',
            'refleksi' => 'Saya melihat bahwa identitas Indonesia lahir dari pengalaman sejarah bersama sebagai bangsa yang pernah dijajah.'
        ],
        [
            'minggu' => 3,
            'kategori' => 'pre',
            'judul' => 'Hukum, Rakyat, Negara & Segitiga Kekuasaan',
            'tema' => 'Kontrak sosial dan legitimasi kekuasaan',
            'pertanyaan_inti' => 'Mengapa negara dan hukum tetap dibutuhkan di tengah kebebasan individu?',
            'ringkasan' => 'Mengkaji teori kontrak sosial, hubungan rakyat–negara–hukum, dan konsep negara hukum.',
            'bukti_pembelajaran' => 'Membuat mind map hubungan rakyat, hukum, dan negara berdasarkan penjelasan dosen.',
            'refleksi' => 'Saya menyadari bahwa kekuasaan negara seharusnya selalu kembali pada persetujuan rakyat.'
        ],
        [
            'minggu' => 4,
            'kategori' => 'pre',
            'judul' => 'Ideologi & Falsafah Bangsa',
            'tema' => 'Pancasila sebagai ideologi terbuka',
            'pertanyaan_inti' => 'Apa yang membedakan Pancasila dengan ideologi lain di dunia?',
            'ringkasan' => 'Mempelajari pengertian ideologi, ragam ideologi dunia, dan kedudukan Pancasila sebagai pandangan hidup dan dasar negara.',
            'bukti_pembelajaran' => 'Membandingkan Pancasila dengan liberalisme dan sosialisme dalam diskusi kelompok.',
            'refleksi' => 'Saya belajar bahwa Pancasila lahir dari budaya Indonesia sendiri, bukan sekadar menyalin ideologi asing.'
        ],
        [
            'minggu' => 5,
            'kategori' => 'post',
            'judul' => 'Konstitusi & Negara Hukum',
            'tema' => 'UUD 1945 dan rule of law',
            'pertanyaan_inti' => 'Mengapa konstitusi penting untuk membatasi kekuasaan?',
            'ringkasan' => 'Memahami konstitusi sebagai norma dasar, sejarah perubahan UUD 1945, dan pentingnya pemisahan kekuasaan.',
            'bukti_pembelajaran' => 'Mengerjakan tugas ringkasan sejarah konstitusi Indonesia dan hierarki peraturan perundangan.',
            'refleksi' => 'Saya menyadari bahwa tanpa konstitusi, kekuasaan bisa mudah disalahgunakan dan rakyat yang dirugikan.'
        ],
        [
            'minggu' => 6,
            'kategori' => 'post',
            'judul' => 'Demokrasi Indonesia',
            'tema' => 'Prinsip demokrasi dan praktiknya di Indonesia',
            'pertanyaan_inti' => 'Apakah demokrasi di Indonesia sudah berjalan sesuai prinsip-prinsip idealnya?',
            'ringkasan' => 'Mengkaji makna demokrasi, bentuk sistem demokrasi, dan demokrasi Pancasila yang mengutamakan musyawarah.',
            'bukti_pembelajaran' => 'Mengamati proses pemilu dan contoh praktik demokrasi di lingkungan kampus dan masyarakat.',
            'refleksi' => 'Saya merasa bahwa demokrasi bukan hanya soal pemilu, tetapi soal kebiasaan berdialog dan menghargai perbedaan.'
        ],
        [
            'minggu' => 7,
            'kategori' => 'post',
            'judul' => 'Multikulturalisme di Indonesia',
            'tema' => 'Keberagaman dan Bhinneka Tunggal Ika',
            'pertanyaan_inti' => 'Bagaimana cara menjaga persatuan di tengah keberagaman budaya dan agama?',
            'ringkasan' => 'Membahas konsep multikulturalisme, jenis-jenisnya, serta tantangan keberagaman di Indonesia.',
            'bukti_pembelajaran' => 'Mencari contoh kasus konflik SARA dan menganalisisnya dengan kacamata multikulturalisme.',
            'refleksi' => 'Saya belajar bahwa toleransi bukan hanya slogan, tetapi sikap aktif untuk menghargai perbedaan tanpa menindas kelompok lain.'
        ],
    ];
}

    public function modul()
    {
        $moduls = $this->getModuls();
        return view('modul', compact('moduls'));
    }

    public function modulDetail($minggu)
{
    $moduls = $this->getModuls();
    $modul = collect($moduls)->firstWhere('minggu', (int)$minggu);

    if (! $modul) {
        abort(404);
    }

    // cari next & prev
    $prev = collect($moduls)->firstWhere('minggu', (int)$minggu - 1);
    $next = collect($moduls)->firstWhere('minggu', (int)$minggu + 1);

    return view('modul_detail', compact('modul', 'prev', 'next'));
}

public function showcase()
{
    $karya = [
        [
            'judul' => '"Jadi ini sejarah 98 yang sebenarnya..." Podcast with aktivis politik indonesia',
            'jenis' => 'Podcast',
            'tipe'  => 'youtube',
            'video_id' => 'mmXRWM3RZPY',
            'deskripsi' => 'Dalam episode podcast spesial ini, kami mengupas tuntas sejarah kelam peristiwa Mei 1998 yang menjadi titik balik demokrasi Indonesia. Melalui diskusi mendalam bersama aktivis politik, video ini tidak hanya merefleksikan kronologi kejadian, tetapi juga menggali fakta-fakta krusial yang jarang dibicarakan. Tujuannya adalah merawat ingatan kolektif generasi muda agar sejarah tidak terulang dan semangat reformasi tetap hidup.',
            'link' => 'https://www.youtube.com/watch?v=mmXRWM3RZPY',
        ],
        [
            'judul' => 'REVISI SEJARAH DAN ANCAMAN DEMOKRASI KASUS PENYANGKALAN PEMERKOSAAN MASSAL 1998 OLEH FADLI ZON',
            'jenis' => 'Artikel Ilmiah',
            'tipe'  => 'gdoc', // <— pakai viewer Google Docs
            'viewer' => 'https://docs.google.com/document/d/16peGty3N0EUGYVYlDV3Hvuv9nNGmPGZo/preview',
            // ubah /edit?... jadi /preview di link kamu
            'deskripsi' => 'Artikel ilmiah ini menyajikan analisis kritis terhadap fenomena penyangkalan (denial) dan upaya revisi sejarah terkait tragedi pemerkosaan massal Mei 1998, dengan studi kasus pada pernyataan tokoh politik Fadli Zon. Penelitian ini menelaah bagaimana distorsi sejarah dapat mengikis fondasi demokrasi, mengaburkan fakta pelanggaran HAM berat, serta memengaruhi kesadaran publik tentang keadilan dan kebenaran di era informasi digital.',
        ],
        [
            'judul' => 'TRAGEDI REVISI 1998 (Infografis)',
            'tipe' => 'canva', // Tipe baru khusus Canva
            'jenis' => 'Infografis',
             // Perhatikan: Saya sudah ubah ujung linknya dari /edit menjadi /view?embed
            'embed_url' => 'https://www.canva.com/design/DAG4dueJODA/FEr7sb0xSxv7F4lZ9-w8sA/view?embed',
            'deskripsi' => 'Infografis interaktif ini memvisualisasikan data kuantitatif mengenai tingkat literasi sejarah mahasiswa terhadap isu revisi sejarah 1998. Disajikan dengan desain visual yang menarik, karya ini merangkum temuan survei lapangan ke dalam grafik dan diagram yang mudah dipahami. Fokus utamanya adalah memperlihatkan korelasi antara pemahaman sejarah yang benar dengan pembentukan sikap demokratis dan kritis pada Generasi Z.',
            'link' => null, // Kosongkan saja jika tidak ada link luar
        ],
    ];

    return view('showcase', compact('karya'));
}

    public function refleksi()
    {
        $refleksiAkhir = "Selama satu semester mengikuti mata kuliah Pendidikan Kewarganegaraan, pandangan saya tentang arti menjadi warga negara Indonesia telah mengalami transformasi yang mendalam. Awalnya, saya melihat kewarganegaraan hanya sebatas status administratif dalam KTP. Namun, melalui rangkaian pembelajaran dan tugas proyek yang saya kerjakan, saya menyadari bahwa identitas sebagai warga negara membawa konsekuensi moral dan tanggung jawab sosial yang besar, terutama bagi saya sebagai mahasiswa Informatika.

Proses pengerjaan proyek kreatif, khususnya saat membuat Podcast mengenai Sejarah 1998 dan Artikel Ilmiah tentang ancaman revisi sejarah, menjadi titik balik bagi kesadaran demokrasi saya. Saat meneliti dan mendiskusikan bagaimana fakta sejarah bisa diputarbalikkan oleh kepentingan politik, saya belajar bahwa demokrasi bukan sesuatu yang terberi (taken for granted), melainkan harus terus diperjuangkan dan dijaga kebenarannya. Sebagai calon ahli teknologi, saya menyadari betapa berbahayanya jika teknologi informasi digunakan untuk memanipulasi sejarah dan data demi kepentingan segelintir pihak. Hal ini mengajarkan saya bahwa integritas data adalah bagian dari integritas bangsa.

Lebih jauh lagi, dalam proses membangun Website Portofolio ini menggunakan framework Laravel, saya tidak hanya belajar tentang sintaks kode, tetapi juga tentang bagaimana menyajikan informasi publik yang edukatif dan aksesibel. Saya memahami bahwa di era digital, \"wilayah\" negara tidak hanya daratan dan lautan, tetapi juga ruang siber (cyberspace). Menjaga kedaulatan digital Indonesia berarti memastikan bahwa teknologi yang kita bangun memiliki fondasi etika yang kuat, tidak bias, dan melindungi hak asasi penggunanya.

Pembelajaran mengenai tantangan demokrasi di era digital menyadarkan saya bahwa baris kode yang saya tulis memiliki dampak nyata. Algoritma bisa memperkuat demokrasi atau justru memecah belah masyarakat melalui filter bubble dan hoaks. Oleh karena itu, saya merasa memiliki tanggung jawab profesi untuk menerapkan \"Kode Etik Insinyur Digital\": menciptakan teknologi yang humanis, memecahkan masalah sosial, dan menjunjung tinggi nilai-nilai Pancasila.

Secara keseluruhan, mata kuliah ini telah mengubah mindset saya dari sekadar mahasiswa yang ingin jago coding, menjadi mahasiswa yang sadar bahwa keahlian teknis harus dibarengi dengan wawasan kebangsaan. Saya termotivasi untuk tidak hanya menjadi konsumen teknologi, tetapi menjadi kreator solusi digital yang berkontribusi positif bagi Indonesia. Refleksi ini menjadi komitmen awal saya untuk terus belajar, bersikap kritis terhadap isu sosial, dan mendedikasikan kemampuan IT saya untuk kemajuan bangsa dan negara.";

        return view('refleksi', compact('refleksiAkhir'));
    }
}   