<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;
$bulk1 = new MongoDB\Driver\BulkWrite;
$bulk2 = new MongoDB\Driver\BulkWrite;

session_start();
$loggedinUser=$_SESSION['Loggedusername'];

if(isset($_POST['AddNotes']))
{
  $notes=$_POST['notes'];

  $details=array(
    "_id"=>$ProjectID,
    "type"=>"Notes",
    "data"=>$notes
);
$datacollect="miniProjectdb.".$loggedinUser;
$bulk->insert($details);
$manager->executeBulkWrite($datacollect, $bulk);

}




header('Location:slidebar.php');
?>
