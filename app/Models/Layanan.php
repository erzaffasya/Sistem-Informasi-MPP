<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $guarded = [];

    protected $primaryKey = 'id';
    public function Instansi()
    {
        return $this->belongsTo(Instansi::class, 'instansi_id', 'id');
    }
    public function NamaLayanan()
    {
        return $this->belongsTo(NamaLayanan::class, 'nama_layanan_id', 'id');
    }
}
