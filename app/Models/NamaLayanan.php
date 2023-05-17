<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaLayanan extends Model
{
    use HasFactory;
    protected $table = 'nama_layanan';
    protected $guarded = [];

    protected $primaryKey = 'id';
}
