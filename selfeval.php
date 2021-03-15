<?php
session_start();  
include('config.php');
 
$sql_time = "select timestamps from selfeval where E_ID='".$_SESSION['E_ID']."'";  
$run_time=mysqli_query($mysqli,$sql_time);
$row = mysqli_fetch_array($run_time, MYSQLI_ASSOC);


if(!empty($row['timestamps'])) {

  $timestamps=$row['timestamps'];
  $newdate = gmdate("Y-m-d", strtotime("+1 month", strtotime($timestamps)));
  $date_now = date("Y-m-d"); // this format is string comparable

if ($date_now > $newdate) {
    // Form is open and ready to be filled since month is passed
}else{
  //Dont show the form, current date is less than the final date
  echo 'Your response has already been recorded! Press here to go <a href= employeehome.php>BACK</a>';
    //Insert a back button
}
}

if(isset($_POST['add'])){
 
  
  $E_ID=$_SESSION['E_ID']; 
  $selfeval1=$_POST['selfeval1'];
  $selfeval2=$_POST['selfeval2'];
  $selfeval3=$_POST['selfeval3'];
  $selfeval4=$_POST['selfeval4'];
  $selfeval5=$_POST['selfeval5'];
  $selfeval6=$_POST['selfeval6'];
  $selfeval7=$_POST['selfeval7'];
  $selfevalp1=$_POST['selfevalp1'];
  $selfevalp2=$_POST['selfevalp2'];
  $selfevalp3=$_POST['selfevalp3'];
  $selfevalp4=$_POST['selfevalp4'];
  $selfevalp5=$_POST['selfevalp5'];
  $selfevalp6=$_POST['selfevalp6'];
 
  //To insert values into the database from PHP
 $insertquery="insert into selfeval(E_ID,selfeval1,selfeval2,selfeval3,selfeval4,selfeval5,selfeval6,selfeval7,selfevalp1,selfevalp2,selfevalp3,selfevalp4,selfevalp5,selfevalp6) 
  values('$E_ID','$selfeval1','$selfeval2','$selfeval3','$selfeval4','$selfeval5','$selfeval6','$selfeval7','$selfevalp1','$selfevalp2','$selfevalp3','$selfevalp4','$selfevalp5','$selfevalp6')
  ON DUPLICATE KEY UPDATE selfeval1='$selfeval1',
  selfeval2='$selfeval2',selfeval3='$selfeval3',selfeval4='$selfeval4',
  selfeval5='$selfeval5',selfeval6='$selfeval6',selfeval7='$selfeval7',
  selfevalp1='$selfevalp1',selfevalp2='$selfevalp2'
  ,selfevalp3='$selfevalp3',selfevalp4='$selfevalp4',selfevalp5='$selfevalp5',selfevalp6='$selfevalp6'";

  $res=mysqli_query($mysqli,$insertquery);
  
  echo mysqli_error($mysqli);
  //To check if data is inserted or not
  if($res){
    echo"<script>
    alert('Your response has been recorded');
   window.location.href='employeehome.php?status=success';
   </script>"; 
}
// To redirect after submission
  else{ 
   echo"<script>
    alert('Your response was unsuccessful');
   window.location.href='employeehome.php?status=error';
   </script>"; 
  
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
    <link rel="stylesheet" href="employee.css">
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
            <li><a class="employeename" href="#"><i class="fa fa-smile-o"></i></span> 
            <?php  
              echo $_SESSION['name'];    
                ?> </a></li>

            <li><a class="logout" href="LoginForm.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </nav>   

   
      <div class="container main">
        <div class="row">
      <div class="col-lg-3 personaldet">
      <img class="rounded mx-auto d-block pb-3" src="User.png" alt="#">
      <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <li class="nav-item"><a href="personaldetails.php">Personal Details</a></li>
      <li class="nav-item"><a class="nav-link active" id="showall-tab" data-toggle="pill" href="#selfeval" role="tab" aria-controls="showall" aria-selected="true">Self Evaluation Form</a></li>
     <li class="nav-item"><a href="otheremp.php">Peer Feedback</a></li>
      </ul>
      </div>
      
      
      <div class="col-lg-8 ml-auto personaldet">
    
<div class="tab-pane active mx-3" id="selfeval" role="tabpanel" aria-labelledby="showall-tab">

<section> 
<form action="" method="post">
<div class="form-row">
<div class="form-group col-md-4">
<label for="WorkLife">Work Life Balance</label>
<select id="WorkLife" class="form-control" name="selfeval1" required>
<option value="" selected disabled hidden>Choose...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
<div class="form-group col-md-4">
<label for="Valued">Feeling Valued for Contributions</label>
<select id="Valued" class="form-control" name="selfeval2" required>
<option value="" selected disabled hidden>Choose...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>


<div class="form-row">
<div class="form-group col-md-4">
<label for="Growth">Individual Career Growth Opportunity</label>
<select id="Growth" class="form-control" name="selfeval3" required>
<option value="" selected disabled hidden>Choose...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
<div class="form-group col-md-4">
<label for="Support">Support from Team Members</label>
<select id="Support" class="form-control" name="selfeval4" required>
<option value="" selected disabled hidden>Choose...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-8">
<label for="inputQ1">How do you find the current work environment?</label>
<input type="text" class="form-control" id="inputQ1" name="selfeval5" required>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-8">
<label for="inputQ2">Do you feel that your opinions are heard and valued by your superior?</label>
<input type="text" class="form-control" id="inputQ2" name="selfeval6" required>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-8">
<label for="inputQ3">What are the few things you value the most about the organization?</label>
<input type="text" class="form-control" id="inputQ3" name="selfeval7" required>
</div>
</div>
</section>
<hr style="height:1px;border:none;color:#333;background-color:#333;"/>

<div class="form-row">
<div class="form-group col-md-4">
<label for="QOW">Rate your Quality of Work</label>
<select id="QOW" class="form-control" name="selfevalp1" required>
<option value="" selected disabled hidden>Choose...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
<div class="form-group col-md-4">
<label for="Concentration">Work Concentration</label>
<select id="Concentration" class="form-control" name="selfevalp2" required>
<option value="" selected disabled hidden>Choose...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>

<div class="form-group col-md-4">
<label for="Performance">Overall Performance</label>
<select id="Performance" class="form-control" name="selfevalp3" required>
<option value="" selected disabled hidden>Choose...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div>
</div>


<div class="form-row">
<div class="form-group col-md-8">
<label for="inputPQ1">Describe your efforts at workplace as an employee</label>
<input type="text" class="form-control" id="inputPQ1" name="selfevalp4" required>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-8">
<label for="inputPQ2">How well can you manage your time with deadlines in the organisation?</label>
<input type="text" class="form-control" id="inputPQ2" name="selfevalp5" required>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-8">
<label for="inputPQ3">Do you feel you can perform better than your current efforts and if so, how?</label>
<input type="text" class="form-control" id="inputPQ3" name="selfevalp6" required>
</div>
</div>

<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" id="gridCheck" required>
<label class="form-check-label" for="gridCheck">
I agree to the Terms and Conditions 
</label>
</div>
</div>
<button type="submit" name="add" class="btn btn-primary">Submit</button>
</form>
</div>



</div>
</div>

</div>
  </div>



</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.js" integrity="sha256-sCexhaKpAfuqulKjtSY7V9H7QT0TCN90H+Y5NlmqOUE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js" integrity="sha256-a4eB5VWh1N88HZWO7jqpWhAGyb0vr8pTQ8KiXNClbYg=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>