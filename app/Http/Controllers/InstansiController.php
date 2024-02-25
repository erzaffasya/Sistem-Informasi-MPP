<?php

namespace App\Http\Controllers;
use App\Models\Instansi;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Instansi = Instansi::all();
        return view('admin.Instansi.index', compact('Instansi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Instansi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_instansi' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'loket' => 'required',
        ]);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Instansi/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Instansi/Gambar', $file_name);
        } else {
            $txt = null;
        }

        $Instansi = Instansi::create([
            'nama_instansi' => $request->nama_instansi,
            'deskripsi' => $request->deskripsi,
            'loket' => $request->loket,
            'lantai' => $request->lantai,
            'senin_kamis' => $request->senin_kamis,
            'jumat' => $request->jumat,
            'kontak' => $request->kontak,
            'wa1' => $request->wa1,
            'wa2' => $request->wa2,
            'website' => $request->website,
            'gambar' => $txt,
            'slug' => strtolower(str_replace(' ', '-', $request->nama_instansi))
        ]);



        return redirect()->route('Instansi.index')
            ->with('success', 'Instansi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instansi  $Instansi
     * @return \Illuminate\Http\Response
     */
    public function show(Instansi $Instansi)
    {
        $Layanan = Layanan::with('NamaLayanan')->where('instansi_id',$Instansi->id)->get();
        // dd($Layanan);
        return view('admin.Instansi.Layanan.index', compact('Layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instansi  $Instansi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Instansi = Instansi::find($id);
        return view('admin.Instansi.edit', compact('Instansi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instansi  $Instansi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Instansi = Instansi::find($id);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Instansi/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Instansi/Gambar', $file_name);
            Storage::delete("public/Instansi/Gambar/$Instansi->gambar");
        } else {
            $txt = $Instansi->gambar;
        }

        $Instansi->nama_instansi = $request->nama_instansi;
        $Instansi->deskripsi = $request->deskripsi;
        $Instansi->loket = $request->loket;
        $Instansi->lantai = $request->lantai;
        $Instansi->senin_kamis = $request->senin_kamis;
        $Instansi->jumat = $request->jumat;
        $Instansi->kontak = $request->kontak;
        $Instansi->wa1 = $request->wa1;
        $Instansi->wa2 = $request->wa2;
        $Instansi->website = $request->website;
        
        $Instansi->slug = strtolower(str_replace(' ', '-', $request->nama_instansi));
        $Instansi->gambar = $txt;
        $Instansi->save();

        return redirect()->route('Instansi.index')
            ->with('edit', 'Instansi Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instansi  $Instansi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Instansi = Instansi::findOrFail($id);
        Storage::delete("public/Instansi/$Instansi->gambar");
        $Instansi->delete();
        return redirect()->route('Instansi.index')
            ->with('delete', 'Instansi Berhasil Dihapus');
    }
}
