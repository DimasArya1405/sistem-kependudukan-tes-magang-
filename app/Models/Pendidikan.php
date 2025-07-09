<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    public $timestamps = false;
    protected $table = 'pendidikan';
    protected $fillable = ['nama'];
}
