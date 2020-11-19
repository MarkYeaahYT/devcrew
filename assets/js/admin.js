$(document).ready(function () {
    
    $("#logout").on("click", function () {
        $.ajax({
            type: "GET",
            url: url+"/admin/logout",
            data: "",
            dataType: "JSON",
            success: function (response) {
                window.location = "/admin/login"
            }
        });
    });

    $("#mytable").on("click", ".btn_action",function () {
        var id = $(this).data("id")
        $("#generate_surat").attr("data-id", id);
        $("#generate_surat").attr("href", "/admin/generatesurat?id="+id);
        $("#modal_action").modal("show")
    });


});