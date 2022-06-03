<?php
include "function.php";
// session_start();
if (isset($_SESSION['email'])) {
  header('Location: index.php');
  exit();
}

if(isset($_SESSION['errorMessage'])){
  $thongbao =$_SESSION['errorMessage'];
  echo "
  <div class='alert alert-danger alert-autocloseable-danger'>
    $thongbao
  </div>
  ";
  unset($_SESSION['errorMessage']);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "libHeader.php"?>
  <link rel="stylesheet" href="css/sign.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Sign In</title>

</head>

<body>
  <div class="header">
    <a style="color: #ffffff;text-decoration: none;" href="index.html">WELCOME TO BOOK STORE</a>
  </div>
  <?php
    $sign = '1';
    include "navBar.php";
  ?>

 
  <!--Content-->
  <div class="content">
    <section class="signin ">
        <div class="container">
            <div class="signin-left">
                <div class="sign-title">
                    <h1 id="titlePage">Đăng nhập</h1>
                </div>
            </div>
            
            <div class="signin-right " id="a-sign">
                <form  action="sign.php" method="POST" >
                    <div class="username form-control1 ">
                        <input type="email" id="username" placeholder="Email" name="email">
                    </div>
                    <div class="password form-control1">
                        <input type="password" id="password" placeholder="Mật khẩu" name="password">
                    </div>
                    
                    <div class="submit">
                      <input class="btn" type="submit" id="dangnhap" value="Đăng Nhập" name="login">
                      <div class="forgetpassword" style="cursor:pointer;">
                              <p id="quenmk">Forgot password?</p>
                              <p id="dangky">Register</p>
                      </div>
                    </div>
                </form>
            </div>

            <div class="signin-right " id="b-sign">
                <form action="sign.php" >
                    <div class="username form-control1">
                        <input type="text" id="emailForgot" placeholder="Email">
                    </div>
                 
                   
                    <div class="submit">
                      <input class="btn" type="submit" value="Send" id ="forgot" name="forgot">
                      <div class="forgetpassword" style="padding-top:7px;cursor:pointer;">
                            <h4 id="huy">Cancel</h4>
                      </div>
                    </div>
                </form>
            </div>

            <div class="signin-right " id="c-sign">
                <form  action="sign.php" method="POST" >
                    <div class="firstname form-control1 ">
                        <input type="text"   id="firstname" placeholder="Họ" name="firstname">
                    </div>
                    <div class="lastname form-control1">
                        <input type="text" id="lastname" placeholder="Tên" name="lastname">
                    </div>
                    <div class="username form-control1 ">
                        <input type="email" id="usernamer" placeholder="Email" name="email">
                    </div>
                    <div class="password form-control1">
                        <input type="password" id="passwordr" placeholder="Mật khẩu" name="password">
                    </div>
                    
                    
                    <div class="submit">
                      <input class="btn" type="submit" value="register" id ="register" name ="register"> 
                      <div class="forgetpassword" style="padding-top:7px;cursor:pointer;">
                            <h4 id="back">Cancel</h4>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    
    </section>
    <?php
      include "footer.php";
    ?>
  </div>
  <?php
      include "libBody.php";
    ?>
  <script src="js/sign.js"></script>
</body>

</html>