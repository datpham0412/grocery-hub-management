<?php
// $servername = "localhost";
// $username = "root";
// $password = "pass";
// $dbname = "market_database";

// $connect = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($connect === false) {
//     die("Connection failed " . $connect->connect_error);
// }
// $neworder = $_GET["OrderID"];
// // Attempt delete query execution
// $sql = "UPDATE invoice SET Active = 0 WHERE OrderID = $neworder";

// if ($connect->query($sql) === true) {
//     echo "Record deleted successfully";
//     header('Location: orders.php');
// } else {
//     echo "ERROR: Could not able to execute $sql. " . $connect->error;
// }

$user = 'root';
$pass = '';
$db = 'market_database';
$connect = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect");
if (!empty($_POST["orderid"])) {
    $id = $_POST["orderid"];
    //Write SQL query
    $query = "SELECT EXISTS(SELECT * from invoice WHERE OrderID = '$id')";
    $result = mysqli_query($connect, $query) or die("Unable to add order's record into Invoice table");
    if ($result != 0) {
        $query = "UPDATE invoice SET Active = 0 WHERE OrderID = '$id'";
        $result = mysqli_query($connect, $query) or die("Unable to add member's record into Invoice table");
        if ($result) {
            echo "Successfully deactivated invoice";
            header('Location: orders.php');
        } else {
            echo "Delete operation is failed";
        }
    } else {
        echo "The order does not exist in a database";
    }
}

// Close connection
$connect->close();


// $user = 'root';
//     $pass = '';
//     $db = 'market_database';
//     $connect = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect");
//     if (!empty($_POST["memid"])) {
//         $id = $_POST["memid"];
//         //Write SQL query
//         $query = "SELECT EXISTS(SELECT * from invoice WHERE OrderID = '$id')";
//         // $result = mysqli_query($connect, $query) or die("Unable to add member's record into Members table");
//         if ($result != 0) {
//             //$query = "DELETE FROM members WHERE OrderID = '$id'";
// 			$query = "UPDATE invoice SET Active = 0 WHERE OrderID = '$id'";
//             // $result = mysqli_query($connect, $query) or die("Unable to add member's record into Members table");
//             if ($result) {
//                 echo "Record deleted successfully";
// 			    header('Location: Orders.php');
//             } else {
//                 echo "Delete operation is failed";
//             }
//         } else {
//             echo "The invoice does not exist in a database";
//         }
//     }

?>
