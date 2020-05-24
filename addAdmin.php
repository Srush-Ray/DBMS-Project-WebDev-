<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;
$dd="adminDetails";
if(isset($_POST['Admin']))
{
  $ID=$_POST['ID'];
  $password=$_POST['Password'];
  $confirm_password=$_POST['Confirm_Password'];
$username=$_POST['username2'];
$department=$_POST['Department2'];
$Domains=$_POST['Domains2'];
$details=array(
  "_id"=>$dd,
  "name"=>$username,
  "Department"=>$department,
  "Domains"=>$Domains
);
$docu=array(
  "_id"=>$ID,
  "password"=>$password
);
}


if (strcmp($password,$confirm_password)==0) {
  $bulk->insert($docu);
  $manager->executeBulkWrite('miniProjectdb.adminLogin', $bulk);
}
$bulk2 = new MongoDB\Driver\BulkWrite;
$collect="miniProjectdb.".$ID;
$bulk2->insert($details);
$manager->executeBulkWrite($collect, $bulk2);
header('Location: admin.php');

?>
