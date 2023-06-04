<?php
    require_once "database.php";
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql="delete from `products` where id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location: productlist.php');
        }else{
            die(mysqli_error($conn));
        }
    }