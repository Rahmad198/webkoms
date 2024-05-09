@extends('master')

@section('content')
    <!--begin::Landing hero-->
    <div class="landing-dark-bg pt-20 px-9">
        <!--begin::Heading-->
        <!--begin::Title-->
        <h3 class="text-center fs-2hx text-black fw-bold mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">
            {{ $publikasi['judul'] }}</h3>
        <br>
        <!--end::Title-->
        <!--begin::Action-->
        <br>
        <div class="text-center">
            <img class="h-lg-300px mx-auto" src="{{ asset('storage/publikasi/' . $publikasi['foto']) }}" alt="" />
        </div>
        <br>
        <!--end::Action-->
        <div class="text-center konten-terbaru">
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
        <!--begin::Text-->
        <style>
            .text-container {
                text-align: justify;
            }
        </style>
        <div class="container">
            <div class="text-container ms-lg-20 me-20">
                <div class="fw-bold fs-4 text-black">
                    @foreach (explode("\n", $publikasi['tulisan']) as $paragraph)
                        <p>{{ ' ' . ltrim($paragraph) }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <!--end::Text-->
    </div>
    @include('publikasi.javascript')
    <!--end::Landing hero-->
@endsection
