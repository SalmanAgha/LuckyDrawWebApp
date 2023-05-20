
<?php


if(isset($_POST["id"]) && isset($_POST["adminname1"]) && isset($_POST["email1"]) && isset($_POST["password1"]) && isset($_POST["doc1"]) && isset($_POST["status1"]) )
{
	
 $id = filter_var(($_POST["id"])); 
 $adminname = filter_var(($_POST["adminname1"])); 
$email = filter_var(($_POST["email1"])); 
$password = filter_var(($_POST["password1"])); 
$doc = filter_var(($_POST["doc1"])); 
$status = filter_var(($_POST["status1"])); 

	include("../connect.php");    
	 
 		$plot_approving="UPDATE `admin` SET `adminname`='$adminname',`email`='$email',`password`='$password',`doc`='$doc',`status`='$status' WHERE `adminid`=$id ";
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
