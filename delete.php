<?php
require('conn.php');
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $delete="delete from pizza where id='$id' limit 1";
    $run_delete=mysqli_query($con,$delete);

    if($run_delete){
        echo "<script>alert('One item is delete for successfully')</script>";
         echo "<script>window.open('item.php','_self')</script>";


    }


}




?>