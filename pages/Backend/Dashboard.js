function getDashboardData() {
    var user = localStorage.getItem("user");
    user = JSON.parse(user);
    document.getElementById("profile-img").src = user.profilePicture;
    document.getElementById("userName").innerHTML = user.name;
    updateDashboard();
}
function updateDashboard() {
    let months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];
    $.ajax({
        url: '../Backend/DashboardController.php?table=earning',
        method: 'get',
        type: 'get',
        success: function (earnings) {
            fetchData(earnings, months);
            console.log(fetchLastMonthRecords(earnings));
        },
        error: function (err) {
            console.log(err);
        }
    })
}
function fetchData(earnings, months) {
    let earningList = [];
    let earningListLabel = [];
    let totalEarning = 0;
    earnings.forEach((earning) => {
        let date = new Date(earning.endTime);
        if (date.getMonth() == new Date().getMonth()) {
            totalEarning += earning.price;
        }
    });
    var day = new Date().getDate();
    var month = new Date().getMonth();
    for (let i = 1; i <= day; i++) {
        let earning = earnings.filter(
            (s) => new Date(s.endTime).getDate() == i
        );
        if (earning.length > 0) {
            let price = 0;
            earning.forEach((e) => {
                price += e.price;
            });
            earningList.push(price);
            earningListLabel.push(`${months[month]} ${i}`);
        } else {
            earningList.push(0);
            earningListLabel.push(`${months[month]} ${i}`);
        }
    }
    lineChart.data.labels = earningListLabel;
    lineChart.data.datasets[0].data = earningList;
    lineChart.update();
    let rides = earnings.filter(
        (y) => new Date(y.endTime).getMonth() == new Date().getMonth()
    );
    let avgRides =
        rides.length > 0 ? rides.length / new Date().getDate() : 0;
    document.getElementById(
        "totalEarning"
    ).innerHTML = `Rs ${totalEarning}`;
    document.getElementById("totalRides").innerHTML = earnings.length;
    document.getElementById("avgRides").innerHTML = avgRides.toFixed(2);
    document.getElementById("previousAmt").innerHTML = "from Rs 0";
    document.getElementById("increasePercent").append("0%");
    document.getElementById("previousRide").innerHTML = "from Rs 0";
    document.getElementById("rideIncreasePercent").append("0%");
    document.getElementById("previousAvg").innerHTML = "from Rs 0";
    document.getElementById("increaseAvgRidePercent").append("0%");
    document.getElementById(
        "lineChartEarning"
    ).innerHTML = `Rs ${totalEarning}`;
}
function logout() {
    localStorage.removeItem("user");
    $.ajax({
        url: '../Backend/Logout.php',
        method: 'get',
        type: 'get',
        success: function (res) {
            window.location.href = "./sign-in.php";
        },
        error: function (err) {
            alert(err);
        }
    })
}

function fetchLastMonthRecords(arr) {
    const today = new Date();
    const currentMonth = today.getMonth();
    const currentYear = today.getFullYear();
    let lastMonth;
    if (currentMonth === 0) {
        lastMonth = new Date(currentYear - 1, 11, 1);
    } else {
        lastMonth = new Date(currentYear, currentMonth - 1, 1);
    }
    const lastMonthEnd = new Date(currentYear, currentMonth, 0);
    return arr.filter(obj => {
        const objDate = new Date(obj.endTime);
        return objDate >= lastMonth && objDate <= lastMonthEnd;
    });
}
