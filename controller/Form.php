
<?php

session_start();
include "../connection/config.php";


// WOMEN

if (isset($_POST['wSignup'])) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $code = 0;
    $status = "verfied";

    $sql = "SELECT * FROM user_info WHERE Email='$email'";
    $query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        $_SESSION['errMsg'] = "Email already exist";
        header("location:../include/WomenSignUp.php");

    }elseif (strlen($password) < 5 || strlen($password) > 15) {
        $_SESSION['errMsg'] = "<strong>Password</strong> at least 6 characters long";
        header("location:../include/WomenSignUp.php");

    }elseif (!preg_match("/\d/",$password)) {
        $_SESSION['errMsg'] = "<strong>Password</strong> at least 1 numeric character";
        header("location:../include/WomenSignUp.php");

    }elseif (!preg_match("/\W/",$password)) {
        $_SESSION['errMsg'] = "<strong>Password</strong> at least 1 special character";
        header("location:../include/WomenSignUp.php");

    }else {
        $sql = "INSERT INTO user_info (Name, Email, Password, Code, Status) VALUES ('$username','$email','$password','$code','$status')";
        $query = mysqli_query($con, $sql);

        $_SESSION['sucMsg'] = "Registration Successfully";
        header("location:../include/WomenSignIn.php");
    }
}



if (isset($_POST['wLogin'])) {
    
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM user_info WHERE Email='$email' AND Password = '$password'";
    $query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        header("location:../index.php");
    }else {
        $_SESSION['errMsg'] = "Invalid Email or Password";
        header("location:../include/WomenSignIn.php");
    }
}





// MEN 

if (isset($_POST['mSignup'])) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $code = 0;
    $status = "verfied";

    $sql = "SELECT * FROM user_info WHERE Email='$email'";
    $query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        $_SESSION['errMsg'] = "Email already exist";
        header("location:../include/MenSignUp.php");

    }elseif (strlen($password) < 5 || strlen($password) > 15) {
        $_SESSION['errMsg'] = "<strong>Password</strong> at least 6 characters long";
        header("location:../include/MenSignUp.php");

    }elseif (!preg_match("/\d/",$password)) {
        $_SESSION['errMsg'] = "<strong>Password</strong> at least 1 numeric character";
        header("location:../include/MenSignUp.php");

    }elseif (!preg_match("/\W/",$password)) {
        $_SESSION['errMsg'] = "<strong>Password</strong> at least 1 special character";
        header("location:../include/MenSignUp.php");

    }else {
        $sql = "INSERT INTO user_info (Name, Email, Password, Code, Status) VALUES ('$username','$email','$password','$code','$status')";
        $query = mysqli_query($con, $sql);

        $_SESSION['sucMsg'] = "Registration Successfully";
        header("location:../include/MenSignIn.php");
    }
}



if (isset($_POST['mLogin'])) {
    
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM user_info WHERE Email='$email' AND Password = '$password'";
    $query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        header("location:../include/MEN.php");
    }else {
        $_SESSION['errMsg'] = "Invalid Email or Password";
        header("location:../include/MenSignIn.php");
    }
}





// KID 

if (isset($_POST['kSignup'])) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $code = 0;
    $status = "verfied";

    $sql = "SELECT * FROM user_info WHERE Email='$email'";
    $query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        $_SESSION['errMsg'] = "Email already exist";
        header("location:../include/KidSignUp.php");

    }elseif (strlen($password) < 5 || strlen($password) > 15) {
        $_SESSION['errMsg'] = "<strong>Password</strong> at least 6 characters long";
        header("location:../include/KidSignUp.php");

    }elseif (!preg_match("/\d/",$password)) {
        $_SESSION['errMsg'] = "<strong>Password</strong> at least 1 numeric character";
        header("location:../include/KidSignUp.php");

    }elseif (!preg_match("/\W/",$password)) {
        $_SESSION['errMsg'] = "<strong>Password</strong> at least 1 special character";
        header("location:../include/KidSignUp.php");

    }else {
        $sql = "INSERT INTO user_info (Name, Email, Password, Code, Status) VALUES ('$username','$email','$password','$code','$status')";
        $query = mysqli_query($con, $sql);

        $_SESSION['sucMsg'] = "Registration Successfully";
        header("location:../include/KidSignIn.php");
    }
}



if (isset($_POST['kLogin'])) {
    
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM user_info WHERE Email='$email' AND Password = '$password'";
    $query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        header("location:../include/KID.php");
    }else {
        $_SESSION['errMsg'] = "Invalid Email or Password";
        header("location:../include/KidSignIn.php");
    }
}


?>