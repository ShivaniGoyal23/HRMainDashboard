<?php

include("config.php");
$E_ID=$_GET['E_ID'];
$query = "select * from login where E_ID='".$E_ID."'"; 
$result = mysqli_query($mysqli, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="hrhome.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <title>Update Employee Details</title>
</head>
<style>
body {
    text-align: center;
}
form {
    display: inline-block;
}
</style>

<body>
    <nav class="navbar sticky-top">
        <div class="container-fluid">
          <div class="navbar-header">
          <a href="hrhome.php"><img class="logo" src="logo.png" alt="Manageasy"></a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="employeename" href="#"><i class="fa fa-smile-o"></i> </span> Dhruv Chauhan</a></li>
            <li><a class="logout" href="LoginForm.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </nav>   
<div class="form">
<h1 style="text-align:center">Update Employee Details</h1>
<?php
$status = "";
if(isset($_POST['new']))
{
    
    
    $designation=$_POST['Desg'];
    $phonenumber=$_POST['Phone'];
    $address=$_POST['RAdd'];
    $emercont=$_POST['Emergency'];

$update="update login set designation='".$designation."',phonenumber='".$phonenumber."', address='".$address."',emercont='".$emercont."' where E_ID='".$E_ID."'";


mysqli_query($mysqli, $update) or die(mysqli_error());
$status = "Record Updated Successfully! </br></br>
<a href='deptlist.php'>View Updated Records</a>";
echo '<h5 style="color:#4BB543;">'.$status.'</h5>';
}else {
    
?>
     <br>
                    <h3>Employee- <?php echo $row['name'];?></h3>
                    <br>
                    
                    <div class="col-lg-12 ml-auto personaldet">
                    <form name="form" method="post" action="" > 
       

        <label for="Desg">Designation:</label>
        <input type="text" id="Desg" name="Desg" required> <br>

        <label for="Phone">Phone Number:</label>
        <input type="text" max="9999999999" min="1000000000" id="Phone" name="Phone" required> <br>

        <label for="RAdd">Residential Address:</label>
        <input type="text" style="height: 60px;" id="RAdd" name="RAdd" required> <br>

        <label for="Emergency">Emergency Contact:</label>
        <input type="text" max="9999999999" min="1000000000" id="Emergency" name="Emergency" required> <br>

       <div class="final">
       <br>
        <button type="submit" name="new" class="btn btn-primary mx-5">Update</button></div>

</form>
<?php } ?>
</div>
</div>
</body>
</html>