<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Profile = Profile::all();
        return view('admin.Profil.index', compact('Profile'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Profil.tambah');
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
            $txt = "storage/Profile/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Profile/Gambar', $file_name);
        } else {
            $txt = null;
        }

        $Profile = Profile::create([
            'visi' => $request->visi,
            'misi' => $request->misi,
            'slogan' => $request->slogan,
            'isi' => $request->isi,
            'logo' => $txt,
            'alamat' => $request->alamat,
            'senin_kamis' => $request->senin_kamis,
            'jumat' => $request->jumat,
            'cs1' => $request->cs1,
            'cs2' => $request->cs2,
        ]);



        return redirect()->route('Profile.index')
            ->with('success', 'Profile Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $Profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $Profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $Profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Profile = Profile::find($id);
        return view('admin.Profil.edit', compact('Profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $Profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Profile = Profile::find($id);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Profile/Gambar/" . $file_name;
            $request->gambar->storeAs('public/Profile/Gambar', $file_name);
            Storage::delete("public/Profile/Gambar/$Profile->gambar");
        } else {
            $txt = $Profile->gambar;
        }

        $Profile->visi = $request->visi;
        $Profile->misi = $request->misi;
        $Profile->slogan = $request->slogan;
        $Profile->isi = $request->isi;
        $Profile->logo = $txt;
        $Profile->alamat = $request->alamat;
        $Profile->senin_kamis = $request->senin_kamis;
        $Profile->jumat = $request->jumat;
        $Profile->cs1 = $request->cs1;
        $Profile->cs2 = $request->cs2;
        $Profile->save();

        return redirect()->route('Profile.index')
            ->with('edit', 'Profile Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $Profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Profile = Profile::findOrFail($id);
        Storage::delete("public/Profile/$Profile->gambar");
        $Profile->delete();
        return redirect()->route('Profile.index')
            ->with('delete', 'Profile Berhasil Dihapus');
    }
}
