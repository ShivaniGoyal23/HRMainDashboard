<<<<<<< HEAD
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
=======
<?php
   define('DB_SERVER', 'localhost:3036');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'rootpassword');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
>>>>>>> b007053f11fb648fc5995682f41e96200e24c3c4
?>