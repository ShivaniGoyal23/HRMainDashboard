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
  <li class="nav-item"><a href="search.php" >Search</a></li>
  <li class="nav-item"><a href="addemployee.php">Add an Employee</a></li>
  <li class="nav-item"><a class="nav-link active" id="showall-tab" data-toggle="pill" href="#departmentlist" role="tab" aria-controls="showall" aria-selected="true">Department List</a></li>
  <li class="nav-item"><a href="hrform.php">Forms</a></li>
</ul>
</div>


<div class="col-lg-8 ml-auto personaldet">
  

<div class="tab-pane active" id="departmentlist" role="tabpanel" aria-labelledby="showall-tab">
      
      <nav class="navbar navbar-light search" style="background-color: #D6E9F7;">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-sm" type="submit" style="background-color:  #2F8ED4;">SEARCH</button>
        </form>
        <button class="btn btn-sm" type="submit" style="background-color:  #2F8ED4;">Add</button>
      </nav>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Department Name</th>
            <th scope="col">Managers</th>
            <th scope="col">Employees</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Finance</th>
            <td>1</td>
            <td>3</td>
            <td><button class="btn btn-sm" type="submit" style="background-color:  #2F8ED4;">Edit</button></td>
          </tr>
          <tr>
            <th scope="row">Marketing</th>
            <td>2</td>
            <td>20</td>
            <td><button class="btn btn-sm" type="submit" style="background-color:  #2F8ED4;">Edit</button></td>
          </tr>
          <tr>
            <th scope="row">Operations</th>
            <td>1</td>
            <td>10</td>
            <td><button class="btn btn-sm" type="submit" style="background-color:  #2F8ED4;">Edit</button></td>
          </tr>
        </tbody>
      </table>
    </div>



   
</div>

  </div>
      </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.js" integrity="sha256-sCexhaKpAfuqulKjtSY7V9H7QT0TCN90H+Y5NlmqOUE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js" integrity="sha256-a4eB5VWh1N88HZWO7jqpWhAGyb0vr8pTQ8KiXNClbYg=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>