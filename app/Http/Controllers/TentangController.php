<?php

namespace App\Http\Controllers;

use App\Models\FilosofiDetail;
use App\Models\Tentang;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $Tentang = Tentang::find(1);
        return view('admin.Profile.tentang', compact('Tentang'));
    }
    public function indexDetail()
    {
        $FilosofiDetail = FilosofiDetail::orderBy('urut','ASC')->get();
        return view('admin.Profile.tentangDetail', compact('FilosofiDetail'));
    }

    public function store(Request $request)
    {
        $Tentang = Tentang::find(1);
        // dd($request->all());
        if (isset($request->sejarah_foto)) {
            $extention = $request->sejarah_foto->extension();
            $file_name = time() . 'sejarah.' . $extention;
            $txt = "storage/Tentang/" . $file_name;
            $image = $request->file('sejarah_foto');
            $image = Image::make($request->file('sejarah_foto'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/Tentang/' . $file_name), 80);
            $Tentang->sejarah_foto = $txt;
        }

        if (isset($request->filosofi_foto)) {
            $extention = $request->filosofi_foto->extension();
            $file_name = time() . 'filosofi.' . $extention;
            $txt2 = "storage/Tentang/" . $file_name;
            $image = $request->file('filosofi_foto');
            $image = Image::make($request->file('filosofi_foto'));
            $image->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/Tentang/' . $file_name), 80);
            $Tentang->filosofi_foto = $txt2;
        }

        $Tentang->sejarah = $request->sejarah;
        $Tentang->filosofi = $request->filosofi;
        $Tentang->inovasi_judul = $request->inovasi_judul;
        $Tentang->inovasi_detail = $request->inovasi_detail;
        $Tentang->inovasi_video = $request->inovasi_video;

        $Tentang->save();

        return back()->with('success', 'Data Berhasil Diubah!');
    }

    public function addFilosofiDetail(Request $request)
    {
        $Tentang = FilosofiDetail::create($request->all());
        return back()->with('success', 'Data Berhasil Diubah!');
    }

    public function deleteFilosofiDetail($id)
    {
        $Tentang = FilosofiDetail::find($id)->delete();
        return back()->with('success', 'Data Berhasil Diubah!');
    }
}
