let loadingManage = function (param) {
    if (param === "Start") {
        $("#btn-form").attr("disabled", true);
        $("#btn-form div").removeClass("d-none");
        $("#btn-form span").addClass("d-none");
    } else {
        $("#btn-form").attr("disabled", false);
        $("#btn-form div").addClass("d-none");
        $("#btn-form span").removeClass("d-none");
    }
}
function alertManage(params) {
    $(".my-alert").removeClass("d-none");
    $(".my-alert").text(params);
}
let manageLogin = function () {
    let formLogin = $("#form-login");
    if (formLogin.length != 0) {
        formLogin.submit(function (e) {
            e.preventDefault();
            if (formLogin[0].checkValidity() !== false) {
                loadingManage("Start");
                let data = new FormData(formLogin[0]);
                $.ajax({
                    type: "post",
                    url: base_url + "login/auth",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response != "") {
                            alertManage(response);
                            loadingManage("end");
                        } else {
                            window.location = base_url + "dash/homedash"
                        }
                    }
                });
            }
        });
    }
}
let manageRegister = function () {
    let formRegister = $("#form-register");
    if (formRegister != 0) {
        formRegister.submit(function (e) {
            e.preventDefault()
            loadingManage("Start");
            let data = new FormData(formRegister[0]);
            $.ajax({
                type: "post",
                url: base_url + "register/store",
                data: data,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response)
                    if (response != "") {
                        alertManage(response);
                        loadingManage("end");
                    } else {
                        window.location = base_url + "login"
                    }
                }
            });
        })

    }
}
$(document).ready(function () {
    manageLogin()
    manageRegister()
});