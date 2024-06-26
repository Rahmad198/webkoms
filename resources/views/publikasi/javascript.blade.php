<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var urlPath = {
        getPublikasi: "{{ route('landing.getPublikasi') }}",
    }
    getPublikasi()

    function onSearchResults(page) {
        var itemsPerPage = 6; // Jumlah item per halaman
        totalPages = Math.ceil(data.length / itemsPerPage); // Jumlah total halaman
        var start = (page - 1) * itemsPerPage; // Indeks awal data pada halaman
        var end = start + itemsPerPage; // Indeks akhir data pada halaman
        var pageData = data.slice(start, end); // Ambil data sesuai halaman

        var baseUrl = window.location.origin + '/storage/publikasi/';
        $("#result_publikasi").html("")
        $.each(pageData, function(k, v) {
            if (v.image == '' || v.image == null) {
                v.image = 'default-cover.jpeg';
            }
            $("#result_publikasi").append(`
                    <div class="col-md-4 mt-5" id="publikasi">
                        <div class="card shadow" style="background-color: white;">
                            <img src="${url}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 200px;">
                            <div class="card-body text-black">
                                <div class="konten-terbaru">
                                    <small class="px-7 text-black me-3 fs-6">
                                        <strong class="bi bi-clock me-3"></strong>
                                        <span style="font-weight">${new Date(value.created_at).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' })}</span>
                                    </small>
                                    <small class="text-black fs-6">
                                        <strong class="bi bi-tag me-3"></strong>
                                        <span>Publik</span>
                                    </small>
                                    <h5 class="card-title py-5">${value.judul.substring(0, 50)}</h5>
                                    <h5 class="card-title">Oleh: ${value.penulis}</h5>
                                    <a href="/publikasi/detail/${value.id}" onclick="getDetailpublikasi(${value.id})" class="btn btn-success" style="background-color: #435939">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
            `)

            if (page == 1) {
                showPagination(totalPages, 0)
            } else {
                showPagination(totalPages, page)
            }
        });
    }

        $('#search-input').on('input', function() {
            var searchTerm = $(this).val().toLowerCase();
            getPublikasi(searchTerm);
        });

    function getPublikasi(searchTerm = '') {
        $.ajax({
            url: urlPath.getPublikasi,
            type: 'GET',
            data: {
                'search': searchTerm
            },
            success: function(response) {
                console.log(response);
                var publikasi = "";
                var baseUrl = window.location.origin + '/storage/publikasi/';
                $.each(response, function(key, value) {
                    var url = baseUrl + value.foto;
                    publikasi += `
                    <div class="col-md-4 mt-5" id="publikasi">
                        <div class="card shadow" style="background-color: white;">
                            <img src="${url}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 200px;">
                            <div class="card-body text-black">
                                <small class="px-7 text-black me-3 fs-6">
                                    <strong class="bi bi-clock me-3"></strong>
                                    <span style="font-weight">${new Date(value.created_at).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' })}</span>
                                </small>
                                <small class="text-black fs-6">
                                    <strong class="bi bi-tag me-3"></strong>
                                    <span>Publik</span>
                                </small>
                                <div class="konten-terbaru">
                                    <h5 class="card-text py-5">${value.judul.substring(0, 50)}</h5>
                                    <a href="/publikasi/detail/${value.id}" onclick="getDetailpublikasi(${value.id})" class="btn btn-success" style="background-color: #435939">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                });
                $('#publikasi').html(publikasi);
            }

        });
    }
</script>
