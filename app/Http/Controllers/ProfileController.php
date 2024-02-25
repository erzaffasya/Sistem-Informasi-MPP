<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $Profile = Profile::find(1);
        return view('admin.Profile.index', compact('Profile'));
    }
    public function show()
    {
        $Profile = Profile::find(1);
        return view('admin.Profile.kontak', compact('Profile'));
    }
    public function kepalaDinas()
    {
        $Profile = Profile::find(1);
        return view('admin.Profile.kepalaDinas', compact('Profile'));
    }

    public function profilWebsite()
    {
        $Profile = Profile::find(1);
        return view('admin.Profile.profilWebsite', compact('Profile'));
    }

    public function kontak()
    {
        $Profile = Profile::find(1);
        return view('admin.Profile.kontak', compact('Profile'));
    }

    public function sosialMedia()
    {
        $Profile = Profile::find(1);
        return view('admin.Profile.sosialMedia', compact('Profile'));
    }

    public function jadwalPelayanan()
    {
        $Profile = Profile::find(1);
        return view('admin.Profile.jadwalPelayanan', compact('Profile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { {
            $Profile = Profile::find(1);
            if ($request->logo) {
                $extention = $request->logo->extension();
                $file_name = time() . '.' . $extention;
                $txt = "storage/Profile/logo/" . $file_name;
                $request->logo->storeAs('public/Profile/logo', $file_name);

                $Profile->logo = $txt;
            }

            if ($request->foto_kadis) {
                $extention = $request->foto_kadis->extension();
                $file_name1 = time() . '.' . $extention;
                $txt1 = "storage/Profile/foto_kadis/" . $file_name1;
                $request->foto_kadis->storeAs('public/Profile/foto_kadis', $file_name1);

                $Profile->foto_kadis = $txt1;
            }

            if ($request->nama_kadis != null) {
                $Profile->nama_kadis = $request->nama_kadis;
            }

            if ($request->visi != null || $request->misi != null) {
                $Profile->visi = $request->visi;
                $Profile->slogan = $request->slogan;
                $Profile->misi = $request->misi;
                $Profile->deskripsi = $request->deskripsi;
                $Profile->video = "https://www.youtube.com/embed/".$request->video;
            }

            if ($request->alamat != null || $request->email != null) {
                $Profile->alamat = $request->alamat;
                $Profile->email = $request->email;
                $Profile->no_telp = $request->no_telp;
                $Profile->google_maps = $request->google_maps;
                $Profile->cs1 = $request->cs1;
                $Profile->cs2 = $request->cs2;
            }

            if ($request->facebook != null || $request->youtube != null) {
                $Profile->instagram = $request->instagram;
                $Profile->youtube = $request->youtube;
                $Profile->facebook = $request->facebook;
            }

            if ($request->slogan_pelayanan != null || $request->deskripsi_pelayanan != null) {
                $Profile->senin_kamis = $request->senin_kamis;
                $Profile->jumat = $request->jumat;
                $Profile->slogan_pelayanan = $request->slogan_pelayanan;
                $Profile->deskripsi_pelayanan = $request->deskripsi_pelayanan;
                // $Profile->isLibur = $request->isLibur;
            }


            if ($request->gambar_pelayanan) {
                $extention = $request->gambar_pelayanan->extension();
                $file_name12 = time() . '.' . $extention;
                $txt12 = "storage/Profile/gambar_pelayanan/" . $file_name12;
                $request->gambar_pelayanan->storeAs('public/Profile/gambar_pelayanan', $file_name12);

                $Profile->gambar_pelayanan = $txt12;
            }


            $Profile->save();

            return back()->with('success', 'Data Berhasil Diubah!');
        }
    }
}
