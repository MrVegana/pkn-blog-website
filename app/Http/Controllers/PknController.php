<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PknController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function modul()
    {
        $moduls = [
            [
                'minggu' => 1,
                'judul' => 'Hak dan Kewajiban Warga Negara',
                'pertanyaan_inti' => 'Mengapa keseimbangan hak dan kewajiban penting?',
                'ringkasan' => 'Membahas konsep hak dan kewajiban warga negara dalam UUD 1945.',
                'bukti_pembelajaran' => 'Catatan kuliah, tugas ringkasan pasal-pasal UUD.',
                'refleksi' => 'Saya menyadari bahwa hak tidak bisa dituntut tanpa menjalankan kewajiban.'
            ],
            [
                'minggu' => 2,
                'judul' => 'Demokrasi di Indonesia',
                'pertanyaan_inti' => 'Bagaimana praktik demokrasi di Indonesia saat ini?',
                'ringkasan' => 'Membahas perkembangan demokrasi pasca reformasi.',
                'bukti_pembelajaran' => 'Diskusi kelas, tugas esai singkat tentang pemilu.',
                'refleksi' => 'Saya melihat pentingnya partisipasi aktif dalam pemilu dan diskusi publik.'
            ],
            // nanti bisa tambah minggu lainnya
        ];

        return view('modul', compact('moduls'));
    }

    public function showcase()
    {
        $karya = [
            [
                'judul' => 'Podcast: Peran Generasi Muda dalam Demokrasi',
                'jenis' => 'Podcast',
                'deskripsi' => 'Membahas bagaimana mahasiswa bisa terlibat dalam penguatan demokrasi.',
                'link' => '#',
            ],
            [
                'judul' => 'Artikel: Hak Asasi Manusia di Era Digital',
                'jenis' => 'Artikel',
                'deskripsi' => 'Artikel mengenai tantangan HAM di era informasi.',
                'link' => '#',
            ],
            [
                'judul' => 'Infografis: Struktur Negara Indonesia',
                'jenis' => 'Infografis',
                'deskripsi' => 'Infografis visual tentang lembaga-lembaga negara.',
                'link' => '#',
            ],
        ];

        return view('showcase', compact('karya'));
    }

    public function refleksi()
    {
        $refleksiAkhir = "
               return view('refleksi', compact('refleksiAkhir'));
   }
        Saya merasa modul PKN ini sangat relevan dengan kondisi sosial-politik saat ini. 
        Saya belajar banyak tentang pentingnya hak dan kewajiban sebagai warga negara, 
        serta bagaimana demokrasi berfungsi di Indonesia. 
        Karya-karya yang saya buat selama modul ini membantu saya mengaplikasikan konsep-konsep yang telah dipelajari.
        ";

        return view('refleksi', compact('refleksiAkhir'));
    }
}   