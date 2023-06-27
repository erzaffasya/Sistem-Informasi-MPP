<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $table = 'shetabit_visits';
    protected $guarded = [];

    protected $primaryKey = 'id';
    // public function User()
    // {
    //     return $this->belongsTo(User::class, 'users_id', 'id');
    // }
}
