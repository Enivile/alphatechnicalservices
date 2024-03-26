
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Apex Marketings
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <link rel="stylesheet" href="../assets/css/input_feild/styles.css">
</head>

<body class="bg-gray-200">
  <?php
  session_start();
  if (isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
  }
  ?>


  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="https://www.apexmarketings.com">
              Apex Marketings
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" onclick="showAlert()" style="cursor: pointer;">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Dashboard
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-flex d-none">
                <li class="nav-item">
                  <a href="../pages/sign-in.php" class="btn btn-sm mb-0 me-1 bg-gradient-dark">Sign In</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('../assets/img/background_signin.avif');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-4 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
              </div>
              <div class="card-body">
                <form role="form" method="post" action="../php_action/sign_in.php" class="text-start">
                  <div class="iinput-group input-group input-group-outline my-3">
                    <input class="iinput" required autocomplete="off" type="text" name="username">
                    <label class="ilabel" for="username">Username</label>
                  </div>
                  <div class="iinput-group input-group input-group-outline mb-3">
                    <input class="iinput" required autocomplete="off" type="password" name="password">
                    <label class="ilabel" for="password">Password</label>
                  </div>
                  <?php if (isset($_SESSION['error'])) : ?>
                      <div class="alert alert-danger" role="alert"><?php echo $_SESSION['error']; ?></div>
                  <?php endif; ?>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                    Don't have an account? Contact an 
                    <a href="https://www.apexmarketings.com/contactnow.php" target="_blank" class="text-primary text-gradient font-weight-bold">Administrator</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://www.apexmarketings.com" class="font-weight-bold text-white" target="_blank">Apex Marketings</a>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end" style="margin-right: 200px;">
                <li class="nav-item">
                  <a href="https://www.apexmarketings.com" class="nav-link text-white" target="_blank">Apex Marketings</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.apexmarketings.com/abouttest.php" class="nav-link text-white" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.apexmarketings.com/blog" class="nav-link text-white" target="_blank">Blog</a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script>
    function showAlert() {
      alert("Please Sign In to view this content.");
    }
  </script>
</body>

</html>