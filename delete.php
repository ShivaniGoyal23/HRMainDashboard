
<?php
include("config.php");
$E_ID=$_GET['E_ID'];
$query = "delete from login where E_ID='$E_ID' "; 
$result = mysqli_query($mysqli,$query);
header("Location: deptlist.php"); 

?>