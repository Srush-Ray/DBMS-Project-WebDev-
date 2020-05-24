<?php
session_start();
  $loggedinAdmin=$_SESSION['Loggedadmin'];
  $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
  $bulk = new MongoDB\Driver\BulkWrite;
  $mongoConn = new Mongo();
  $database = $mongoConn->selectDB('miniProjectdb');
  $collection = $database->selectCollection($loggedinAdmin);
  $id="adminDetails";
  $collection->remove( array( '_id' => $id ) );
  header('Location:admin.php');
?>
