<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Galeri = Galeri::all();
        return view('admin.Galeri.index', compact('Galeri'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Galeri.tambah');
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
            $txt = "storage/Galeri/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Galeri/Gambar', $file_name);
        } else {
            $txt = null;
        }

        $Galeri = Galeri::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $txt,
        ]);



        return redirect()->route('Galeri.index')
            ->with('success', 'Galeri Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $Galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $Galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $Galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Galeri = Galeri::find($id);
        return view('admin.Galeri.edit', compact('Galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $Galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Galeri = Galeri::find($id);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Galeri/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Galeri/Gambar', $file_name);
            Storage::delete("public/Galeri/Gambar/$Galeri->gambar");
        } else {
            $txt = $Galeri->gambar;
        }


        $Galeri->judul = $request->judul;
        $Galeri->isi = $request->isi;
        $Galeri->gambar = $txt;
        $Galeri->save();

        return redirect()->route('Galeri.index')
            ->with('edit', 'Galeri Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $Galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Galeri = Galeri::findOrFail($id);
        Storage::delete("public/Galeri/$Galeri->gambar");
        $Galeri->delete();
        return redirect()->route('Galeri.index')
            ->with('delete', 'Galeri Berhasil Dihapus');
    }
}
