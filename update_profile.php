 <!DOCTYPE html>
<html>
<head>
    <title>Addprofile</title>
    <link rel="stylesheet" href="assets/css/addprofile_design.css">
    <link  href="http://fonts.googleapis.com/css?
           family=Reenie+Beanie:regular"rel="stylesheet"
           type="text/css">
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
           <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
           <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
           <link rel="stylesheet" type="text/css" href="assets/css/project.css">
           <link rel="stylesheet" href="assets/bootstrap/bootstrap-4.3.1">
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
           <link rel="stylesheet" href="assets/bootstrap/bootstrap-4.3.1-dist">
           <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
           <script type="text/javascript" src="assets/js/lib/jquery-3.4.1.min.js"></script>
           <script type="text/javascript" src="assets/js/project.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body style="background-color: lightblue">

        <div class="Form">
                <p1 style="font-size: 20px">Add Profile</p1>
                <form method="POST">
                       <label>Name:</label>
                       <input type="text" name="fullname" required  placeholder="Enter fullname">
                       <label>Year:</label>
                       <input type="text" name="Year" placeholder="Enter year" >
                       <label>Department:</label>
                       <input type="text" name="Department" placeholder="Enter Department" >
                       <label>Hobbies:</label>
                       <input type="text" name="Hobbies" placeholder="Enter Subject" >
                       <label>Domain of Interest:</label>
                       <input type="text" name="Domain" placeholder="Enter Domain" >
                       <!-- <p>File:</p>
                       <input type="file" name="file" placeholder="Attach file"> -->
                       <div class="button1">
                       <input type="submit" name="submit" class="btn btn-outline-dark">
                       </div>
                       <div class="button2">
                       <button type="button" class="btn btn-outline-dark">Cancel</button>
                       </div>
                </form>
        </div>



</body>
</html>
<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;
session_start();
$loggedinUser=$_SESSION['Loggedusername'];

$mongoConn = new MongoClient();
$database = $mongoConn->selectDB('miniProjectdb');
$collection = $database->selectCollection($loggedinUser);
$id="profileDetails";
if(isset($_POST['submit']))
{
  $fullname=$_POST['fullname'];
  $year=$_POST['Year'];
  $department=$_POST['Department'];
  $hobbies=$_POST['Hobbies'];
  $domain=$_POST['Domain'];
  $details=array(
    "_id"=>$id,
    "fullname"=>$fullname,
    "year"=>$year,
    "department"=>$department,
    "hobbies"=>$hobbies,
    "domain"=>$domain
);
}
  $collection->update(array('_id'=>$id),array('$set'=>['fullname'=>$fullname]),array('upsert' => false));
  // echo '<script type="text/javascript">window.location.href="slidebar.php"</script>';
// header('Location:slidebar.php');
// $insRec->update(['_id'=>new MongoDB\BSON\ObjectID($id)],['$set' =>['fullname'=>$fullname,
//    'year'=>$year,
//    'department'=>$department,
//    'hobbies'=>$hobbies,
//    'domain'=>$domain]], ['multi' => false, 'upsert' => false]);
// $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
// $result = $manager->executeBulkWrite('onlinestore.products', $insRec, $writeConcern);
// echo '<script type="text/javascript">alert("done");</script>';

?>
