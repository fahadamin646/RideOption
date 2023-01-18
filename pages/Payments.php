<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: sign-in.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../assets/img/apple-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      href="../assets/img/logos/main-icon.jpeg"
    />
    <title>RideOption - Payments</title>
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700"
      rel="stylesheet"
    />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/349ee9c857.js"
      crossorigin="anonymous"
    ></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link
      id="pagestyle"
      href="../assets/css/corporate-ui-dashboard.css?v=1.0.0"
      rel="stylesheet"
    />

    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
    
    <script src="Backend/Dashboard.js"></script>
    <script src="Backend/Customer.js"></script>
    <link href="../assets/css/datatable.css" rel="stylesheet" />
  </head>

  <body class="g-sidenav-show bg-gray-100" onload="loadData()">
    <?php include 'Shared/SideBar.php'; ?>
    <main
      class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"
    >
      <!-- Navbar -->
      <nav
        class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded"
        id="navbarBlur"
        navbar-scroll="true"
      >
        <div class="container-fluid py-1 px-2">
          <nav aria-label="breadcrumb">
            <h5 class="font-weight-bold mb-0">Payments</h5>
          </nav>
          <div
            class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
            id="navbar"
          >
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group">
                <span class="input-group-text text-body bg-white border-end-0">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16px"
                    height="16px"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                    />
                  </svg>
                </span>
                <input
                  type="text"
                  class="form-control ps-0"
                  placeholder="Search"
                />
              </div>
            </div>
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a
                  href="javascript:;"
                  class="nav-link text-body p-0"
                  id="iconNavbarSidenav"
                >
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item ps-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <img
                    src="../assets/img/apple-icon.png"
                    class="avatar avatar-sm"
                    alt="avatar"
                    id="profile-img"
                  />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid py-4 px-5">
        <div class="row">
          <div class="col-12">
            <div class="card border shadow-xs mb-4">
              <div class="card-header border-bottom pb-0">
                <div class="d-sm-flex align-items-center">
                  <div>
                    <h6 class="font-weight-semibold text-lg mb-0">
                      Payments
                    </h6>
                  </div>
                  <div class="ms-auto d-flex"></div>
                </div>
              </div>
              <div class="card-body px-0 py-0">
                <div class="table-responsive p-0">
                  <table id="usersTable" class="table align-items-center mb-0">
                    <thead class="bg-gray-100">
                      <tr>
                        <th
                          class="text-secondary text-xs font-weight-semibold opacity-7"
                        >
                          Pickup
                        </th>
                        <th
                          class="text-secondary text-xs font-weight-semibold opacity-7 ps-2"
                        >
                          Destination
                        </th>
                        <th
                          class="text-center text-secondary text-xs font-weight-semibold opacity-7"
                        >
                          Status
                        </th>
                        <th
                          class="text-center text-secondary text-xs font-weight-semibold opacity-7"
                        >
                          Vehicle Type
                        </th>
                        
                        <th
                          class="text-center text-secondary text-xs font-weight-semibold opacity-7"
                        >
                          Price
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- <tr>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include 'Shared/Footer.php'; ?>
      </div>
    </main>
    <script src="../assets/js/jQuery.min.js"></script>
    <script>
      $(".nav-link").removeClass("active");
      $(".customer").addClass("active");
    </script>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/datatable.min.js"></script>
    <script src="../assets/js/datatable.bootstrap.min.js"></script>
    <script>
      var win = navigator.platform.indexOf("Win") > -1;
      if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
          damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>

    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>

    <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-analytics.js"></script>

    <!-- Add Firebase Realtime Database -->
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-database.js"></script>
    <script src="../pages/Backend/Firebase.js"></script>
    <script>
      var dataTable = $("#usersTable").DataTable();
      $($("#usersTable_filter").children()[0])
        .children()
        .attr("placeholder", "Search");
      $($("#usersTable_filter").children()[0].childNodes[0]).remove();
      // console.log(children);
      function fetch() {
        $.ajax({
          url: "../Backend/DashboardController.php?table=earning",
          method: "get",
          type: "get",
          success: function (earnings) {
            let list = [];
            earnings = earnings.filter(x=>new Date(x.endTime).getMonth() == new Date().getMonth());
            earnings.forEach((payment) => {
              list.push([
                `<td>
                          <div class="d-flex px-2 py-1">
                            <div
                              class="d-flex flex-column justify-content-center ms-1"
                            >
                              <h6 class="mb-0 text-sm font-weight-semibold">
                                ${payment.pickedUpLocation.location.substring(0,25)+'...'|| "N/A"}
                              </h6>
                            </div>
                          </div>
                        </td>`,
                `<td>
                          <p
                            class="text-sm text-dark font-weight-semibold mb-0"
                          >
                            ${payment.destinationLocation.location.substring(0,25)+'...'|| "N/A"}
                          </p>
                        </td>`,
                `<td>
                          <div style="text-align:center">
                          <span
                            class="badge badge-sm border border-success text-success bg-success"
                            >${payment.status || "Pending"}</span
                          >
                          </div>
                        </td>`,
                `<td>
                          <p
                            class="text-sm text-dark font-weight-semibold mb-0" style="text-align:center"
                          >
                            ${payment.vehicleType|| "N/A"}
                          </p>
                        </td>`,
                        
                `<td>
                          <p
                            class="text-sm text-dark font-weight-semibold mb-0" style="text-align:center"
                          >
                            ${payment.price|| "N/A"}
                          </p>
                        </td>`,
              ]);
            });
            dataTable.rows.add(list).draw();
          },
          error: function (err) {
            console.log(err);
          },
        });
      }
      fetch();
    </script>
    <script>
      $(".nav-link").removeClass('active');
      $(".payment").addClass('active');
      </script>
  </body>
</html>
