
$(document).ready(function () {

    var form = '#add-user-form';

    $(form).on('submit', function (event) {
        event.preventDefault();

        var url = $(this).attr('data-action');
        console.log(url, 'url ni')
        $.ajax({
            url: url,
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                // $(form).trigger("reset");
                // alert('Antrian menunggu ' + response.antrianmenunggu)
                swal.fire(
                    // response.nama,
                    'Cek Antrian',
                    '<h3 class="mb-0">' + response.nama + '</h3> <br>' +
                    '<h4 class="mb-0 mt-0 fw-normal"> Antrian Menunggu <b>' +
                    response.antrianmenunggu + '</b></h4> ' +
                    '<h4 class="mb-0 mt-0 fw-normal"> Antrian Saat Ini <b>' +
                    response.antriansaatini + '</b></h4> ',
                    "success",
                );

            },
            error: function (response) { }
        });
    });

});