<?php

namespace App\Http\Controllers;

use App\Models\NamaLayanan;
use Illuminate\Http\Request;

class NamaLayananController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $NamaLayanan = NamaLayanan::all();
        return view('admin.NamaLayanan.index', compact('NamaLayanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.NamaLayanan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required'
        ]);

        $NamaLayanan = NamaLayanan::create([
            'nama_layanan' => $request->nama_layanan
        ]);



        return redirect()->route('NamaLayanan.index')
            ->with('success', 'NamaLayanan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NamaLayanan  $NamaLayanan
     * @return \Illuminate\Http\Response
     */
    public function show(NamaLayanan $NamaLayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NamaLayanan  $NamaLayanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $NamaLayanan = NamaLayanan::find($id);
        return view('admin.NamaLayanan.edit', compact('NamaLayanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NamaLayanan  $NamaLayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $NamaLayanan = NamaLayanan::find($id);
        $NamaLayanan->nama_layanan = $request->nama_layanan;
        $NamaLayanan->save();

        return redirect()->route('NamaLayanan.index')
            ->with('edit', 'NamaLayanan Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NamaLayanan  $NamaLayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $NamaLayanan = NamaLayanan::findOrFail($id);
        $NamaLayanan->delete();
        return redirect()->route('NamaLayanan.index')
            ->with('delete', 'NamaLayanan Berhasil Dihapus');
    }
}
