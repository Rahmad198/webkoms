<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function sejarahhmi()
    {
        return view('sejarahhmi');
    }

    public function struktural()
    {
        return view('struktural');
    }

    public function publikasi()
    {
        return view('publikasi.publikasi');
    }

    public function berita()
    {
        return view('berita.berita');
    }
    public function databasekader()
    {
        return view('databasekader.databasekader');
    }
    public function getdetailpublikasi()
    {
        return view('publikasi.detailpublikasi');
    }
    public function anggota()
    {
        return view('anggota');
    }
}
