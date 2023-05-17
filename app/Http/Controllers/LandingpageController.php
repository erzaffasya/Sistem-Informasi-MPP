<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Faq;
use App\Models\Fasilitas;
use App\Models\Instansi;
use App\Models\Layanan;
use App\Models\Mekanisme;
use App\Models\Testimoni;
use Database\Seeders\TestimoniSeeder;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {

        $skm = $this->getNilaiSKM();
        $berita = Berita::latest()->limit(3)->get();
        $testimoni = Testimoni::latest()->limit(15)->get();
        $fasilitas = Fasilitas::all();
        $mekanisme = Mekanisme::orderBy('urut', 'ASC')->get();
        $instansi = Instansi::all();
        $faq = Faq::all();

        // dd($instansi);
        // $dataTest = [];
        foreach ($instansi as $item) {
            $dataLayanan[] = [
                'id' => $item->id,
                'nama_instansi' => $item->nama_instansi,
                'data' => Layanan::where('instansi_id', $item->id)->get()->toArray()
            ];
        }
        // dd($dataLayanan);
        // foreach ($dataLayanan as $item) {
        //     dd($item);
        // }

        // $this->getInstansiKuota(1);
        // $this->syncInstansi();
        // dd($this->generatePassword());
        return view('landingpage.index', compact('skm', 'berita', 'testimoni', 'fasilitas', 'mekanisme', 'instansi', 'faq', 'dataLayanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function berita()
    {
        $berita = Berita::latest()->paginate(6);

        return view('landingpage.berita', compact('berita'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function layanan()
    {

        $skm = $this->getNilaiSKM();

        return view('landingpage.layanan', compact('skm'))
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
}
