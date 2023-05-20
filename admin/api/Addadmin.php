
<?php
if(isset($_POST["adminname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["doc"]) && isset($_POST["status"]) )
{   

 
$adminname = filter_var(($_POST["adminname"])); 
$email = filter_var(($_POST["email"])); 
$password = filter_var(($_POST["password"])); 
$doc = filter_var(($_POST["doc"])); 
$status = filter_var(($_POST["status"])); 

   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into admin (adminname,email,password,doc,status) values (?,?,?,?,?)");
    $stmt->bind_param('sssis', $adminname,$email,$password,$doc,$status); 
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