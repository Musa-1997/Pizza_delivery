
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
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
 img{
   width:400px;
   height:290px;

 }
 </style>
<body>
<div class="container">

    <div class='row row-cols-1 row-cols-md-3 g-4'>

<?php
require('conn.php');
$sql="select * from pizza limit 8 ";
$run=mysqli_query($con,$sql);
$row=mysqli_num_rows($run);
  while($data=mysqli_fetch_array($run)){
    $name=$data['name'];
    $price=$data['price'];
    $img=$data['image'];
    

    echo "

    
  <div class='col-md-3 mt-5'>
    <div class='card h-100' style='border-radius:20px;'>
      <img  style='border-radius:20px;' src='image/$img' class='card-img-top'>
      <div class='card-body'>
        <h5  style='font-weight:bold' class='card-title text-center'>$name</h5>
        <p style='font-weight:bold' class='card-text text-center'>$ $price</p>
      </div>
      <div class='card-footer'>
         <a href='order.php'><input  style='width:100%' type='submit'   class='btn-add' value='Order Now'></a>
      </div>
    </div>
  </div>
  

   

    
    
    
    ";


  }



?>
</div>
</div>






</body>
</html>