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

 
    $query = mysqli_query($connect,"SELECT  t.ticketid,u.`name` as username, t.status, c.name,c.dateofexpiry,c.Contest_status
 FROM `user` u, contest c, ticket t 
where t.userid=u.userid and t.contestid=c.contestid and
t.userid = '".$userid."';");
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
      $Action="<td><a  id=".$row["ticketid"]." 
      data-username='".$row["username"]."'
       data-status='".$row["status"]."' 
       data-name='".$row["name"]."'
        data-dateofexpiry='".$row["dateofexpiry"]."' 
        data-contest_status='".$row["Contest_status"]."'  


        class='mr-2 edit-modal' data-toggle='modal' data-animation='bounce' data-target='.edit-modal1' ><i class='fas fa-eye text-info font-16'></i> </a>";
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          
          "ticketid" => $row["ticketid"],
          
          "username" => $row["username"],
          "status" => $row["status"],
          "name" => $row["name"],
          "dateofexpiry" => $row["dateofexpiry"],
          "Contest_status" => $row["Contest_status"]
          
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