<?php
session_start();
  $loggedinUser=$_SESSION['Loggedusername'];
  $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
  $bulk = new MongoDB\Driver\BulkWrite;
  $mongoConn = new Mongo();
  $database = $mongoConn->selectDB('miniProjectdb');
  $collection = $database->selectCollection($loggedinUser);
  $id="profileDetails";
  $collection->remove( array( '_id' => $id ) );
  header('Location:slidebar.php');
?>
