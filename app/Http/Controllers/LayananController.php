<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\NamaLayanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Layanan = Layanan::all();
        return view('admin.Layanan.index', compact('Layanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // dd('erza');
        $namaLayanan = NamaLayanan::all();
        return view('admin.Instansi.Layanan.tambah', compact('id','namaLayanan'));
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
            'nama_layanan_id' => 'required',
        ]);
        $Layanan = Layanan::create([
            'nama_layanan_id' => $request->nama_layanan_id,
            'deskripsi' => $request->deskripsi,
            'instansi_id' => $request->instansi_id,
        ]);

        return redirect()->route('Instansi.show',$request->instansi_id)
            ->with('success', 'Layanan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $Layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $Layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $Layanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Layanan = Layanan::find($id);
        $namaLayanan = NamaLayanan::all();
        return view('admin.Instansi.Layanan.edit', compact('Layanan','namaLayanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $Layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Layanan = Layanan::find($id);
        $Layanan->nama_layanan_id = $request->nama_layanan_id;
        $Layanan->deskripsi = $request->deskripsi;
        // $Layanan->instansi_id = $request->instansi_id;
        $Layanan->save();

        return redirect()->route('Instansi.show',$Layanan->instansi_id)
            ->with('edit', 'Layanan Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $Layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Layanan = Layanan::findOrFail($id);
        $Layanan->delete();
        return back()
            ->with('delete', 'Layanan Berhasil Dihapus');
    }
}
