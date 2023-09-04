<head>
    <script>
        function getOrderId() {
            if (sessionStorage.getID)
            {
                const orderid_input = document.getElementById("orderid");
                orderid_input.value = sessionStorage.getID;
                sessionStorage.clear(); // clear the session storage 
                document.getElementById('deleteForm').submit(); // auto SUBMIT FORM
            }
            else
            {
                alert("Please choose a order record to be deleted.");
                window.location.replace("/orders.php"); // redirect to orders when there is no order id
            }
        }
        window.onload = getOrderId;
    </script>
</head>
<body>
    <form action = "delete-order.php" method = "post" id = "deleteForm">
        <input type='hidden' name = 'orderid' id='orderid'/> 
    </form>
<?php
// remove all session variables
session_unset();
?>