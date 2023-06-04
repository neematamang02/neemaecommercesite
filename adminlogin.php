<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Login</title>
</head>

<body>
    <div class="login-details">
        <h2>Admin Login</h2>
        <?php 
            if(isset($_POST['login'])){
                require_once "database.php";
                $query = "SELECT * FROM `admin_login` WHERE `email`='$_POST[email]' AND `password`='$_POST[password]'";
                $result = mysqli_query($conn,$query);
                if(mysqli_num_rows($result)==1){
                    session_start();
                    $_SESSION['AdminLoginId']=$_POST['email'];
                    header('location: adminpanel.php');
                }else{
                    echo"incorrect";
                }
            }
        ?>
        <form action="" method="post">
            <div class="username">
                <br>
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
</body>

</html>