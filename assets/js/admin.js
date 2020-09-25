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

});