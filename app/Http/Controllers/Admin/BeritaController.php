<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
    $data_berita = \App\Models\Berita::all(); // Corrected model class to Struktural
    return view('back.ber.berita', ['data_berita' => $data_berita]);
    }

    public function tambah()
    {
    $berita = \App\Models\Berita::all();
    return view('back.ber.tambah', ['berita' => $berita]);
    }

    public function create(Request $request)
    {
    // Validasi data
    $request->validate([
        'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'penulis' => 'required|string',
        'judul' => 'required|string',
        'tulisan' => 'required|string',
        // ... tambahkan validasi sesuai kebutuhan
    ]);

    // Proses file upload jika ada
    $fotoPath = null;
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $fotoPath = $foto->getClientOriginalName();
        $foto->move('storage/berita/', $fotoPath);
    }

    // Membuat entitas Struktural
    \App\Models\Berita::create([
        'foto' => $fotoPath,
        'penulis' => $request->input('penulis'),
        'judul' => $request->input('judul'),
        'tulisan' => $request->input('tulisan'),
        // ... tambahkan kolom lain sesuai kebutuhan
    ]);

    // Redirect dengan pesan sukses
    return redirect('/admin/berita')->with('sukses', 'Berhasil Di Input');
    }

    public function ubah($id)
    {
    // Menggunakan $anggota bukan $data_anggota
    $berita = \App\Models\Berita::find($id);
    // Mengirimkan data anggota ke view
    return view('back.ber.ubah', ['berita' => $berita]);
    }

    public function update(Request $request, $id)
    {
    // Find the existing record
    $berita = \App\Models\Berita::findOrFail($id);

    // Process file upload if available
    $fotoPath = $berita->foto; // Set the current photo value as the default

    if ($request->hasFile('foto')) {
        // If there is an uploaded image file, process and save it to the 'fotopostingan' directory
        $foto = $request->file('foto');
        $fotoPath = $foto->getClientOriginalName();
        $foto->move('storage/berita/', $fotoPath);
    } elseif ($request->has('current_foto') && $request->input('current_foto')) {
        // If no image is uploaded but there is a current photo, use the current photo
        $fotoPath = $request->input('current_foto');
    }

    // Validate and update data
    $request->validate([
        'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'penulis' => 'required|string',
        'judul' => 'required|string',
        'tulisan' => 'required|string',
    ]);

    // Update data
    $berita->update([
        'foto' => $fotoPath,
        'penulis' => $request->input('penulis'),
        'judul' => $request->input('judul'),
        'tulisan' => $request->input('tulisan'),
        // ... add other columns as needed
    ]);

    // Redirect with success message
    return redirect('/admin/berita')->with('sukses', 'Berhasil Di Edit');
    }


    public function hapus ($id){
        $berita = \App\Models\Berita::find($id);
        $berita->delete();
        return redirect('/admin/berita')->with('sukses', 'Berhasil Di Hapus');
    }
}