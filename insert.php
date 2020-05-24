<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;
if($_POST)
{
  $rollno=$_POST['RegID'];
  $password=$_POST['Password'];
  $confirm_password=$_POST['Confirm_Password'];
  $docu=array(
    "_id"=>$rollno,
    "password"=>$password
);
}

if (strcmp($password,$confirm_password)==0) {
  // $bulk->insert(['data' => $insert,'_id'=>$rollno]);
  $bulk->insert($docu);
  $manager->executeBulkWrite('miniProjectdb.userLogin', $bulk);
header('Location: first.php');
}
else{
}
?>
