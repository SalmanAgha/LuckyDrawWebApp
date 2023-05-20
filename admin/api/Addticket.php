
<?php
if(isset($_POST["contestid"]) && isset($_POST["userid"]) && isset($_POST["status"]) && isset($_POST["dateofcreation"]) )
{   

 
$contestid = filter_var(($_POST["contestid"])); 
$userid = filter_var(($_POST["userid"])); 
$status = filter_var(($_POST["status"])); 
$dateofcreation = filter_var(($_POST["dateofcreation"])); 

   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into ticket (contestid,userid,status,dateofcreation) values (?,?,?,?)");
    $stmt->bind_param('iiss', $contestid,$userid,$status,$dateofcreation); 
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