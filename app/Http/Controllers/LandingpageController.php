<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Fasilitas;
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
        // dd($berita);
        return view('landingpage.index', compact('skm','berita','testimoni','fasilitas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function berita()
    {
        
        $skm = $this->getNilaiSKM();
        
        return view('landingpage.berita', compact('skm'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
