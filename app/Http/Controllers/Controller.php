<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function generatePassword()
    {
        // 20230510mppbpp108%
        $tmp = (new \DateTime)->format('Ymd');
        $password = $tmp.''.'mppbpp108%!';
        dd(md5($password));
    }

    public function getNilaiSKM(){
        $response = Http::get('https://skm-mpp.balikpapan.go.id/dmiapiskm/skm/nilaiskm');
        $skm = json_decode($response->body());
        return $skm;
    }
}
