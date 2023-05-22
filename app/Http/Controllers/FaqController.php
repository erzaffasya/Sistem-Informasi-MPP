<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $FAQ = Faq::all();
        return view('admin.FAQ.index', compact('FAQ'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.FAQ.tambah');
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
        ]);
        $FAQ = Faq::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'urut' => $request->urut,
        ]);

        return redirect()->route('FAQ.index')
            ->with('success', 'FAQ Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FAQ  $FAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $FAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQ  $FAQ
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $FAQ = Faq::find($id);
        return view('admin.FAQ.edit', compact('FAQ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FAQ  $FAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $FAQ = Faq::find($id);
        $FAQ->judul = $request->judul;
        $FAQ->isi = $request->isi;
        $FAQ->urut = $request->urut;
        $FAQ->save();

        return redirect()->route('FAQ.index')
            ->with('edit', 'FAQ Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQ  $FAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $FAQ = Faq::findOrFail($id);
        $FAQ->delete();
        return back()
            ->with('delete', 'FAQ Berhasil Dihapus');
    }
}
