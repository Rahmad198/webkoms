<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function publikasi()
    {
    $data_publikasi = \App\Models\Publikasi::all(); // Corrected model class to Struktural
    return view('back.publik.publikasi', ['data_publikasi' => $data_publikasi]);
    }

    public function tambah()
    {

    $publikasi = \App\Models\Publikasi::all();
    return view('back.publik.tambah', ['publikasi' => $publikasi]);
    }

    public function create(Request $request)
    {
    // Validasi data
    $request->validate([
        'judul' => 'required|string',
        'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'penulis' => 'required|string',
        'tulisan' => 'required|string',
        // ... tambahkan validasi sesuai kebutuhan
    ]);

    // Proses file upload jika ada
    $fotoPath = null;
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $fotoPath = $foto->getClientOriginalName();
        $foto->move('storage/publikasi/', $fotoPath);
    }

    // Membuat entitas Struktural
    \App\Models\Publikasi::create([
        'judul' => $request->input('judul'),
        'foto' => $fotoPath,
        'penulis' => $request->input('penulis'),
        'tulisan' => $request->input('tulisan'),
        // ... tambahkan kolom lain sesuai kebutuhan
    ]);

    // Redirect dengan pesan sukses
    return redirect('/admin/publikasi')->with('sukses', 'Berhasil Di Input');
    }

    public function ubah($id)
    {
    // Menggunakan $anggota bukan $data_anggota
    $publikasi = \App\Models\Publikasi::find($id);
    // Mengirimkan data anggota ke view
    return view('back.publik.ubah', ['publikasi' => $publikasi]);
    }

    public function update(Request $request, $id)
    {
    // Find the existing record
    $publikasi = \App\Models\Publikasi::findOrFail($id);

    // Process file upload if available
    $fotoPath = $publikasi->foto; // Set the current photo value as the default

    if ($request->hasFile('foto')) {
        // If there is an uploaded image file, process and save it to the 'fotopublikasi' directory
        $foto = $request->file('foto');
        $fotoPath = $foto->getClientOriginalName();
        $foto->move('storage/publikasi/', $fotoPath);
    } elseif ($request->has('current_foto') && $request->input('current_foto')) {
        // If no image is uploaded but there is a current photo, use the current photo
        $fotoPath = $request->input('current_foto');
    }

    // Validate and update data
    $request->validate([
        'judul' => 'required|string',
        'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'penulis' => 'required|string',
        'tulisan' => 'required|string',
    ]);

    // Update data
    $publikasi->update([
        'judul' => $request->input('judul'),
        'foto' => $fotoPath,
        'penulis' => $request->input('penulis'),
        'tulisan' => $request->input('tulisan'),
        // ... add other columns as needed
    ]);

    // Redirect with success message
    return redirect('/admin/publikasi')->with('sukses', 'Berhasil Di Edit');
    }


    public function hapus ($id){
        $publikasi = \App\Models\Publikasi::find($id);
        $publikasi->delete();
        return redirect('/admin/publikasi')->with('sukses', 'Berhasil Di Hapus');
    }
}
