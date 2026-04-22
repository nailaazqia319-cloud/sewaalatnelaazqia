<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // 🔥 DATA DUMMY (sementara)
    private function getData()
    {
        $kategoris = [
            ['id' => 1, 'nama' => 'Elektronik'],
            ['id' => 2, 'nama' => 'Pertukangan'],
            ['id' => 3, 'nama' => 'Outdoor'],
        ];

        $artikels = [
            [
                'id' => 1,
                'judul' => 'Sewa Bor Listrik',
                'isi' => 'Alat bor listrik berkualitas untuk kebutuhan proyek anda.',
                'gambar' => 'default.jpg',
                'kategori_id' => 2,
                'tag' => 'bor,alat'
            ],
            [
                'id' => 2,
                'judul' => 'Sewa Tenda Camping',
                'isi' => 'Tenda nyaman untuk camping keluarga.',
                'gambar' => 'default.jpg',
                'kategori_id' => 3,
                'tag' => 'tenda,camping'
            ],
            [
                'id' => 3,
                'judul' => 'Sewa Speaker',
                'isi' => 'Speaker aktif untuk acara besar.',
                'gambar' => 'default.jpg',
                'kategori_id' => 1,
                'tag' => 'audio,speaker'
            ],
        ];

        return compact('artikels', 'kategoris');
    }

    // 🏠 HOME
    public function home()
    {
        $data = $this->getData();

        return view('landing.home', $data);
    }

    // 📄 DETAIL ARTIKEL
    public function detailArtikel($id)
    {
        $data = $this->getData();

        $artikel = collect($data['artikels'])->firstWhere('id', $id);

        if (!$artikel) {
            abort(404);
        }

        return view('landing.detailartikel', compact('artikel'));
    }

    // 📂 DAFTAR KATEGORI
    public function daftarKategori()
    {
        $data = $this->getData();

        return view('landing.daftarkategori', [
            'kategoris' => $data['kategoris']
        ]);
    }

    // 📂 ARTIKEL BERDASARKAN KATEGORI
    public function kategori($id)
    {
        $data = $this->getData();

        $kategori = collect($data['kategoris'])->firstWhere('id', $id);

        $artikels = collect($data['artikels'])->where('kategori_id', $id);

        return view('landing.kategori', compact('kategori','artikels'));
    }

    // 🏷️ TAG
    public function tag($tag)
    {
        $data = $this->getData();

        $artikels = collect($data['artikels'])->filter(function ($a) use ($tag) {
            return str_contains($a['tag'], $tag);
        });

        return view('landing.tag', compact('artikels','tag'));
    }

    // ℹ️ TENTANG
    public function tentang()
    {
        return view('landing.tentang');
    }

    // 📞 KONTAK
    public function kontak()
    {
        return view('landing.kontak');
    }

    // 📑 DAFTAR ISI
    public function daftarIsi()
    {
        $data = $this->getData();

        return view('landing.daftarisi', [
            'artikels' => $data['artikels']
        ]);
    }
}