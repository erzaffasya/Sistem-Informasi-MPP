<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Instansi;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function generatePassword()
    {
        $tmp = (new \DateTime)->format('Ymd');
        $password = $tmp.''.'mppbpp108%!';
        // dd(md5($password));
        return md5($password);
    }

    public function postApiMpp($url, $request){
        $response = Http::withBasicAuth('dmiapiservice', $this->generatePassword())->asForm()->post($url, $request);
        // dd($data);
        $data = json_decode($response->body());
        return $data;
    }

    public function getApiMpp($url, $request){
        $response = Http::withBasicAuth('dmiapiservice', $this->generatePassword())->get($url, $request);
        $data = json_decode($response->body());
        return $data;
    }

    public function getNilaiSKM(){
        $response = $this->getApiMpp('https://skm-mpp.balikpapan.go.id/dmiapiskm/skm/nilaiskm', "");
        // dd($response);
        // $data = json_decode($response->body());
        return $response;
    }

    public function getInstansiKuota(Request $request){
        $response = $this->postApiMpp('https://antrian-mpp.balikpapan.go.id/dmiapi/antrian/getlayanan', [
            'instansi_id' => $request->instansi_id
        ]);
        dd($response);
        // $data = json_decode($response->body());
        return $response->data;
    }

    public function syncInstansi(){
        $dataInstansi = $this->postApiMpp('https://antrian-mpp.balikpapan.go.id/dmiapi/antrian/getinstansi', []);
        // dd($dataInstansi->data);
        foreach ($dataInstansi->data as $item) {
            $dataInstansi = Instansi::where('id_instansi_mpp',$item->id)->exists();
            if(!$dataInstansi){
                Instansi::insert([
                    'id' => $item->id,
                    'nama_instansi' => $item->nama,
                    'gambar' => $item->logo,
                    'deskripsi' => $item->deskripsi,
                    'id_instansi_mpp' => $item->id,
                    'slug' => strtolower(str_replace(' ', '-', $item->nama))
                ]);
            }
        }
    }

    public function ambilAntrian(Request $request)
    {
        try {
            $data =  $this->postApiMpp('https://antrian-mpp.balikpapan.go.id/dmiapi/Antrian/AmbilAntrian', [
                'nik' => Session::get('loginMpp'),
                'layanan_id' => $request->instansi_id,
                'jnsantrian' => 'hari ini'
            ]);
            // $response = json_decode($data->body());
            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getRiwayatAntrian()
    {
        try {
            $data =  $this->postApiMpp('https://antrian-mpp.balikpapan.go.id/dmiapi/Antrian/HistoryAntrian', [
                'nik' => Session::get('loginMpp')
            ]);
            // $response = json_decode($data->body());
            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function loginMpp(Request $request)
    {
        try {
            $data =  Http::withBasicAuth('dmiapiservice', $this->generatePassword())->asForm()->post('https://antrian-mpp.balikpapan.go.id/dmiapi/site/login', [
                'LoginForm[username]' => $request->username,
                'LoginForm[password]' => $request->password,
                'api' => 'login'
            ]);
            $response = json_decode($data->body());

            // dd(json_decode($data->body()));
            if ($response->authenticated) {
                $request->session()->put('loginMpp', $request->username);
            }
            return back()->with('success','Anda telah berhasil login');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function regisMpp(Request $request)
    {
        try {
            $data =  $this->postApiMpp('https://antrian-mpp.balikpapan.go.id/dmiapi/Antrian/Register', [
                'nik' => $request->nik,
                'email' => $request->email,
                'nama' => $request->nama,
                'password' => $request->password
            ]);
            return back()->with('success','Akun Berhasil Dibuat');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function lupaPassword(Request $request)
    {
        try {
            $data =  $this->postApiMpp('https://antrian-mpp.balikpapan.go.id/dmiapi/Antrian/ResetPass', [
                'email' => $request->email
            ]);
            return back()->with('success','Akun Berhasil Dibuat');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
