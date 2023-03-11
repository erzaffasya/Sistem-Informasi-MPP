<?php

namespace App\Http\Controllers;

use App\Models\KategoriGaleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KategoriGaleri = KategoriGaleri::all();
        return view('admin.KategoriGaleri.index', compact('KategoriGaleri'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.KategoriGaleri.tambah');
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
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required',
        ]);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/KategoriGaleri/Gambar/" . $file_name;
            $request->gambar->storeAs('public/KategoriGaleri/Gambar', $file_name);
        } else {
            $txt = null;
        }

        $KategoriGaleri = KategoriGaleri::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $txt,
        ]);



        return redirect()->route('KategoriGaleri.index')
            ->with('success', 'KategoriGaleri Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriGaleri  $KategoriGaleri
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriGaleri $KategoriGaleri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriGaleri  $KategoriGaleri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $KategoriGaleri = KategoriGaleri::find($id);
        return view('admin.KategoriGaleri.edit', compact('KategoriGaleri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriGaleri  $KategoriGaleri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $KategoriGaleri = KategoriGaleri::find($id);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/KategoriGaleri/Gambar/" . $file_name;
            $request->gambar->storeAs('public/KategoriGaleri/Gambar', $file_name);
            Storage::delete("public/KategoriGaleri/Gambar/$KategoriGaleri->gambar");
        } else {
            $txt = $KategoriGaleri->gambar;
        }


        $KategoriGaleri->judul = $request->judul;
        $KategoriGaleri->isi = $request->isi;
        $KategoriGaleri->gambar = $txt;
        $KategoriGaleri->save();

        return redirect()->route('KategoriGaleri.index')
            ->with('edit', 'KategoriGaleri Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriGaleri  $KategoriGaleri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $KategoriGaleri = KategoriGaleri::findOrFail($id);
        Storage::delete("public/KategoriGaleri/$KategoriGaleri->gambar");
        $KategoriGaleri->delete();
        return redirect()->route('KategoriGaleri.index')
            ->with('delete', 'KategoriGaleri Berhasil Dihapus');
    }
}
