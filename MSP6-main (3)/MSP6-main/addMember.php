<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Member</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
       
    <!-- <style> css code for the look of the page -->
    <style>
        /* body used to set the font used, verdana font with arial as a back up */
        body {
            font-family: Verdana, Arial;

        }

        /* h1 to set heading in the centre of the line and make it bold */
        h1 {
            text-align: center;
            font-weight: bold;

        }

        /* label to set the labels for each field to the left of the line and make them bold */
        label {
            text-align: left;
            font-weight: bold;

        }

        /* submit for submit button colors */
        input[type=submit] {
            font-weight: bold;
            color: white;
            background-color: #04AA6D;
            border-color: #04AA6D;
            border-radius: 3px 4px;
            
        }

        /* changes the color of the submit button when hovered over with the cursor */
        input[type=submit]:hover {
            background-color: #059862;

        }

    </style>

</head>

<body>
    <!-- heading title on the page -->
    <h1>Add New Member</h1>

    <br />

    <?php
        // include connection to database
        include 'db_connection.php';

        // for when the submit button is clicked
        if (isset($_POST['submit'])){
            // assigns values posted from html form to php variables
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $joinDate = date('Y/m/d');
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phoneNum = $_POST['phoneNum'];
            $active = 1;

            // checks firstName field is not empty, letters only and more than 3 characters long
            if ($firstName == "" || strlen($firstName) < 2 || !ctype_alpha($firstName)){
                echo '<script>alert("First name must be atleast 2 characters long and consist with only letters")</script>';

            // checks lastName field is not empty, letters only and more than 3 characters long
            } else if ($lastName == "" || strlen($lastName) < 2 || !ctype_alpha($lastName)){
                echo '<script>alert("Last name must be atleast 2 characters long and consist with only letters")</script>';

            // checks that email field is not empty and a valid email address
            } else if ($email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo '<script>alert("A valid email address must be used")</script>';

            // checks that address field is not empty and valid
            } else if ($address == "" || !preg_match('/\d+[0-9a-zA-Z ]+/', $address)){
                echo '<script>alert("Enter a valid address, in case of address a unit put a space between unit and street number")</script>';

            // checks that phoneNum field is not empty, digits only and has 10 numbers
            } else if ($phoneNum == "" || !ctype_digit($phoneNum) || strlen($phoneNum) != 10){
                echo '<script>alert("Enter a valid 10 digit mobile number")</script>';

            // if all checks pass the following is handled
            } else {
                // connection to database
                $connection = openConnection();

                // query line to search for existance of the members first and last name within the database
                $search = "SELECT MemberID FROM members WHERE FirstName = '$firstName' AND LastName = '$lastName' AND PhoneNum = '$phoneNum'";

                // if member first and last name is found their memberID will be allocated to $result
                $result = $connection->query($search);

                // if a memberID is allocated to $result message is displayed with the assigned ID displayed
                if ($result->num_rows != 0){
                    $id = $result->fetch_array()['MemberID'];
                    echo "The member " , $firstName , " " , $lastName , " already exists with the member ID $id";

                } else {
                    // query line to add a new entry into the database
                    $new = "INSERT INTO members (FirstName, LastName, JoinDate, Email,
                    Address, PhoneNum, Active)
                    VALUES ('$firstName', '$lastName', '$joinDate', '$email', '$address', '$phoneNum', '$active')";

                    // submits query to add member
                    $connection->query($new);

                    // result is used again to query memberID of new member and displays ID
                    $result = $connection->query($search);
                    $id = $result->fetch_array()['MemberID'];
                    echo $firstName , " " , $lastName , " added as member with memberID $id";

                }
            }

        }

    ?>

    <br />

    <!-- form for data to be added to DB -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return check()">
        <panelgrid columns="2">
            <!-- firstName label and input -->
            &ensp;<label for="firstName">First Name: </label><br />
            &emsp;<input type="text" name="firstName" id="firstName"
                required
                requiredmessage="The first name field cannot be empty!"
                size="30" maxlength="30" /><br />

            <!-- lastName label and input-->
            &ensp;<label for="lastName">Last Name: </label><br />
            &emsp;<input type="text" name="lastName" id="lastName"
                required
                requiredmessage="The last name field cannot be empty!"
                size="30" maxlength="30" /><br />

            <!-- joinDate handled in addToDB.php -->

            <!-- email label and input -->
            &ensp;<label for="email">Email: </label><br />
            &emsp;<input type="email" name="email" id="email"
                required
                requiredmessage="The email field cannot be empty!"
                size="30" maxlength="100" /><br />

            <!-- address label and input -->
            &ensp;<label for="address">Address: </label><br />
            &emsp;<input type="text" name="address" id="address"
                required
                requiredmessage="The address field cannot be empty!"
                size="30" maxlength="100" /><br />

            <!-- phoneNum label and input -->
            &ensp;<label for="phoneNum">Mobile: </label><br />
            &emsp;<input type="number" name="phoneNum" id="phoneNum"
                required
                requiredmessage="The mobile field cannot be empty!"
                size="10" minlength="10" maxlength="10" /><br />

            <!-- active handled in addToDB.php -->

        </panelgrid>
        <p></p>

        <!-- form submission button -->
        &emsp;<input type="submit" value="Submit" name="submit" />

    </form>

</body>

</html>
