@extends('master')

@section('content')
    <!--begin::Landing hero-->
    <div class="landing-dark-bg pt-20 w-100 min-h-350px min-h-lg-500px px-9">
        <!--begin::Title-->
        <h3 class="text-center fs-2hx text-black fw-bold mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">
            DATABASE KADER</h3>
        <h3 class="text-center fs-2hx text-black fw-bold mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">
            HMI KOMISARIAT TEKNIK UMM</h3>
        <br>
        <!--end::Title-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-8 offset-md-2 pt-5">
                <div class="input-group">
                    <input class="form-control" name="cari" placeholder="Masukkan Pencarian Anda" id="search-input">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-container">
                <div class="mt-8 flex justify-center">
                    <div class="flex flex-row">
                        <div class="row p-3" id="anggota">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="preload" as="style" href="https://www.cinemation.develobe.id/build/assets/app-ef435afa.css">
    <link rel="stylesheet" href="https://www.cinemation.develobe.id/build/assets/app-ef435afa.css">
    @include('databasekader.javascript')
@endsection
