<?php
    $user = 'root';
    $pass = '';
    $db = 'gtg';
    $connect = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect");
    if (!empty($_POST["memid"])) {
        $id = $_POST["memid"];
        //Write SQL query
        $query = "SELECT EXISTS(SELECT * from members WHERE MemberID = '$id')";
        $result = mysqli_query($connect, $query) or die("Unable to add member's record into Members table");
        if ($result != 0) {
            //$query = "DELETE FROM members WHERE MemberID = '$id'";
			$query = "UPDATE members SET Active = 0 WHERE MemberID = '$id'";
            $result = mysqli_query($connect, $query) or die("Unable to add member's record into Members table");
            if ($result) {
                echo "Successfully deactivated member";
			    header('Location: Users.php');
            } else {
                echo "Delete operation is failed";
            }
        } else {
            echo "The member does not exist in a database";
        }
    }
?>