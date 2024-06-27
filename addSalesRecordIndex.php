<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Sales Record</title>

    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>-->
    <script src="https://code.jquery.com/jquery-1.3.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="addSalesRecord.css" />
    <script type="text/javascript" src="addSalesRecord.js" charset="utf-8"></script>

</head>

<body>
    <!-- heading title on the page -->
    <h1>Add Sales Record</h1>

    <br />

    <?php
    include 'addSalesRecordProcess.php';

    checkAddSalesRecordIndex();

    ?>

    <br />

    <!-- form for data to be added to DB -->
    <form name="salesRecordIndex" action="" method="post" onsubmit="validate()">
        <panelgrid columns="2">
            <!-- memberID label and input -->
            <p>
                &ensp;<label for="memberID">Member ID: </label><br />
                &emsp;<input type="text" name="memberID" id="memberID"
                    required autocomplete="off"
                    requiredmessage="The member ID field cannot be empty!"
                    size="10" maxlength="10" />
            </p><br />

            <!-- numSold label and input-->
            <p>
                &ensp;<label for="numSold">Number of Sales: </label><br />
                &emsp;<input type="text" name="numSold" id="numSold"
                    required autocomplete="off"
                    requiredmessage="The number of sales field cannot be empty!"
                    size="2" maxlength="2" />
            </p><br />

        </panelgrid>
        <p></p>

        <!-- form submission button -->
        &emsp;<input class="submit" type="submit" value="Check" name="check" />

    </form>

</body>

</html>