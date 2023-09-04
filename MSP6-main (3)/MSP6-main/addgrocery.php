<?php
    include_once('connection.php');
    $query = "SELECT * FROM products";
    $result = $conn-> query($query);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <title>
            Add product page
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
                    <h3>Add product</h3>
                    <form name="regform" action="addgroceryprocess.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Product Name</label>
                                <input class="form-control" id="pro" name="pro" type="text" placeholder = "Please Enter">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Category</label>
                                <input class="form-control" id="cat" name="cat" type="text" placeholder = "Please Enter">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Price</label>
                                <input class="form-control" id="pri" name="pri" type="text" placeholder = "[xxx.xx]">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Stock</label>
                                <input class="form-control" id="amo" name="amo" type="text" placeholder = "Please Enter">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <button class="btn btn-primary" type="submit" name="submit">Add product</button>
                                <script src="addgrocery.js"></script>
                                <p><span id="errormessage"></span></p>
                            </div>  
                        </div>

                        <!--<fieldset>
                            <table>
                                <t>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                </t>
                                <tr>
                                    <td><input id="pro" name="pro" type="text" placeholder = "Please Enter"></td>
                                    <td><input id="cat" name="cat" type="text" placeholder = "Please Enter"></td>
                                    <td><input id="pri" name="pri" type="text" placeholder = "Please Enter"></td>
                                    <td><input id="amo" name="amo" type="text" placeholder = "Please Enter"></td>
                                </tr>
                            </table>
                            <p>
                            <button type="submit" name="submit">Add grocery</button>
                            </p>
                        <fieldset>
                        -->
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
