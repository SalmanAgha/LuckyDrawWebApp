
<?php


if(isset($_POST["id"]) && isset($_POST["name1"]) && isset($_POST["dateofcreation1"]) && isset($_POST["dateofexpiry1"]) && isset($_POST["totaltickets1"]) && isset($_POST["ticketsremaining1"]) && isset($_POST["ticketsold1"]) && isset($_POST["amount1"]) && isset($_POST["status1"])   && isset($_POST["winningamount1"]) )
{
	session_start();
	
 $id = filter_var(($_POST["id"])); 
 $name = filter_var(($_POST["name1"])); 
$dateofcreation = filter_var(($_POST["dateofcreation1"])); 
$dateofexpiry = filter_var(($_POST["dateofexpiry1"])); 
$totaltickets = filter_var(($_POST["totaltickets1"])); 
$ticketsremaining = filter_var(($_POST["ticketsremaining1"])); 
$ticketsold = filter_var(($_POST["ticketsold1"])); 
$amount = filter_var(($_POST["amount1"])); 
$status = filter_var(($_POST["status1"])); 
$adminid = $_SESSION["userid"]; 
$winningamount = filter_var(($_POST["winningamount1"])); 

	include("../connect.php");    
	 
 		$plot_approving="UPDATE `contest` SET `name`='$name',`dateofcreation`='$dateofcreation',`dateofexpiry`='$dateofexpiry',`totaltickets`='$totaltickets',`ticketsremaining`='$ticketsremaining',`ticketsold`='$ticketsold',`amount`='$amount',`status`='$status',`adminid`='$adminid',`winningamount`='$winningamount' WHERE `contestid`=$id ";
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
