<?php
    session_start();
    include('config.php');
    if (isset($_POST['hrdashboard'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM employee WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['E_ID'] = $result['E_ID'];
                echo '<p class="success">Congratulations, you are logged in!</p>';
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
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
        <form action="" method="post">
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
              <input type="password" placeholder="Enter Password" name="password" required>
            </div>
            </div>
          
            <div class="container login">
              <button type="submit">LOGIN</button>
              <div class="forgotpass"></div>
              <span class="psw"><a href="ForgotPass.php">Forgot password?</a></span>
            </div>
            </div>
          </form>
     </div>
  </div>  
</body>
</html>