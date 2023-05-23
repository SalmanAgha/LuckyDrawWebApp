<?php
if(isset($_POST["name"]) && isset($_POST["username"]) && isset($_POST["email"])
 && isset($_POST["password"]) )
{   
  $name = filter_var(($_POST["name"])); 
  $username = filter_var(($_POST["username"])); 
  $email = filter_var(($_POST["email"])); 
  $password = filter_var(($_POST["password"]));  
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
  }
  else{


//checking duplicate email
     $duplicateEmail='';


 include('../connect.php');
$stmt = $connect->prepare("SELECT `email` FROM `user` WHERE email = ?");
$stmt->bind_param("s", $email);

// Executing the statement
$stmt->execute();

// Binding variables to resultset
$stmt->bind_result($emailResult);

// Fetching the result
if ($stmt->fetch()) {
    $duplicateEmail = $emailResult;
}
 

    if ($duplicateEmail == '' || $duplicateEmail == null) {
     $stmt = $connect->prepare("insert into user (name,username,email,password,pancard,aadharcard,doc,status,balance) values (?,?,?,?,?,?,now(),'Active',0)");
     $stmt->bind_param('ssssss', $name,$username,$email,$password,$pancard,$aadharcard); 
     $stmt->execute();
     if ($stmt == true) 
     {
      $result="Inserted";
    }
    else{
      $result="Not Inserted";
    }
  }
  else {
    $result="Email Exists";
  }
}
$data ["result"] = $result;
echo json_encode($data);
}
?>