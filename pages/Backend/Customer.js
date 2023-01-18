function loadData() {
    var user = localStorage.getItem("user");
    user = JSON.parse(user);
    document.getElementById("profile-img").src = user.profilePicture;
    // document.getElementById("userName").innerHTML = user.name;
}