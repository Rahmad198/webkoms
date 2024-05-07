@extends('back.app')

@section('isi')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="mb-0 mb-2 font-weight-bold" style="color:#000000;">Arsip</h5>
            <button type="button" class="text-white btn bg-gradient-primary btn-sm float-right accordion" data-toggle="modal"
                data-target="#exampleModal">
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
                            <th>FILE</th>
                            <th>KETERANGAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data_arsip as $arsip)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $arsip->file }}</td>
                                <td>{{ $arsip->keterangan }}</td>
                                <td><a href="/arsip/{{ $arsip->id }}/hapus"><i
                                            class="fas fa-trash-alt btn btn-warning btn-sm"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Page Content -->
            <!-- End of Main Content -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Arsip / Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/arsip/create" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFile">File</label>
                                    <input name="file" type="file" class="form-control-file" id="exampleFile"
                                        accept="">
                                </div>
                                <div class="form-group">
                                    <label for="inputKeterangan">Keterangan</label>
                                    <input name="keterangan" type="text" class="form-control" id="inputKeterangan"
                                        placeholder="Keterangan" required>
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
            </div>
        </div>
    </div>
@endsection
