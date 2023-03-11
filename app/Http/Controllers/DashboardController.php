<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $Layanan = Layanan::all();
        return view('admin.index', compact('Layanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

?>