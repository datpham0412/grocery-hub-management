<?php
// include connection to database
include 'db_connection.php';

// holds session data on this page
session_start();

// function to check correct input on addSalesRecordIndex.php form
function checkAddSalesRecordIndex(){
    // for when the check button is clicked
    if (isset($_POST['check'])){
        // assigns values posted from html form to php variables
        //session_start();
        $memberID = $_POST['memberID'];
        $numSold = $_POST['numSold'];

        // checks both fields are not empty and consists of only digits
        if ($memberID == "" || $numSold == "" || !ctype_digit($memberID) || !ctype_digit($numSold)){
            echo "Member ID and Number of Sales must be digits only and not empty";

        } else {
            // connection to database
            $conn = openConnection();

            // query line to search for existance of the members ID within the database table
            $search = "SELECT MemberID, Active FROM members WHERE MemberID = '$memberID'";

            // if memberID is found the memberID and Active will be allocated to $result
            $result = $conn->query($search);

            // if the memberID is not found a message of non-existance is echoed
            if($result->num_rows == 0){
                echo "Member ID " , $memberID , " Does not exist.";

            // if the memberID is found but is not active a no-active message is echoed
            } else if($result->fetch_array()['Active'] == 0){
                echo "Member ID " , $memberID , " is not currently active.";

            // else memberID and numSold are held in session for next page and then next page open
            } else {
                $_SESSION['memberID'] = $memberID;
                $_SESSION['numSold'] = $numSold;

                header('Location: addSalesRecord.php');

            }

        }

    }
}

// function to get members data from members DB table via memberID
function getMemberData(){
    $memberID = $_SESSION['memberID'];

    $conn = openConnection();

    $search = "SELECT * FROM members WHERE MemberID = '$memberID'";

    $result = $conn->query($search);

    $member = $result->fetch_array();

    return $member;

}

// function to set number of data entry rows on addSalesRecord.php form table via numSold
function numSoldRows(){
    $numSold = $_SESSION['numSold'];

    for ($i = 0; $i < $numSold; $i++){
        echo '<tr>
                    <td><input id="prodID" name="prodID" type="text" placeholder = "Please Enter"></td>
                    <td><input id="price" name="price" type="text" value = "" readonly></td>
                    <td><input id="unit" name="unit" type="text" value = "" readonly></td>
                    <td><input id="quantity" name="quantity" type="text" placeholder = "Please Enter"></td>
                    <td><input id="subTotal" name="subTotal" type="text" value = "" readonly></td>
              </tr>';

    }

}

?>