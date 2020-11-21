var url = window.location.origin
$(document).ready(function () {
    $.ajax({
        type: 'GET',
        url: url + '/app/siswa_get_info_surat',
        data: '',
        dataType: 'JSON',
        success: function (r) {
            console.log(r)
            $('.suratid').text(r[0].id)
            if (r[0].status == 1) {
                $('.status').text("terkonfirmasi")
                $(".status").attr("title", "terkonfirmasi");
                $('.status').css('background-color', '#48ff48')
            } else {
                $('.status').text("menunggu konfirmasi")
                $(".status").attr("title", "menunggu konfirmasi");
                $('.status').css('background-color', '#ff4218')
            }
        },
    })
})
