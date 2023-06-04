<?php
@include 'database.php';
session_start();
if (isset($_SESSION["user"])) {
   echo "";
}
?>
<header>
    <div class="top-link-item">
        <div class="top-item-list">          
            <ul>
                  <?php 
                    //session_start();
                    if (isset($_SESSION['user'])) {
                        echo' <li><a href="userpage.php">My Account</a></li>
                        <li><a href="logout.php">Logout</a></li>';
                    } else {
                        echo '<li><a href="loginpage.php">Login</a></li><li><a href="registerpage.php">Signup</a></li>';
                    }
                    ?>

            </ul>
        </div>   
    </div>
    <div class="search-item">
        <div class="logo">
           <a href="index.php"><h1>Camden dairy</h1></a>

        </div>         

         <div class="cart">
            <?php

                $select_rows = mysqli_query($conn, "select * from `cart`") or die('query failed');
                $row_count =  mysqli_num_rows($select_rows);

            ?>
         <span class="count"><?php echo $row_count; ?></span>
           <a href="cart.php"><img src="icons/icons8-cart-100.png" alt="cart icon"></a>

         </div>
    </div>
</header>