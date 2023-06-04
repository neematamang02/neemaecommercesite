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


<div class="dashboard">
  
  <div class="dashboard-content">
  <h3>Neema Tamang,</h3>
    <ul>
    <li><a href="userpage.php">Manage account</a></li>
    <hr>
      <li><a href="myorders.php">My orders</a></li>
      <hr>
      <li><a href="addressbook.php">Addresses</a></li>
      <hr>
      <li><a href="#">Payment methods</a></li>
      <hr>
      <li><a href="#"><button class="logout">Logout</button></a></li>
    
    </ul>


  </div>




  <div class="myorderdboard">
    <h3>My orders</h3>

    <hr>

    <table border="0" cellspacing="0" class="ordertablelist">

    <tbody>
      <tr>
        <td><img src="images/milk.jpg" alt="milkimage" class="order-image"></td>
        <td>Milk</td>
        <td>Qty:<span>1</span></td>
        <td><a href="trackingorder.php">Manage</a></td>

      </tr>

      <tr>
        <td><img src="images/milk.jpg" alt="milkimage" class="order-image"></td>
        <td>Milk</td>
        <td>Qty:<span>1</span></td>
        <td><a href="trackingorder.php">Manage</a></td>

      </tr>

      <tr>
        <td><img src="images/milk.jpg" alt="milkimage" class="order-image"></td>
        <td>Milk</td>
        <td>Qty:<span>1</span></td>
        <td><a href="trackingorder.php">Manage</a></td>

      </tr>

    </tbody>
    </table>

    </div>

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