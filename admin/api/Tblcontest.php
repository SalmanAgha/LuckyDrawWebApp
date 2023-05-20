<?php
include("../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT contestid,name,dateofcreation,dateofexpiry,totaltickets,ticketsremaining,ticketsold,amount,status,adminid,winningamount FROM `contest`");
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
      $Action="<td><a  id=".$row["contestid"]." data-name=".$row["name"]." data-dateofcreation=".$row["dateofcreation"]." data-dateofexpiry=".$row["dateofexpiry"]." data-totaltickets=".$row["totaltickets"]." data-ticketsremaining=".$row["ticketsremaining"]." data-ticketsold=".$row["ticketsold"]." data-amount=".$row["amount"]." data-status=".$row["status"]." data-adminid=".$row["adminid"]." data-winningamount=".$row["winningamount"]."  class='mr-2 edit-modal' data-toggle='modal' data-animation='bounce' data-target='.edit-modal1' ><i class='fas fa-edit text-info font-16'></i> </a>";
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "name" => $row["name"],"dateofcreation" => $row["dateofcreation"],"dateofexpiry" => $row["dateofexpiry"],"totaltickets" => $row["totaltickets"],"ticketsremaining" => $row["ticketsremaining"],"ticketsold" => $row["ticketsold"],"amount" => $row["amount"],"status" => $row["status"],"adminid" => $row["adminid"],"winningamount" => $row["winningamount"]
          
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