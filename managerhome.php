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
            <li><a class="employeename" href="#"><i class="fa fa-smile-o"></i></span>Manager Name</a></li>
            <li><a class="logout" href="LoginForm.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </nav>   

   
      <div class="container main">
        <div class="row">
      <div class="col-lg-3 personaldet">
      <img class="rounded mx-auto d-block pb-3" src="User.png" alt="#">
      <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <li class="nav-item"><a class="nav-link active" id="showall-tab" data-toggle="pill" href="#pdetails" role="tab" aria-controls="showall" aria-selected="true">Personal Details</a></li>
  <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#deptdetails" role="tab" aria-controls="showall" aria-selected="true">Department and Current Team</a></li>
  <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#peer" role="tab" aria-controls="showall" aria-selected="true">Peer Feedback</a></li>
</ul>
      </div>
      
      
      <div class="col-lg-8 ml-auto personaldet">
        <div class="tab-content" id="v-pills-tabContent">
          
          <div class="tab-pane active" id="pdetails" role="tabpanel" aria-labelledby="showall-tab">
            <h1 class="text-center">WELCOME</h1></div>
      
      
          <div class="tab-pane fade" id="deptdetails" role="tabpanel" aria-labelledby="showall-tab">PQR</div>
    
          <div class="tab-pane fade mx-3" id="peer" role="tabpanel" aria-labelledby="showall-tab">
          <form>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputQ1">How satisfied are you with work done by the employee?</label>
      <input type="text" class="form-control" id="inputQ1"required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputQ2">How can he improve his performance in the coming period?</label>
      <input type="text" class="form-control" id="inputQ2" required>
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



        </div>
      </div>
      
        </div>
            </div>
   
   
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.js" integrity="sha256-sCexhaKpAfuqulKjtSY7V9H7QT0TCN90H+Y5NlmqOUE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js" integrity="sha256-a4eB5VWh1N88HZWO7jqpWhAGyb0vr8pTQ8KiXNClbYg=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>