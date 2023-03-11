<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KategoriBerita = KategoriBerita::all();
        return view('admin.KategoriBerita.index', compact('KategoriBerita'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.KategoriBerita.tambah');
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
            $txt = "storage/KategoriBerita/Gambar/" . $file_name;
            $request->gambar->storeAs('public/KategoriBerita/Gambar', $file_name);
        } else {
            $txt = null;
        }

        $KategoriBerita = KategoriBerita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $txt,
        ]);



        return redirect()->route('KategoriBerita.index')
            ->with('success', 'KategoriBerita Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriBerita  $KategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriBerita $KategoriBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriBerita  $KategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $KategoriBerita = KategoriBerita::find($id);
        return view('admin.KategoriBerita.edit', compact('KategoriBerita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriBerita  $KategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $KategoriBerita = KategoriBerita::find($id);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/KategoriBerita/Gambar/" . $file_name;
            $request->gambar->storeAs('public/KategoriBerita/Gambar', $file_name);
            Storage::delete("public/KategoriBerita/Gambar/$KategoriBerita->gambar");
        } else {
            $txt = $KategoriBerita->gambar;
        }


        $KategoriBerita->judul = $request->judul;
        $KategoriBerita->isi = $request->isi;
        $KategoriBerita->gambar = $txt;
        $KategoriBerita->save();

        return redirect()->route('KategoriBerita.index')
            ->with('edit', 'KategoriBerita Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriBerita  $KategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $KategoriBerita = KategoriBerita::findOrFail($id);
        Storage::delete("public/KategoriBerita/$KategoriBerita->gambar");
        $KategoriBerita->delete();
        return redirect()->route('KategoriBerita.index')
            ->with('delete', 'KategoriBerita Berhasil Dihapus');
    }
}
