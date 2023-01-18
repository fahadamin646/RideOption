<?php
  session_start();
  if(!isset($_SESSION["user"])){
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
    <title>Ride option - Dashboard</title>
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700"
      rel="stylesheet"
    />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="Backend/Dashboard.js"></script>
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
    
  </head>

  <body class="g-sidenav-show bg-gray-100" onload="getDashboardData()">
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
            <h5 class="font-weight-bold mb-0">Dashboard</h5>
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
              <!-- <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <svg
                    width="16"
                    height="16"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fixed-plugin-button-nav cursor-pointer"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li> -->
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
          <div class="col-md-12">
            <div class="d-md-flex align-items-center mb-3 mx-2">
              <div class="mb-md-0 mb-3">
                <h3 class="font-weight-bold mb-0">
                  Hello, <span id="userName"></span>
                </h3>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-0 mb-2" />
        <div class="row">
          <div class="col-xl-4 col-sm-6 mb-xl-0">
            <div class="card border shadow-xs mb-4">
              <div class="card-body text-start p-3 w-100">
                <div
                  class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3"
                >
                  <svg
                    height="16"
                    width="16"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                  >
                    <path
                      d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="w-100">
                      <p class="text-sm text-secondary mb-1">Revenue</p>
                      <h4 class="mb-2 font-weight-bold" id="totalEarning"></h4>
                      <div class="d-flex align-items-center">
                        <span
                          class="text-sm text-success font-weight-bolder"
                          id="increasePercent"
                        >
                          <i class="fa fa-chevron-up text-xs me-1"></i>
                        </span>
                        <span class="text-sm ms-1" id="previousAmt"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-xl-0">
            <div class="card border shadow-xs mb-4">
              <div class="card-body text-start p-3 w-100">
                <div
                  class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3"
                >
                  <svg
                    width="16"
                    height="16"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                      clip-rule="evenodd"
                    />
                    <path
                      d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z"
                    />
                  </svg>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="w-100">
                      <p class="text-sm text-secondary mb-1">Rides</p>
                      <h4 class="mb-2 font-weight-bold" id="totalRides"></h4>
                      <div class="d-flex align-items-center">
                        <span
                          class="text-sm text-success font-weight-bolder"
                          id="rideIncreasePercent"
                        >
                          <i class="fa fa-chevron-up text-xs me-1"></i>
                        </span>
                        <span class="text-sm ms-1" id="previousRide"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-xl-0">
            <div class="card border shadow-xs mb-4">
              <div class="card-body text-start p-3 w-100">
                <div
                  class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3"
                >
                  <svg
                    width="16"
                    height="16"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M3 6a3 3 0 013-3h12a3 3 0 013 3v12a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm4.5 7.5a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0v-2.25a.75.75 0 01.75-.75zm3.75-1.5a.75.75 0 00-1.5 0v4.5a.75.75 0 001.5 0V12zm2.25-3a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0V9.75A.75.75 0 0113.5 9zm3.75-1.5a.75.75 0 00-1.5 0v9a.75.75 0 001.5 0v-9z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="w-100">
                      <p class="text-sm text-secondary mb-1">Avg. Rides</p>
                      <h4 class="mb-2 font-weight-bold" id="avgRides"></h4>
                      <div class="d-flex align-items-center">
                        <span
                          class="text-sm text-success font-weight-bolder"
                          id="increaseAvgRidePercent"
                        >
                          <i class="fa fa-chevron-up text-xs me-1"></i>
                        </span>
                        <span class="text-sm ms-1" id="previousAvg"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-xl-3 col-sm-6">
            <div class="card border shadow-xs mb-4">
              <div class="card-body text-start p-3 w-100">
                <div
                  class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3"
                >
                  <svg
                    width="16"
                    height="16"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.25 2.25a3 3 0 00-3 3v4.318a3 3 0 00.879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 005.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 00-2.122-.879H5.25zM6.375 7.5a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="w-100">
                      <p class="text-sm text-secondary mb-1">Coupon Sales</p>
                      <h4 class="mb-2 font-weight-bold">$23,364.55</h4>
                      <div class="d-flex align-items-center">
                        <span class="text-sm text-success font-weight-bolder">
                          <i class="fa fa-chevron-up text-xs me-1"></i>18%
                        </span>
                        <span class="text-sm ms-1">from $19,800.40</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card shadow-xs border">
              <div class="card-header pb-0">
                <div class="d-sm-flex align-items-center mb-3">
                  <div>
                    <h6 class="font-weight-semibold text-lg mb-0">
                      Overview balance
                    </h6>
                    <p class="text-sm mb-sm-0 mb-2">
                      Here you have details about the balance.
                    </p>
                  </div>
                  <div class="ms-auto d-flex">
                    <!-- <button
                      type="button"
                      class="btn btn-sm btn-white mb-0 me-2"
                    >
                      View report
                    </button> -->
                  </div>
                </div>
                <div class="d-sm-flex align-items-center">
                  <h3
                    class="mb-0 font-weight-semibold"
                    id="lineChartEarning"
                  ></h3>
                  <span
                    class="badge badge-sm border border-success text-success bg-success border-radius-sm ms-sm-3 px-2"
                  >
                    <svg
                      width="9"
                      height="9"
                      viewBox="0 0 10 9"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M0.46967 4.46967C0.176777 4.76256 0.176777 5.23744 0.46967 5.53033C0.762563 5.82322 1.23744 5.82322 1.53033 5.53033L0.46967 4.46967ZM5.53033 1.53033C5.82322 1.23744 5.82322 0.762563 5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967L5.53033 1.53033ZM5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967C4.17678 0.762563 4.17678 1.23744 4.46967 1.53033L5.53033 0.46967ZM8.46967 5.53033C8.76256 5.82322 9.23744 5.82322 9.53033 5.53033C9.82322 5.23744 9.82322 4.76256 9.53033 4.46967L8.46967 5.53033ZM1.53033 5.53033L5.53033 1.53033L4.46967 0.46967L0.46967 4.46967L1.53033 5.53033ZM4.46967 1.53033L8.46967 5.53033L9.53033 4.46967L5.53033 0.46967L4.46967 1.53033Z"
                        fill="#67C23A"
                      ></path>
                    </svg>
                    0%
                  </span>
                </div>
              </div>
              <div class="card-body p-3">
                <div class="chart mt-n6">
                  <canvas
                    id="chart-line"
                    class="chart-canvas"
                    height="300"
                  ></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php include 'Shared/Footer.php'; ?>
      </div>
    </main>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script
      src="../assets/js/plugins/swiper-bundle.min.js"
      type="text/javascript"
    ></script>
    <script>
      if (document.getElementsByClassName("mySwiper")) {
        var swiper = new Swiper(".mySwiper", {
          effect: "cards",
          grabCursor: true,
          initialSlide: 1,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      }

      var ctx2 = document.getElementById("chart-line").getContext("2d");

      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke1.addColorStop(1, "rgba(45,168,255,0.2)");
      gradientStroke1.addColorStop(0, "rgba(45,168,255,0.0)");
      gradientStroke1.addColorStop(0, "rgba(101, 148, 101,0.0)"); //blue colors

      var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke2.addColorStop(1, "rgba(119,77,211,0.4)");
      gradientStroke2.addColorStop(0.7, "rgba(119,77,211,0.1)");
      gradientStroke2.addColorStop(0, "rgba(119,77,211,0)"); //purple colors

      const lineChart = new Chart(ctx2, {
        plugins: [
          {
            beforeInit(chart) {
              const originalFit = chart.legend.fit;
              chart.legend.fit = function fit() {
                originalFit.bind(chart.legend)();
                this.height += 40;
              };
            },
          },
        ],
        type: "line",
        data: {
          labels: [],
          datasets: [
            {
              label: "Earnings",
              tension: 0.3,
              borderWidth: 2,
              pointRadius: 3,
              borderColor: "#006600",
              pointBorderColor: "#006600",
              pointBackgroundColor: "#006600s",
              backgroundColor: gradientStroke1,
              fill: true,
              data: [],
              maxBarThickness: 6,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: true,
              position: "top",
              align: "end",
              labels: {
                boxWidth: 6,
                boxHeight: 6,
                padding: 20,
                pointStyle: "circle",
                borderRadius: 50,
                usePointStyle: true,
                font: {
                  weight: 400,
                },
              },
            },
            tooltip: {
              backgroundColor: "#fff",
              titleColor: "#1e293b",
              bodyColor: "#1e293b",
              borderColor: "#e9ecef",
              borderWidth: 1,
              pointRadius: 2,
              usePointStyle: true,
              boxWidth: 8,
            },
          },
          interaction: {
            intersect: false,
            mode: "index",
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [4, 4],
              },
              ticks: {
                callback: function (value, index, ticks) {
                  return parseInt(value).toLocaleString() + " Rup";
                },
                display: true,
                padding: 10,
                color: "#b2b9bf",
                font: {
                  size: 12,
                  family: "Noto Sans",
                  style: "normal",
                  lineHeight: 2,
                },
                color: "#64748B",
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [4, 4],
              },
              ticks: {
                display: true,
                color: "#b2b9bf",
                padding: 20,
                font: {
                  size: 12,
                  family: "Noto Sans",
                  style: "normal",
                  lineHeight: 2,
                },
                color: "#64748B",
              },
            },
          },
        },
      });
    </script>
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
    <script src="../assets/js/jQuery.min.js"></script>
      <!--
      <script
      src="Backend/AuthGuard.js"
    ></script>
    -->
    <script>
      $(".nav-link").removeClass('active');
      $(".dashboard").addClass('active');
      </script>
  </body>
</html>
