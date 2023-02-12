<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Registration successful!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Sorry, an error occurred')</script>";
            }
        } else {
            echo "<script>alert('This email is already registered')</script>";
        }
         
    } else {
        echo "<script>alert('Password wrong')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microwlights &mdash; Register</title>
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
                        <h4 class="fw-bold">Hi, Let's create your account 🔥</h4>
                        <p class="text-secondary-500 lg-text-rg mb-5">Please input your field here</p>
                        <form action="" method="post">
                            <div class="form-group mb-4">
                                <input type="email" class="form-control form-control-md" placeholder="Email"
                                    name="email" value="<?php echo $email; ?>" required>
                                <div class="invalid-feedback animate__animated animate__headShake">
                                    <i class="bi bi-exclamation-circle-fill pe-1 pt-2"></i>Please input your email
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control form-control-md" placeholder="Username"
                                    name="username" value="<?php echo $username; ?>" required>
                                <div class="invalid-feedback animate__animated animate__headShake">
                                    <i class="bi bi-exclamation-circle-fill pe-1 pt-2"></i>Please input your username
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control form-control-md" placeholder="Password"
                                    name="password" value="<?php echo $_POST['password']; ?>" required>
                                <div class="invalid-feedback animate__animated animate__headShake">
                                    <i class="bi bi-exclamation-circle-fill pe-1 pt-2"></i>Please input your password
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control form-control-md" placeholder="Password"
                                    name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                                <div class="invalid-feedback animate__animated animate__headShake">
                                    <i class="bi bi-exclamation-circle-fill pe-1 pt-2"></i>Please input confirm your
                                    password
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <button class="w-100 btn btn-lg btn-primary lg-text-md" name="submit"
                                    type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center">
                    <span class="md-text-rg">Already have an account?<a href="login.php" class="fw-bold"> Sign
                            In</a></span>
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