<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publikasi;
use App\Models\DetailBuku;

class PencarianPublikasiController extends Controller
{
    public function index()
    {
        return view('publikasi.publikasi');
    }

    public function search(Request $request){
        try {
            $value = $request->all();
            // dd($value);
            $operation = Publikasi::where('publikasi.judul', 'LIKE', '%' . $value['val'] . '%')
                            ->orWhere('bukus.penulis', 'LIKE', '%' . $value['val'] . '%')
                            ->get()->toArray();
     
            return $this->response($operation);
        } catch (\Exception $e) {
            return $this->response($e->getMessage(), true);
        }
    }

    public function selectDetail(Request $request){
        try {
            $value = $request->all();

            $operation = Publikasi::where('publikasi.id', $value['id'])
                            ->get()->toArray();
            return $this->response($operation);
        } catch(\Exception $e){
            return $this->response($e->getMessage(), true);
        }
    }
}
