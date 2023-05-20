
<?php


if(isset($_POST["id"]) && isset($_POST["contestid1"]) && isset($_POST["userid1"]) && isset($_POST["status1"]) && isset($_POST["dateofcreation1"]) )
{
	
 $id = filter_var(($_POST["id"])); 
 $contestid = filter_var(($_POST["contestid1"])); 
$userid = filter_var(($_POST["userid1"])); 
$status = filter_var(($_POST["status1"])); 
$dateofcreation = filter_var(($_POST["dateofcreation1"])); 

	include("../connect.php");    
	 
 		$plot_approving="UPDATE `ticket` SET `contestid`='$contestid',`userid`='$userid',`status`='$status',`dateofcreation`='$dateofcreation' WHERE `ticketid`=$id ";
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
