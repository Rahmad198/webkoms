@extends('master')

@section('content')
    <!--begin::Landing hero-->
    <div class="landing-dark-bg pt-20 w-100 min-h-350px min-h-lg-500px px-9">
        <div id="detail_result" class="shadow text-center mb-5">
            <h1 class="text-black lh-base fw-bold fs-2x">
                {{ $publikasi['judul'] }}
            </h1>
            <br>
            <br>
            <br>
            <br>
            <img class="h-lg-300px" src="${url}" alt="" />
            <br>
            <br>
            <div class="konten-terbaru">
                <small class="px-5 text-black me-3">
                    <i class="bi bi-clock me-1">
                    </i>
                    {{ $publikasi['created_at'] }}
                </small>
                <small class="text-black">
                    <i class="bi bi-tag me-1"></i>
                    Publikasi
                </small>
            </div>
            <br>
            <div class="text-center fw-bold fs-4 text-black ms-lg-20 me-20">
                Oleh: {{ $publikasi['penulis'] }}
            </div>
            <br>
            <br>
            <div class="text-container">
                <div class="fw-bold fs-4 text-black ms-lg-20 me-20">
                    {{ $publikasi['tulisan'] }}
                </div>
            </div>

        </div>
    </div>
    <!--end::Landing hero-->
@endsection
