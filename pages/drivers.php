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
    <title>RideOption - Drivers</title>
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
    <style>
      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    </style>
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
            <h5 class="font-weight-bold mb-0">Drivers</h5>
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
                      Driver List
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
                          Driver
                        </th>
                        <th
                          class="text-secondary text-xs font-weight-semibold opacity-7 ps-2"
                        >
                          User Type
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
                          Phone
                        </th>
                        <th
                          class="text-center text-secondary text-xs font-weight-semibold opacity-7"
                        >
                          CNIC
                        </th>
                        <th
                          class="text-center text-secondary text-xs font-weight-semibold opacity-7"
                        >
                          Action
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

      <div class="modal" id="userModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Driver Details</h4>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
              ></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <table class="table table-bordered">
                <tr>
                  <td>Name</td>
                  <td id="name"></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td id="email"></td>
                </tr>
                <tr>
                  <td>Vehicle Type</td>
                  <td id="vehicleType"></td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td id="phone"></td>
                </tr>
                <tr>
                  <td>CNIC</td>
                  <td id="cnic"></td>
                </tr>
                <tr>
                  <td>Type</td>
                  <td id="type"></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td id="status"></td>
                </tr>
                <input type="hidden" id="driverId"/>
              </table>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" onclick="UpdateDriver()">Update</button>
              <button
                type="button"
                class="btn btn-danger"
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      var driverList = [];
      var dataTable = $("#usersTable").DataTable();
      $($("#usersTable_filter").children()[0])
        .children()
        .attr("placeholder", "Search");
      $($("#usersTable_filter").children()[0].childNodes[0]).remove();
      // console.log(children);
      function fetch() {
        $.ajax({
          url: "../Backend/DashboardController.php?table=driverUsers",
          method: "get",
          type: "get",
          success: function (drivers) {
            let list = [];
            driverList = drivers;
            drivers.forEach((user) => {
              let num = Math.floor(Math.random() * 10) + 1;
              let defaultImg = "https://i.pravatar.cc/150?img=" + num;
              let className = user.status =="pending"?"badge badge-sm border border-warning text-warning bg-warning"
                :(user.status=='block'||user.status=='cancel')?"badge badge-sm border border-danger text-danger bg-danger"
                :"badge badge-sm border border-success text-success bg-success"
              list.push([
                `<td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex align-items-center">
                              <img
                                src="${defaultImg}"
                                class="avatar avatar-sm rounded-circle me-2"
                                alt="user1"
                              />
                            </div>
                            <div
                              class="d-flex flex-column justify-content-center ms-1"
                            >
                              <h6 class="mb-0 text-sm font-weight-semibold">
                                ${user.name || "N/A"}
                              </h6>
                              <p class="text-sm text-secondary mb-0">
                                ${user.email || "N/A"}
                              </p>
                            </div>
                          </div>
                        </td>`,
                `<td>
                          <p
                            class="text-sm text-dark font-weight-semibold mb-0"
                          >
                            ${user.userType || "N/A"}
                          </p>
                        </td>`,
                `<td>
                          <div style="text-align:center">
                          <span
                            class="${className}"
                            >${user.status || "Pending"}</span
                          >
                          </div>
                        </td>`,
                `<td>
                <p
                            class="text-sm text-dark font-weight-semibold mb-0" style="text-align:center"
                          >
                            ${user.vehicleType || "N/A"}
                          </p>
                        </td>`,
                `<td>
                <p
                            class="text-sm text-dark font-weight-semibold mb-0"  style="text-align:center"
                          >
                            ${user.phoneNumber || "N/A"}
                          </p>
                        </td>`,

                `<td>
                <p
                            class="text-sm text-dark font-weight-semibold mb-0"  style="text-align:center"
                          >
                            ${user.nationalIdCardNumber || "N/A"}
                          </p>
                        </td>`,
                `<td >
                            <div style="text-align: center;cursor:pointer">
                            <a onclick="openDetail('${user.email}')" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Edit user">
                              <svg width="14" height="14" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z" fill="#64748B"></path>
                              </svg>
                            </a>
                            </div>
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

      function openDetail(email) {
        var user = driverList.find((x) => x.email == email);
        var name = user.name || "N/A";
        var email = user.email || "N/A";
        var type = user.userType || "N/A";
        var status = user.status || "N/A";
        $("#name").html(name);
        $("#email").html(email);
        $("#vehicleType").html(user.vehicleType || "N/A");
        $("#phone").html(user.phoneNumber || "N/A");
        $("#cnic").html(user.nationalIdCardNumber || "N/A");
        $("#type").html(type);
        $("#driverId").val(user.uid);
        $("#status").html(`<select id="status${user.uid}" style="width:100%;padding:3px 6px; margin:3px;border:1px solid #dde0e5;border-radius:2px">
                              <option value='pending'>
                                  Pending
                              </option>
                              <option value='approve'>
                                  Approve
                              </option>
                              <option value='cancel'>
                                  Cancel
                              </option>
                              <option value='block'>
                                  Block
                              </option>
                           </select>`);
          $(`#status${user.uid}`).val(user.status);

        $("#userModal").modal("show");
      }
      function UpdateDriver(){
        var userId = $("#driverId").val();
        var status = $(`#status${userId}`).val();
        Swal.fire({
          title: 'Are you sure?',
          text: "You want to update status of this user!",
          icon: 'success',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Update it!'
        }).then((result) => {
          console.log(result);
              if(result.isConfirmed){
                    Swal.fire({
                    title: 'Loading...',
                    html: '<div class="spinner-border text-info"></div>',
                    showConfirmButton: false,
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                });
                $.ajax({
                  url:`../Backend/UpdateCustomer.php?uid=${userId}&status=${status}`,
                  method:'get',
                  type:'get',
                  success:function(res){
                    window.location.reload();
                  },
                  error:function(err){
                  }
                })
              }
        })
      }
    </script>
    <script>
      $(".nav-link").removeClass("active");
      $(".driver").addClass("active");
    </script>
  </body>
</html>
