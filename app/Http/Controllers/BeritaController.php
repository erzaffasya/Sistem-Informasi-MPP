<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Berita = Berita::all();
        return view('admin.Berita.index', compact('Berita'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Berita.tambah');
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
            $txt = "storage/Berita/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Berita/Gambar', $file_name);
        } else {
            $txt = null;
        }

        $Berita = Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $txt,
            'users_id' => Auth::user()->id,
            'slug' => strtolower(str_replace(' ', '-', $request->judul))
        ]);



        return redirect()->route('Berita.index')
            ->with('success', 'Berita Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $Berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $Berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $Berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Berita = Berita::find($id);
        return view('admin.Berita.edit', compact('Berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $Berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Berita = Berita::find($id);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Berita/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Berita/Gambar', $file_name);
            Storage::delete("public/Berita/Gambar/$Berita->gambar");
        } else {
            $txt = $Berita->gambar;
        }


        $Berita->judul = $request->judul;
        $Berita->isi = $request->isi;
        $Berita->gambar = $txt;
        $Berita->users_id = Auth::user()->id;
        $Berita->slug = strtolower(str_replace(' ', '-', $request->judul));
        $Berita->save();

        return redirect()->route('Berita.index')
            ->with('edit', 'Berita Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $Berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Berita = Berita::findOrFail($id);
        Storage::delete("public/Berita/$Berita->gambar");
        $Berita->delete();
        return redirect()->route('Berita.index')
            ->with('delete', 'Berita Berhasil Dihapus');
    }
}
