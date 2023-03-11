<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Fasilitas = Fasilitas::all();
        return view('admin.Fasilitas.index', compact('Fasilitas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Fasilitas.tambah');
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
            $txt = "storage/Fasilitas/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Fasilitas/Gambar', $file_name);
        } else {
            $txt = null;
        }

        $Fasilitas = Fasilitas::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $txt,
        ]);



        return redirect()->route('Fasilitas.index')
            ->with('success', 'Fasilitas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $Fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $Fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitas  $Fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Fasilitas = Fasilitas::find($id);
        return view('admin.Fasilitas.edit', compact('Fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilitas  $Fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Fasilitas = Fasilitas::find($id);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Fasilitas/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Fasilitas/Gambar', $file_name);
            Storage::delete("public/Fasilitas/Gambar/$Fasilitas->gambar");
        } else {
            $txt = $Fasilitas->gambar;
        }


        $Fasilitas->judul = $request->judul;
        $Fasilitas->isi = $request->isi;
        $Fasilitas->gambar = $txt;
        $Fasilitas->save();

        return redirect()->route('Fasilitas.index')
            ->with('edit', 'Fasilitas Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitas  $Fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Fasilitas = Fasilitas::findOrFail($id);
        Storage::delete("public/Fasilitas/$Fasilitas->gambar");
        $Fasilitas->delete();
        return redirect()->route('Fasilitas.index')
            ->with('delete', 'Fasilitas Berhasil Dihapus');
    }
}
