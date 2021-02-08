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
  </div>  
</nav>
<br>



<div class="container">
<div class="col-md-12">
  <h2 style="text-transform:uppercase; background-color:#F75D59;border-radius:10px; text-align:center"><sp style="color:#E5E4E2"> List  Of</sp><span class="text-warning"> Pizza</span> </h2>
  <hr>
           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
        

      </tr>
    </thead>
    <?php
    require('conn.php');
    $sql="select * from pizza ";
    $run=mysqli_query($con,$sql);
    $row=mysqli_num_rows($run);
    while($data=mysqli_fetch_array($run)){
        $id=$data['id'];
        $name=$data['name'];
        $price=$data['price'];
        $image=$data['image'];

    

    ?>
    <tbody>
      <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $name ?></td>
        <td> $ <?php echo $price ?></td>
        <td><img  style="width:200px;height:100px" src="image/<?php echo $image ?> "></td>
        <td> <a href="edit.php?id=<?php echo $id ?> "> <h6 class="btn btn-primary"><i class="fas fa-edit"></i>  Edit  </h6> </a></td>
        
        <td> <a href="delete.php?id=<?php echo $id ?> "><h6 class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Delete</h6></a></td>

        

    
      </tr>
      
    </tbody>
    <?php
}
?>  
  </table>
  
</div>







 </br>
</div>  <!-- col-md-6 end  -->
</div>
</center>  <!-- container end  -->

</br></br></br>
</br>
</br>
</br>
</br></br>

<?php
include('footer.php');
?>


</body>
</html>
