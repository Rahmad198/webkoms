<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Struktural;
use App\Models\Anggota;
use App\Models\Publikasi;
use App\Models\Berita;
use App\Models\Arsip;
use Carbon\Carbon;
use PhpParser\Node\Expr\AssignOp\Concat;

class DashboardController extends Controller
{
    public function getStruktural()
    {
        $struktural = Struktural::all()->toArray();
        return $struktural;
    }

    public function getAnggota(Request $request)
    {
        if($request->search){
            $anggota = Anggota::where('nama_lengkap', 'like', '%' . $request->search . '%')->get()->toArray();
        }else{

            $anggota = Anggota::all()->toArray();
        }
        return $anggota;
    }

    public function getPublikasi(Request $request)
    {
        if($request->search){
            $publikasi = Publikasi::where('judul', 'like', '%' . $request->search . '%')->get()->toArray();
        }else{

            $publikasi = Publikasi::all()->toArray();
        }
        return $publikasi;
    }
    public function getDetailpublikasi(Request $request)
    {
        $id = $request->id;
        $publikasi = Publikasi::find($id)->toArray();

        $publikasi['created_at'] = Carbon::parse($publikasi['created_at'])->format('d-m-Y');

        return view('publikasi.detailpublikasi', ['publikasi' => $publikasi]);
    }

    public function getBerita(Request $request)
    {
        if($request->search){
            $berita = Berita::where('judul', 'like', '%' . $request->search . '%')->get()->toArray();
        }else{

            $berita = Berita::all()->toArray();
        }
        return $berita;
    }

    public function getDetailberita(Request $request)
    {
        $id = $request->id;
        $berita = Berita::find($id)->toArray();

        $berita['created_at'] = Carbon::parse($berita['created_at'])->format('d-m-Y');

        return view('berita.detailberita', ['berita' => $berita]);
    }

    public function getArsip()
    {
        $arsip = Arsip::all()->toArray();
        return $arsip;
    }
}
