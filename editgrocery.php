<?php
    error_reporting(0);
    include_once 'connection.php';
    $proo = $_GET['proo'];
    $catt = $_GET['catt'];
    $prii = $_GET['prii'];
    $amoo = $_GET['amoo'];

    $query = "SELECT * FROM products WHERE ProductName = '$proo'";
    $data = mysqli_query($conn,$query);
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <title>
            Edit product page
        </title>
    </head>
    <header class="p-3 bg-dark text-white">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="products.php" class="nav-link px-2 text-white">Products</a></li>
            <li><a href="orders.php" class="nav-link px-2 text-white">Invoice</a></li>
            <li><a href="users.php" class="nav-link px-2 text-white">Users</a></li>
            <li><a href="logout.php" class="btn btn-danger">Log Out</a></li>
            </ul>


            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <!--<input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">-->
            </form>

            <div class="text-end">
            <!--<button type="button" class="btn btn-outline-light me-2">Search</button>-->
            </div>
        </div>
        </div>
    </header>
    <body>
        <div class="container">
            <div class="row" style="padding-top:1%;">
                <div class="col-md-12">
                    <h3>Edit product</h3>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <strong>
                                <label for="memid">Product:</label>
                                <input value="<?php echo $proo;?>" type='text' name = 'memid' id='memid' readonly style="border: none; margin-left: 10"/>          
                            </strong>
                        </div>
                    </div>
                    <form id="regform" action="" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Product Name</label>
                                <input type ="text"  class="form-control" name = 'ProductName' id = 'ProductName' placeholder = "<?php echo $proo;?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Category</label>
                                <input type ="text"  class="form-control" name = 'Category' id = 'Category' placeholder = "<?php echo $catt;?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Price</label>
                                <input type ="text"  class="form-control" name = 'Price' id = 'Price' placeholder = "<?php echo $prii;?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Stock</label>
                                <input type ="text"  class="form-control" name = 'Stock' id = 'Stock' placeholder = "<?php echo $amoo;?>">
                            </div>
                        </div>      
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <p><input class="btn btn-primary" id="editgrocery" type="submit" value="Edit product" name="button"/></p>
                                <script src="editgrocery.js"></script>
                                <p><span id="errormessage"></span></p>
                            </div>  
                        </div>                     
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    /*
        <td><input type ="text" value="<?php echo $proo;?>" class="input" name = 'ProductName'></td>
        <td><input type ="text" value="<?php echo $catt;?>" class="input" name = 'Category'></td>
        <td><input type ="text" value="<?php echo $prii;?>" class="input" name = 'Price'></td>
        <td><input type ="text" value="<?php echo $amoo;?>" class="input" name = 'Amounts'></td>
    */
    if ($_POST['button']){
        $prod = $_POST['ProductName'];
        $catt = $_POST['Category'];
        $prii = $_POST['Price'];
        $amoo = $_POST['Stock'];


        $err_ms="";

/*
        if($prod=="")
            $err_ms .= "<p>Please enter Product Name.</p>";
        else if(!preg_match("/^[a-zA-Z0-9 ]+$/",$prod))
            $err_ms .= "<p>Do not enter special characters.</p>";
        else if (strlen($prod) > 30)
            $err_ms .= "<p>Product Name too long.</p>";
*/

        $search = "SELECT ProductName FROM products WHERE ProductName = '$prod'";
        $aaa = $conn->query($search);
        if($aaa->num_rows == 1 && $proo == $prod){
            echo "<p></p>";
        }
        else if ($aaa->num_rows != 0){
        $id = $aaa->fetch_array()['ProductName'];
        $err_ms .="<div class=container>
        <div class=row style=padding-top:1%;>
            <div class=col-md-12>
            <div class=form-row>
            <div class=form-group col-md-4>Product name already exists.</div></div></div></div></div>";
        }



/*  
        if($catt=="")
            $err_ms .= "<p>Please enter Category</p>";
        else if(strlen($catt) > 15)
            $err_ms .= "<p>Category too long</p>";


        if($prii=="")
            $err_ms .= "<p>Please enter Price.</p>";
        else if($prii > 299)
            $err_ms .= "<p>Too expensive</p>";


        if($amoo=="")
            $err_ms .= "<p>Please enter stock.</p>";
        else if(!preg_match("/^[0-9]+$/",$amoo))
            $err_ms .= "<p>Please enter numbers.</p>";
*/

        if ($err_ms!=""){
            echo $err_ms;
            exit();
        }
        

        $query = "UPDATE products set ProductName='$prod', Category='$catt', Price='$prii',Stock='$amoo' WHERE ProductName = '$proo'";


        $data = mysqli_query($conn,$query);
        if($data)
        {
            echo "<div class=container>
            <div class=row style=padding-top:1%;>
                <div class=col-md-12>
                <div class=form-row>
                <div class=form-group col-md-4>Update successful! Please press Products at the top to view the new table.</div></div></div></div></div>";
        }
        else
        {
            echo "Error";
        }
        
    }
?>
