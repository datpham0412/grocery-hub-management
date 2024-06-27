<?php
    $user = 'root';
    $pass = '';
    $db = 'gtg';
    $connect = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect");
    if (isset($_POST["submit"])) {
        if (!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["join_date"]) && !empty($_POST["phone_number"]) && !empty($_POST["email"]) && !empty($_POST["address"])) {
            $id = $_POST["memid"];
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $phone_num= $_POST["phone_number"];
            $join_date = $_POST["join_date"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            
            //Write SQL query
            $query = "UPDATE members SET FirstName='$fname', LastName='$lname', JoinDate='$join_date', Email='$email', Address='$address', PhoneNum='$phone_num' WHERE MemberID = '$id'";
            $result = mysqli_query($connect, $query) or die("Unable to change member's record in Members table");
            if ($result) {
                echo "Successfully change details of member no '$id'";
				header('Location: Users.php');
			
            } else {
                echo "Form unsuccessfully submitted";
            }

        } else {
            echo "All fields required";
        }
    }
    mysqli_close($connect);
?>