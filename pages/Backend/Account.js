function SignIn() {
    var email = $("#userEmail").val()
    var password = $("#userPassword").val()
    var users = [];
    fetchData('users').then(res => {
        users = res.filter(x => x.email == email && x.password == password);
        if (users.length > 0) {
            localStorage.setItem("user", JSON.stringify(users[0]));
            window.location.href = '../pages/dashboard.html'
        }
        else {
            alert("UnAuth");
        }
    });
}