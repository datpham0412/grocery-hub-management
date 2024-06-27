<?php
    include_once 'connection.php';
    $prou = $_GET['prou'];

    //$query = "DELETE FROM stocks WHERE ProductName = $prou";
    $query = "DELETE FROM products WHERE ProductName = '$prou'";
    $data = mysqli_query($conn,$query);
    
    if($data){
        echo "Delete successful!!!";
    }
    else{
        echo "Error";
    }
    header("location:products.php");
?>