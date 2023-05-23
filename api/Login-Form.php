<?php


if(isset($_POST['email']) &&     isset($_POST['pass']) )
{
	

	$email = htmlentities($_POST["email"]);  
	$Password = htmlentities($_POST["pass"]); 
	$dbemail = '';
	$dbPassword = '';
	$balance='';


	$result = array();
	$modules = array();
	$rights = array();

	include('../connect.php');


	$stmt = $connect -> prepare( "SELECT `userid`, `Name`, `Email`, `password`,`balance` FROM `user` WHERE email = ?");
	$stmt -> bind_param("s", $email);

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($result[0]["userid"],$result[0]["Name"],$result[0]["Email"],$result[0]["password"],$result[0]["balance"]);
	while ($stmt->fetch()) {
		$userid = $result[0]["userid"];
		$Name = $result[0]["Name"];
		$dbemail = $result[0]["Email"];
		$dbPassword = $result[0]["password"];
		$balance = $result[0]["balance"];
	
	}


	if($dbemail == NULL)
	{
		mysqli_close($connect);
		$data["result"] = "norecord";
		echo json_encode($data);
	}	

	else if(strtoupper($dbemail) == strtoupper($email) &&  $dbPassword == $Password )
	{	
 
			session_start();
			$_SESSION['userid'] = $userid;
			$_SESSION['name'] = $Name;
			$_SESSION['email'] = $dbemail; 
			$_SESSION['balance'] = $balance; 

			
 
			mysqli_close($connect);
			$data["username"] = $Name;
			$data["result"] = "successful";
			echo json_encode($data);
 

	}	
	else {
		mysqli_close($connect);
		$data["result"] = "incorrect";
		echo json_encode($data);
	}															

}

?>
