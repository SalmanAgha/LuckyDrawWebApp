<?php


if(isset($_POST['id']) )
{
	

	$id = htmlentities($_POST["id"]);   


	include('../connect.php');

	$ticketid = '';
	$username = '';
	$status = '';
	$name = '';
	$winningamount = '';
	$dateofexpiry = '';
	$Contest_status = '';
	$result = 'error';



$stmt = $connect->prepare("SELECT t.ticketid, u.`name` as username, t.status, c.name, c.winningamount, c.dateofexpiry, c.Contest_status
	FROM `user` u, contest c, ticket t
	WHERE t.userid = u.userid AND t.contestid = c.contestid AND c.contestid = ?;");
$stmt->bind_param("i", $id);

// Executing the statement
$stmt->execute();

// Binding variables to resultset
$stmt->bind_result($ticketid, $username, $status, $name, $winningamount, $dateofexpiry, $Contest_status);

$result = "success";

// Fetching the results
while ($stmt->fetch()) {
	$ticketid = $ticketid;
	$username = $username;
	$status = $status;
	$name = $name;
	$winningamount = $winningamount;
	$dateofexpiry = $dateofexpiry;
	$Contest_status = $Contest_status;
}


 

 $data["ticketid"] = $ticketid;
 $data["username"] = $username;
 $data["status"] = $status;
 $data["name"] = $name;
 $data["winningamount"] = $winningamount;
 $data["dateofexpiry"] = $dateofexpiry;
 $data["Contest_status"] = $Contest_status; 
 $data["result"] = $result;

		echo json_encode($data);														

}

?>
