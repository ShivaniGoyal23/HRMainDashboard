
<?php      
    $host = "localhost";  
    $user = "root";  
    $password ="";  
    $db_name = "hrdashboard";  
      
    $mysqli = new mysqli($host, $user, $password, $db_name);  
    if($mysqli->connect_error) {  
        die("Failed to connect". mysql_connect_error());  
    }  
?>