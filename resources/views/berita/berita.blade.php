@extends('master')

@section('content')
    <div class="landing-dark-bg">
        <div id="imageDiv" class="text-center text-white lh-base fw-bold fs-3x"
            style="background-size: cover; background-position: center; padding-top: 100px; padding-bottom: 100px;">
            BERITA
        </div>

        <script>
            var images = ['1.png', '2.png', '3.png']; // List of image file names
            var currentIndex = 0;
            var imageDiv = document.getElementById('imageDiv');

            function changeImage() {
                imageDiv.style.backgroundImage = 'url("assets/media/illustrations/' + images[currentIndex] + '")';
                currentIndex = (currentIndex + 1) % images.length; // Cycle through the images
            }

            // Call changeImage function at regular intervals to change the image
            setInterval(changeImage, 3000); // Change image every 3 seconds
        </script>
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-8 offset-md-2 pt-5">
                <div class="input-group">
                    <input class="form-control" name="cari" placeholder="Masukkan Pencarian Anda" id="search-input">
                </div>
            </div>
        </div>
        <!--end::Row-->
        <div class="py-lg-2">
            <div class="container">
                <div class="team-container">
                    <div class="mt-12 flex justify-center">
                        <div class="flex flex-row pl-28 pt-6 pb-10">
                            <div class="row p-5" id="berita">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('berita.javascript')
@endsection
