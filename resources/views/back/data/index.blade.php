@extends('back.app')

@section('isi')
    <div class="container-fluid" style="overflow: auto; max-height: 550px;">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="mb-0 mb-2 font-weight-bold" style="color:#000000;">Database Kader</h5>
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
                    <thead class="thead-gray">
                        <tr>
                            <th>NO</th>
                            <th>FOTO</th>
                            <th>NAMA</th>
                            <th>TTL</th>
                            <th>ASAL</th>
                            <th>JURUSAN</th>
                            <th>LK I</th>
                            <th>LK II</th>
                            <th>LK III</th>
                            <th>TRAINING NONFORMAL</th>
                            <th>LEMBAGA NON HMI</th>
                            <th>STATUS ANGGOTA</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data_anggota as $anggota)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $anggota->foto }}</td>
                                <td>{{ $anggota->nama_lengkap }}</td>
                                <td>{{ $anggota->tempat_tanggal_lahir }}</td>
                                <td>{{ $anggota->asal }}</td>
                                <td>{{ $anggota->jurusan }}</td>
                                <td>{{ $anggota->lk1 }}</td>
                                <td>{{ $anggota->lk2 }}</td>
                                <td>{{ $anggota->lk3 }}</td>
                                <td>{{ Str::limit($anggota->training_nonformal, 20) }}</td>
                                <td>{{ Str::limit($anggota->lembaga_nonhmi, 20) }}</td>
                                <td>{{ $anggota->status_anggota }}</td>
                                <td><a href="/anggota/{{ $anggota->id }}/edit"><i
                                            class="fas fa-edit btn btn-warning btn-sm"></i></a></td>
                                <td><a href="/anggota/{{ $anggota->id }}/hapus"><i
                                            class="fas fa-trash-alt btn btn-warning btn-sm"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- End of Main Content -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Database Kader / Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/anggota/create" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFileFoto">Foto</label>
                                <input name="foto" type="file" class="form-control-file" id="exampleFileFoto"
                                    name="foto" accept="image/*">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNama">Nama</label>
                                    <input name="nama_lengkap" type="text" class="form-control" id="inputNama"
                                        name="nama_lengkap" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputTTL">TTL</label>
                                    <input name="tempat_tanggal_lahir" type="text" class="form-control" id="inputTTL"
                                        name="tempat_tanggal_lahir" placeholder="Tempat Tanggal Lahir" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Asal</label>
                                    <input name="asal" type="text" class="form-control" id="inputAddress"
                                        name="asal" placeholder="Kota" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleSelectJurusan">Jurusan</label>
                                    <select name="jurusan" class="form-control" id="exampleSelectJurusan" name="jurusan"
                                        required>
                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                        <option value="Teknik Elektro">Teknik Elektro</option>
                                        <option value="Teknik Industri">Teknik Industri</option>
                                        <option value="Informatika">Informatika</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputLk1">LK I</label>
                                    <input name="lk1" type="text" class="form-control" id="inputLk1"
                                        placeholder="Cabang, Tahun">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputLk2">LK II</label>
                                    <input name="lk2" type="text" class="form-control" id="inputLk2"
                                        placeholder="Cabang, Tahun">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputLk3">LK III</label>
                                    <input name="lk3" type="text" class="form-control" id="inputLk3"
                                        placeholder="Cabang, Tahun">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTrainingnonformal">Training Non Formal</label>
                                <textarea name="training_nonformal" class="form-control" id="inputTrainingnonformal" name="training_nonformal"
                                    rows="3" placeholder="Training Non Formal"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputLembaganonhmi">Lembaga Non HMI</label>
                                <textarea name="lembaga_nonhmi" class="form-control" id="inputLembaganonhmi" name="lembaga_nonhmi" rows="3"
                                    placeholder="Lembaga Non HMI"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Status Anggota</label>
                                <select name="status_anggota" class="form-control" id="inputStatus"
                                    name="status_anggota" required>
                                    <option value="AKTIF">Aktif</option>
                                    <option value="TIDAK AKTIF">Tidak Aktif</option>
                                </select>
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
@endsection
