<?php
include("connect.php");

$delete = $_GET['id'];

$run_delete = "DELETE FROM product WHERE id = $delete";

$del = mysqli_query($db, $run_delete); 

if($del)
{
    mysqli_close($db); 
    header("location:product.php"); 
}
else
{
    echo "Error deleting record"; 
}    
?>
