<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Your email or password is incorrect. Please try again!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microwlights &mdash; Login</title>
    <!-- Icon Microwlights -->
    <link rel="shortcut icon" href="vendor/microwlights-dashboard/assets/img/brand/icon.svg" type="image/x-icon">
    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="vendor/microwlights-dashboard/main.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="vendor/microwlights-dashboard/assets/css/auth.css">

    <!-- CSS Libraries -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="vendor/microwlights-dashboard/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-4">
                <div class="card my-5">
                    <div class="card-body p-5">
                        <h4 class="fw-bold">Hi, Welcome back 👋</h4>
                        <p class="text-secondary-500 lg-text-rg mb-5">Please log in with your correctly</p>
                        <form action="" method="post">
                            <div class="form-group mb-4">
                                <input type="email" class="form-control form-control-md" placeholder="Email"
                                    value="<?php echo $email; ?>" name="email" required>
                                <div class="invalid-feedback animate__animated animate__headShake">
                                    <i class="bi bi-exclamation-circle-fill pe-1 pt-2"></i>Please input your email
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="float-end">
                                    <a href="forgot-password.html" class="text-danger md-text-rg"> Forgot password?</a>
                                </label>
                                <input type="password" class="form-control form-control-md" placeholder="Password"
                                    value="<?php echo $_POST['password'] ?>" name="password" required>
                                <div class="invalid-feedback animate__animated animate__headShake">
                                    <i class="bi bi-exclamation-circle-fill pe-1 pt-2"></i>Please input your password
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <button class="w-100 btn btn-primary lg-text-md" name="submit" type="submit">Sign
                                    In</button>
                            </div>
                            <div class="text-center mb-4">
                                <span class="md-text-rg text-secondary-800">Login with social media</span>
                            </div>
                            <div class="form-group mb-4">
                                <button class="w-100 btn btn-outline-light lg-text-md btn-img-auth" type="submit">
                                    <img src="vendor/microwlights-dashboard/assets/img/icons/google.svg" alt="icons">
                                    Login with Google
                                </button>
                            </div>
                            <div class="form-group mb-4">
                                <button class="w-100 btn btn-outline-light lg-text-md btn-img-auth" type="submit">
                                    <img src="vendor/microwlights-dashboard/assets/img/icons/github.svg" alt="icons">
                                    Login with Github
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center">
                    <span class="md-text-rg">Don't have an account?<a href="register.php" class="fw-bold">
                            Create
                            One</a></span>
                </div>
            </div>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="vendor/microwlights-dashboard/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    <!-- Template JS FIle -->
    <script src="vendor/microwlights-dashboard/node_modules/bootstrap/dist/js/main.js"></script>

    <!-- Js Libraries -->
    <script src="vendor/microwlights-dashboard/assets/js/jquery.min.js"></script>


</body>

</html>