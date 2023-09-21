<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Faq;
use App\Models\Fasilitas;
use App\Models\FilosofiDetail;
use App\Models\Instansi;
use App\Models\Layanan;
use App\Models\LinkTerkait;
use App\Models\Mekanisme;
use App\Models\Profile;
use App\Models\Tentang;
use App\Models\Testimoni;
use App\Models\Visitor;
use Shetabit\Visitor\Traits\Visitable;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Database\Seeders\TestimoniSeeder;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingpageController extends Controller
{
    public function getPassword()
    {
        return view('landingpage.lupapassword');
    }

    public function postLupaPassword(Request $request)
    {
        // dd('sukses');
        $this->lupaPassword($request);
        return view('landingpage.lupapasswordberhasil');
    }

    public function index()
    {
        // $this->getStatistikMpp();
        visitor()->visit();
        $skm = $this->getNilaiSKM();
        $berita = Berita::latest()->limit(3)->get();
        $testimoni = Testimoni::where('status', true)->latest()->limit(15)->get();
        $fasilitas = Fasilitas::all();
        $mekanisme = Mekanisme::orderBy('urut', 'ASC')->get();
        $instansi = Instansi::all();
        $faq = Faq::all();
        $linkTerkait = LinkTerkait::orderBy('urut', 'ASC')->get();
        $dataAntrian = $this->getRiwayatAntrian();
        $antrianTerakhir = $dataAntrian->data[0] ?? null;
        $profile = Profile::find(1);
        // dd($dataAntrian->data[0]);
        $currentYear = Carbon::now()->year;
        $totalLayanan = Layanan::get()->count();


        $totalInstansi = 0;
        foreach ($instansi as $item) {
            $dataLayanan[] = [
                'id' => $item->id,
                'gambar' => $item->gambar,
                'nama_instansi' => $item->nama_instansi,
                'senin_kamis' => $item->senin_kamis,
                'jumat' => $item->jumat,
                'kontak' => $item->kontak,
                'data' => Layanan::with(['NamaLayanan' => function ($query) {
                    $query->select('id', 'nama_layanan');
                }])->where('instansi_id', $item->id)->get()->toArray()
            ];
            $totalInstansi = $totalInstansi + 1;
        }

        $dataPengunjung = DB::table('shetabit_visits')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as total'))
            ->whereYear('created_at', $currentYear)
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->get();

        $arrayPengunjung = [
            1 => 0,
            2 => 0,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => 0,
            7 => 0,
            8 => 0,
            9 => 0,
            10 => 0,
            11 => 0,
            12 => 0,
        ];
        foreach ($dataPengunjung as $item) {
            $arrayPengunjung[$item->month] = $item->total;
        }
        $arrayStatistik = implode(', ', $arrayPengunjung);


        $totalPengunjung = 0;
        $label = [];
        $dataStatistik = [];
        foreach ($this->getStatistikMpp() as $item) {
            $label[] = "'" . $item->nama . "'";
            $dataStatistik[] = $item->jmlpengunjung;
            $totalPengunjung = $totalPengunjung + $item->jmlpengunjung;
        }
        $label = implode(', ', $label);
        $dataStatistik = implode(', ', $dataStatistik);

        // dd($label, $dataStatistik);
        // dd($totalPengunjung, $totalInstansi);
        $this->syncInstansi();

        return view('landingpage.index', compact(
            'skm',
            'berita',
            'testimoni',
            'fasilitas',
            'mekanisme',
            'instansi',
            'faq',
            'dataLayanan',
            'antrianTerakhir',
            'arrayStatistik',
            'profile',
            'dataStatistik',
            'label',
            'totalInstansi',
            'totalPengunjung',
            'totalLayanan'
        ))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function cetakAntrian()
    {
        $dataAntrian = $this->getRiwayatAntrian();
        $antrianTerakhir = $dataAntrian->data[0] ?? null;
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('landingpage.cetakantrian', compact('antrianTerakhir'));
        return $pdf->download('cetak-antrian.pdf');
    }

    public function tambahTestimoni(Request $request)
    {
        $request->validate([
            // 'judul' => 'required',
            'isi' => 'required',
            // 'gambar' => 'required',
        ]);

        // if (isset($request->gambar)) {
        //     $extention = $request->gambar->extension();
        //     $file_name = time() . '.' . $extention;
        //     $txt = "storage/Testimoni/Gambar/" . $file_name;
        //     $request->gambar->storeAs('public/Testimoni/Gambar', $file_name);
        // } else {
        //     $txt = null;
        // }
        // dd($request);
        $Testimoni = Testimoni::create([
            'judul' => 'Masyarakat',
            'isi' => $request->isi,
            // 'jabatan' => $request->jabatan,
            // 'perusahaan' => $request->perusahaan,
            'status' => false,
            // 'gambar' => $txt,
        ]);



        return back()
            ->with('success', 'Testimoni Berhasil Ditambahkan');
    }

    public function berita()
    {
        $berita = Berita::latest()->paginate(6);
        $profile = Profile::find(1);

        $RandomPost = Berita::all()->random(3);
        // dd($RandomPost);
        return view('landingpage.berita', compact('berita', 'RandomPost', 'profile'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function beritaDetail($slug)
    {
        $berita = Berita::where('slug', $slug)->first();

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
        $instansi = Instansi::where('slug', $slug)->first();

        $layanan = Layanan::where('instansi_id', $instansi->id)->get();
        // dd($RandomPost);
        return view('landingpage.layanandetail', compact('instansi', 'layanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function tentang()
    {
        $tentang = Tentang::find(1);
        $filosofi = FilosofiDetail::orderBy('urut', 'ASC')->get();
        return view('landingpage.tentang', compact('tentang', 'filosofi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function kontak()
    {
        $profile = Profile::find(1);
        return view('landingpage.kontak', compact('profile'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // page baru
    public function regis()
    {
        return view('landingpage.regis');
    }


    public function tambahRegis(Request $request)
    {
        // dd($request->all());
        $this->regisMpp($request);
        return view('landingpage.regisberhasil');
    }
}
