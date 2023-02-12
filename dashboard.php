<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microwlights &mdash; Blank Page</title>
    <!-- Icon Microwlights -->
    <link rel="shortcut icon" href="vendor/microwlights-dashboard/assets/img/brand/icon.svg" type="image/x-icon">
    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="vendor/microwlights-dashboard/main.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="vendor/microwlights-dashboard/assets/css/microwlights.css">

    <!-- CSS Libraries -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="vendor/microwlights-dashboard/node_modules/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body id="body-pd">
    <!-- Header -->
    <header class="header" id="header">
        <div class="header__toggle text-primary-500">
            <i class="bi bi-list" id="header-toggle"></i>
        </div>

        <div class="header__content">
            <!-- Search button -->
            <button type="button" class="btn btn-outline-secondary-300 btn-circle btn-circle-sm me-3"
                data-bs-toggle="modal" data-bs-target="#modalSearch">
                <i class='bx bx-search'></i>
            </button>
            <!-- Notification button-->
            <button type="button" class="btn btn-outline-secondary-300 btn-circle btn-circle-sm me-3"
                id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="20,20">
                <i class='bx bx-notification'></i>
            </button>
            <ul class="dropdown-menu border-0 shadow-lg p-2" aria-labelledby="dropdownMenuOffset">
                <div class="card">
                    <div class="card-header border-0 bg-transparent">
                        <div class="float-start pe-5">
                            <h6 class="fw-bold">Notifications</h6>
                        </div>
                        <div class="float-end">
                            <a href="#" class="md-text-rg ps-5 text-secondary-500"> Mark all read</a>
                        </div>
                    </div>
                    <div class="card-body notif">
                        <div class="d-flex mb-3">
                            <div class="float-start">
                                <i
                                    class="bi bi-code-slash icon-card-notification left text-white text-bg-primary-50 text-primary-500"></i>
                            </div>
                            <div class="description-notification float-end">
                                <a href="#" class="md-text-md fw-bold text-secondary-700 ps-3">Template update is
                                    available
                                    now!</a>
                                <p class="sm-text-rg text-secondary-500 ps-3">17 Hours ago</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="float-start">
                                <i
                                    class="bi bi-emoji-smile icon-card-notification left text-white text-bg-warning-100 text-warning-500"></i>
                            </div>
                            <div class="description-notification float-end">
                                <a href="#" class="md-text-md fw-bold text-secondary-700 ps-3">Welcome to Microwlights
                                    template!</a>
                                <p class="sm-text-rg text-secondary-500 ps-3">Yesterday</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="float-start">
                                <i
                                    class="bi bi-hdd icon-card-notification left text-white text-bg-danger-100 text-danger-500"></i>
                            </div>
                            <div class="description-notification float-end">
                                <a href="#" class="md-text-md fw-bold text-secondary-700 ps-3">Low disk space. Let's
                                    clean it!</a>
                                <p class="sm-text-rg text-secondary-500 ps-3">18 Hours Ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-transparent border-0">
                        <a href="#" class="md-text-rg"> View all</a>
                    </div>
                </div>
            </ul>
            <!-- Messages button -->
            <button class="btn btn-outline-secondary-300 btn-circle btn-circle-sm me-3" id="dropdownMenuOffsetNew"
                data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="20,20">
                <i class='bx bx-message-square-detail'></i>
            </button>
            <ul class="dropdown-menu border-0 shadow-lg p-2" aria-labelledby="dropdownMenuOffsetNew">
                <div class="card">
                    <div class="card-header border-0 bg-transparent">
                        <div class="float-start pe-5">
                            <h6 class="fw-bold">Messages</h6>
                        </div>
                        <div class="float-end">
                            <a href="#" class="md-text-rg ps-5 text-secondary-500"> Mark all as read</a>
                        </div>
                    </div>
                    <div class="card-body notif">
                        <div class="d-flex mb-3">
                            <div class="float-start">
                                <img src="vendor/microwlights-dashboard/assets/img/avatar/avatar-boy.png" alt="avatar"
                                    class="w-100">
                            </div>
                            <div class="description-notification float-end">
                                <a href="#" class="md-text-md fw-bold text-secondary-700 ps-3 mb-5">Jhon doe</a><br>
                                <span class="ps-3">Helo bro, how are you today ? 😊</span>
                                <p class="sm-text-rg text-secondary-500 ps-3">17 Hours ago</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="float-start">
                                <img src="/assets/img/avatar/avatar-girl.png" alt="avatar" class="w-100">
                            </div>
                            <div class="description-notification float-end">
                                <a href="#" class="md-text-md fw-bold text-secondary-700 ps-3 mb-5">Elfira</a><br>
                                <span class="ps-3">Hey baby ❤️</span>
                                <p class="sm-text-rg text-secondary-500 ps-3">12 Hours ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-transparent border-0">
                        <a href="#" class="md-text-rg"> View all</a>
                    </div>
                </div>
            </ul>
            <!-- Profile link -->
            <a href="#" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                <img src="vendor/microwlights-dashboard/assets/img/avatar/avatar-2.jpg" alt="avatar">
                <ul class="dropdown-menu border-0 shadow-lg rounded ps-2 pe-5" aria-labelledby="dropdownProfile">
                    <li>
                        <span class="dropdown-header fw-bold">👋 Hey, Fin</span>
                    </li>
                    <li class="align-middle">
                        <a class="dropdown-item" href="/account/profile.html"> Profil</a>
                    </li>
                    <li class="align-middle">
                        <a class="dropdown-item" href="/account/activities.html">Activities</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/account/settings.html"> Setting</a>
                    </li>
                    <li>
                        <a class="dropdown-item text-danger fw-bold" href="logout.php">Logout</a>
                    </li>
                </ul>
            </a>
        </div>
    </header>

    <!-- Navbar -->
    <div class="l-navbar bg-sidenav-primary-fill" id="nav-bar">
        <nav class="nav nav-content">
            <div>
                <!-- Brand here -->
                <a href="/" class="nav__logo">
                    <img src="vendor/microwlights-dashboard/assets/img/brand/logo-light.svg" alt="brand"
                        class="nav__logo-icon">
                </a>

                <div class="nav__list">

                    <a href="/" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon bx-tada-hover'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="logout.php" class="nav__link">
                        <i class='bx bx-log-out nav__icon bx-tada-hover'></i>
                        <span class="nav__name">Log Out</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Container wrapper -->
    <div class="main-content">
        <!-- Search -->
        <div class="modal fade modal-search" id="modalSearch" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-xxl-down">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <input type="text" placeholder="Search here" class="center">
                    </div>
                </div>
            </div>
        </div>
        <!-- Start content here -->
        <div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
            <div>
                <h2 class="fw-bold">
                    <?php echo "Welcome Back, " . $_SESSION['username'] ."! 😀"?>
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb sm-text-rg">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>

                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <footer class="main-footer">
        <div class="float-start">
            Copyright &copy; 2022 <div class="bullet"></div> Design with ❤️ By <a
                href="https://designwitharifin.netlify.app/">designwitharifin</a>
        </div>
        <div class="float-end">
            v1.0.0
        </div>
    </footer>
    <!-- General JS Scripts -->
    <script src="vendor/microwlights-dashboard/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    <!-- Template JS FIle -->
    <script src="vendor/microwlights-dashboard/node_modules/bootstrap/dist/js/main.js"></script>

    <!-- Js Libraries -->
    <script src="vendor/microwlights-dashboard/assets/js/jquery.min.js"></script>


</body>

</html>