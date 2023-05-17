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

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function generatePassword()
    {
        $tmp = (new \DateTime)->format('Ymd');
        $password = $tmp . '' . 'mppbpp108%!';
        // dd(md5($password));
        return md5($password);
    }

    public function postApiMpp($url, $request)
    {
        $response = Http::withBasicAuth('dmiapiservice', $this->generatePassword())->asForm()->post($url, $request);
        // dd($data);
        $data = json_decode($response->body());
        return $data;
    }

    public function getApiMpp($url, $request)
    {
        $response = Http::withBasicAuth('dmiapiservice', $this->generatePassword())->get($url, $request);
        $data = json_decode($response->body());
        return $data;
    }

    public function getNilaiSKM()
    {
        $response = $this->getApiMpp('https://skm-mpp.balikpapan.go.id/dmiapiskm/skm/nilaiskm', "");
        // dd($response);
        // $data = json_decode($response->body());
        return $response;
    }

    public function getInstansiKuota(Request $request)
    {
        $response = $this->postApiMpp('https://antrian-mpp.balikpapan.go.id/dmiapi/antrian/getlayanan', [
            'instansi_id' => $request->instansi_id
        ]);
        // dd($response->data[0]);
        // $data = json_decode($response->body());
        return $response->data[0];
    }

    public function syncInstansi()
    {
        $dataInstansi = $this->postApiMpp('https://antrian-mpp.balikpapan.go.id/dmiapi/antrian/getinstansi', []);
        foreach ($dataInstansi->data as $item) {
            $dataInstansi = Instansi::where('id_instansi_mpp', $item->id)->exists();
            if (!$dataInstansi) {
                Instansi::insert([
                    'id' => $item->id,
                    'nama_instansi' => $item->nama,
                    'gambar' => $item->logo,
                    'id_instansi_mpp' => $item->id
                ]);
            }
        }
    }

    public function loginMpp()
    {
        $dataInstansi = $this->postApiMpp('https://antrian-mpp.balikpapan.go.id/dmiapi/antrian/getinstansi', []);
    }
}
