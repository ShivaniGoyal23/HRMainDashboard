<?php    
include('config.php'); 

if(isset($_POST['add'])){

  $E_ID=$_POST['EID'];
  $name=$_POST['fname'];
  $email=$_POST['Oemail'];
  $password=$_POST['psw'];
  $role=$_POST['account'];
  $department=$_POST['Department'];
  $designation=$_POST['Desg'];
  $phonenumber=$_POST['Phone'];
  $address=$_POST['RAdd'];
  $bloodgroup=$_POST['BloodGrp'];
  $emercont=$_POST['Emergency'];
  $birthdate=$_POST['BDate'];
  $teamleader=$_POST['TLead'];
 
  //To insert values into the database from PHP
  $insertquery="insert into login(E_ID,name,email,password,role,department,designation,phonenumber,address,bloodgroup,emercont,birthdate,teamleader) 
  values('$E_ID','$name','$email','$password','$role','$department','$designation','$phonenumber','$address','$bloodgroup','$emercont','$birthdate','$teamleader')";

  $res=mysqli_query($mysqli,$insertquery);
  
  //To check if data is inserted or not
  if($res){
   header('location:hrhome.php?status=success');
  }
  else{
  header('location:hrhome.php?status=error');
  }
  
}
 
?>