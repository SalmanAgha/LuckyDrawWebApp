
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
	 
//selecting user
$stmt = $connect->prepare("SELECT  `balance` FROM `user` WHERE `userid` =  ?;");
$stmt->bind_param("i", $userid);

// Executing the statement
$stmt->execute();
// Binding variables to resultset
$stmt->bind_result($dbBalance);

// Fetching the results
while ($stmt->fetch()) {
  $Balance = $dbBalance; 
}

 		$plot_approving="UPDATE `financial` SET `date`='$date',`amount`='$amount',`type`='$type',`userid`='$userid',`description`='$description',`status`='$status' WHERE `financialid`=$id ";
 		$run_querry=mysqli_query($connect,$plot_approving);
		mysqli_close($connect);
						 

	if( $run_querry == "True"){
	 
 		$data["result"] = "Done";

    if($type == 'Credit'){
$newBalance= $Balance + $amount;

  $plot_approving="UPDATE `user` SET `balance`='$newBalance' WHERE `userid`=$userid ";
    $run_querry=mysqli_query($connect,$plot_approving);


    }else  if($type == 'Debit'){

$newBalance= $Balance - $amount;
  $plot_approving="UPDATE `user` SET `balance`=".$newBalance." WHERE `userid`=$userid ";
    $run_querry=mysqli_query($connect,$plot_approving);



    }

 		
		echo json_encode($data);
	}
	else
	{
	 
	$data["result"] = "error";
	echo json_encode($data);


	}

 
}

?>
