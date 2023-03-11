<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Testimoni = Testimoni::all();
        return view('admin.Testimoni.index', compact('Testimoni'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Testimoni.tambah');
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
            $txt = "storage/Testimoni/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Testimoni/Gambar', $file_name);
        } else {
            $txt = null;
        }

        $Testimoni = Testimoni::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'jabatan' => $request->jabatan,
            'perusahaan' => $request->perusahaan,
            'gambar' => $txt,
        ]);



        return redirect()->route('Testimoni.index')
            ->with('success', 'Testimoni Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $Testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $Testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $Testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Testimoni = Testimoni::find($id);
        return view('admin.Testimoni.edit', compact('Testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $Testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Testimoni = Testimoni::find($id);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Testimoni/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Testimoni/Gambar', $file_name);
            Storage::delete("public/Testimoni/Gambar/$Testimoni->gambar");
        } else {
            $txt = $Testimoni->gambar;
        }


        $Testimoni->judul = $request->judul;
        $Testimoni->isi = $request->isi;
        $Testimoni->jabatan = $request->jabatan;
        $Testimoni->perusahaan = $request->perusahaan;
        $Testimoni->gambar = $txt;
        $Testimoni->save();

        return redirect()->route('Testimoni.index')
            ->with('edit', 'Testimoni Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $Testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Testimoni = Testimoni::findOrFail($id);
        Storage::delete("public/Testimoni/$Testimoni->gambar");
        $Testimoni->delete();
        return redirect()->route('Testimoni.index')
            ->with('delete', 'Testimoni Berhasil Dihapus');
    }
}
