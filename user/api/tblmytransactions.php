<?php
include("../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

  session_start();
  $userid = $_SESSION['userid'];


  $query = mysqli_query($connect,"SELECT  u.userid,u.email, f.financialid,f.amount,f.date,f.type,f.description,f.previousbalance
   FROM `user` u, financial f  
   where f.userid=u.userid and f.userid ='".$userid."';");
  if (!$query
  )  {


    $result  = "error";
    $message = "query error";
  }
  else
  {
    $result  = "success";
    $message = "query success";
    $empty="";
    while ($row = mysqli_fetch_array($query))
    {

      $mysql_data[] = array
      (  
        "financialid" => $row["financialid"],
        "amount" => $row["amount"],
        "date" => $row["date"],
        "type" => $row["type"],
        "description" => $row["description"],
        "previousbalance" => $row["previousbalance"]


      );
    }
  }
  // Close database connection
  mysqli_close($connect);
}
// Prepare data
$data = array(
  "result"  => $result,
  "message" => $message,
  "data"    => $mysql_data
);
// Convert PHP array to JSON array
$json_data = json_encode($data);
print $json_data;
?>