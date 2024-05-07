<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function arsip()
    {
        $data_arsip = \App\Models\Arsip::all(); // Corrected model class to Struktural
        return view('back.arsip.arsip', ['data_arsip' => $data_arsip]);
    }

    public function create(Request $request)
    {
        // Validasi data
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
            'keterangan' => 'required|string',
            // ... tambahkan validasi sesuai kebutuhan
        ]);

        // Proses file upload jika ada

        $path = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->getClientOriginalName();
            $file->move('storage/arsip/', $path);
        }


        // Membuat entitas Struktural
        \App\Models\Arsip::create([
            'file' => $path,
            'keterangan' => $request->input('keterangan'),
            // ... tambahkan kolom lain sesuai kebutuhan
        ]);

        // Redirect dengan pesan sukses
        return redirect('/admin/arsip')->with('sukses', 'Berhasil Di Input');
    }

    public function hapus($id)
    {
        $arsip = \App\Models\Arsip::find($id);
        $arsip->delete();
        return redirect('/admin/arsip')->with('sukses', 'Berhasil Di Hapus');
    }
}
