@extends('back.app')

@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="mb-0 mb-2 font-weight-bold" style="color:#000000;">Berita</h5>
            <button onclick="window.location.href='/berita/tambah'" type="button" class="text-white btn bg-gradient-primary btn-sm float-right accordion">
                Tambah Data
            </button>
        </div>

        <!-- Content Row -->
        @if (session()->has('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <table class="table table-hover mb-2">
                    <thead class="thead-grey-50">
                        <tr>
                            <th>NO</th>
                            <th>FOTO</th>
                            <th>PENULIS</th>
                            <th>JUDUL</th>
                            <th>TULISAN</th>
                            <th>WAKTU UPLOAD</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data_berita as $berita)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $berita->foto }}</td>
                                <td>{{ $berita->penulis }}</td>
                                <td>{{ $berita->judul }}</td>
                                <td>{{ Str::limit($berita->tulisan, 30) }}</td>
                                <td>{{ $berita->created_at }}</td>
                                <td><a href="/berita/{{ $berita->id }}/ubah"><i
                                            class="fas fa-edit btn btn-warning btn-sm"></i></a></td>
                                <td><a href="/berita/{{ $berita->id }}/hapus"><i
                                            class="fas fa-trash-alt btn btn-warning btn-sm"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Page Content -->

        <!-- End of Main Content -->
        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Berita / Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/berita/create" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFileFoto">Foto</label>
                                <input name="foto" type="file" class="form-control-file" id="exampleFileFoto"
                                    accept="image/*">

                            </div>
                            <div class="form-group">
                                <label for="inputPenulis">Penulis</label>
                                <input name="penulis" type="text" class="form-control" id="inputPenulis"
                                    placeholder="Penulis" required>
                            </div>
                            <div class="form-group">
                                <label for="inputJudul">Judul</label>
                                <input name="judul" type="text" class="form-control" id="inputJudul"
                                    placeholder="Judul" required>
                            </div>
                            <div class="form-group">
                                <label for="inputTulisan">Tulisan</label>
                                <textarea name="tulisan" type="text" class="form-control" id="inputTulisan" rows="3" 
                                    placeholder="Tulisan"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button"
                                    class="text-white btn bg-gradient-primary btn-sm float-right accordion"
                                    data-dismiss="modal">Close</button>
                                <button
                                    type="submit"class="text-white btn bg-gradient-primary btn-sm float-right accordion">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
