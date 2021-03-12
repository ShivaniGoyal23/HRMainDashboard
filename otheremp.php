<?php
session_start();  
include('config.php');
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
      <li class="nav-item"><a href="selfeval.php">Self Evaluation Form</a></li>
     <li class="nav-item"><a class="nav-link active" id="showall-tab" data-toggle="pill" href="#form" role="tab" aria-controls="showall" aria-selected="true">Peer Feedback</a></li>
      </ul>
      </div>
      
     
      <div class="col-lg-8 ml-auto personaldet">
<div class="tab-pane active mx-3" id="form" role="tabpanel" aria-labelledby="showall-tab">
<form action="">
<div class="form-row">
<div class="form-group col-md-4">
<label for="Dept">Employee Name</label>
<!--<input type="hidden" name="form_filler" value="<?php echo $_SESSION["E_ID"];?>">-->
<select id="Dept" class="form-control">
<option value=" " selected disabled hidden>Choose...</option>
<?php 
      $sql_dept = "select department from login where email = '".$_SESSION['email']."'";  
      $run_dept=mysqli_query($mysqli,$sql_dept);
      $row = mysqli_fetch_array($run_dept, MYSQLI_ASSOC);
      $department=$row['department'];
      
      $sql_employee = "select * from login where department = '".$department."'"; 
      $result = mysqli_query($mysqli, $sql_employee);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          if($row["E_ID"] != $_SESSION["E_ID"])
          echo "<option value='".$row["E_ID"]."'>".$row["name"]."</option>";
        }
      } else {
        echo "0 results";
      }

  ?>
</select>
</div>
</div> <!--form row closing-->

<div class="form-row">
<div class="form-group col-md-8">
<label for="PeerQ1">Does the employee promote and spread positive influence in the workplace environment?</label>
<input type="text" class="form-control" id="PeerQ1" name="peerQ1" required>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-8">
<label for="PeerQ2">Does the employee seem disappointed or tired with the day to day work?</label>
<input type="text" class="form-control" id="PeerQ2" name="peerQ2" required>
</div>
</div>
<hr style="height:1px;border:none;color:#333;background-color:#333;"/>

<div class="form-row">
<div class="form-group col-md-8">
<label for="PeerQ3">How is the person’s work productivity in relation to other colleagues? Are there any points where he can improve?</label>
<input type="text" class="form-control" id="PeerQ3" name="peerQ3" required>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-8">
<label for="PeerQ4">Is the employee always ready to learn and develop new skills?</label>
<input type="text" class="form-control" id="PeerQ4" name="peerQ4" required>
</div>
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" id="gridCheck">
<label class="form-check-label" for="gridCheck">
I agree to the Terms and Conditions 
</label>
</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>

</div> <!--tab closing-->



</div>
</div>

</div>
  </div>



</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.js" integrity="sha256-sCexhaKpAfuqulKjtSY7V9H7QT0TCN90H+Y5NlmqOUE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js" integrity="sha256-a4eB5VWh1N88HZWO7jqpWhAGyb0vr8pTQ8KiXNClbYg=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>