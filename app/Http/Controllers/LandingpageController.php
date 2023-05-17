<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Faq;
use App\Models\Fasilitas;
use App\Models\Instansi;
use App\Models\Layanan;
use App\Models\LinkTerkait;
use App\Models\Mekanisme;
use App\Models\Testimoni;
use Database\Seeders\TestimoniSeeder;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        // dd(session('loginMpp'));
        $skm = $this->getNilaiSKM();
        $berita = Berita::latest()->limit(3)->get();
        $testimoni = Testimoni::latest()->limit(15)->get();
        $fasilitas = Fasilitas::all();
        $mekanisme = Mekanisme::orderBy('urut', 'ASC')->get();
        $instansi = Instansi::all();
        $faq = Faq::all();
        $linkTerkait = LinkTerkait::orderBy('urut','ASC')->get();

        foreach ($instansi as $item) {
            $dataLayanan[] = [
                'id' => $item->id,
                'nama_instansi' => $item->nama_instansi,
                'data' => Layanan::with(['NamaLayanan' => function ($query) {
                    $query->select('id', 'nama_layanan');
                }])->where('instansi_id', $item->id)->get()->toArray()
            ];
        }
        // $this->getInstansiKuota(1);
        // $this->syncInstansi();

        // dd($this->generatePassword());
        return view('landingpage.index', compact('skm', 'berita', 'testimoni', 'fasilitas', 'mekanisme', 'instansi', 'faq', 'dataLayanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function berita()
    {
        $berita = Berita::latest()->paginate(6);

        $RandomPost = Berita::all()->random(3);
        // dd($RandomPost);
        return view('landingpage.berita', compact('berita', 'RandomPost'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function beritaDetail($slug)
    {
        $berita = Berita::where('slug',$slug)->first();

        $RandomPost = Berita::all()->random(3);
        // dd($RandomPost);
        return view('landingpage.beritadetail', compact('berita', 'RandomPost'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function layanan()
    {

        $layanan = Instansi::get();
        // dd($layanan);
        return view('landingpage.layanan', compact('layanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function layananDetail($slug)
    {
        $instansi = Instansi::where('slug',$slug)->first();

        $layanan = Layanan::where('instansi_id',$instansi->id)->get();
        // dd($RandomPost);
        return view('landingpage.layanandetail', compact('instansi', 'layanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function tentang()
    {

        $skm = $this->getNilaiSKM();

        return view('landingpage.tentang', compact('skm'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function kontak()
    {

        $skm = $this->getNilaiSKM();

        return view('landingpage.kontak', compact('skm'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // page baru
    public function regis()
    {
        return view('landingpage.regis');
    }
}
