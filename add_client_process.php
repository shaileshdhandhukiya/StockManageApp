<?php

error_reporting(0);
include('inc/config.php');
#include('inc/session_check.php');
#get from data for here and entry to the database

if(isset($_POST['add_client_button']))
{
    $c_first_name=$_POST['first_name'];
    $c_last_name=$_POST['last_name'];
    $gst_no=$_POST['gst_number'];
    $email=$_POST['email'];
    $phone=$_POST['phone_number'];
    $address=$_POST['address'];
    $c_image=$_POST['c_image'];

    $c_date = date("d-m-Y h:i:s a");

    $validation_check="SELECT * FROM tbl_client where c_email='$email' AND c_phone='$phone'";

    $res_check= $conn->query($validation_check);

    while($row = $res_check->fetch_object())
    {
      $already_email= $row->c_email;
      $already_contact_no = $row->c_phone;      
    }

    if($already_contact_no==$phone && $already_email==$email)
    {
      
      echo"<script> alert('Already Exits');</script>";
    }
    else
    {
        if(($_FILES["c_image"]["type"] == "image/png") || ($_FILES["c_image"]["type"] == "image/jpeg") || ($_FILES["c_image"]["type"] == "image/jpg"))
        {
            $c_image=time().$_FILES["c_image"]["name"];
            move_uploaded_file($_FILES["c_image"]["tmp_name"],"upload/".$c_image);
            //echo $product_image;				
        }  

        $client_insert="insert into tbl_client(c_first_name,c_last_name,c_gst,c_email,c_phone,c_address,c_image,c_date)
        values('$c_first_name','$c_last_name','$gst_no','$email','$phone','$address','$c_image','$c_date')";

        
        $conn->query($client_insert);
        
        echo"<script> alert('Client Added Successfull');</script>"; 
      
    }

   # echo $add_client_insert;
}
 
      
       
?>