<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
            width: 250px;
            height: 500px;
            background-color: black;
            color: white;
            text-align: center;
            padding: 20px;
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

    <?php 
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: adminlogin.php");
    }
    ?>
</body>
</html>