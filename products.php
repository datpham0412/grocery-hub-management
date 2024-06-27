<?php
    include_once('connection.php');
    $query = "SELECT * FROM products";
    //$result = $conn-> query($query);
    $result = mysqli_query($conn,$query);
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
	</script>

        <title>
            Product Page
        </title>
    </head>
    <body>
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

        <div class="container">
            <div class="row" style="padding-top:5%;">
                <div class="col-md-2">
                    <a type="button" class="btn btn-outline-primary" href="addgrocery.php">Add products</a>
                </div>
            </div>

            <div class="row" style="padding-top:1%;">
                <div class="col-md-12">
                    <h3>Product Table<h3>

                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>ProductName</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Operation</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <?php
                        if (!empty($result) && $result->num_rows > 0) {
                            while ($row = $result-> fetch_assoc()){
                                if($row['Stock'] > 3){
                                echo "
                                <tr>
                                    <td>".$row['ProductName']."</td>
                                    <td>".$row['Category']."</td>
                                    <td>".$row['Price']."</td>
                                    <td>".$row['Stock']."</td>

                                    <td>
                                        <a type='button' class='btn btn-warning' href='editgrocery.php?proo=$row[ProductName]&catt=$row[Category]&prii=$row[Price]&amoo=$row[Stock]'>
                                        <i class='fa fa-pencil fa-lg'></i></a>
                                    </td>
                                    <td>
                                        <a type='button' class='btn btn-warning' href='deletegrocery.php?prou=$row[ProductName]'>
                                        <i class='fa fa-trash-o fa-lg'></i></a>
                                    </td>
                                </tr>
                                ";
                                }
                                else{
                                    echo "
                                <tr>
                                    <td>".$row['ProductName']."</td>
                                    <td>".$row['Category']."</td>
                                    <td>".$row['Price']."</td>
                                    <td>".$row['Stock']."   WARNING</td>

                                    <td>
                                    <a type='button' class='btn btn-warning' href='editgrocery.php?proo=$row[ProductName]&catt=$row[Category]&prii=$row[Price]&amoo=$row[Stock]'>
                                    <i class='fa fa-pencil fa-lg'></i></a>
                                    </td>
                                    <td>
                                    <a type='button' class='btn btn-warning' href='deletegrocery.php?prou=$row[ProductName]'>
                                    <i class='fa fa-trash-o fa-lg'></i></a>
                                    </td>
                                </tr>
                                ";
                                }
                            }
                        }
                        else{
                            echo "";
                        }
                        ?>
                    </table>
                </div>    
                    <form method = "post" class="col-md-6" action = "export_grocery.php">
                        <input type = "submit" name = "export" value = "Export CSV file" class="btn btn-outline-primary"/>
                    </form>
            </div>
            <div class="row" style="padding-top:1%;">
                <div id="xmldata" class="col-md-12">
                </div>
            </div>
        </div>
    </body>
</html>
