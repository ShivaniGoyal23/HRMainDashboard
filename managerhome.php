<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="manager.css">
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
            <li><a class="employeename" href="#"><i class="fa fa-smile-o"></i></span> Manager Name</a></li>
            <li><a class="logout" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </nav>   

      <div class="container main">
<div class="row">
<div class="col-lg-3 personaldet">
<img class="rounded mx-auto d-block" src="User.png" alt="#">
<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <li class="nav-item"><a class="nav-link active" id="showall-tab" data-toggle="pill" href="#pdetails" role="tab" aria-controls="showall" aria-selected="true">Personal Details</a></li>
  <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#deptdetails" role="tab" aria-controls="showall" aria-selected="true">Department and Current Team</a></li>
  <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#peer" role="tab" aria-controls="showall" aria-selected="true">Peer Feedback</a></li>
</ul>
</div>

<div class="col-lg-8 ml-auto personaldet">
  <div class="tab-content" id="v-pills-tabContent">
    
    <div class="tab-pane active" id="pdetails" role="tabpanel" aria-labelledby="showall-tab"><h1 class="text-center">WELCOME</h1></div>
    <div class="tab-pane fade" id="deptdetails" role="tabpanel" aria-labelledby="showall-tab">Abc</div>
    <div class="tab-pane fade" id="peer" role="tabpanel" aria-labelledby="showall-tab">XYZ
    
    
    
    
    
    </div><!--tabpane-->

  </div><!--tabcontent-->
</div>

</div><!--row-->
      </div><!--container-->

</body>
</html>