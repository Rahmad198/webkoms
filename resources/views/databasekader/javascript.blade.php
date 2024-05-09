<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

<script>
    var urlPath = {
        getAnggota: "{{ route('landing.getAnggota') }}",
    }
    getAnggota()

    function onSearchResults(page) {
        var itemsPerPage = 6; // Jumlah item per halaman
        totalPages = Math.ceil(data.length / itemsPerPage); // Jumlah total halaman
        var start = (page - 1) * itemsPerPage; // Indeks awal data pada halaman
        var end = start + itemsPerPage; // Indeks akhir data pada halaman
        var pageData = data.slice(start, end); // Ambil data sesuai halaman

        var baseUrl = window.location.origin + '/storage/anggota/';
        $("#result_anggota").html("")
        $.each(pageData, function(k, v) {
            if (v.image == '' || v.image == null) {
                v.image = 'default-cover.jpeg';
            }
            $("#result_anggota").append(`
                <div class="col-md-3 mt-7">
                            <div class="min-w-[232px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] rounded-[32px] p-3 flex flex-col">
                                <br>
                                <div class="mx-auto mb-5 d-flex" style="width: 200px; height: 200px; background-image: url('${url}'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
                                <h4 class="text-center text-black fw-bold fs-3">${value.nama_lengkap.substring(0, 25)}</h4>
                                <span class="text-center text-black fs-4 pt-3">${value.jurusan}</span>
                                <br>
                                <div class="text-center">
                                    <a href="/detailkader/detail/${value.id}" onclick="getDetailkader(${value.id})" class="btn btn-success btn-sm" style="background-color: #435939">Detail</a>
                                </div>
                                <br>
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
        getAnggota(searchTerm);
    });

    function getAnggota(searchTerm = '') {
        $.ajax({
            url: urlPath.getAnggota,
            type: 'GET',
            data: {
                'search': searchTerm
            },
            success: function(response) {
                console.log(response);
                var anggota = "";
                var baseUrl = window.location.origin + '/storage/anggota/';
                $.each(response, function(key, value) {
                    var url = baseUrl + value.foto;
                    anggota += `
                    <div class="col-md-3 mt-7">
                            <div class="min-w-[232px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] rounded-[32px] p-3 flex flex-col">
                                <br>
                                <div class="mx-auto mb-5 d-flex" style="width: 200px; height: 200px; background-image: url('${url}'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
                                <h4 class="text-center text-black fw-bold fs-3">${value.nama_lengkap.substring(0, 20)}</h4>
                                <span class="text-center text-black fs-4 pt-3">${value.jurusan}</span>
                                <br>
                                <div class="text-center">
                                    <a href="/detailkader/detail/${value.id}" onclick="getDetailkader(${value.id})" class="btn btn-success btn-sm" style="background-color: #435939">Detail</a>
                                </div>
                                <br>
                            </div>
                        </div>
                `;
                });
                $('#anggota').html(anggota);
            }

        });
    }
</script>
