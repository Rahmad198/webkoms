@extends('back.app')

@section('isi')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mb-0 text-gray-900">Struktural / Edit</h1>
            <!-- Content Row -->
            @if (session()->has('sukses'))
                <div class="alert alert-success" role="alert">
                    {{ session('sukses') }}
                </div>
            @endif
        </div>
        <!-- End Page Content -->

        <!-- /.container-fluid -->
        <!-- End of Main Content -->
        <div class="container">
            <div class="modal-body">
                <form action="/struktural/{{ $struktural->id }}/update" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleFileFoto">Foto</label>
                        <input name="foto" type="file" class="form-control-file" id="exampleFileFoto">
                        @if ($struktural->foto)
                            <img src="{{ asset('storage/struktural/' . $struktural->foto) }}" alt="Current Image"
                                style="width: 250px;">
                        @endif
                    </div>
                    <input type="hidden" name="current_foto" value="{{ $struktural->foto }}">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNama">Nama</label>
                            <input name="nama_lengkap" type="text" class="form-control" id="inputNama"
                                name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $struktural->nama_lengkap }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputJabatan">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" id="inputJabatan"
                                placeholder="Jabatan" value="{{ $struktural->jabatan }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/admin/struktural"
                            class="text-white btn bg-gradient-primary btn-sm float-right accordion">Close</a>
                        <button
                            type="submit"class="text-white btn bg-gradient-primary btn-sm float-right accordion">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
