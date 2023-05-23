
<?php
if(isset($_POST["name"]) && isset($_POST["dateofcreation"]) && isset($_POST["dateofexpiry"]) && isset($_POST["totaltickets"]) && isset($_POST["ticketsremaining"]) && isset($_POST["ticketsold"]) && isset($_POST["amount"]) && isset($_POST["status"])   && isset($_POST["winningamount"]) )
{   

 session_start();
$name = filter_var(($_POST["name"])); 
$dateofcreation = filter_var(($_POST["dateofcreation"])); 
$dateofexpiry = filter_var(($_POST["dateofexpiry"])); 
$totaltickets = filter_var(($_POST["totaltickets"])); 
$ticketsremaining = filter_var(($_POST["ticketsremaining"])); 
$ticketsold = filter_var(($_POST["ticketsold"])); 
$amount = filter_var(($_POST["amount"])); 
$status = filter_var(($_POST["status"])); 
$adminid = $_SESSION["userid"]; 
 

$winningamount = filter_var(($_POST["winningamount"])); 

   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into contest (name,dateofcreation,dateofexpiry,totaltickets,ticketsremaining,ticketsold,amount,status,adminid,winningamount) values (?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('sssiiiisii', $name,$dateofcreation,$dateofexpiry,$totaltickets,$ticketsremaining,$ticketsold,$amount,$status,$adminid,$winningamount); 
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