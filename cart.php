<?php
    require_once 'database.php';
    if(isset($_POST['update_update_btn'])){
    $update_value=$_POST['update_quantity'];
    $update_id=$_POST['update_quantity_id'];
    $update_quantity_query=mysqli_query($conn, "update `cart` set quantity= '$update_value' where id='$update_id'");
    if($update_quantity_query){
      header('location:cart.php');
    }
  };

  if(isset($_GET['remove'])){
    $remove_id= $_GET['remove'];
    mysqli_query($conn, "delete from `cart` where id= '$remove_id'");
    header('location: cart.php');
  }
?>
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
<?php include('header.php'); ?>


<section class="orderlist">
  <h1>Cart</h1>

  

  <div class="order-items">
     <table border="1" cellspacing="0" class="cart-table">

      <thead>
    
        <tr>
        
          <th></th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>

        </tr>
      </thead>
      <?php
        $grand_total = 0;
        $select_cart = mysqli_query($conn, "select * from `cart` ");
        
        if(mysqli_num_rows($select_cart)>0){
          while($fetch_cart = mysqli_fetch_array($select_cart)){
        $grand_total=$grand_total+$fetch_cart['price']* $fetch_cart['quantity'];
      ?>

        <tr>
          <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Remove item from cart?')" title="Remove"><img width="25" height="25" src="https://img.icons8.com/ios/50/waste.png" alt="waste" class="delete-cart"/></a>
          <img src="<?php echo $fetch_cart['image'] ?>" alt="image" class="product-image">
          </td>
          <td><?php echo $fetch_cart['name'] ?></td>
          <td>$<?php echo $fetch_cart['price'] ?></td>
          <td>
            <form action="" method="post">
            <input type="number" class="number-btn" name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity'] ?>">
            <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?>">
            <input type="submit" value="Update"  onclick="return confirm('do u want to update your cart?')"  name="update_update_btn">
            </form>
          </td>
          <td>$<?php echo $subtotal= $fetch_cart['price']* $fetch_cart['quantity']; ?></td>
        </tr>
   <?php };
   };
   ?>
     </table>
  </div>
  <div class="checkout-details">
    <table border="1" cellspacing="0">
     <thead>
      <tr>
        <th colspan="2">Cart totals</th>
      </tr>
     </thead>
     <tbody>
      <tr>
        <td>Grand Total</td>
        <td><?php echo $grand_total ?></td>
      </tr>
      <tr>
        <td colspan="2"><a href="customerinfo.php"><button class="checkout-cart">checkout cart</button></a></td>
      </tr>
     </tbody>
    </table>


  </div>




</section>






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