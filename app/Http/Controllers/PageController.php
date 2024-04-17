<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Berita;
use App\Artikel;
use App\Banner;

class PageController extends Controller
{
    public function index(){
        $title = 'Beranda';
        $beritas = Berita::latest()->paginate(3);
        $banners = Banner::oldest()->paginate(10);

        return view('user.beranda', compact('title', 'beritas', 'banners'));
    }

    public function berita()
    {
        $title = 'Berita';
        $beritas = Berita::latest()->paginate(6);

        return view('user.berita.index', compact('title', 'beritas'));
    }

    public function showBerita($id)
    {
        $berita = Berita::findOrFail($id);
        return view('user.berita.show', [
            'title' => 'Berita',
            'berita' => $berita,
        ]);
    }

    public function artikel()
    {
        $title = 'artikel';
        $artikels = Artikel::latest()->paginate(6);

        return view('user.artikel.index', compact('title', 'artikels'));
    }

    public function showArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('user.artikel.show', [
            'title' => 'Artikel',
            'artikel' => $artikel,
        ]);
    }

    public function selayangPandang()
    {
        return view('user.selayang-pandang', [
            'title' => 'Selayang Pandang',
        ]);
    }
    public function sejarah()
    {
        return view('user.sejarah', [
            'title' => 'Sejarah',
        ]);
    }
    public function visiMisi()
    {
        return view('user.visi-dan-misi', [
            'title' => 'Visi dan Misi',
        ]);
    }
    public function strukturOrganisasi()
    {
        return view('user.struktur-organisasi', [
            'title' => 'Struktur Organisasi',
        ]);
    }
    public function tupoksi()
    {
        return view('user.tupoksi', [
            'title' => 'Tugas Pokok dan Fungsi',
        ]);
    }

    public function alurPembayaran()
    {
        return view('user.alur-pembayaran', [
            'title' => 'Alur Pembayaran',
        ]);
    }
    public function pajak()
    {
        return view('user.pajak.index', [
            'title' => 'Jenis Pajak',
        ]);
    }
    public function pajakPbb()
    {
        return view('user.pajak.pbb-p2', [
            'title' => 'PBB-P2',
        ]);
    }
    public function pajakBphtb()
    {
        return view('user.pajak.bphtb', [
            'title' => 'BPHTB',
        ]);
    }
    public function pajakHotel()
    {
        return view('user.pajak.hotel', [
            'title' => 'Pajak Hotel',
        ]);
    }
    public function pajakRestoran()
    {
        return view('user.pajak.restoran', [
            'title' => 'Pajak Restoran',
        ]);
    }
    public function pajakHiburan()
    {
        return view('user.pajak.hiburan', [
            'title' => 'Pajak Hiburan',
        ]);
    }
    public function pajakReklame()
    {
        return view('user.pajak.reklame', [
            'title' => 'Pajak Reklame',
        ]);
    }
    public function pajakPenerangan()
    {
        return view('user.pajak.penerangan-jalan', [
            'title' => 'Pajak Penerangan Jalan',
        ]);
    }
    public function pajakParkir()
    {
        return view('user.pajak.parkir', [
            'title' => 'Pajak Parkir',
        ]);
    }
    public function pajakAir()
    {
        return view('user.pajak.air-bawah-tanah', [
            'title' => 'Pajak Air Bawah Tanah',
        ]);
    }
    public function pajakMineral()
    {
        return view('user.pajak.mineral', [
            'title' => 'Pajak Mineral',
        ]);
    }
    public function retribusiUmum()
    {
        return view('user.retribusi.umum', [
            'title' => 'Retribusi Jasa Umum',
        ]);
    }
    public function retribusiUsaha()
    {
        return view('user.retribusi.usaha', [
            'title' => 'Retribusi Jasa Usaha',
        ]);
    }
    public function retribusiPerizinan()
    {
        return view('user.retribusi.perizinan', [
            'title' => 'Retribusi Perizinan Tertentu',
        ]);
    }
    public function eBphtb()
    {
        return view('user.e-bphtb', [
            'title' => 'E-BPHTB',
        ]);
    }
    public function jMbako()
    {
        return view('user.j-mbako', [
            'title' => 'J-MBAKO',
        ]);
    }
}
