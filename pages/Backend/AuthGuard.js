function isLoggedIn() {
    var token = localStorage.getItem("user");
    if (token) {
        return true;
    }
    return false;
}

// This function is called when the page is loaded
function checkAuth() {
    if (!isLoggedIn()) {
        // If the user is not logged in, redirect them to the login page
        window.location.href = "sign-in.html";
    }
    else {
        window.location.href = "dashboard.html";
    }
}