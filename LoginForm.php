<?php    
include('config.php');
session_start();
    if(isset($_POST['select'])) 
    {  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
    $emp="employee";
    $man="manager";
    $adm="admin";
        //to prevent from mysqli injection  
        $sql_emp = "select * from login where email = '$email' and password = '$password' ";  
        $run_emp=mysqli_query($mysqli,$sql_emp);
        $row = mysqli_fetch_array($run_emp, MYSQLI_ASSOC);
        var_dump($row);
        $name=$row['name'];
        $role=$row['role'];
        $empcount = mysqli_num_rows($run_emp);
        
      if($row['role']=='employee')
      {
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $_SESSION['role']=$role;
        header('Location: employeehome.php');
      }
      elseif($row['role']=='manager')
      {
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $_SESSION['role']=$role;
        header('Location: managerhome.php'); 
      }
      elseif($row['role']=='admin')
      {
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $_SESSION['role']=$role;
        header('Location: hrhome.php');
      }
      else
      {
        echo '<script>alert("Please Check username or Password")</script>';
      }
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login Form</title>
</head>
<body>
  <div class="wrapper">
     <div class="form">
        <form action="LoginForm.php" method="post">
            <div class="imgcontainer">
              <img src="UserAvtar.svg" alt="Avatar" class="avatar">
              <div><h1>WELCOME</h1></div>
            </div>
          
            <div class="container">
              <div class="input-icons">
                <label for="email"><b>Email</b></label>
              <i class="fa fa-envelope icon" style="font-size:30px"></i>
              <input type="email" placeholder="Enter Email" name="email" required>
            </div>
            <div class="input-icons">
              <label for="password"><b>Password</b></label>
              <i class="fa fa-lock icon" style="font-size:32px"></i>
              <input type="password" placeholder="Enter Password" name="password" id="myInput" required>
            </div>
            <input type="checkbox" onclick="myFunction()">Show Password </div>
          
            <div class="container login">
              <button type="submit" name="select">LOGIN</button>
              <div class="forgotpass"></div>
              <span class="psw"><a href="ForgotPass.php">Forgot password?</a></span>
            </div>
            </div>
          </form>
     </div>
  </div>  

  <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


</body>
</html>