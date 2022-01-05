<?php
include 'database.php';
if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$sql = "INSERT INTO `clients`( `name`) 
		VALUES ('$name')";		       
        if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>