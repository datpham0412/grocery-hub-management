<?php  
include 'db_connection.php';
      // CHECK IF SUBMIT BUTTON VALUE IS SET  
 if(isset($_POST["export"]))  
 {  
      $connection = openConnection();  
      header('Content-Type: text/csv; charset=utf-8'); 
      header('Content-Disposition: attachment; filename=data.csv'); // DOWNLOAD FILE
      $output = fopen("php://output", "w");  
      fputcsv($output, array('memberID', 'FirstName', 'LastName', 'JoinDate', 'Email', 'Address', 'PhoneNum', 'Active'));  
      $sql = "SELECT * from members ORDER BY MemberID"; // FETCH DATA 
      $result = mysqli_query($connection, $sql); // EXECUTE QUERY 
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  