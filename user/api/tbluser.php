<?php
include("../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT userid,username,email,password,doc,status,pancard,aadharcard FROM `user`");
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
      $Action="<td><a  id=".$row["userid"]." data-username=".$row["username"]." data-email=".$row["email"]." data-password=".$row["password"]." data-doc=".$row["doc"]." data-status=".$row["status"]." data-pancard=".$row["pancard"]." data-aadharcard=".$row["aadharcard"]."  class='mr-2 edit-modal' data-toggle='modal' data-animation='bounce' data-target='.edit-modal1' ><i class='fas fa-edit text-info font-16'></i> </a>";
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "username" => $row["username"],"email" => $row["email"],"password" => $row["password"],"doc" => $row["doc"],"status" => $row["status"],"pancard" => $row["pancard"],"aadharcard" => $row["aadharcard"]
          
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