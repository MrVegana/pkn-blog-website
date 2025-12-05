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
            'deskripsi' => 'Video ini adalah episode podcast yang membahas sejarah peristiwa 1998 di Indonesia...',
            'link' => 'https://www.youtube.com/watch?v=mmXRWM3RZPY',
        ],
        [
            'judul' => 'REVISI SEJARAH DAN ANCAMAN DEMOKRASI KASUS PENYANGKALAN PEMERKOSAAN MASSAL 1998 OLEH FADLI ZON',
            'jenis' => 'Artikel Ilmiah',
            'tipe'  => 'gdoc', // <— pakai viewer Google Docs
            'viewer' => 'https://docs.google.com/document/d/16peGty3N0EUGYVYlDV3Hvuv9nNGmPGZo/preview',
            // ubah /edit?... jadi /preview di link kamu
            'deskripsi' => 'Penelitian ini membahas tentang praktik revisi sejarah dan ancaman terhadap demokrasi...',
        ],
        [
            'judul' => 'REVISI SEJARAH DAN ANCAMAN DEMOKRASI KASUS PENYANGKALAN PEMERKOSAAN MASSAL 1998 OLEH FADLI ZON',
            'jenis' => 'Proposal Penelitian',
            'tipe'  => 'gdoc',
            'viewer' => 'https://docs.google.com/document/d/1ywRRCu-O6glt-MoRVUQ9Nydp7erHgLrwErMNgE-14rA/preview',
            'deskripsi' => 'Penyangkalan terhadap peristiwa pemerkosaan massal Tragedi Mei 1998, yang dicetuskan oleh tokoh politik...',
        ],
    ];

    return view('showcase', compact('karya'));
}

    public function refleksi()
    {
        $refleksiAkhir = " Selama mengikuti mata kuliah Pendidikan Kewarganegaraan, saya semakin memahami bahwa menjadi warga negara Indonesia tidak hanya sekadar status administratif, tetapi sebuah identitas yang membawa tanggung jawab moral dan sosial. Berbagai materi mengenai hak dan kewajiban warga negara, nilai demokrasi, konstitusi, serta hak asasi manusia membantu saya melihat hubungan antara teori yang dipelajari dengan kondisi nyata di negara kita. Pemahaman ini memperluas cara pandang saya bahwa pemenuhan hak harus sejalan dengan pelaksanaan kewajiban, dan keduanya hanya dapat berjalan seimbang jika masyarakat memiliki kesadaran bernegara yang baik.

Selain itu, pembelajaran mengenai demokrasi dan perubahan sosial memberikan wawasan baru tentang peran generasi muda dalam menjaga keberlanjutan sistem demokrasi Indonesia. Saya menyadari bahwa partisipasi politik bukan hanya tentang memilih saat pemilu, tetapi juga meliputi keberanian untuk menyuarakan pendapat, menghargai perbedaan, serta menghindari penyebaran informasi yang tidak benar. Materi mengenai tantangan demokrasi di era digital juga mengingatkan saya untuk lebih bijak dalam menggunakan teknologi, terutama sebagai mahasiswa Informatika yang kelak berperan dalam pengembangan teknologi dan sistem informasi. Tanggung jawab etis menjadi sangat penting agar teknologi yang kita ciptakan tidak mengancam nilai-nilai demokrasi dan hak asasi manusia.

Secara keseluruhan, mata kuliah ini memberikan dampak yang signifikan dalam membentuk sikap dan kesadaran kewarganegaraan saya. Sebelum mengikuti perkuliahan, saya memandang PKn hanya sebagai mata kuliah teori, tetapi kini saya memahami bahwa nilai-nilai yang diajarkan sangat relevan dengan kehidupan sehari-hari. Saya menjadi lebih reflektif terhadap peran saya sebagai bagian dari masyarakat, lebih peka terhadap isu-isu kebangsaan, dan lebih termotivasi untuk berkontribusi secara positif bagi lingkungan sekitar. Refleksi ini menjadi dasar bagi saya untuk terus belajar, bersikap kritis, dan berperilaku sebagai warga negara yang bertanggung jawab di era modern.";

        return view('refleksi', compact('refleksiAkhir'));
    }
}   