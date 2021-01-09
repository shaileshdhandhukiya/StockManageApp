<?php

include('inc/config.php');
#include('inc/session_check.php');

$id=$_GET['id'];
echo $id;

$sql="DELETE FROM tbl_client WHERE c_id='$id'";
$conn->query($sql);


if($sql)
{
    mysqli_close($conn);
    header("location:add_client.php");
    exit;
}
else{
    echo"Error in deleting record...!!!";
}


?>