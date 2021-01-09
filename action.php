<?php

include('inc/config.php');

	
// $hostname = "localhost"; 
// $username = "root"; 
// $password = ""; 
// $dbname   = "stockmanageapp"; 
 
// // Create database connection 
// $conn = mysqli_connect($hostname, $username, $password, $dbname); 
 
//  Check connection
// if(mysqli_connect_errno())
// {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   exit();
// }


$userData=count($_POST['product']);
	//$userData=count((is_countable($product)?$product:[]));
	
	if($userData > 0)
	{
		for ($i=0; $i < $userData; $i++)
		{ 
			if (trim($_POST['product'] != '') && trim($_POST['qty'] != '') && trim($_POST['prise'] != ''))
			{
				$product = $_POST["product"][$i];
				$qty     = $_POST["qty"][$i];
				$prise   = $_POST["prise"][$i];
				$query   = "INSERT INTO sale_product(product,qty,prise) VALUES ('$product',$qty,$prise)";
				$result  = mysqli_query($conn, $query);
			}
	    }
    echo "Data inserted successfully";
	
	}
	else
	{
	    echo "Please Enter user name";
	}

?>