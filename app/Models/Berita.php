<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'berita';
    protected $primaryKey = 'id';

    public $fillable = [
        'foto',
        'penulis',
        'judul',
        'tulisan',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
