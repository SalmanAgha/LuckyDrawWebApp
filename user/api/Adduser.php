
<?php
if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["doc"]) && isset($_POST["status"]) && isset($_POST["pancard"]) && isset($_POST["aadharcard"]) )
{   

 
$username = filter_var(($_POST["username"])); 
$email = filter_var(($_POST["email"])); 
$password = filter_var(($_POST["password"])); 
$doc = filter_var(($_POST["doc"])); 
$status = filter_var(($_POST["status"])); 
$pancard = filter_var(($_POST["pancard"])); 
$aadharcard = filter_var(($_POST["aadharcard"])); 

   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into user (username,email,password,doc,status,pancard,aadharcard) values (?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssii', $username,$email,$password,$doc,$status,$pancard,$aadharcard); 
    $stmt->execute();
    if ($stmt == true) 
    {
      $result="Inserted";
    }
    else{
      $result="Not Inserted";
    }
  
  }
  
   


  $data ["result"] = $result;
    echo json_encode($data);

}
?>