<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index()
    {
        $data_anggota = \App\Models\Anggota::all();
        return view('back.data.index', ['data_anggota' => $data_anggota]);
    }

    public function create(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $request->validate([
                'nama_lengkap' => 'required|string',
                'tempat_tanggal_lahir' => 'required|string',
                'asal' => 'required|string',
                'jurusan' => 'required|string',
                'lk1' => 'required|string',
                'lk2' => 'required|string',
                'lk3' => 'required|string',
                'status_anggota' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // tambahkan validasi untuk file foto
            ]);

            $image = $request->file('foto');
            if (!empty($image)) {
                $request->image = $request->nama_lengkap . $image->getClientOriginalExtension();
                $image->move(public_path('storage/anggota/'), $request->image);
            }

            $data['foto'] = $request->image;
            Anggota::create($data);

            DB::commit();

            return redirect('/admin/anggota')->with('sukses', 'Berhasil Di Input');
        } catch (\Exception $e) {
            DB::rollback();
            return $this->responseCreate($e->getMessage(), true);
        }
    }



    public function edit($id)
    {
        // Menggunakan $anggota bukan $data_anggota
        $anggota = \App\Models\Anggota::find($id);
        // Mengirimkan data anggota ke view
        return view('back.data.edit', ['anggota' => $anggota]);
    }

    public function update(Request $request, $id)
    {
        $anggota = \App\Models\Anggota::find($id);

        // Proses file upload jika ada
        $fotoPath = $anggota->foto; // Tetapkan nilai foto saat ini sebagai default

        if ($request->hasFile('foto')) {
            // Jika ada file gambar yang diunggah, proses dan simpan ke direktori 'fotokader'
            $foto = $request->file('foto');
            $fotoPath = $foto->getClientOriginalName();
            $foto->move('fotokader/', $fotoPath);
        } elseif ($request->has('current_foto') && $request->input('current_foto')) {
            // Jika tidak ada gambar yang diunggah, tetapi ada foto saat ini, gunakan foto saat ini
            $fotoPath = $request->input('current_foto');
        }

        // Update data anggota
        $anggota->update([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'tempat_tanggal_lahir' => $request->input('tempat_tanggal_lahir'),
            'asal' => $request->input('asal'),
            'jurusan' => $request->input('jurusan'),
            'lk1' => $request->input('lk1', ''),
            'lk2' => $request->input('lk2', ''),
            'lk3' => $request->input('lk3', ''),
            'training_nonformal' => $request->input('training_nonformal', ''), // default: ''
            'lembaga_nonhmi' => $request->input('lembaga_nonhmi', ''), // default: ''
            'status_anggota' => $request->input('status_anggota'),
            'foto' => $fotoPath, // jika menggunakan file upload
            // ... tambahkan kolom lain sesuai kebutuhan
        ]);

        // Redirect dengan pesan sukses
        return redirect('/admin/anggota')->with('sukses', 'Berhasil Di Edit');
    }

    public function hapus($id)
    {
        $anggota = \App\Models\Anggota::find($id);
        $anggota->delete();
        return redirect('/admin/anggota')->with('sukses', 'Berhasil Di Hapus');
    }
}
