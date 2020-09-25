$(document).ready(function () {
    $('.btnlogin').on("click", function () {
        var username = $('#username').val();
        var password = $('#password').val();

        // console.log(username)
        // console.log(password)

        $.ajax({
            type: "POST",
            url: url+"/admin/login_backend",
            data: {
                username: username,
                password: password
            },
            dataType: "JSON",
            success: function (r) {
                console.log(r)
                if(r.status == 1){
                    window.location = url+"/admin";
                }else{
                    alert("wrong identification");
                }
            }
        });
    });
});