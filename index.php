<?php
include "function.php";

if (!isset($_SESSION['email'])) {
  header('Location: signin.php');
  exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php include "libHeader.php";?>
  


  <title>Test SQL dashboard</title>

</head>

<body>
  <div class="header">
    <a style="color: #ffffff;text-decoration: none;" href="index.php">WELCOME TO DASHBOARD</a>
  </div>

  <!--Navbar-->
  <?php
    $location1 = 0;
    include "navBar.php";
  ?>

  <?php
    include "footer.php";
    include "libBody.php";
  ?>



  

</body>

</html>