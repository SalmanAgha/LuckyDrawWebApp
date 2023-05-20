<?php


if(isset($_POST['email']) &&     isset($_POST['pass']) )
{
	

	$email = htmlentities($_POST["email"]);  
	$Password = htmlentities($_POST["pass"]); 
	$dbemail = '';
	$dbPassword = '';


	$result = array();
	$modules = array();
	$rights = array();

	include('../connect.php');


	$stmt = $connect -> prepare( "SELECT `adminid`,`adminname`, `email`, `password` FROM `admin` WHERE email = ?");
	$stmt -> bind_param("s", $email);

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($result[0]["adminid"],$result[0]["adminname"],$result[0]["email"],$result[0]["password"]);
	while ($stmt->fetch()) {
		$adminid = $result[0]["adminid"];
		$adminname = $result[0]["adminname"];

		$dbemail = $result[0]["email"];
		$dbPassword = $result[0]["password"];

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
			$_SESSION['adminid'] = $adminid;
			$_SESSION['email'] = $dbemail; 
			$_SESSION['username'] = $adminname; 

			
 
			mysqli_close($connect);
			$data["email"] = $email;
			$data["username"] = $adminname;
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
