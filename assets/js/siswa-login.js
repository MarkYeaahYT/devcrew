var url = window.location.origin;
$(document).ready(function () {
    $('.btnlogin').on("click", function () {
        var nis = $('#nis').val();
        var password = $('#password').val();

        $.ajax({
            type: "POST",
            url: url+"/app/login_backend",
            data: {
                nis: nis,
                password: password
            },
            dataType: "JSON",
            success: function (r) {
                console.log(r)
                if(r.status == 1){
                    window.location = url+"/app/siswa";
                }else{
                    alert("wrong identification");
                }
            }
        });
    });
});