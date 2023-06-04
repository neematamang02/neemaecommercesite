<?php
  @include 'database.php';

  if(isset($_POST['addtocart'])){
    $pname=$_POST['product_name'];
    $pprice=$_POST['product_price'];
    $pimage=$_POST['product_image'];
    $pquantity=1;

    $select_cart = mysqli_query($conn, "select * from `cart` where name = '$pname'");

    if(mysqli_num_rows($select_cart)>0){
      echo '<script>alert("Product already added to cart")</script>';
    }else{
      $insert_product = mysqli_query($conn, "insert into `cart`(name, price, image, quantity) values ('$pname','$pprice','$pimage','$pquantity')");
      echo '<script>alert("Product added to cart successfully")</script>';
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    
    <title>Camden dairy</title>
</head>
<body>
    <?php include('header.php'); ?>

<nav>
    <ul>
        <li><a href="#">Home</a></li>
        
      
        <li><a href="trackingorder.php">customer order</a></li>

    </ul>
</nav>
  <div id="slider">
    <input type="radio" name="slider" id="slide1" checked>
    <input type="radio" name="slider" id="slide2">
    <input type="radio" name="slider" id="slide3">
    
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_1">
                <div class="slide-content">
                   <h2>Milk</h2>
                   
                </div>
             </div>
             <div class="slide slide_2">
                <div class="slide-content">
                   <h2>Butter</h2>
                   
                </div>
             </div>
             <div class="slide slide_3">
                <div class="slide-content">
                   <h2>Cheese</h2>
                   
                </div>
             </div>
             
             
          </div>
       </div>
    </div>
    <div id="controls">
       <label for="slide1"></label>
       <label for="slide2"></label>
       <label for="slide3"></label>
      
    </div>
    <div id="bullets">
       <label for="slide1"></label>
       <label for="slide2"></label>
       <label for="slide3"></label>
      
    </div>
 </div>





 <div class="dairy-items">

  <h1>Dairy products</h1>


  <div class="dairy-product-list-1">


  <?php 
            $sql="SELECT * FROM `products`";
            $result=mysqli_query($conn,$sql);
            if ($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $pname=$row['product_name'];
                    $pprice=$row['product_price'];
                    $pimage=$row['product_image'];
                    $pdescription=$row['product_description'];
                    
                echo'
                <div class="dairy-products">
                  <img src="'.$pimage.'" alt="sampleimage">
                  <div class="details">
                    <h3>'.$pname.'</h3>
                    <p>$ '.$pprice.'</p>
                    <p>'.$pdescription.'</p>
                  </div>
                  <form action="" method="post">
                  <input type="hidden" name="product_name" value="'.$pname.'">
                  <input type="hidden" name="product_price" value="'.$pprice.'">
                  <input type="hidden" name="product_image" value="'.$pimage.'">
                  <input type="submit" class="addtocart" value="Add to cart" name="addtocart">
                  </form>

                </div>
                ';
                }
            }
            
            ?>
    
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