<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

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
        <form action="action_page.php" method="post">
            <div class="imgcontainer">
              <img src="UserAvtar.svg" alt="Avatar" class="avatar">
              <div><h1>WELCOME</h1></div>
            </div>
          
            <div class="container">
              <div class="input-icons">
                <label for="umail"><b>Email</b></label>
              <i class="fa fa-envelope icon" style="font-size:30px"></i>
              <input type="email" placeholder="Enter Email" name="umail" required>
            </div>
            <div class="input-icons">
              <label for="psw"><b>Password</b></label>
              <i class="fa fa-lock icon" style="font-size:32px"></i>
              <input type="password" placeholder="Enter Password" name="psw" required>
            </div>
            </div>
          
            <div class="container login">
              <button type="submit">LOGIN</button>
              <div class="forgotpass"></div>
              <span class="psw"><a href="ForgotPass.html">Forgot password?</a></span>
            </div>
            </div>
          </form>
     </div>
  </div>  
</body>
</html>