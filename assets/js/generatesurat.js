$(document).ready(function () {
    var myurl = window.location.href;
    param = new URL(myurl);
    var id = param.searchParams.get("id");
    // console.log(id)

    function convertdate(tgl) {
        var tanggal = tgl.split("-")
        var moon
        if(tanggal[1] == 1){
            moon = "Januari";
        }else if(tanggal[1] == 2){
            moon = "Februari";
        }else if(tanggal[1] == 3){
            moon = "Maret";
        }else if(tanggal[1] == 4){
            moon = "April";
        }else if(tanggal[1] == 5){
            moon = "Mei";
        }else if(tanggal[1] == 6){
            moon = "Juni";
        }else if(tanggal[1] == 7){
            moon = "Juli";
        }else if(tanggal[1] == 8){
            moon = "Agustus";
        }else if(tanggal[1] == 9){
            moon = "September";
        }else if(tanggal[1] == 10){
            moon = "Oktober";
        }else if(tanggal[1] == 11){
            moon = "November";
        }else if(tanggal[1] == 12){
            moon = "Desember";
        }
        return tanggal[2]+" "+moon+" "+tanggal[0]
    }

    function lastindex(arr) {
        var arry = arr.split(" ")
        return arry[arry.length - 1]
    }

    $.ajax({
        type: "GET",
        url: url+"/admin/show_data_template",
        data: "",
        dataType: "JSON",
        success: function (r) {
            $(".nomor").text(r[0].nomor);
            $(".hal").text(r[0].hal);
            $(".tahun").text(r[0].tahun_ajaran);
            $(".tahab").text(r[0].tahab);
            $(".kelas").text(r[0].kelas);
            $(".kepsek").text(r[0].kepsek);
            $(".nip").text(r[0].nip);
            $(".tglmulai").text(convertdate(r[0].tgl_mulai));
            $(".tglselesai").text(convertdate(r[0].tgl_selesai));
        }
    });

    /**
     * set data by surat
     */
    $.ajax({
        type: "POST",
        url: url+"/admin/generate_surat_xhr",
        data: {
            id: id
        },
        dataType: "JSON",
        success: function (r) {
            // console.log()
            $(".pimpinan").text(r[0].tempat);
            $(".alamat").text(r[0].alamat);
            $(".dimana").text(lastindex(r[0].alamat));
            $(".jurusan").text(r[0].jurusan);
            $(".tanggal").text(convertdate(r[0].tanggal_pe.slice(0, 10)));
        }
    });
});