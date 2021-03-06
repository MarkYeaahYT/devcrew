var url = window.location.origin

$(document).ready(function () {
    $('#jurusan').on('change', function () {
        $('#tempat').empty()
        var jurusan = $(this).val()
        $.ajax({
            type: 'POST',
            url: url + '/app/gettempatpkl',
            data: {
                jurusan: jurusan,
            },
            dataType: 'JSON',
            success: function (r) {
                // console.log(r)
                r.forEach((e) => {
                    $('#tempat').append($('<option>').val(e.id).text(e.nama))
                })
            },
        })
    })

    $('#buat').on('click', function () {
        // var hal = $('#hal').val()
        // var tajaran = $('#tajaran').val()
        // var kelas = $('#kelas').val()
        // var jurusan = $('#jurusan').val()
        var tglmulai = $('#tglmulai').val()
        var tglselesai = $('#tglselesai').val()
        var nis = $('input[name^=nis]')
            .map(function (idx, elem) {
                return $(elem).val()
            })
            .get()
        var tempat = $('#tempat').val()

        $.ajax({
            type: 'POST',
            url: url + '/app/add',
            data: {
                tempat: tempat,
                // hal: hal,
                // tajaran: tajaran,
                tglmulai: tglmulai,
                tglselesai: tglselesai,
                nis: nis,
            },
            dataType: 'JSON',
            success: function (r) {
                // console.log(r)
                $('#modal_done').modal('show')
                $('#tglmulai').val("")
                $('#tglselesai').val("")
                $('#tempat').val("")
                $('input[name^=nis]').val("")
            },
        })
    })
})
