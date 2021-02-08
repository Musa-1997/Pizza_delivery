<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    
</head>
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


<h1 class="text-center .bg-light text-uppercase">Update Item</h1>
</br>
</br>

<?php

require('conn.php');

if(isset($_GET['id'])){
    $edit_id= $_GET['id'];
    $get_p="select * from pizza where id='$edit_id'";
    $run_edit=mysqli_query($con,$get_p);
    $row_edit=mysqli_fetch_array($run_edit);
     $id_e=  $row_edit['id'];
    $name=  $row_edit['name'];
    $price=  $row_edit['price'];
    $image=  $row_edit['image'];

   

}
?>
<form action=""  method="post"  enctype="multipart/form-data" >
  <div class="form-group">
   
    <input type="text" class="form-control" placeholder="Name" name="name"  value="<?php echo $name  ?>" require >
  </div>
  <div class="form-group">
    
    <input type="price" class="form-control" placeholder="Price" name="price" value="<?php echo $price  ?>"  require >
  </div>
  <div class="form-group">
    
    <input type="file"  name="img"   class="form-control" placeholder="Image"     require >
    </br>
    <div>
    <img  style="width:200px;"src="image/<?php echo $image  ?> ">
    </div>
  </div>
 
  <button type="submit" name="update" class="btn btn-success">Update</button>
 </br></br>
</form>

<?php

require('conn.php');

if(isset($_POST['update'])){
        $name= $_POST['name'];
        $price= $_POST['price'];
        

        if(is_uploaded_file($_FILES['img']['tmp_name'])){
        $image= $_FILES['img']['name'];
        $temp_name1= $_FILES['img']['tmp_name'];
        move_uploaded_file($temp_name1,"image/$image");


        $update=" update pizza set name='$name',price='$price',image='$image' where id='$id_e' ";
        $run=mysqli_query($con,$update);
        if($run){
        
        echo "<script>alert('Your Product has been updated Successfully')</script>";
        echo "<script>window.open('item.php?view_products','_self')</script>";


        }

        }else{
             $update=" update pizza set name='$name',price='$price',image='$image' where id='$id_e' ";
        $run=mysqli_query($con,$update);
        if($run){
          
        
        echo "<script>alert('Your Product has been updated Successfully')</script>";
        echo "<script>window.open('item.php?view_products','_self')</script>";


        }

        }

       

          

            
             }


?>










</div>



</br>







    
</body>
</html>
<script script src="js/jquery-3.2.1.slim.min.js"></script>
<script script src="js/bootstrap.min.js"></script>
<script script src="js/popper.min.js"></script>

