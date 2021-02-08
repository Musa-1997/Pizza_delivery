<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza_Delivery</title>
  
    
</head>

<style>
  ul li a{
   color: #E5E4E2 !important;
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
 .form_style{
     background-color:#F5F5DC;
     border-radius:20px;
 }
 </style>

 <?php

  include('conn.php');
  
 ?>
  <?php
 session_start();
 
$id=@$_SESSION['user'];
if(!$id){
header('location:login.php');
}
?>
 
<link rel="stylesheet" href="css/bootstrap.min.css">

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

<div class="container">
<h2 style="text-transform:uppercase; background-color:#F75D59;border-radius:10px; text-align:center"><sp style="color:#E5E4E2;"> Pizza &</sp><span class="text-warning"> Delivery</span> </h2>
  <hr>
  </div>


<center class="container">
<div class="form_style">



  <form action="order.php" method="post" enctype="multipart/form-data"  >
 
    <div class="form-group col-md-6">
    </br>
      <input type="text" class="form-control"   placeholder="Your Name" name="name" required>
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control"   placeholder="Pizza Name" name="p-name" required>
    </div>
    <div class="form-group col-md-6">
      <input type="number" class="form-control" placeholder="Pizza Price" name="p-price" step="0.01" required>
    </div>
    <div class="form-group col-md-6">
      <input type="number" class="form-control" placeholder="Quantity" name="p-quantity" step="0.01" required>
    </div>
    <div class="form-group col-md-6">
      <input type="number" class="form-control"  placeholder="Phone number" name="ph-num" required>
    </div>
    
    <div class="form-group col-md-6">
      <input type="text" class="form-control"    placeholder="Address" name="p-address" required>
    </div>
    <button type="submit"  name="submit" class="btn-add" >Order</button>
    </br>
    </br>
  </form>
  <?php
 
if(isset($_POST['submit'])){

    $name_u=$_POST['name'];
    $p_name=$_POST['p-name'];
    $p_price=$_POST['p-price'];
    $p_quantity=$_POST['p-quantity'];
    $ph_num=$_POST['ph-num'];
    $p_address=$_POST['p-address'];

    
   
       
$query_pizza=" insert into orders(name,p_name,p_price,quantity,phone_number,date,address) VALUES ('$name_u','$p_name','$p_price','$p_quantity','$ph_num',NOW(),'$p_address') ";

    $run = mysqli_query($con,$query_pizza) or die(mysqli_error($con));

  if($run){
  echo"<script>alert('You are ordered for Successfully')</script>";
  
              
            }else{
				echo"<script>alert('fail')</script>";
			}
            
             }


?>


  </div>
  </center>
  </br></br>

  <?php
include('footer.php');
?>
   

</body>


</html>
