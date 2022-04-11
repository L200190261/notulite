<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_administrator extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'administrator';
    protected $fillable = [
        'no',
        'id',
        'nip',
        'nama',
        'username',
        'password',
        'jabatan',
        'instansi',
        'bidang'
    ];
    protected $hidden;
}
