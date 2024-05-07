<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Struktural;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StrukturalController extends Controller
{
    public function struktural()
    {
        $data_struktural = \App\Models\Struktural::all(); // Corrected model class to Struktural
        return view('back.struk.struktural', ['data_struktural' => $data_struktural]);
    }

    public function create(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $request->validate([
                'nama_lengkap' => 'required|string',
                'jabatan' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $image = $request->file('foto');
            if (!empty($image)) {
                $request->image = $request->nama_lengkap . '-foto.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage/struktural/'), $request->image);
            }

            $data['foto'] = $request->image;
            Struktural::create($data);

            DB::commit();

            return redirect('/admin/struktural')->with('sukses', 'Berhasil Di Input');
        } catch (\Exception $e) {
            DB::rollback();
            return $this->responseCreate($e->getMessage(), true);
        }
    }

    public function ubah($id)
    {
        // Menggunakan $anggota bukan $data_anggota
        $struktural = \App\Models\Struktural::find($id);
        // Mengirimkan data anggota ke view
        return view('back.struk.ubah', ['struktural' => $struktural]);
    }

    public function update(Request $request, $id)
    {
        // Find the existing record
        $struktural = \App\Models\Struktural::find($id);

        // Process file upload if available
        $fotoPath = $struktural->foto; // Set the current photo value as the default

        if ($request->hasFile('foto')) {
            // If there is an uploaded image file, process and save it to the 'fotostruktural' directory
            $foto = $request->file('foto');
            $fotoPath = $foto->getClientOriginalName();
            $foto->move('storage/struktural/', $fotoPath);
        } elseif ($request->has('current_foto') && $request->input('current_foto')) {
            // If no image is uploaded but there is a current photo, use the current photo
            $fotoPath = $request->input('current_foto');
        }

        // Validate and update data
        $request->validate([
            'nama_lengkap' => 'required|string',
            'jabatan' => 'required|string', // Add validation for 'jabatan'
        ]);

        $struktural->update([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jabatan' => $request->input('jabatan'), // Fix: use 'jabatan' instead of empty string
            'foto' => $fotoPath,
            // ... add other columns as needed
        ]);

        // Redirect with success message
        return redirect('/admin/struktural')->with('sukses', 'Berhasil Di Edit');
    }

    public function hapus($id)
    {
        $struktural = \App\Models\Struktural::find($id);
        $struktural->delete();
        return redirect('/admin/struktural')->with('sukses', 'Berhasil Di Hapus');
    }
}
