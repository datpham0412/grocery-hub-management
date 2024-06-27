<?php
$password = 'Dat041202'; 
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
echo $hashedPassword;
?>
