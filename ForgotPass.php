<!DOCTYPE html>
<html lang="en">
<style>
  
  /* Footer styling */
  footer{
    display: block;
    text-align: center;
    margin: 10px;
    padding: 2px;
    background-color: rgb( 177, 202, 213 );
    color: rgb(8, 8, 8);
    font-family: 'Times New Roman', Times, serif;
    position: absolute;
    bottom: 0;
    min-width: 98%;
  }

    </style>
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
    <div class="wrapper" style="margin: 5% auto 0;">
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
                   <label for="E_ID"><b>Employee ID</b></label>
                 
                 <input type="number" placeholder="Enter Employee ID" name="E_ID" required>
               </div>
               <div class="input-icons">
                 <label for="email"><b>Email</b></label>
                 
                 <input type="email" placeholder="Enter Email" name="email" required>
               </div>
               </div>
             
               <div class="container login">
                 <button type="submit">SEND</button>
                 
               </div>
             </form>
        </div>
     </div>  

     <footer>
  <p>For support, contact <a href="mailto:xyz@manageasy.com">xyz@manageasy.com</a><br>
  Created and Managed by Shivani, Dhruv & Dhananjay</p>
</footer>

</body>
</html>