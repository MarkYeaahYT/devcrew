$(document).ready(function () {
    /**
     * Set data
     */
    $.ajax({
        type: 'GET',
        url: url + '/admin/show_data_template',
        data: '',
        dataType: 'JSON',
        success: function (r) {
            // console.log(r)
            $('#nomor').val(r[0].nomor)
            $('#hal').val(r[0].hal)
            $('#tajaran').val(r[0].tahun_ajaran)
            $('#tahab').val(r[0].tahab)
            $('#kelas').val(r[0].kelas)
            $('#tglmulai').val(r[0].tgl_mulai)
            $('#tglselesai').val(r[0].tgl_selesai)
            $('#kepsek').val(r[0].kepsek)
            $('#nip').val(r[0].nip)
        },
    })

    $('#btn_save').on('click', function () {
        var nomor = $('#nomor').val()
        var hal = $('#hal').val()
        var tajaran = $('#tajaran').val()
        var tahab = $('#tahab').val()
        var kelas = $('#kelas').val()
        var tglmulai = $('#tglmulai').val()
        var tglselesai = $('#tglselesai').val()
        var kepsek = $('#kepsek').val()
        var nip = $('#nip').val()

        $.ajax({
            type: 'POST',
            url: url + '/admin/manipulate_template',
            data: {
                nomor: nomor,
                hal: hal,
                tajaran: tajaran,
                tahab: tahab,
                kelas: kelas,
                tglmulai: tglmulai,
                tglselesai: tglselesai,
                kepsek: kepsek,
                nip: nip,
            },
            dataType: 'JSON',
            success: function (r) {
                console.log(r)
                if(r == true){
                    $("#modal_done").modal("show")
                }
            },
        })
    })
})
