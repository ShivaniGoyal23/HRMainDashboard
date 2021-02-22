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
            <li><a class="employeename" href="#"><i class="fa fa-smile-o"></i></span> Employee Name</a></li>
            <li><a class="logout" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
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
                 
                  <tr>
                    <td>Full Name</td>
                    <td>Shivani</td>
                    
                  </tr>
                  <tr>
                    <td>Department</td>
                    <td>Finance</td>
                    
                  </tr>
                  <tr>
                    <td>Team Leader</td>
                    <td>Jack</td>
                    
                  </tr>
                  <tr>
                    <td>Designation</td>
                    <td>Intern</td>
                  </tr>
                  <tr>
                    <td>Email ID</td>
                    <td>zeeenetstudio@yahoo.co.in</td>
                  </tr>
                  <tr>
                    <td>Phone number</td>
                    <td>9856012167</td>
                  </tr>
                  <tr>
                    <td>Employee ID</td>
                    <td>AXO1018</td>
                  </tr>
                  <tr>
                    <td>Residential Address</td>
                    <td>A-556, First floor, Surya Society, Ajmal Khan Road, Delhi Gate, New Delhi-110006</td>
                  </tr>
                  <tr>
                    <td>Alternate Contact</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>Birth Date</td>
                    <td>23rd Febraury 1999</td>
                  </tr>
                  <tr>
                    <td>Blood Group</td>
                    <td>AB-</td>
                  </tr>
                  <tr>
                    <td>Emergency Contact</td>
                    </tr>
                </table>
              </div>
              <div class="col-md-4">
                <img class="rounded mx-auto d-block pb-3" src="User.png" alt="#">
              </div>
            </div>

          </div>
      
      
          <div class="tab-pane fade" id="departmentdet" role="tabpanel" aria-labelledby="showall-tab">PQR</div>
    
          <div class="tab-pane fade" id="selfeval" role="tabpanel" aria-labelledby="showall-tab">
            Self Evaluation Form
          </div>
    
          <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="showall-tab">RST</div>
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