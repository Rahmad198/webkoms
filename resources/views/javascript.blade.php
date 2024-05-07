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
        getStruktural: "{{ route('landing.getStruktural') }}",
        getArsip: "{{ route('landing.getArsip') }}",
    }
    getStruktural()
    getArsip()

    function getStruktural() {
        $.ajax({
            url: urlPath.getStruktural,
            type: 'GET',
            success: function(response) {
                console.log(response);
                var struktural = "";
                var baseUrl = window.location.origin + '/storage/struktural/';
                $.each(response, function(key, value) {
                    var url = baseUrl + value.foto
                    struktural += `
                    <div class="col-md-3 mt-7">
                            <div class="min-w-[232px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] rounded-[32px] p-3 flex flex-col">
                                <span class="text-center text-black fw-semibold fs-3 pt-3">${value.jabatan}</span>
                                    <div class="rounded-circle mx-auto mb-5 d-flex" style="width: 200px; height: 200px; background-image: url('${url}'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
                                <h4 class="text-center text-black fw-bold fs-3">${value.nama_lengkap}</h4>
                                <br>
                            </div>
                        </div>
                    `;
                });
                // Set the modified HTML to the appropriate element on the page
                $('#struktural').html(struktural);
            }
        })
    }

    function getArsip() {
        $.ajax({
            url: urlPath.getArsip,
            type: 'GET',
            success: function(response) {
                var arsip = "";
                var baseUrl = window.location.origin + '/storage/arsip/';
                var no = 1;
                $.each(response, function(key, value) {
                    var url = baseUrl + value.file;
                    arsip += `
                    <tr>
                        <th scope="row" style="text-align: center;">${no++}</th>
                        <td>${url.substring(url.lastIndexOf('/') + 1)}</td>
                        <td>${value.keterangan}</td>
                        <td style="text-align: center;"><a href="${url}" download><i class="fas fa-download btn btn-warning btn-sm"></i></a></td>
                    </tr>
                    `;
                });
                // Set the modified HTML to the appropriate element on the page
                $('#arsip').html(arsip);
            }
        });
    }
</script>
