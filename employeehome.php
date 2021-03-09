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
        <li class="nav-item"><a class="nav-link active" id="showall-tab" data-toggle="pill" href="#personaldet" role="tab" aria-controls="showall" aria-selected="true">Personal Details</a></li>
        <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#departmentdet" role="tab" aria-controls="showall" aria-selected="true">Department Details</a></li>
        <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#selfeval" role="tab" aria-controls="showall" aria-selected="true">Self Evaluation Form</a></li>
        <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#form" role="tab" aria-controls="showall" aria-selected="true">Peer Feedback</a></li>
      </ul>
      </div>
      
      
      <div class="col-lg-8 ml-auto personaldet">
        <div class="tab-content" id="v-pills-tabContent">
          
          <div class="tab-pane active" id="personaldet" role="tabpanel" aria-labelledby="showall-tab">
            <h1 class="text-center">WELCOME</h1>
            <div class="row empdetails">
              <div class="col-md-8">
                <table style="width:100%">
                 
 <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA  
              $email=$_SESSION['email'];
             // SQL query to select data from database 
             $result = mysqli_query($mysqli,"select * from login where email = '$email'"); 

                while($rows=mysqli_fetch_array($result)) 
                { 
             ?> 
            
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 

                    <tr>
                    <td>Full Name</td>
                    <td><?php echo $rows['name'];?></td>
                    
                  </tr>
                  <tr>
                    <td>Department</td>
                    <td><?php echo $rows['department'];?></td>
                    
                  </tr>
                  <tr>
                    <td>Team Leader</td>
                    <td>Jack</td>
                    
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
                    <td>Employee ID</td>
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
                <img class="rounded mx-auto d-block pb-3" src="User.png" alt="#">
              </div>
            </div>

          </div>
      
      
          <div class="tab-pane fade" id="departmentdet" role="tabpanel" aria-labelledby="showall-tab">PQR</div>
    
          <div class="tab-pane fade mx-3" id="selfeval" role="tabpanel" aria-labelledby="showall-tab">

         <section> 
          <form>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="WorkLife">Work Life Balance</label>
      <select id="WorkLife" class="form-control" required>
      <option selected>Choose...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group col-md-4">
    <label for="Valued">Feeling Valued for Contributions</label>
      <select id="Valued" class="form-control"required>
      <option value="none">Choose..</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </div>


<div class="form-row">
  <div class="form-group col-md-4">
  <label for="Growth">Individual Career Growth Opportunity</label>
      <select id="Growth" class="form-control">
        <option selected>Choose...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
  </div>
  <div class="form-group col-md-4">
  <label for="Support">Support from Team Members</label>
      <select id="Support" class="form-control" required>
        <option selected>Choose...</option>
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
      <label for="inputQ1">How do you find the current work environment?</label>
      <input type="text" class="form-control" id="inputQ1"required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputQ2">Do you feel that your opinions are heard and valued by your superior?</label>
      <input type="text" class="form-control" id="inputQ2" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputQ3">What are the few things you value the most about the organization?</label>
      <input type="text" class="form-control" id="inputQ3"required>
    </div>
  </div>
  </section>
<hr style="height:1px;border:none;color:#333;background-color:#333;"/>

<div class="form-row">
    <div class="form-group col-md-4">
      <label for="QOW">Rate your Quality of Work</label>
      <select id="QOW" class="form-control" required>
      <option selected>Choose...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group col-md-4">
    <label for="Concentration">Work Concentration</label>
      <select id="Concentration" class="form-control"required>
      <option value="none">Choose..</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>

    <div class="form-group col-md-4">
  <label for="Performance">Overall Performance</label>
      <select id="Performance" class="form-control">
        <option selected>Choose...</option>
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
      <label for="inputPQ1">Describe your efforts at workplace as an employee</label>
      <input type="text" class="form-control" id="inputPQ1"required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputPQ2">How well can you manage your time with deadlines in the organisation?</label>
      <input type="text" class="form-control" id="inputPQ2" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputPQ3">Do you feel you can perform better than your current efforts and if so, how?</label>
      <input type="text" class="form-control" id="inputPQ3"required>
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
  </div>


    
    <div class="tab-pane fade mx-3" id="form" role="tabpanel" aria-labelledby="showall-tab">
<form action="">
    <div class="form-row">
  <div class="form-group col-md-4">
  <label for="Dept">Select Your Department</label>
      <select id="Dept" class="form-control">
        <option selected>Choose...</option>
        <option>Sales</option>
        <option>Finance</option>
        <option>Marketing</option>
        <option>Operations</option>
      </select>
  </div>
  <div class="form-group col-md-4">
  <label for="Emp">Employee Name:</label>
  </div>
  </div> <!--form row closing-->

<div class="form-row">
    <div class="form-group col-md-8">
      <label for="PeerQ1">Does the employee promote and spread positive influence in the workplace environment?</label>
      <input type="text" class="form-control" id="PeerQ1" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="PeerQ2">Does the employee seem disappointed or tired with the day to day work?</label>
      <input type="text" class="form-control" id="PeerQ2"required>
    </div>
  </div>
  <hr style="height:1px;border:none;color:#333;background-color:#333;"/>

  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="PeerQ3">How is the person’s work productivity in relation to other colleagues? Are there any points where he can improve?</label>
      <input type="text" class="form-control" id="PeerQ3" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="PeerQ4">Is the employee always ready to learn and develop new skills?</label>
      <input type="text" class="form-control" id="PeerQ4"required>
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
   
   
   
      <!-- <div class="container main">
<div class="row">
<div class="col-lg-3 personaldet">
<img class="rounded mx-auto d-block" src="User.png" alt="#">
<div class="list-group pt-5">
    <a href="#" class="list-group-item list-group-item-action active">Personal Details</a>
    <a href="#" class="list-group-item list-group-item-action">Department Details</a>
    <a href="#" class="list-group-item list-group-item-action">Self Evaluation Form</a>
    <a href="#" class="list-group-item list-group-item-action">Peer Feedback</a>
  </div>
</div>

<div class="col-lg-8 ml-auto personaldet">
<h1 class="text-center">WELCOME</h1>
</div>


</div>
      </div>-->

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.js" integrity="sha256-sCexhaKpAfuqulKjtSY7V9H7QT0TCN90H+Y5NlmqOUE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js" integrity="sha256-a4eB5VWh1N88HZWO7jqpWhAGyb0vr8pTQ8KiXNClbYg=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>