<?php
include "function.php";
include "orm/user.php";
$user = new user($db);
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    //Cách 1 Hash mật khẩu
    
    $password = md5($_POST['password']);

    //Cách 2 Dùng prepare and bind
    // $sql = "SELECT * FROM `nguoidung` WHERE matkhau = ? AND email= ? ";
    // $stmt = $db->prepare($sql);
    // $stmt->bind_param("ss", $password, $email);
    // $stmt->execute();
    // $query = $stmt->get_result();

    //Cách 3 Lọc các kí tự đặc biệt
    // $user = filter_var($user, FILTER_SANITIZE_EMAIL);
    // $password = filter_var($password, FILTER_SANITIZE_ENCODED);

    //Cách 4 Dùng ORM (Object Relational Mapping)

    // $user = new user($db);
    // $result = $user->checkUser($email, $password);
    // if ($result != "") {
    //     $row = mysqli_fetch_assoc($result);
    //     $name = explode(" ", $row['username']);
    //     $_SESSION['email'] = $email;
    //     $_SESSION['name'] = $name[1];
    //     header('location:index.php');
    // } else {
    //     $_SESSION['errorMessage'] = 'User does not Exist';
    //     header('location:signin.php');
    // }

    //query
    $sql = "SELECT * FROM `nguoidung` WHERE matkhau = '$password' AND email= '$email' ";
    $query = mysqli_query($db, $sql);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $name = explode(" ", $row['username']);
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name[1];
        header('location:index.php');
    } else {
        $_SESSION['errorMessage'] = 'Invalid username or password';
        header('location:signin.php');
    }
} else if (isset($_POST['register'])) {
    
    $username = $_POST['lastname'];
    $name = (string)$_POST['firstname'] . ' ' . $username;
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($user->registerUser($name, $email,  $password)) {
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $username;
        header('location:index.php');
    } else {
        $_SESSION['errorMessage'] = 'Register user fail';
        header('location:signin.php');
    }


    $email = $_POST['email'];
    $password = $_POST['password'];
    // $password = md5($_POST['password']);
    $sql = "Select * FROM `nguoidung` WHERE email = '$email'";
    if (mysqli_num_rows(mysqli_query($db, $sql)) > 0) {
        $_SESSION['errorMessage'] = 'User already Exist';
        header('location:signin.php');
    } else {
        $sql = "INSERT INTO `nguoidung` (username, email, matkhau) 
                VALUES ('$name','$email','$password') ";

        if (mysqli_query($db, $sql)) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $username;
            header('location:index.php');
        } else {
            $_SESSION['errorMessage'] = 'Register user fail';
            header('location:signin.php');
        }
    }
} else if (isset($_POST['forgot'])) {
} else {
    header('location:signin.php');
}