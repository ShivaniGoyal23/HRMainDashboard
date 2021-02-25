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
            <li><a class="logout" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </nav>   

      <div class="container main">
  <div class="row">
<div class="col-lg-3 personaldet">
<img class="rounded mx-auto d-block" src="HR.png" alt="#">
<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <li class="nav-item"><a class="nav-link active" id="showall-tab" data-toggle="pill" href="#details" role="tab" aria-controls="showall" aria-selected="true">Personal Details</a></li>
  <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#search" role="tab" aria-controls="showall" aria-selected="true">Search</a></li>
  <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#employee" role="tab" aria-controls="showall" aria-selected="true">Add an Employee</a></li>
  <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#departmentlist" role="tab" aria-controls="showall" aria-selected="true">Department List</a></li>
  <li class="nav-item"><a class="nav-link" id="showall-tab" data-toggle="pill" href="#forms" role="tab" aria-controls="showall" aria-selected="true">Forms</a></li>
</ul>
</div>


<div class="col-lg-8 ml-auto personaldet">
  <div class="tab-content" id="v-pills-tabContent">
    
    <div class="tab-pane active" id="details" role="tabpanel" aria-labelledby="showall-tab">
      <h1 class="text-center">WELCOME</h1>
            <div class="row empdetails">
              <div class="col-md-8">
                <table style="width:100%">
                 
                  <tr>
                    <td>Full Name</td>
                    <td>Shivani</td>
                    
                  </tr>
                  <tr>
                    <td>Team Leader</td>
                    <td>Jack</td>
                    
                  </tr>
                  <tr>
                    <td>Designation</td>
                    <td>HR Employee</td>
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
                <img class="rounded mx-auto d-block pb-3" src="HR.png" alt="#">
              </div>
            </div>
    </div>

    <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="showall-tab">
      <h1 class="text-center">WELCOME</h1>
      <nav class="navbar navbar-light search" style="background-color: #D6E9F7;">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-sm" type="submit" style="background-color:  #2F8ED4;">SEARCH</button>
          </form>
          <button class="btn btn-sm" type="submit" style="background-color:  #2F8ED4;">Sort By</button>
        </nav>
        

    </div>


    <div class="tab-pane fade" id="employee" role="tabpanel" aria-labelledby="showall-tab">
      <h1 class="text-center">Add an Employee</h1>
      <div class="containerx">
      <form>
        <div class="account-type"> <a class="hr1">Account type</a>
          <input type="radio" value="none" id="radioOne" name="account" checked/>
          <label for="radioOne" class="radio">Employee</label>
          <input type="radio" value="none" id="radioTwo" name="account" />
          <label for="radioTwo" class="radio">Manager</label>
        </div> 
        <label for="fname">Full name:</label>
        <input type="text" id="fname" name="fname"><br>
        <label for="Department">Choose Department:</label>
    <select id="Department" name="Department">
    <option value="Sales">Sales</option>
    <option value="Finance">Finance</option>
    <option value="Marketing">Marketing</option>
    <option value="Operations">Operations</option>
    </select> <br>
        <label for="TLead">Team Leader:</label>
        <input type="text" id="TLead" name="TLead"> <br>
        <label for="Desg">Designation:</label>
        <input type="text" id="Desg" name="Desg"> <br>
        <label for="email">Official Email ID:</label>
        <input type="email" id="Oemail" name="Oemail"> <br>
        <label for="email">Official Email ID Password:</label>
        <input type="password" id="psw" name="psw"> <br>
        <label for="email">Personal Email ID:</label>
        <input type="email" id="email" name="email"> <br>
        <label for="Phone">Phone Number:</label>
        <input type="text" id="Phone" name="Phone"> <br>
        <label for="EID">Employee ID:</label>
        <input type="text" id="EID" name="EID"> <br>
        <label for="RAdd">Residential Address:</label>
        <input type="text" style="height: 60px;" id="RAdd" name="RAdd"> <br>
        <label for="AltContact">Alternate Contact:</label>
        <input type="text" id="AltContact" name="AltContact"> <br>
        <label for="BDate">Birth Date:</label>
        <input type="date" id="BDate" name="BDate"> <br>
        <label for="BloodGrp">Blood Group:</label>
        <input type="text" id="BloodGrp" name="BloodGrp"> <br>
        <label for="Emergency">Emergency Contact:</label>
        <input type="text" style="height: 60px;"  id="Emergency" name="Emergency"> <br>
        <input type="submit" value="Submit" class="submit">
      </form>
    </div>
    </div>

 <div class="tab-pane fade" id="departmentlist" role="tabpanel" aria-labelledby="showall-tab">
      
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



    <div class="tab-pane fade" id="forms" role="tabpanel" aria-labelledby="showall-tab">RST</div>
  </div>
</div>

  </div>
      </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.js" integrity="sha256-sCexhaKpAfuqulKjtSY7V9H7QT0TCN90H+Y5NlmqOUE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js" integrity="sha256-a4eB5VWh1N88HZWO7jqpWhAGyb0vr8pTQ8KiXNClbYg=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>