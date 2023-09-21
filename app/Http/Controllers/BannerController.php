<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $Banner = Banner::find(1);

        if($Banner == null){
            Banner::create(['id' => 1]);
        }
        return view('admin.Banner.index', compact('Banner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { {
            $Banner = Banner::find(1);

            if ($request->gambar) {
                $extention = $request->gambar->extension();
                $file_name1 = time() . '.' . $extention;
                $txt1 = "storage/Banner/gambar/" . $file_name1;
                $request->gambar->storeAs('public/Banner/gambar', $file_name1);
                $Banner->gambar = $txt1;
            }
            $Banner->deskripsi = $request->deskripsi;
            $Banner->link = $request->link;
            $Banner->isActive = $request->isActive;
            $Banner->save();

            return back()->with('success', 'Data Berhasil Diubah!');
        }
    }
}
