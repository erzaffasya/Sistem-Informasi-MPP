<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    use HasFactory;
    protected $table = 'kategori_galeri';
    protected $guarded = [];

    protected $primaryKey = 'id';
    // public function User()
    // {
    //     return $this->belongsTo(User::class, 'users_id', 'id');
    // }
}
