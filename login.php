<?php
session_start();

// if already logged in
if (isset($_SESSION['loggedIN'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['login'])) {
    include 'db_connection.php';
    $connection = openConnection();

    $user = $connection->real_escape_string($_POST['userPHP']);
    $password = $connection->real_escape_string($_POST['passwordPHP']);

    $data = $connection->query("SELECT id, password FROM users WHERE user='$user'");
    if ($data->num_rows > 0) {
        $row = $data->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedIN'] = '1';
            $_SESSION['user'] = $user;
            exit('success');
        } else {
            echo '<script>alert("Wrong user or password")</script>';
            exit("");
        }
    } else {
        echo '<script>alert("Wrong user or password")</script>';
        exit("");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login page</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<form method="post" action="login.php">
			<h1>Staff Login</h1>
			<div class="form-group">
				<label for="">User</label>
				<input type="text" class="form-control" id="user">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" id="password">
			</div>

			<input type="button" class="btn" value="Log In" id="login">
		</form>
	</div>

	<p id="response"></p>

	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#login").on('click', function() {
				var user = $("#user").val();
				var password = $("#password").val();

				if (user == "" || password == "")
					alert('Please fill in your user and password');
				else {
					$.ajax({
						url: 'login.php',
						method: 'POST',
						data: {
							login: 1,
							userPHP: user,
							passwordPHP: password
						},
						success: function(response) {
							$("#response").html(response);

							if (response.indexOf('success') >= 0)
								window.location = 'index.php';
						},
						dataType: 'text'
					});
				}
			});
		});
	</script>
</body>

</ht