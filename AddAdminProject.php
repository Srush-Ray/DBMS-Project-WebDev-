<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;
$bulk1 = new MongoDB\Driver\BulkWrite;
$bulk2 = new MongoDB\Driver\BulkWrite;

session_start();
$loggedinAdmin=$_SESSION['Loggedadmin'];

if(isset($_POST['SaveProject']))
{
  $ProjectID=$_POST['ProjectID'];
  $projectName=$_POST['projectName'];
  $ProjectDiscription=$_POST['ProjectDiscription'];
  $Pyear=$_POST['Pyear'];
  $domain=$_POST['Domain'];
  $TechnologyStack=$_POST['TechnologyStack'];
  $Type="Projects";
  $fileName=$_FILES["file"]["name"];
  $fileSize=$_FILES["file"]["size"]/1024;
  $fileType=$_FILES["file"]["type"];
  $fileTmpName=$_FILES["file"]["tmp_name"];

  $details=array(
    "_id"=>$ProjectID,
    "projectName"=>$projectName,
    "ProjectDiscription"=>$ProjectDiscription,
    "Pyear"=>$Pyear,
    "domain"=>$domain,
    "TechnologyStack"=>$TechnologyStack,
    "type"=>$Type,
    "fileName"=>$fileName
);
// echo $fileName;
// echo $fileTmpName;

// $m = new MongoClient();
// $gridfs = $m->selectDB('AllProjectsdb')->getGridFS();
// $id = $gridfs->storeFile($fileName, array('contentType' => 'plain/text'));
// $gridfsFile = $gridfs->get($id);
// var_dump($gridfsFile->file);

$datacollect="miniProjectdb.".$loggedinAdmin;
$bulk->insert($details);
$manager->executeBulkWrite($datacollect, $bulk);
$datacollect1="AllProjectsdb.Projects";
$bulk1->insert($details);
$manager->executeBulkWrite($datacollect1, $bulk1);
// $datacollect1="AllProjectsdb";
// $bulk1->insert($details);
// $manager->executeBulkWrite($datacollect1, $bulk1);
}




header('Location:admin.php');
?>
