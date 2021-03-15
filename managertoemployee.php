<?php
session_start();  
include('config.php');


if(isset($_POST['add'])){
 
  
  $E_ID=$_POST['E_ID'];
 
  $sql_time = "select man_timestamps from employeefeedback where E_ID='$E_ID'";  
  $run_time=mysqli_query($mysqli,$sql_time);
  $row = mysqli_fetch_array($run_time, MYSQLI_ASSOC);



  if(!empty($row['man_timestamps'])) {
  
    $timestamps=$row['man_timestamps'];
    $newdate = gmdate("Y-m-d", strtotime("+1 month", strtotime($timestamps)));
    $date_now = date("Y-m-d"); // this format is string comparable
  
  if ($date_now > $newdate) {
        // Form is open and ready to be filled since month is passed
  }else{
    //Dont show the form, current date is less than the final date
      echo 'Your Response was already recorded for the particular Employee!'; 
      //Insert a back button 
      die();
  }
  }



  $M_ID=$_SESSION['E_ID']; 
  $inputq1=$_POST['inputq1'];
  $inputq2=$_POST['inputq2'];
  $inputq3=$_POST['inputq3'];
  $inputq4=$_POST['inputq4'];
  
  
 
  //To insert values into the database from PHP
 $insertquery="insert into employeefeedback(M_ID,inputq1,inputq2,inputq3,inputq4,E_ID) 
  values('$M_ID','$inputq1','$inputq2','$inputq3','$inputq4','$E_ID')
  ON DUPLICATE KEY UPDATE M_ID='$M_ID',inputq1='$inputq1',inputq2='$inputq2',inputq3='$inputq3',inputq4='$inputq4'";

  $res=mysqli_query($mysqli,$insertquery);
  
  echo mysqli_error($mysqli);
  //To check if data is inserted or not
  if($res){
   header('location:managerhome.php?status=success');
  }
  else{
   die($res); 
  header('location:managerhome.php?status=error');
  
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
            <li><a class="employeename" href="#"><i class="fa fa-smile-o"></i></span> <?php  
              echo $_SESSION['name'];    
                ?></a></li>
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
  <li class="nav-item"><a class="nav-link active" id="showall-tab" data-toggle="pill" href="#peer" role="tab" aria-controls="showall" aria-selected="true">Employee Feedback</a></li>
</ul>
      </div>
    
     
      <div class="col-lg-8 ml-auto personaldet">
          <div class="tab-pane active mx-3" id="peer" role="tabpanel" aria-labelledby="showall-tab">
          <form action="" method="post">
          <div class="form-group col-md-4">
  <label for="Emp">Employee Name:</label>
  <select id="Dept" class="form-control" name="E_ID">
<option value=" " selected disabled hidden>Choose...</option>
<?php 
      $sql_dept = "select department from login where email = '".$_SESSION['email']."'";  
      $run_dept=mysqli_query($mysqli,$sql_dept);
      $row = mysqli_fetch_array($run_dept, MYSQLI_ASSOC);
      $department=$row['department'];

      
      $sql_employee = "select * from login where department = '".$department."' and role='employee'"; 
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
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="QOW">Performance wrt the Expectations</label>
      <select id="QOW" class="form-control" name="inputq1" required>
      <option value="" selected>Choose...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group col-md-4">
    <label for="Concentration">Performance wrt other Employees</label>
      <select id="Concentration" class="form-control" name="inputq2" required>
      <option value="" selected>Choose..</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputQ1">How satisfied are you with work done by the employee?</label>
      <input type="text" class="form-control" id="inputQ1"name="inputq3" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputQ2">How can his/her performance be improved in the coming period?</label>
      <input type="text" class="form-control" id="inputQ2" name="inputq4" required>
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