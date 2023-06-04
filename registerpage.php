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
<div class="register-page">
  
    <div class="welcoming">
    <h4>Create your camden dairy account</h4>
    
    <p>Already member?<span class="register-btn"><a href="loginpage.php">Login</a></span> here</p>
    </div>


    <div class="login-details">
            <?php
              if(isset($_POST["submit"])) {
                $fullname = $_POST["fullname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $repeatpassword = $_POST["repeatpassword"];

                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                $errors = array();

                if(empty($fullname) OR empty($email) OR empty($password) OR empty($repeatpassword))
                {
                  array_push($errors,"All fields required");
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  array_push($errors,"Email is not valid");
                }
                if (strlen($password)<8) {
                  array_push($errors,"Password must contain 8 letters");
                }
                if ($password!==$repeatpassword) {
                  array_push($errors,"Password doesnot match");
                }
                require_once "database.php";
                $sql = "SELECT * FROM registerd_users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount>0) {
                  array_push($errors,"Email already exists!");
                 }

                if (count($errors)>0) {
                  foreach ($errors as $error) {
                    echo "<div class='alert'>$error</div>";
                  }
                }else{
                  $sql = "INSERT INTO registerd_users (full_name, email, password) VALUES ( ?, ?, ? )";
                  $stmt = mysqli_stmt_init($conn);
                  $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                  if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"sss",$fullname, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                }else{
                    die("Something went wrong");
                }
                }
              }
              ?>
            <form action="registerpage.php" method="post">
                <div class="Full Name">
                    <br><br>
                    <h4>Full Name</h4>
                    <input type="text" id="name" placeholder="Enter your Full name" class="login-signup"
                        name="fullname">

                </div>
                <br>

                <div class="Emailaddress">
                    <h4>Email Address</h4>
                    <input type="text" id="address" placeholder="Enter your email" class="login-signup" name="email">

                </div>

                <div class="Password">
                    <br>
                    <h4>Password</h4>
                    <input type="password" id="pass" placeholder="Enter your password" class="login-signup"
                        name="password">

                </div>

                <div class="re-Password">
                    <br>
                    <h4>Password</h4>
                    <input type="password" id="pass" placeholder="Enter your password" class="login-signup"
                        name="repeatpassword">

                </div>


                <br>

                <button class="login-btn" name="submit">Register</button>
                <!-- <input type="submit" name="submit" value="Register"> -->
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