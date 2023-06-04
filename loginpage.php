<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Camden dairy</title>
</head>
<body>

<?php include 'header.php';?>
  
  




<div class="login-page">
  
    <div class="welcoming">
    <h4>Welcome to camden dairy!Please Login</h4>
    
    <p>New member?<span class="register-btn"><a href="registerpage.php">Register</a></span> here</p>
    </div>


    <div class="login-details">
          <?php
          if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM registerd_users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
              if (password_verify($password, $user["password"])) {
                  session_start();
                  $_SESSION["user"] = "yes";
                  header("Location: userpage.php");
                  die();
              }else{
                  echo "<div class='alert alert-danger'>Password does not match</div>";
              }
          }else{
              echo "<div class='alert alert-danger'>Email does not match</div>";
          }
          }
          ?>
          <form action="loginpage.php" method="post">
            <div class="username">
                <br><br><br>
                <h4>Email</h4>
                <input type="text" id="name" name="email" placeholder="Enter your email" class="login-signup">

            </div>
            <br>

            <div class="password">
                <h4>Password</h4>
                <input type="password" id="pass" name="password" placeholder="Enter your password" class="login-signup">

            </div>
            <br>

            <button class="login-btn" name="login">Login</button>
          </form>
        </div>

</div>




 <br>


 <footer>
  <div class="footer-content">
    <br>
    <div class="socialmedia">
      <a href="#"><i class="fa-brands fa-facebook fa-2xl"></i></a>
      <a href="#"><i class="fa-brands fa-instagram fa-2xl"></i></a>
      <a href="#"><i class="fa-brands fa-twitter fa-2xl"></i></a>

    </div>
    <br>
    <p>sydney 24085, block number-32, straight from un park</p>
    <div class="contact">
      <div class="number">
        <i class="fa-solid fa-phone"></i>
        <h5>+012 98745612</h5>
        <div class="address">
          <i class="fa-solid fa-envelope"></i>
          <h5>camdairy@gmail.com</h5>

        </div>

      </div>

    </div>
    <h1>CAMDEN DAIRY</h1>
   
  </div>
  <!--/.footer-gray-->

  
    

  </div>
</footer>

<div class="copyright">
  <h4>copyright code 2023</h4>
  

</div>
 
    

<script src="https://kit.fontawesome.com/927b7fa170.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>