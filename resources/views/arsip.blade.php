@extends('master')

@section('content')
    <!--begin::Heading-->
    <div class="landing-dark-bg pt-20 w-100 min-h-350px min-h-lg-500px px-9">
        <h1 class="text-center text-black lh-base fw-bold fs-2x">ARSIP HMI KOMISARIAT TEKNIK UMM
        </h1>
        <!--end::Heading-->
        <div class="py-lg-20">
            <!--begin::promosi Section-->
            <div class="mb-n10 mb-lg-n20 z-index-2">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-hover mb-2 shadow">
                                <thead class="thead-grey-50">
                                    <tr>
                                        <th style="text-align: center; border-bottom: 1px solid black;"><strong>NO</strong></th>
                                        <th style="border-bottom: 1px solid black;"><strong>FILE</strong></th>
                                        <th style="border-bottom: 1px solid black;"><strong>KETERANGAN</strong></th>
                                        <th style="text-align: center; border-bottom: 1px solid black;"><strong>AKSI</strong></th>
                                    </tr>
                                </thead>
                                <tbody id="arsip">
                                    <!-- Isi tabel akan ditambahkan di sini -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
            </div>
        </div>
        <!--end::Container-->
    </div>
    @include('javascript')
@endsection
