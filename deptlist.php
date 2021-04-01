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
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
}
</style>
<body>
    <nav class="navbar sticky-top">
        <div class="container-fluid">
          <div class="navbar-header">
          <a href="hrhome.php"><img class="logo" src="logo.png" alt="Manageasy"></a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="employeename" href="#"><i class="fa fa-smile-o"></i></span> <?php  
              echo $_SESSION['name'];    
                ?> </a></li>
            <li><a class="logout" href="LoginForm.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
      </nav>   

      <div class="container main ">
  <div class="row">
<div class="col-lg-3 personaldet">
<img class="rounded mx-auto d-block" src="HR.png" alt="#">
<ul class="nav flex-column nav-pills ml-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<li class="nav-item"><a href="personaldetails.php">Personal Details</a></li>
  <li class="nav-item"><a href="addemployee.php">Add Users</a></li>
  <li class="nav-item"><a class="nav-link active" id="showall-tab" data-toggle="pill" href="#departmentlist" role="tab" aria-controls="showall" aria-selected="true">Employee List</a></li>
  <li class="nav-item"><a href="hrform.php">View Employee Score</a></li>
</ul>
</div>


<div class="col-lg-8 ml-auto personaldet">
<div class="tab-pane active form" id="departmentlist" role="tabpanel" aria-labelledby="showall-tab">
<table style="width:90%; margin:10px">
	<thead>
		<tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Department</th>
    <th colspan="2">Action</th>
		</tr>
	</thead>

<?php 
$sel_query = "select * from login where role = 'employee' ORDER BY E_ID asc;"; 
$result=mysqli_query($mysqli,$sel_query); ?>

<tbody>	
	<?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['E_ID']; ?></td>
			<td><?php echo $row['name']; ?></td>
      <td><?php echo $row['department']; ?></td>
			<td>
				<a href="edit.php?'E_ID'=<?php echo $row['E_ID']; ?>"><i class="fa fa-edit"></i> Edit</a>
			</td>
			<td>
				<a href="delete.php?E_ID=<?php echo $row['E_ID']; ?>"><i class="fa fa-trash"></i> Delete</a>
			</td>
		</tr>
	<?php } ?>
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