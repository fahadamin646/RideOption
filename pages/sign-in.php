<?php
  session_start();
  if(isset($_SESSION["user"])){
    header("Location: dashboard.php");
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
      href="../assets/img/logos/main-icon.jpeg"
    />
    <link
      rel="icon"
      type="image/png"
      href="../assets/img/logos/main-icon.jpeg"
    />
    <title>RideOptions - Login</title>
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700"
      rel="stylesheet"
    />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <script
      src="https://kit.fontawesome.com/349ee9c857.js"
      crossorigin="anonymous"
    ></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link
      id="pagestyle"
      href="../assets/css/corporate-ui-dashboard.css?v=1.0.0"
      rel="stylesheet"
    />
    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
    <!-- <script src="Backend/Account.js"></script> -->
  </head>

  <body class="">
    <div class="container position-sticky z-index-sticky top-0">
      <div class="row">
        <div class="col-12">
          <!-- Navbar -->
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <main class="main-content mt-0">
      <section>
        <div class="page-header min-vh-100">
          <div class="container">
            <div class="row">
              <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">
                <img
                  src="../assets/img/logos/main-icon.jpeg"
                  width="150"
                  style="align-self: center"
                />
                <h3 class="font-weight-black text-dark display-6 text-center">
                  Ride Options
                </h3>
                <div class="card card-plain">
                  <div class="card-header pb-0 text-left bg-transparent">
                    <p class="mb-0">Please enter your details.</p>
                  </div>
                  <div class="card-body">
                    <form role="form" id="signInForm">
                      <label>Email Address</label>
                      <div class="mb-3">
                        <input
                          type="email"
                          name="email"
                          id="userEmail"
                          class="form-control"
                          placeholder="Enter your email address"
                          aria-label="Email"
                          aria-describedby="email-addon"
                        />
                      </div>
                      <label>Password</label>
                      <div class="mb-3">
                        <input
                          type="password"
                          name="password"
                          id="userPassword"
                          class="form-control"
                          placeholder="Enter password"
                          aria-label="Password"
                          aria-describedby="password-addon"
                        />
                      </div>
                      <div
                        class="alert alert-danger alert-dismissible hide"
                        id="unauth-alert"
                      >
                        Username or Paswsword is in-correct.
                      </div>
                      <div class="text-center">
                        <button
                          type="button"
                          class="btn btn-primary w-100 mt-4 mb-3"
                          onclick="SignIn()"
                        >
                          Sign in
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div
                  class="position-absolute w-40 top-0 end-0 h-100 d-md-block d-none"
                >
                  <div
                    class="oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 bg-cover ms-n8"
                    style="
                      background-image: url('../assets/img/logos/sign-in.jpeg');
                    "
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="../assets/js/jQuery.min.js"></script>
    <!-- <script
      src="https://code.jquery.com/jquery-3.6.3.min.js"
      integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
      crossorigin="anonymous"
    ></script> -->
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
      $("#unauth-alert").hide();
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
    <script src="../pages/Backend/Account.js"></script>
  </body>
</html>
