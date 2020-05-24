<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;

session_start();
$loggedinUser=$_SESSION['Loggedusername'];

if(isset($_POST['SaveProject']))
{
  $ProjectID=$_POST['ProjectID'];
  $projectName=$_POST['projectName'];
  $ProjectDiscription=$_POST['ProjectDiscription'];
  $Pyear=$_POST['Pyear'];
  $domain=$_POST['Domain'];
  $TechnologyStack=$_POST['TechnologyStack'];
$Type="Projects";
  $details=array(
    "_id"=>$ProjectID,
    "projectName"=>$projectName,
    "ProjectDiscription"=>$ProjectDiscription,
    "Pyear"=>$Pyear,
    "domain"=>$domain,
    "TechnologyStack"=>$TechnologyStack,
    "type"=>$Type
);

}
$datacollect="miniProjectdb.".$loggedinUser;
  $bulk->insert($details);
  $manager->executeBulkWrite($datacollect, $bulk);
header('Location:slidebar.php')
?>
