@extends('master')

@section('content')
    <!--begin::Team Section-->
    <div class="landing-dark-bg pt-20 w-100 min-h-350px min-h-lg-500px px-9">
        <h1 class="text-center text-black lh-base fw-bold fs-2x mt-8">PUBLIKASI KADER
        </h1>
        <h3 class="text-center text-black lh-base fw-bold ">(MELIPUTI TULISAN, PUISI, KEGIATAN DAN SEGALA BENTUK KARYA KADER)
        </h3>
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-8 offset-md-2 pt-5">
                <div class="input-group">
                    <input class="form-control" name="cari" placeholder="Masukkan Pencarian Anda" id="search-input">
                </div>
            </div>
        </div>
        <!--end::Row-->
        <div class="py-lg-5">
            <div class="container">
                <div class="team-container">
                    <div class="mt-6 flex justify-center">
                        <div class="flex flex-row pl-28 pt-6 pb-10">
                            <div class="row p-5" id="publikasi">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Team Section-->
    @include('publikasi.javascript')
@endsection
