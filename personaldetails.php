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
            <li><a class="employeename" href="#"><i class="fa fa-smile-o"></i></span><?php  
              echo $_SESSION['name'];    
                ?> </a></li>
            <li><a class="logout" href="LoginForm.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </nav>   

      <div class="container main">
  <div class="row">
<div class="col-lg-3 personaldet">
<img class="rounded mx-auto d-block" src="HR.png" alt="#">
<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#details" role="tab" aria-controls="showall" aria-selected="true">Personal Details</a></li>
  <?php
if($_SESSION['role']=='admin')
{
  ?>
  <li class="nav-item"><a href="search.php">Search</a></li>
   <li class="nav-item"><a href="addemployee.php" role="tab">Add Users</a></li>
  <li class="nav-item"><a  href="deptlist.php">Department List</a></li>
  <li class="nav-item"><a  href="hrform.php">Forms</a></li>
<?php } 
if($_SESSION['role']=='manager')
{
    ?>
<li class="nav-item"><a  href="deptdet.php" >Department and Current Team</a></li>
  <li class="nav-item"><a href="peer.php">Peer Feedback</a></li>
<?php }
if($_SESSION['role']=='employee')
{ ?>

<li class="nav-item"><a href="deptdet.php">Department Details</a></li>
<li class="nav-item"><a href="selfeval.php" >Self Evaluation Form</a></li>
     <li class="nav-item"><a href="otheremp.php">Peer Feedback</a></li>
<?php } ?>
</ul>
</div>

<div class="col-lg-8 ml-auto personaldet">
  <div class="tab-content" id="v-pills-tabContent">
<div class="tab-pane active" id="details" role="tabpanel" aria-labelledby="showall-tab">

      <h1 class="text-center">WELCOME</h1>
            <div class="row empdetails">
              <div class="col-md-8">
                <table style="width:100%">
                <?php   // LOOP TILL END OF DATA
             // SQL query to select data from database 
             $email=$_SESSION['email'];
             $role=$_SESSION['role'];
             $result = mysqli_query($mysqli,"select * from login where email = '$email'"); 

                while($rows=mysqli_fetch_array($result)) 
                { 
             ?> 
                  <tr>
                    <td>Full Name</td>
                    <td><?php echo $rows['name'];?></td>
                    
                  </tr>
                
                  <tr>
                      <?php
                  if($_SESSION['role']=='employee' || $_SESSION['role']=='admin')
                  {
                   ?>
                    <td>Team Leader</td>
                    <td><?php echo $rows['teamleader'];?></td>
            <?php } ?>
                    
                  </tr>
                  <tr>
                    <td>Designation</td>
                    <td><?php echo $rows['designation'];?></td>
                  </tr>
                  <tr>
                    <td>Email ID</td>
                    <td><?php echo $rows['email'];?></td>
                  </tr>
                  <tr>
                    <td>Phone number</td>
                    <td><?php echo $rows['phonenumber'];?></td>
                  </tr>
                  <tr>
                    <td>ID</td>
                    <td><?php echo $rows['E_ID'];?></td>
                  </tr>
                  <tr>
                    <td>Residential Address</td>
                    <td><?php echo $rows['address'];?></td>
                  </tr>
                  <tr>
                    <td>Alternate Contact</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>Birth Date</td>
                    <td><?php echo $rows['birthdate'];?></td>
                  </tr>
                  <tr>
                    <td>Blood Group</td>
                    <td><?php echo $rows['bloodgroup'];?></td>
                  </tr>
                  <tr>
                    <td>Emergency Contact</td>
                    <td><?php echo $rows['emercont'];?></td>
                    </tr>

              <?php 
                } 
             ?> 
                </table>
              <?php  $mysqli->close(); ?>

              </div>
              <div class="col-md-4">
                <img class="rounded mx-auto d-block pb-3" src="HR.png" alt="#">
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