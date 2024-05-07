<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'anggota';
    protected $primaryKey = 'id';

    public $fillable = [
        'foto',
        'nama_lengkap',
        'tempat_tanggal_lahir',
        'asal',
        'jurusan',
        'lk1',
        'lk2',
        'lk3',
        'training_nonformal',
        'lembaga_nonhmi',
        'status_anggota',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
