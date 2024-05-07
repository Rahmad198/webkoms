@extends('back.app')

@section('isi')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mb-0 text-gray-900">Berita / Edit</h1>
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
                <form action="/berita/{{ $berita->id }}/update" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleFileFoto">Foto</label>
                        <input name="foto" type="file" class="form-control-file" id="exampleFileFoto">
                        @if ($berita->foto)
                            <img src="{{ asset('storage/berita/' . $berita->foto) }}" alt="Current Image"
                                style="width: 250px;">
                        @endif
                    </div>
                    <input type="hidden" name="current_foto" value="{{ $berita->foto }}">
                    <div class="form-group col-md-6">
                        <label for="inputPenulis">Penulis</label>
                        <input name="penulis" type="text" class="form-control" id="inputPenulis" placeholder="Penulis"
                            value="{{ $berita->penulis }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputJudul">Judul</label>
                        <input name="judul" type="text" class="form-control" id="inputJudul" placeholder="Judul"
                            value="{{ $berita->judul }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTulisan">Tulisan</label>
                        <textarea name="tulisan" type="text" class="form-control" id="inputTulisan" rows="3" placeholder="Tulisan">{{ $berita->tulisan }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <a href="/admin/berita"
                            class="text-white btn bg-gradient-primary btn-sm float-right accordion">Close</a>
                        <button
                            type="submit"class="text-white btn bg-gradient-primary btn-sm float-right accordion">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
