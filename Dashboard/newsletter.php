<!-- This code is a custom modified version of Material Dashboard 2-->

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">

    <title>Welcome Alpha Technical Services</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->



    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
</head>
<body class="g-sidenav-show  bg-gray-100">
    <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: ./pages/sign-in.php");
        exit();
    }
    ?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="../">
    <img src="./assets/img/favicon.png" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold text-white">Welcome <strong><?php echo $_SESSION['username']; ?></strong></span>
    </a>
</div>
<hr class="horizontal light mt-0 mb-2">
<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link text-white " href="./">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
    </div>
    <span class="nav-link-text ms-1">Dashboard</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link text-white " href="./newsletter.php">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
    </div>
    <span class="nav-link-text ms-1">Newsletter</span>
</a>
</li>
<li class="nav-item mt-3">
<h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account Settings</h6>
</li>

<li class="nav-item">
<a class="nav-link text-white " href="./php_action/sign_out.php">
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">logout</i>
    </div>
    <span class="nav-link-text ms-1">Logout</span>
</a>
</li>

    </ul>
</div>
<div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
    <a class="btn bg-gradient-primary w-100" href="https://www.atslco.com" type="button">Visit Website</a>
    </div>
</div>
</aside>
<main class="main-content border-radius-lg">
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
<div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
    
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Main</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Main</h6>
    
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        
        <div class="input-group input-group-outline">
            
        </div>
        
    </div>
    
    </div>
</div>
</nav>

<!-- End Navbar -->
<!-- Main -->

<?php
include_once("db_con.php");
$sql = "SELECT ID, Email FROM newspaper";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>
<?php if ($result->num_rows > 0): ?>


<style>
.tdname {
    padding: 10px 16px;
}

.tdmessage {
    padding: 10px 16px;
}
</style>
<div class="row">
        <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Leads Table</h6>
            </div>
            </div>
            <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E-mail</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>

                    <td class="tdname col-lg-3" style="padding: 10px 16px">
                        <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row["ID"]; ?></h6>
                        </div>
                        </div>
                    </td>

                    <td class="tdmessage col-lg-6" style="padding: 10px 25px">
                        <p class="text-xs text-secondary mb-0"><?php echo $row["Email"]; ?></p>
                    </td>

                    </tr>
                    <?php endwhile; ?>
                </tbody>
                </table>
                <?php else: ?>
                <p>No data found.</p>
                <?php endif; ?>
            </div>
            </div>
        </div>
        </div>
    </div>

<!-- End main -->
    </div>
</div>


                <footer class="footer py-4  ">
    <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
            document.write(new Date().getFullYear())
            </script>,
            made with <i class="fa fa-heart"></i> by
            <a href="https://www.apexmarketings.com" class="font-weight-bold" target="_blank">Apex Marketings</a>
        </div>
        </div>
        <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
            <a href="https://www.apexmarketings.com" class="nav-link text-muted" target="_blank">Apex Marketings</a>
            </li>
            <li class="nav-item">
            <a href="https://www.apexmarketings.com/about-us/" class="nav-link text-muted" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
            <a href="https://www.apexmarketings.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
            </li>
        </ul>
        </div>
    </div>
    </div>
</footer>

</div>


</main>
    
        <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        
    </div>
</div>

    
    















<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/sortleadstable.js"></script>











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


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
