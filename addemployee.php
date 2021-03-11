<?php    
include('config.php'); 
session_start();
if(isset($_POST['add'])){

  $E_ID=$_POST['EID'];
  $name=$_POST['fname'];
  $email=$_POST['Oemail'];
  $password=$_POST['psw'];
  $role=$_POST['account'];
  $department=$_POST['Department'];
  $designation=$_POST['Desg'];
  $phonenumber=$_POST['Phone'];
  $address=$_POST['RAdd'];
  $bloodgroup=$_POST['BloodGrp'];
  $emercont=$_POST['Emergency'];
  $birthdate=$_POST['BDate'];
  $teamleader=$_POST['TLead'];
 
  //To insert values into the database from PHP
  $insertquery="insert into login(E_ID,name,email,password,role,department,designation,phonenumber,address,bloodgroup,emercont,birthdate,teamleader) 
  values('$E_ID','$name','$email','$password','$role','$department','$designation','$phonenumber','$address','$bloodgroup','$emercont','$birthdate','$teamleader')";

  $res=mysqli_query($mysqli,$insertquery);
  
  //To check if data is inserted or not
  if($res){
   header('location:hrhome.php?status=success');
  }
  else{
  header('location:hrhome.php?status=error');
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="hrhome.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <title>Home</title>
</head>
<body>
    <nav class="navbar sticky-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <img class="logo" src="logo.png" alt="Manageasy">
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="employeename" href="#"><i class="fa fa-smile-o"></i></span>Welcome HR</a></li>
            <li><a class="logout" href="LoginForm.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </nav>   

      <div class="container main">
  <div class="row">
<div class="col-lg-3 personaldet">
<img class="rounded mx-auto d-block" src="HR.png" alt="#">
<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <li class="nav-item"><a href="personaldetails.php">Personal Details</a></li>
  <li class="nav-item"><a href="search.php">Search</a></li>
  <li class="nav-item"><a class="nav-link active" id="showall-tab" data-toggle="pill" href="#employee" role="tab" aria-controls="showall" aria-selected="true">Add an Employee</a></li>
  <li class="nav-item"><a href="deptlist.php" >Department List</a></li>
  <li class="nav-item"><a href="hrform.php">Forms</a></li>
</ul>
</div>



<div class="col-lg-8 ml-auto personaldet">
  <div class="tab-pane active" id="employee" role="tabpanel" aria-labelledby="showall-tab">

      <h1 class="text-center">Add an Employee</h1>
<<<<<<< HEAD
     
      <script>

     
      <?php

if(isset($_GET['status']) && $_GET['status'] == 'success'){
  echo '<script>alert("User Added Successfully")</script>';
}

if(isset($_GET['status']) && $_GET['status'] == 'error'){
 echo '<script>alert("User Not Added")</script>';
}
?> 
=======
   
>>>>>>> 3b491c6b23c1b2c338a7a8fc2b8c8ae5ff2512ac
      <div class="containerx">
      <form action="addemployee.php" method="post">

        <div class="account-type">
         <a class="hr1">Account type</a>
          <input type="radio" value="employee" id="radioOne" name="account" checked/>
          <label for="radioOne" class="radio">Employee</label>

          <input type="radio" value="manager" id="radioTwo" name="account"/>
          <label for="radioTwo" class="radio">Manager</label>
        </div> 

        <label for="fname">Full name:</label>
        <input type="text" id="fname" name="fname" required><br>

        <label for="Department">Choose Department:</label>
    <select id="Department" name="Department" required>
    <option value="Sales">Sales</option>
    <option value="Finance">Finance</option>
    <option value="Marketing">Marketing</option>
    <option value="Operations">Operations</option>
    </select> <br>

        <label for="TLead">Team Leader:</label>
        <input type="text" id="TLead" name="TLead"> <br>

        <label for="Desg">Designation:</label>
        <input type="text" id="Desg" name="Desg" required> <br>

        <label for="email">Official Email ID:</label>
        <input type="email" id="Oemail" name="Oemail" required> <br>

        <label for="email">Official Email ID Password:</label>
        <input type="password" id="psw" name="psw" required> <br>

        <label for="Phone">Phone Number:</label>
        <input type="text" id="Phone" name="Phone" required> <br>

        <label for="EID">Employee ID:</label>
        <input type="text" id="EID" name="EID" required> <br>

        <label for="RAdd">Residential Address:</label>
        <input type="text" style="height: 60px;" id="RAdd" name="RAdd" required> <br>

      <!--  <label for="AltContact">Alternate Contact:</label>
        <input type="text" id="AltContact" name="AltContact"> <br>-->

        <label for="BDate">Birth Date:</label>
        <input type="date" id="BDate" name="BDate" required> <br>

        <label for="BloodGrp">Blood Group:</label>
        <input type="text" id="BloodGrp" name="BloodGrp" required> <br>

        <label for="Emergency">Emergency Contact:</label>
        <input type="text" style="height: 60px;"  id="Emergency" name="Emergency" required> <br>

        <button type="submit" name="add" onclick="ResponseAlert()">Add User</button>
      </form>
    </div>
    </div>


  </div>
      </div>

</body>

<script>
function ResponseAlert() {

  if(isset($_GET['status']) && $_GET['status'] == 'success'){
  echo '<script>alert("User Added Successfully")</script>';
}

if(isset($_GET['status']) && $_GET['status'] == 'error'){
 echo '<script>alert("User Not Added")</script>';
}

}

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.js" integrity="sha256-sCexhaKpAfuqulKjtSY7V9H7QT0TCN90H+Y5NlmqOUE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js" integrity="sha256-a4eB5VWh1N88HZWO7jqpWhAGyb0vr8pTQ8KiXNClbYg=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>