<?php
if(isset($_POST['id']) )
{
	$contestid = htmlentities($_POST["id"]);   
	session_start();
	$balance = $_SESSION['balance'];
	$userid = $_SESSION['userid'];
	include('../connect.php');

$ContestName='';
$ContestTicketAmount='';
$dbContestName='';
$dbContestTicketAmount='';


$stmt = $connect->prepare("SELECT  `name`, `amount` FROM `contest` WHERE `contestid` =  ?;");
$stmt->bind_param("i", $contestid);

// Executing the statement
$stmt->execute();

// Binding variables to resultset
$stmt->bind_result($dbContestName, $dbContestTicketAmount);

// Fetching the results
while ($stmt->fetch()) {
	$ContestName = $dbContestName;
	$ContestTicketAmount = $dbContestTicketAmount; 
}

 

 if(  $ContestTicketAmount <= $balance){

$stmt = $connect->prepare("INSERT INTO `ticket`( `contestid`, `userid`, `status`, `dateofcreation`) VALUES 
		(?,?,'Active',now())");
	$stmt->bind_param('ii', $contestid,$userid); 
	$stmt->execute();
	if ($stmt == true) 
	{
		$result="Inserted";

$ticketid = $connect->insert_id;
$description=$ContestName.' - (Ticket ID = '.$ticketid.')';



	include('../connect.php');
	$stmt = $connect->prepare("INSERT INTO `financial`( `date`, `amount`, `type`, `userid`, `description`, `status`,`previousbalance`) 
		VALUES (now(),?,'Debit',?,?,'Active',?)");
	$stmt->bind_param('iis', $ContestTicketAmount,$userid,$description,$balance); 
	$stmt->execute();

$newBalance = $balance - $ContestTicketAmount;
	include('../connect.php');
	$stmt = $connect->prepare("UPDATE `user` SET  `balance`=? WHERE `userid` = ? ");
	$stmt->bind_param('ii', $newBalance,$userid); 
	$stmt->execute();


$_SESSION['balance'] = $newBalance;

 

	}
	else{
		$result="Not Inserted";
	}




 }
 else {

		$result="Insuficiant Balance";

 }

	
	 $data["result"] = $result;
	echo json_encode($data);														
}
?>