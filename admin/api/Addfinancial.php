
<?php
if(isset($_POST["date"]) && isset($_POST["amount"]) && isset($_POST["type"]) && isset($_POST["userid"]) && isset($_POST["description"]) && isset($_POST["status"]) )
{   

 
$date = filter_var(($_POST["date"])); 
$amount = filter_var(($_POST["amount"])); 
$type = filter_var(($_POST["type"])); 
$userid = filter_var(($_POST["userid"])); 
$description = filter_var(($_POST["description"])); 
$status = filter_var(($_POST["status"])); 

   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into financial (date,amount,type,userid,description,status) values (?,?,?,?,?,?)");
    $stmt->bind_param('sisiss', $date,$amount,$type,$userid,$description,$status); 
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