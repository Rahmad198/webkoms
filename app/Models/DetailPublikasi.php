<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPublikasi extends Model
{
    protected $table = 'detail_publikasi';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'judul',
        'foto',
        'penulis', 
        'tulisan', 
    ];

    public function publikasi()
    {
    	return $this->belongsTo(Publikasi::class,'publikasi_id')->select(['id', 'judul']);
    }

    // public function peminjaman_detail()
    // {
    // 	return $this->hasMany(PeminjamanDetail::class,'detail_buku_id');
    // }
}
