
<?php
if(isset($_POST["name"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])&& isset($_POST["pancard"])&& isset($_POST["aadharcard"]) )
{   

 
$name = filter_var(($_POST["name"])); 
$username = filter_var(($_POST["username"])); 
$email = filter_var(($_POST["email"])); 
$password = filter_var(($_POST["password"])); 
$pancard = filter_var(($_POST["pancard"])); 
$aadharcard = filter_var(($_POST["aadharcard"])); 


echo($name);
   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into user (name,username,email,password,pancard,aadharcard,doc,status) values (?,?,?,?,?,?,now(),'Active')");
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
  
   


  $data ["result"] = $result;
    echo json_encode($data);

}
?>