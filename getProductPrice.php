<?php
include("inc_conn.php");




if(isset($_GET['pid'])) //product id  get-price
{	
	$pid = $_GET['pid'];

	$resultX ="SELECT ID,PRICE FROM em_products WHERE ID='$pid'";
	
	$run_query = mysqli_query($link,$resultX);
	
	// $data1 = mysqli_fetch_array($run_query);
	 $data = [];
	while($row = mysqli_fetch_assoc($run_query)){

		 //array_push($data, [
	      //'ID'   => $row['ID'],
	     //  'HEADING' => $row['HEADING']
	    //]);
	     $data = $row;
	     $PRICE = $row['PRICE'];
	}



	header('Content-Type: application/json');

	echo json_encode($data);

}






if(isset($_GET['productId'])) //product id
{	
	$pid = $_GET['productId'];

	$resultX ="SELECT ID,PRICE  FROM em_products WHERE CATID='$pid'";
	
	$run_query = mysqli_query($link,$resultX);
	
	// $data1 = mysqli_fetch_array($run_query);
	// $data = [];
	while($row = mysqli_fetch_assoc($run_query)){

		// array_push($data, [
	 //      'ID'   => $row['ID'],
	 //      'HEADING' => $row['HEADING']
	 //    ]);
	     $data = $row;
	     
	}

	header('Content-Type: application/json');

	echo json_encode($data);

}


// get product category

if(isset($_GET['pcid'])) //product id
{	
	$CATID = $_GET['pcid'];

	$resultCat = mysqli_query($link,"SELECT ID,HEADING FROM em_products WHERE CATID = '$CATID'");

	$data = [];
	
	while($row = mysqli_fetch_assoc($resultCat)) 
	{
		
		$data[] = $row;
		$CATNAME = $row['HEADING'];
	}


	header('Content-Type: application/json');

	
	echo json_encode($data);


}



// get products from store assets

if(isset($_GET['catid'])) 
{
	$catid = $_GET['catid'];
	
	$sql = mysqli_query($link,"SELECT * FROM em_products WHERE CATID='$catid'");
	
	if (mysqli_num_rows($sql) > 0)
	{
		while($row = mysqli_fetch_assoc($sql))
		{
			
			$data[] = $row;
			
		}
	}else{

		$data = array();
	}
	

	header('Content-Type: application/json');

	
	echo json_encode($data);


}


