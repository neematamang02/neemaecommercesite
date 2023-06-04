<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
    .header {
        background-color: green;
        padding: 20px 20px;
        display: block;
        overflow: hidden;
        font-size: 24px;
        color: white;
    }

    .h-left {
        float: left;
    }

    .h-right {
        float: right;
    }

    .sidebar {
        width: 20%;
        height: 100vh;
        background-color: black;
        color: white;
        text-align: center;
        float: left;
    }

    .addproduct {
        color: white;
        text-transform: uppercase;
        text-decoration: none;
        background-color: red;
        display: inline-block;
        width: 100%;
        padding: 10px 0;
    }

    .addproduct:hover {
        background-color: blue;
    }

    .addproduct-box {
        height: 100vh;
        width: 80%;
        background-color: #ccc;
        float: right;
    }

    .addproduct-form {
        padding: 30px;
    }

    .input-box {
        padding: 10px 20px;
        width: 250px;
    }

    .product-list {
        padding: 30px;
    }

    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
    .product-list img{
        width: 120px;
        height: 120px;
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
        <div class="product-list">

            <table id="customers">
                <tr>
                    <th>S.N</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Product Description</th>
                    <th>Action</th>
                </tr>
            
                <?php 
            require_once "database.php";
            $sql="SELECT * FROM `products`";
            $result=mysqli_query($conn,$sql);
            $i=1;
            if ($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $pname=$row['product_name'];
                    $pprice=$row['product_price'];
                    $pimage=$row['product_image'];
                    $pdescription=$row['product_description'];
                    echo '<tr>
                    <td>'.$i++.'</td>
                    <td>'.$pname.'</td>
                    <td>'.$pprice.'</td>
                    <td><img src="'.$pimage.'"></td>
                    <td>'.$pdescription.'</td>
                    <td>
                        <button><a href="editproduct.php?editid='.$id.'">Edit</a></button>
                        <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                    </td>
                </tr>';
                }
            }
            
            ?>


            </table>

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