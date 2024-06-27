<!-- THE HTML CODE TO SUBMIT THE CSV
    <form method = "post" class="col-md-6" action = "export_members.php">
            <input type = "submit" name = "export" value = "Export CSV file" class="btn btn-outline-primary"/>
        </form>
--> 

<?php  
include 'db_connection.php';
      // CHECK IF SUBMIT BUTTON VALUE IS SET  
 if(isset($_POST["export"]))  
 {  
      $connection = openConnection();  
      header('Content-Type: text/csv; charset=utf-8'); 
      header('Content-Disposition: attachment; filename=data.csv'); // DOWNLOAD FILE
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ProductID', 'ProductName', 'Category', 'Price', 'Amounts'));  
      $sql = "SELECT * from stocks ORDER BY ProductID"; // FETCH DATA 
      $result = mysqli_query($connection, $sql); // EXECUTE QUERY 
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  