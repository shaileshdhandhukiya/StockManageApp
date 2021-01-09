<?php
include('inc/config.php');
#include('inc/session_check.php');

//delete product code here!

$p_id=$_GET['p_id'];

$sql="DELETE FROM tbl_items WHERE p_id='$p_id'";
$conn->query($sql);


if($sql)
{
    mysqli_close($conn);
    header("location:add_product.php");
    exit;
}
else{
    echo"Error in deleting record...!!!";
}


?>