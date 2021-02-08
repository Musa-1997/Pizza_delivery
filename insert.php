<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza_Delivery</title>
  
 <link rel="stylesheet" href="css/bootstrap.min.css">
  
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
   background-color:#728C00;
   cursor:pointer;
   

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
  </div>  
 
</nav>
<br>
<center class="container">   <!-- container start  -->
<div class="col-md-6 bg-danger" style="border-radius:20px;"> <!-- col-md-6 start  -->
</br>
<form action="insert.php" method="post" enctype="multipart/form-data" >
  <div class="form-group">
   
    <input type="text" class="form-control" placeholder="Name" name="name" required >
  </div>
  <div class="form-group">
    
    <input type="price" class="form-control" placeholder="Price" name="price" required >
  </div>
  <div class="form-group">
    
    <input type="file" class="form-control" placeholder="Image" name="image"  required >
  </div>
  
  <input type="submit" name="submit" class="btn-add "value=" Add ">
 
</form>
<?php
require('conn.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $img= $_FILES['image']['name'];
    $temp_name= $_FILES['image']['tmp_name'];
    move_uploaded_file($temp_name,"image/$img");
       
$sql="insert into pizza (name,price,image) values('$name','$price','$img')";

    $run=mysqli_query($con,$sql);

  if($run){
  echo"<script>alert('item has been Inserted Successfully')</script>";
  header('location:item.php');
              
            }
            
             }


?>






 </br>
</div>  <!-- col-md-6 end  -->
</center>  <!-- container end  -->





</br>

</br>
</br>

</br>
</br>

</br>
</br>

</br>
</br>

</br>
</br>

</br>
<?php
include('footer.php');
?>








    
</body>
</html>


