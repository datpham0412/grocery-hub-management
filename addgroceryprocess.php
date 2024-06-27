<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    </head>
</html>
<?php
    include_once("connection.php");
    require_once("addgrocery.php");

    $err_msg="";


    $pro = trim($_POST["pro"]);

    $search = "SELECT ProductName FROM products WHERE ProductName = '$pro'";
    $aaa = $conn->query($search);
    if ($aaa->num_rows != 0){
    $id = $aaa->fetch_array()['ProductName'];
    $err_msg .="<div class=container>
    <div class=row style=padding-top:1%;>
        <div class=col-md-12>
        <div class=form-row>
        <div class=form-group col-md-4>Product name already exists.</div></div></div></div></div>";
    }
/*
    if($pro=="")
        $err_msg .= "<p>Please enter Product Name.</p>";
    else if(!preg_match("/^[a-zA-Z0-9 ]+$/",$pro))
        $err_msg .= "<p>Do not enter special characters.</p>";
    else if (strlen($pro) > 30)
    $err_msg .= "<p>Product Name too long.</p>";
*/

    $cat = trim($_POST["cat"]);/*
    if($cat=="")
        $err_msg .= "<p>Please enter Category</p>";
    else if(strlen($cat) > 15)
        $err_msg .= "<p>Category too long</p>";
*/

    $pri = trim($_POST["pri"]);/*
    if($pri=="")
        $err_msg .= "<p>Please enter Price.</p>";
    else if($pri > 299)
        $err_msg .= "<p>Too expensive</p>";
*/

    $amo = trim($_POST["amo"]);/*
    if($amo=="")
        $err_msg .= "<p>Please enter amount.</p>";
    else if(!preg_match("/^[0-9]+$/",$amo))
        $err_msg .= "<p>Please enter numbers.</p>";
*/

    if ($err_msg!=""){
    echo $err_msg;
    exit();
    }

    $status = "New";
        

    $result = mysqli_query($conn, $query);


    if ($result){
        $insert_query = "INSERT INTO products (
        ProductName,
        Category,
        Price,
        Stock)
        VALUES ('$pro','$cat','$pri','$amo')";
        $insert_result = mysqli_query($conn, $insert_query);
        if ($insert_result)
            echo "<div class=container>
            <div class=row style=padding-top:1%;>
                <div class=col-md-12>
                <div class=form-row>
                <div class=form-group col-md-4>
                
            <p>Add grocery successful, if you want to view the table please press Products at the top.</p></div></div></div></div></div>";
        else 
            echo "<div class=container>
            <div class=row style=padding-top:1%;>
                <div class=col-md-12>
                <div class=form-row>
                <div class=form-group col-md-4><p>Add not successful.</p></p></div></div></div></div></div>";
    }
    else {
        echo "<div class=container>
        <div class=row style=padding-top:1%;>
            <div class=col-md-12>
            <div class=form-row>
            <div class=form-group col-md-4><p>Create table unsuccessful.</p></p></div></div></div></div></div>";
    }
?>
