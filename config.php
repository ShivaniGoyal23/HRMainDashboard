
<?php      
    $host = "localhost";  
    $user = "root";  
    $password ="";  
    $db_name = "hrdashboard";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect". mysqli_connect_error());  
    }  
 /*   else{
        echo "Registration Successful";
    } */
?>