@extends('back.app')

@section('isi')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mb-0 text-gray-900">Database Kader / Edit</h1>
        </div>

        <!-- Content Row -->
        @if (session()->has('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
        @endif
        <!-- End Page Content -->

        <!-- End of Main Content -->
        <div class="container">
            <div class="modal-body">
                <form action="/anggota/{{ $anggota->id }}/update" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleFileFoto">Foto</label>
                        <input name="foto" type="file" class="form-control-file" id="exampleFileFoto">
                        @if ($anggota->foto)
                            <img src="{{ asset('storage/anggota/' . $anggota->foto) }}" alt="Current Image" style="width: 250px;">
                        @endif
                    </div>
                    <input type="hidden" name="current_foto" value="{{ $anggota->foto }}">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNama">Nama</label>
                            <input name="nama_lengkap" type="text" class="form-control" id="inputNama"
                                name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $anggota->nama_lengkap }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputTTL">TTL</label>
                            <input name="tempat_tanggal_lahir" type="text" class="form-control" id="inputTTL"
                                name="tempat_tanggal_lahir" placeholder="Tempat Tanggal Lahir"
                                value="{{ $anggota->tempat_tanggal_lahir }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Asal</label>
                            <input name="asal" type="text" class="form-control" id="inputAddress" name="asal"
                                placeholder="Kota" value="{{ $anggota->asal }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleSelectJurusan">Jurusan</label>
                            <select name="jurusan" class="form-control" id="exampleSelectJurusan">
                                <option value="Teknik Mesin" {{ $anggota->jurusan == 'Teknik Mesin' ? 'selected' : '' }}>
                                    Teknik
                                    Mesin</option>
                                <option value="Teknik Sipil" {{ $anggota->jurusan == 'Teknik Sipil' ? 'selected' : '' }}>
                                    Teknik
                                    Sipil</option>
                                <option value="Teknik Elektro"
                                    {{ $anggota->jurusan == 'Teknik Elektro' ? 'selected' : '' }}>
                                    Teknik Elektro</option>
                                <option value="Teknik Industri"
                                    {{ $anggota->jurusan == 'Teknik Industri' ? 'selected' : '' }}>
                                    Teknik Industri</option>
                                <option value="Informatika" {{ $anggota->jurusan == 'Informatika' ? 'selected' : '' }}>
                                    Informatika</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputLk1">LK I</label>
                            <input name="lk1" type="text" class="form-control" id="lk1" placeholder="Tahun"
                                value="{{ $anggota->lk1 }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputLk2">LK II</label>
                            <input name="lk2" type="text" class="form-control" id="lk2"
                                placeholder="Cabang, Tahun" value="{{ $anggota->lk2 }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputLk3">LK III</label>
                            <input name="lk3" type="text" class="form-control" id="lk3"
                                placeholder="Cabang, Tahun" value="{{ $anggota->lk3 }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTrainingnonformal">Training Non Formal</label>
                        <textarea name="training_nonformal" class="form-control" id="inputTrainingnonformal" rows="3"
                            placeholder="Training Non Formal">{{ $anggota->training_nonformal }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputLembaganonhmi">Lembaga Non HMI</label>
                        <textarea name="lembaga_nonhmi" class="form-control" id="inputLembaganonhmi" rows="3"
                            placeholder="Lembaga Non HMI">{{ $anggota->lembaga_nonhmi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status Anggota</label>
                        <select name="status_anggota" class="form-control" id="inputStatus">
                            <option value="AKTIF" {{ $anggota->status_anggota == 'AKTIF' ? 'selected' : '' }}>Aktif
                            </option>
                            <option value="TIDAK AKTIF" {{ $anggota->status_anggota == 'TIDAK AKTIF' ? 'selected' : '' }}>
                                Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <a href="/admin/anggota"
                            class="text-white btn bg-gradient-primary btn-sm float-right accordion">Close</a>
                        <button
                            type="submit"class="text-white btn bg-gradient-primary btn-sm float-right accordion">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
