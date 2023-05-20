
<?php


if(isset($_POST["id"]) && isset($_POST["username1"]) && isset($_POST["email1"]) && isset($_POST["password1"]) && isset($_POST["doc1"]) && isset($_POST["status1"]) && isset($_POST["pancard1"]) && isset($_POST["aadharcard1"]) )
{
	
 $id = filter_var(($_POST["id"])); 
 $username = filter_var(($_POST["username1"])); 
$email = filter_var(($_POST["email1"])); 
$password = filter_var(($_POST["password1"])); 
$doc = filter_var(($_POST["doc1"])); 
$status = filter_var(($_POST["status1"])); 
$pancard = filter_var(($_POST["pancard1"])); 
$aadharcard = filter_var(($_POST["aadharcard1"])); 

	include("../connect.php");    
	 
 		$plot_approving="UPDATE `user` SET `username`='$username',`email`='$email',`password`='$password',`doc`='$doc',`status`='$status',`pancard`='$pancard',`aadharcard`='$aadharcard' WHERE `userid`=$id ";
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
