<?php
	try{
        $conn=mysqli_connect("localhost:3308","root","","tourism");
        $id=$_GET["id"];
		$sel="select * from location where id='$id'";
		$locations=mysqli_query($conn,$sel);
		
		$locations=mysqli_fetch_all($locations,MYSQLI_ASSOC);
		echo json_encode($locations);
	}catch(Exception $e){
		echo $e->getMessage();
	}
?>