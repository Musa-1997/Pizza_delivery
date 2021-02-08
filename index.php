<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza_Delivery</title>
  
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<style>
  ul li a{
   color: #E5E4E2  !important; 
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

 @media(max-width=1200px){
   table{
     width:800px;
   }

  

 }
 nav{
   
     border-radius:10px !important;

 }
 </style>


 <?php
 session_start();
 
$id=@$_SESSION['user'];
if(!$id){
header('location:login.php');
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
     <form action="index.php" method="post">
  <button type="submit" class=" btn btn-warning ml-2" name="logout"> <i class="fas fa-sign-out-alt"></i> Logout</button>
  </form>
   <?php 
 
  if(isset($_POST['logout'])){
	  session_destroy();
	  session_unset($_SESSION['user']);
      setcookie("user","",time()-3600,"/");
      header('location:login.php');
      
     
	  
  }
  
  ?>
  </div>  
</nav>
<br>
     
 
<center class="container">   <!-- container start  -->
<div class="col-md-6 bg-danger" style="border-radius:20px;"> <!-- col-md-6 start  -->
</br>
<form action="index.php" method="post" enctype="multipart/form-data" >
  <div class="form-group">
   
    <input type="text" class="form-control" placeholder="Name" name="name" require >
  </div>
  <div class="form-group">
    
    <input type="price" class="form-control" placeholder="Price" name="price" require >
  </div>
  <div class="form-group">
  
 
  
  <input   class="btn-add" type="submit"  value="Search" name="submit">
  
 </br>
 
</form>







 </br>
</div>  <!-- col-md-6 end  -->


</center>  <!-- container end  -->




</br>
<div class="container">
<div class="row">

<?php
require('conn.php');
 if(isset($_POST['submit'])){
     $name=$_POST['name'];
    $price=$_POST['price'];

 $sql=" SELECT * from pizza where name='$name' and  price='$price' "; 
 $run=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($run)){
  $name=$row['name'];
   $price=$_POST['price'];
   $image=$row['image'];


   echo "

  
  <div class='col-md-3 mt-5'>
    <div class='card h-100' style='border-radius:20px;'>
      <img  style='border-radius:20px;' src='image/$image' class='card-img-top'>
      <div class='card-body'>
        <h5  style='font-weight:bold' class='card-title text-center'>$name</h5>
        <p style='font-weight:bold' class='card-text text-center'>$ $price</p>
      </div>
      <div class='card-footer'>
         <a href='order.php'><input  style='width:100%' type='button'   class='btn-add' value='Order Now'></a>
      </div>
    </div>
  </div>
  

  









   
   
   
   
   ";
  
}
}




?>
</div>
</div>



</br>



<div class="container">
<h1  style='background-color:#E77471; color:#E5E4E2; border-radius:12px;' class="text-center  text-uppercase">Food & Pizzeria</h1>
</br>
</br>
</div>
<div class="div container">




</div>


</div>

<?php
include('show.php');
?>
</br></br>

<?php
include('footer.php');
?>





    
</body>
</html>



