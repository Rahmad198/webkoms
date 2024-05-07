@extends('back.app')

@section('isi')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="mb-0 mb-2 font-weight-bold" style="color:#000000;">Publikasi / Tambah Data</h1>
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
                <form action="/publikasi/create" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <div class="form-group col-md-12">
                            <label for="inputJudul">Judul</label>
                            <input name="judul" type="text" class="form-control" id="inputJudul" placeholder="Judul"
                                style="color: black">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFileFoto">Foto</label>
                            <input name="foto" type="file" class="form-control-file" id="exampleFileFoto">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group col-md-12">
                            <label for="inputPenulis">Penulis</label>
                            <input name="penulis" type="text" class="form-control" id="inputPenulis" name="penulis"
                                placeholder="Penulis" style="color: black">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group col-md-12">
                            <label for="inputTulisan">Tulisan</label>
                            <textarea name="tulisan" type="text" class="form-control" id="inputTulisan" rows="3" placeholder="Tulisan"
                                style="color: black"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/admin/publikasi"
                            class="text-white btn bg-gradient-primary btn-sm float-right accordion">Close</a>
                        <button
                            type="submit"class="text-white btn bg-gradient-primary btn-sm float-right accordion">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
