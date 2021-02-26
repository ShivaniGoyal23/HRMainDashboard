
<?php      
    $host = "localhost";  
    $user = "root";  
    $password ="";  
    $db_name = "hrdashboard";  
      
    $mysqli = new mysqli($host, $user, $password, $db_name);  
    if($mysqli->connect_error) {  
        die("Failed to connect". mysqli_connect_error());  
    }  
 /*   else{
        echo "Registration Successful";
    } */
?>