<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Sales Record</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</head>

<body>
    <!-- heading title on the page -->
    <h1>Add Sales Record</h1>

    <br />

    <?php
    // include connection to database
    include 'addSalesRecordProcess.php';
    
    // function in addSalesRecordProcess that sets member data from members DB table to $member
    $member = getMemberData();

    ?>

    <br />

    <!-- form for data to be added to DB -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="">
        <fieldset>
            <table align="center" border="1px" style="width:600px; line-height:60px;">
                <!-- form table heading -->
                <tr>
                    <th><h2>Invoice<h2></th>
                </tr>

                <!-- first section of form table for member data -->
                <t>
                    <th>Member ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </t>

                <tr>
                    <td><input id="memberID" name="memberID" type="text" value="<?php echo $member[0]; ?>" readonly /></td>
                    <td><input id="firstName" name="firstName" type="text" value="<?php echo $member[1]; ?>" readonly /></td>
                    <td><input id="lastName" name="lastName" type="text" value="<?php echo $member[2]; ?>" readonly /></td>
                </tr>

                <!-- second section of form table for itemsOrdered data -->
                <t>
                    <th>Product ID</th>
                    <th>Price</th>
                    <th>Units</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                </t>

                <!-- punction in addSalesRecordProcess that handles setting the correct amount of sales inputs -->
                <?php numSoldRows(); ?>

                <!-- final section of form table for invoice data -->
                <t>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>paid?</th>
                    <th>Total</th>
                </t>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="checkbox" id="paid" name="paid" value="1" /></td>
                    <td><input id="total" name="total" value="" readonly /></td>
                </tr>
            </table>
        </fieldset>
        <p></p>

        <!-- form submission button -->
        &emsp;<input type="submit" value="Submit" name="submit" />

    </form>

</body>

</html>