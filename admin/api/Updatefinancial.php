
<?php


if(isset($_POST["id"]) && isset($_POST["date1"]) && isset($_POST["amount1"]) && isset($_POST["type1"]) && isset($_POST["userid1"]) && isset($_POST["description1"]) && isset($_POST["status1"]) )
{
	
 $id = filter_var(($_POST["id"])); 
 $date = filter_var(($_POST["date1"])); 
$amount = filter_var(($_POST["amount1"])); 
$type = filter_var(($_POST["type1"])); 
$userid = filter_var(($_POST["userid1"])); 
$description = filter_var(($_POST["description1"])); 
$status = filter_var(($_POST["status1"])); 

	include("../connect.php");    
	 
 		$plot_approving="UPDATE `financial` SET `date`='$date',`amount`='$amount',`type`='$type',`userid`='$userid',`description`='$description',`status`='$status' WHERE `financialid`=$id ";
 		$run_querry=mysqli_query($connect,$plot_approving);
		mysqli_close($connect);
						 

	if( $run_querry == "True"){
	 
 		$data["result"] = "Done";
		echo json_encode($data);
	}
	else
	{
	 
	$data["result"] = "error";
	echo json_encode($data);


	}

 
}

?>
