<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'publikasi';
    protected $primaryKey = 'id';

    public $fillable = [
        'judul',
        'foto',
        'penulis',
        'tulisan',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
