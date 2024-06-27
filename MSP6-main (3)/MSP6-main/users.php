
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

	<script type="text/javascript">
		function getUserData(id, fname, lname, pnum, email, joindate) 
		{
			sessionStorage.editUserId = id;
			sessionStorage.editFName = fname;
			sessionStorage.editLName = lname;
			sessionStorage.editPnum = pnum;
			sessionStorage.editEmail = email;
			sessionStorage.editJoinDate = joindate;
		}

		function storeDeleteMember(id) 
		{
			sessionStorage.getID = id;
			confirm("Are you sure to delete a member ?");
		}

		
	</script>
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
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Search</button>
        </div>
      </div>
    </div>
  </header>


<div class="container">

	<div class="row" style="padding-top:5%;">

		<div class="col-md-2">
		<a type="button" class="btn btn-outline-primary" href="add-users.php">Add user</a>
		</div>
	</div>

	<div class="row" style="padding-top:1%;">

		<div class="col-md-12">
			<h3> Users page <h3>

			<table id="example" class="table table-striped" style="width:100%" >

				<thead>
					<tr>
						<th>ID</th>
						<th>Full name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Join Date</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>

				<tbody>

				<?php

					// Create connection
					$conn = new mysqli('localhost', 'root', '', 'gtg');

					// Check connection
					if ($conn->connect_error) {
					  die("Connection failed: " . $conn->connect_error);
					}
					//echo "Connected successfully";

					$sql = "SELECT MemberID, FirstName, LastName, PhoneNum, JoinDate, Email, Active FROM members";
					$result = $conn->query($sql);



					if ($result->num_rows > 0) {
					  // output data of each row
					  while($row = $result->fetch_assoc())
					  {
						if($row["Active"] == 1)
						{
							echo "<tr><td>" .$row["MemberID"]. "</td>" .
								 "<td>" . $row["FirstName"].' '.$row["LastName"]. "</td>" .
								 "<td>" .$row["PhoneNum"]. "</td>" .
								 "<td>" .$row["Email"]. "</td>" .
								 "<td>" .$row["JoinDate"]. "</td>" .
								 "<td>
									<a type='button' class='btn btn-warning' href='edit-users.php' onclick='getUserData(`".$row['MemberID']."`,`".$row['FirstName']."`,`".$row['LastName']."`,`".$row['PhoneNum']."`,`".$row['Email']."`,`".$row['JoinDate']."`)'>
										<i class='fa fa-pencil fa-lg'></i>
									</a>
								  </td>
								 <td>
								 <a type='button' class='btn btn-warning' href='go-to-delete-users.php' onclick='storeDeleteMember(".$row['MemberID'].")'>
											<i class='fa fa-trash-o fa-lg'></i>
									  </a></td></tr>";
						}
					  }
					}

				?>

				</tbody>
			</table>
		</div>
        <form method = "post" class="col-md-6" action = "export_members.php">
            <input type = "submit" name = "export" value = "Export CSV file" class="btn btn-outline-primary"/>
        </form>
	</div>

	<div class="row" style="padding-top:1%;">
		<div id="xmldata" class="col-md-12">

		</div>
	</div>
</div>



</body>
