<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza_Delivery</title>
  
    
</head>
 <link rel="stylesheet" href="css/bootstrap.min.css">

 <style>
  ul li a{
   color: #E5E4E2;
   text-transform:uppercase;
 
 }
 ul li a:hover{
   background-color:#F75D59;
   border-radius:10px;
   color: #E5E4E2;

 }

 .btn-add{

  background-color:#8C001A;
  border-radius:5px;
  color: #E5E4E2;
    width:20%;
    border:none;
    padding:5px;



 }
 .btn-add:hover{
   background-color:#F75D59;
   cursor:pointer;
   

 }
 nav{
   
     border-radius:10px !important;

 }
 </style>

 <?php 

session_start();
$id=@$_SESSION['user'];
if($id){
	header('location:index.php');
}



?>
 
<body>



<nav class="navbar navbar-expand-md bg-danger navbar-dark">
  <a class="navbar-brand" href="index.php"><img src="animated-pizza-image-0008.gif" style="width:40px; height:40px; border-radius:22px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="item.php">Categories</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="insert.php">Add_item</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>

<center>   <!-- container start  -->
<div class="col-md-6 bg-danger" style="border-radius:20px;"> <!-- col-md-6 start  -->
</br>
<form action="login.php" method="post">
 <div class="form-group">
   

   <input type="email" class="form-control" placeholder="Email" name="email" require >
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" placeholder="Password" name="pass" require >
  </div>
   </br>
 
  
  <button type="submit" name="submit" class="btn-add">Login</button>
  </br>
   </br>
   
  <div>

  <p><a href="register.php">If you do not register click here </a></p>
  </div>
 
</form>
<?php
require('conn.php');


if(isset($_POST['submit'])){
	   $email=$_POST['email'];
	  $password=$_POST['pass'];

	 
  
	  $quere_select=" SELECT * from registerion where email='$email' and  password='$password' ";
	$exe=mysqli_query($con,$quere_select);
	$result=mysqli_fetch_array($exe);
	
	if($result){
		$_SESSION['user']=$result['id'];
		$cookie_name="user";
		$cookie_value=$result['id'];
		setcookie($cookie_name,	$cookie_value,time() + (86400*30), "/");
    echo "<script>alert('You are login for Successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
	}else{
		echo "<script>alert('fail');</script>";
	}}
    
    



?>


 </br>
</div>  <!-- col-md-6 end  -->
</center>  <!-- container end  -->

</br>
</br>
</br>
</br>
</br></br></br>
</br>
</br>
</br>
</br>
<?php
include('footer.php');
?>


</body>
</html>