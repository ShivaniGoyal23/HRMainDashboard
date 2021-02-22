<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Password Recovery</title>
</head>
<body>
    <div class="wrapper">
        <div class="form">
           <form action="action_page.php" method="post">
               <div class="imgcontainer">
                 <div><h1>Password Recovery</h1></div>
               </div>
             
               <div class="container">
                 <div class="input-icons">
                   <label for="name"><b>Name</b></label>
                 
                 <input type="text" placeholder="Enter Full Name" name="name" required>
               </div>
               <div class="input-icons">
                   <label for="EID"><b>Employee ID</b></label>
                 
                 <input type="number" placeholder="Enter Employee ID" name="EID" required>
               </div>
               <div class="input-icons">
                 <label for="umail"><b>Email</b></label>
                 
                 <input type="email" placeholder="Enter Email" name="umail" required>
               </div>
               </div>
             
               <div class="container login">
                 <button type="submit">SEND</button>
                 
               </div>
             </form>
        </div>
     </div>  
</body>
</html>