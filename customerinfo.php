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
    <header>

    <div class="top-link-item">
      
        <div class="top-item-list">
            
            <ul>
                
                
                <li><a href="loginpage.php">Login</a></li>
                <li><a href="registerpage.php">Signup</a></li>
            </ul>

        </div>
        
    </div>

    <div class="search-item">
        <div class="logo">
           <a href="index.php"><h1>Camden dairy</h1></a>

        </div>

   

         <div class="cart">
            <span class="count">0</span>
           <a href="ordersummary.php"><img src="icons/icons8-cart-100.png" alt="cart icon"></a>

         </div>

    </div>





</header>


<section class="customer-detail">

    <h1>Checkout</h1>

    <div class="checkout-content">

    
    <div class="billing-details">
        <h3>Billing details</h3>
        <hr>
        <div class="fullname">
            <div class="firstn">
                <h4>First Name</h4>
                <input type="text" class="textbox">

            </div>

            <div class="lastn">

                <h4>Last Name</h4>
                <input type="text" class="textbox">


            </div>

        </div>


        <div class="address-details">

            <h4>Street address</h4>
            <input type="text" placeholder="street name">
            <h4>Town/city</h4>
            <input type="text">

        </div>


        <div class="userid">
            <h4>Phone number</h4>
            <input type="number">
            <h4>Email Address</h4>
            <input type="text" name="emailid" id="emailaddress">

        </div>


    </div>

    <div class="customerorder">

        <h3>Your order</h3>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Subtotal</th>
                </tr>

            </thead>

            <tbody>
                <tr>
                    <td>Milk</td>
                    <td>$10</td>    

                </tr>
                

                <tr>
                    <td>Subtotal</td>
                    <td>$10</td>

                </tr>
                
                <tr>
                    <td>Total</td>
                    <td>$10</td>

                </tr>

            </tbody>
        </table>

        <a href="cardform.php"><button class="placeorder">Place order</button></a>

<div class="paymentmethods">

<div class="cards">
<h4>We accept</h4>
<img src="icons/icons8-visa-card-100.png" alt="visacards">
<img src="icons/icons8-mastercard-100.png" alt="mastercard">
<img src="icons/icons8-american-express-100.png" alt="AMEX">


</div> 


        

    </div>
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