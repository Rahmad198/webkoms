@extends('back.app')

@section('isi')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="mb-0 mb-2 font-weight-bold" style="color:#000000;">Publikasi</h5>
            <button onclick="window.location.href='/publikasi/tambah'" type="button" class="text-white btn bg-gradient-primary btn-sm float-right accordion">
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
                            <th>JUDUL</th>
                            <th>FOTO</th>
                            <th>PENULIS</th>
                            <th>TULISAN</th>
                            <th>WAKTU UPLOAD</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data_publikasi as $publikasi)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $publikasi->judul }}</td>
                                <td>{{ $publikasi->foto }}</td>
                                <td>{{ $publikasi->penulis }}</td>
                                <td>{{ Str::limit($publikasi->tulisan, 30) }}</td>
                                <td>{{ $publikasi->created_at }}</td>
                                <td><a href="/publikasi/{{ $publikasi->id }}/ubah"><i
                                            class="fas fa-edit btn btn-warning btn-sm"></i></a></td>
                                <td><a href="/publikasi/{{ $publikasi->id }}/hapus"><i
                                            class="fas fa-trash-alt btn btn-warning btn-sm"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
