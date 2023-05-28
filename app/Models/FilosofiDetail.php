<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilosofiDetail extends Model
{
    use HasFactory;
    protected $table = 'filosofi_detail';
    protected $guarded = [];

    protected $primaryKey = 'id';
}
