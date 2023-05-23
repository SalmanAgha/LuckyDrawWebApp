
<?php
if(isset($_POST["date"]) && isset($_POST["amount"]) && isset($_POST["type"]) && isset($_POST["userid"]) && isset($_POST["description"]) && isset($_POST["status"]) )
{   

 
$date = filter_var(($_POST["date"])); 
$amount = filter_var(($_POST["amount"])); 
$type = filter_var(($_POST["type"])); 
$userid = filter_var(($_POST["userid"])); 
$description = filter_var(($_POST["description"])); 
$status = filter_var(($_POST["status"])); 

$dbBalance='';
$Balance='';

   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{


//selecting user
$stmt = $connect->prepare("SELECT  `balance` FROM `user` WHERE `userid` =  ?;");
$stmt->bind_param("i", $userid);

// Executing the statement
$stmt->execute();
// Binding variables to resultset
$stmt->bind_result($dbBalance);

// Fetching the results
while ($stmt->fetch()) {
  $Balance = $dbBalance; 
}

 
    $stmt = $connect->prepare("insert into financial (date,amount,type,userid,description,status,previousbalance) values (?,?,?,?,?,?,?)");
    $stmt->bind_param('sisissi', $date,$amount,$type,$userid,$description,$status,$Balance); 
    $stmt->execute();
    if ($stmt == true) 
    {
      $result="Inserted";


    if($type == 'Credit'){
$newBalance= $Balance + $amount;

  $plot_approving="UPDATE `user` SET `balance`='$newBalance' WHERE `userid`=$userid ";
    $run_querry=mysqli_query($connect,$plot_approving);


    }else  if($type == 'Debit'){

$newBalance= $Balance - $amount;
  $plot_approving="UPDATE `user` SET `balance`=".$newBalance." WHERE `userid`=$userid ";
    $run_querry=mysqli_query($connect,$plot_approving);



    }


    }
    else{
      $result="Not Inserted";
    }
  
  }
  
   


  $data ["result"] = $result;
    echo json_encode($data);

}
?>