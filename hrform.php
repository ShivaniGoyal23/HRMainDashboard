<?php
 include('config.php'); 
             session_start();

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
          <a href="hrhome.php"><img class="logo" src="logo.png" alt="Manageasy"></a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="employeename" href="#"><i class="fa fa-smile-o"></i></span><?php  
              echo $_SESSION['name'];    
                ?> </a></li>
            <li><a class="logout" href="LoginForm.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </nav>   

      <div class="container main mx-3">
  <div class="row">
<div class="col-lg-3 personaldet">
<img class="rounded mx-auto d-block" src="HR.png" alt="#">
<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<li class="nav-item"><a href="personaldetails.php">Personal Details</a></li>
  <li class="nav-item"><a href="addemployee.php">Add Users</a></li>
  <li class="nav-item"><a href="deptlist.php">Employee List</a></li>
  <li class="nav-item"><a class="nav-link active" id="showall-tab" data-toggle="pill" href="#forms" role="tab" aria-controls="showall" aria-selected="true">View Employee Score</a></li>
</ul>
</div>


<div class="col-lg-8 ml-auto personaldet">
  

<div class="tab-pane active mx-3" id="forms" role="tabpanel" aria-labelledby="showall-tab">
  <form action="" method="post">
          <div class="form-group col-md-4">

  <label for="Emp">Employee Name:</label>
  <select id="Emp" class="form-control" name="E_ID">
<option value=" " selected disabled hidden>Choose...</option>
<?php 
      $sql_emp = "select * from login where role='employee'";  
      $run_emp=mysqli_query($mysqli,$sql_emp);
      

      if (mysqli_num_rows($run_emp) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($run_emp)) {
          echo "<option value='".$row["E_ID"]."'>".$row["name"]."</option>";
        }
      } else {
        echo "0 results";
      }
  ?>
</select>
</div>
<button type="submit" name="score" class="btn btn-primary mx-4">View Score</button>
</form>

<?php
if(isset($_POST['score'])){
              ?>
          <table style="width:100%">
           <?php 
              $E_ID=$_POST['E_ID'];
              $result = mysqli_query($mysqli,"select * from score where E_ID = '$E_ID'"); 
              while($rows=mysqli_fetch_array($result)) 
              { 
           ?> 
                <tr>
                  <td>ID</td>
                  <td><?php echo $rows['E_ID'];?></td>
                </tr>
                <tr>
                  <td>Employee Satisfaction Score</td>
                  <td><?php echo $rows['selfscore']." ".'/5';?></td>
                </tr>
                <tr>
                  <td>Prodcutivity Score</td>
                  <td><?php echo $rows['prodscore']." ".'/5';?></td>
                </tr>

            <?php 
              } }
           ?> 
              </table>
          


</div>



  </div>
      </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.js" integrity="sha256-sCexhaKpAfuqulKjtSY7V9H7QT0TCN90H+Y5NlmqOUE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js" integrity="sha256-a4eB5VWh1N88HZWO7jqpWhAGyb0vr8pTQ8KiXNClbYg=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>