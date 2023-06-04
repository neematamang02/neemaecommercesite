<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <style>
        .header{
            background-color: green;
            padding: 20px 20px;
            display: block;
            overflow: hidden;
            font-size: 24px;
            color: white;
        }
        .h-left{
            float: left;
        }
        .h-right{
            float: right;
        }
        .sidebar{
            width: 20%;
            height: 100vh;
            background-color: black;
            color: white;
            text-align: center;
            float: left;
        }
        .addproduct{
            color: white;
            text-transform: uppercase;
            text-decoration: none;
            background-color: red;
            display: inline-block;
            width: 100%;
            padding: 10px 0;
        }
        .addproduct:hover{
            background-color: blue;
        }
        .addproduct-box{
            height: 100vh;
            width: 80%;
            background-color: #ccc;
            float: right;
        }
        .addproduct-form{
            padding: 30px;
        }
        .input-box{
            padding: 10px 20px;
            width: 250px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="h-left">Welcome to Admin Panel</div>
        <form method="post">
        <button name="logout" class="h-right">Logout</button>
        </form>
    </div>

    <div class="sidebar">
        <a class="addproduct" href="addproduct.php">Add Product</a>
        <a class="addproduct" href="productlist.php">Product List</a>
            
    </div>

    <div class="addproduct-box">
        <div class="addproduct-form">
        <?php
        require_once "database.php";
        $idd=$_GET['editid'];
        $sql="Select * from `products` where id=$idd";
        $resultt=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($resultt);
            // $pname=$row['product_name'];
            // $pprice=$row['product_price'];
            // $pimage=$row['product_image'];
            // $pdescription=$row['product_description'];
        if(isset($_POST['submit'])){
            $id=$_POST['id'];
            $pname=$_POST['productname'];
            $pprice=$_POST['productprice'];
            $filename=$_FILES["uploadfile"]["name"];
            $tempname=$_FILES["uploadfile"]["tmp_name"];
            $folder="upload/".$filename;
            move_uploaded_file($tempname, $folder);
            $pdescription=$_POST['productdescription'];

            if (!$filename) {
                $sql="update `products` set product_name='$pname', product_price='$pprice', product_description='$pdescription' where id='$id'";
            }else{
                $sql="update `products` set product_name='$pname', product_price='$pprice', product_image='$folder', product_description='$pdescription' where id='$id'";
            }

            

            $result=mysqli_query($conn,$sql);
            if($result){
                echo "Update Products Successfully!";
            }else{
                die(mysqli_error($conn));
            }
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="username">
                <br>
                <h4>Product Name</h4>
                <input type="text"  name="productname" placeholder="Enter product name" required class="input-box" value="<?php echo $row['product_name']; ?>">
            </div>
            <div class="username">
                <br>
                <h4>Product Price</h4>
                <input type="text"  name="productprice" placeholder="Enter product price" required class="input-box" value="<?php echo $row['product_price']; ?>">
            </div>
            <div class="username">
                <br>
                <h4>Product Image</h4>
                <input type="file" name="uploadfile" class="input-box" value="<?php echo $row['product_image']; ?>"><img src="<?php echo $row['product_image']; ?>" width="120px" height="120px"> <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="username">
                <br>
                <h4>Product Description</h4>
                <textarea type="text"  name="productdescription" placeholder="Enter product description" required class="input-box"><?php echo $row['product_description']; ?></textarea>
            </div>
            <br>
            <button class="login-btn" name="submit">SUBMIT</button>
        </form>
        </div>
    </div>

    <?php 
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: adminlogin.php");
    }
    ?>
</body>
</html>