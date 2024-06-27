<head>
    <script>
        function getMemId() {
            if (sessionStorage.getID)
            {
                const memid_input = document.getElementById("memid");
                memid_input.value = sessionStorage.getID;
                sessionStorage.clear(); // clear the session storage 
                document.getElementById('deleteForm').submit(); // auto SUBMIT FORM
            }
            else
            {
                alert("Please choose a member record to be deleted.");
                window.location.replace("/users.php"); // redirect to users when there is no member id
            }
        }
        window.onload = getMemId;
    </script>
</head>
<body>
    <form action = "delete-users.php" method = "post" id = "deleteForm">
        <input type='hidden' name = 'memid' id='memid'/> 
    </form>
<?php
// remove all session variables
session_unset();
?>