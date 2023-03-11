<?php

namespace App\Http\Controllers;

use App\Models\Mekanisme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MekanismeController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Mekanisme = Mekanisme::all();
        return view('admin.Mekanisme.index', compact('Mekanisme'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Mekanisme.tambah');
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
            'urut' => 'required',
        ]);

        // if (isset($request->gambar)) {
        //     $extention = $request->gambar->extension();
        //     $file_name = time() . '.' . $extention;
        //     $txt = "storage/Mekanisme/Gambar/" . $file_name;
        //     $request->gambar->storeAs('public/Mekanisme/Gambar', $file_name);
        // } else {
        //     $txt = null;
        // }

        $Mekanisme = Mekanisme::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'urut' => $request->urut,
            // 'gambar' => $txt,
        ]);



        return redirect()->route('Mekanisme.index')
            ->with('success', 'Mekanisme Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mekanisme  $Mekanisme
     * @return \Illuminate\Http\Response
     */
    public function show(Mekanisme $Mekanisme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mekanisme  $Mekanisme
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Mekanisme = Mekanisme::find($id);
        return view('admin.Mekanisme.edit', compact('Mekanisme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mekanisme  $Mekanisme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Mekanisme = Mekanisme::find($id);

        // if (isset($request->gambar)) {
        //     $extention = $request->gambar->extension();
        //     $file_name = time() . '.' . $extention;
        //     $txt = "storage/Mekanisme/Gambar/" . $file_name;
        //     $request->gambar->storeAs('public/Mekanisme/Gambar', $file_name);
        //     Storage::delete("public/Mekanisme/Gambar/$Mekanisme->gambar");
        // } else {
        //     $txt = $Mekanisme->gambar;
        // }


        $Mekanisme->judul = $request->judul;
        $Mekanisme->isi = $request->isi;
        $Mekanisme->urut = $request->urut;
        // $Mekanisme->gambar = $txt;
        $Mekanisme->save();

        return redirect()->route('Mekanisme.index')
            ->with('edit', 'Mekanisme Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mekanisme  $Mekanisme
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Mekanisme = Mekanisme::findOrFail($id);
        // Storage::delete("public/Mekanisme/$Mekanisme->gambar");
        $Mekanisme->delete();
        return redirect()->route('Mekanisme.index')
            ->with('delete', 'Mekanisme Berhasil Dihapus');
    }
}
