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
<form action="register.php" method="post">
 <div class="form-group">
   
   <input type="name" class="form-control" placeholder="Name" name="name" require >
  </div>
  <div class="form-group">
   
   <input type="email" class="form-control" placeholder="Email" name="email" require >
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" placeholder="Password" name="pass" require >
  </div>
  <div class="form-group">
<label>Gender: </label> 
    <input type="radio"  name="gender" value="male">
  <label for="male">Male</label> 
  <input type="radio"  name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio"   name="gender" value="other">
  <label for="other">Other</label>
  </div>
  
  <button type="submit"  name="submit" class="btn-add">Register</button>
 
</form>

<?php
require('conn.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $hash_password=password_hash($password,PASSWORD_DEFAULT);
    $gender=$_POST['gender'];
    $sql="insert into registerion (name,email,password,gender) values ('$name','$email','$hash_password','$gender')";
    $run=mysqli_query($con,$sql);
    if($run){
        echo "<script>alert('You are Registered for successfully')</script>";
    }else{
        echo "<script>alert('it is failed')</script>";

    }

}


?>


 </br>
</div>  <!-- col-md-6 end  -->
</center>  <!-- container end  -->

</br></br></br>
</br>
</br>
</br>
</br></br></br>


</br>
</br>


<?php
include('footer.php');
?>


</body>
</html>


<script script src="js/jquery-3.2.1.slim.min.js"></script>
<script script src="js/bootstrap.min.js"></script>
<script script src="js/popper.min.js"></script>