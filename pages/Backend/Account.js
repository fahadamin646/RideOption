function SignIn() {
    var email = $("#userEmail").val()
    var password = $("#userPassword").val()
    var users = [];
    $.ajax({
        url: `../Backend/AuthenticationController.php?email=${email}&password=${password}`,
        method: 'get',
        type: 'get',
        success: function (res) {
            user = res;
            if (JSON.parse(user) != null) {
                localStorage.setItem("user", user);
                window.location.href = '../pages/dashboard.php'
            }
            else {
                $("#unauth-alert").fadeTo(2000, 500).slideUp(500, function () {
                    $("#unauth-alert").slideUp(500);
                });
            }
        },
        error: function (err) {
            console.log(err);
        }
    })
}