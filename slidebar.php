<?php
session_start();
$loggedinUser=$_SESSION['Loggedusername'];

if($loggedinUser==null){
echo '<script type="text/javascript">alert("User not logged in.");</script>';
echo '<script type="text/javascript">window.location.href="first.php"</script>';
}else{
  $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
  $bulk = new MongoDB\Driver\BulkWrite;
  $mongoConn = new Mongo();
  $database = $mongoConn->selectDB('miniProjectdb');
  $collection = $database->selectCollection($loggedinUser);
  $id="profileDetails";
  $details = $collection->findOne(array('_id' => $id));
  if($details==null){
    $flag="Add";
  }else{
    $flag="Update";
  $name=$details['fullname'];
  $year=$details['year'];
  $department=$details['department'];
  $hobbies=$details['hobbies'];
  $domain=$details['domain'];

  }
  if(isset($_POST['save'])){
    $fileProject=$_POST['Projectfile'];
  }
  if(isset($_POST['save'])){
    $fileProject=$_POST['Projectfile'];
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <script>
        $(function() {
          $('t[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
        </script>

	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
    <link rel="stylesheet" href="assets/css/slidebar_design.css">
    <link  href="http://fonts.googleapis.com/css?
family=Reenie+Beanie:regular"
rel="stylesheet"
type="text/css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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
<body>
<div class="wrapper">
    <div class="sidebar">
        <h2>User</h2>
        <ul>
            <li><a href="#1"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="#2"><i class="fas fa-project-diagram"></i>My projects</a></li>
            <li><a href="#3"><i class="fas fa-blog"></i>AddNotes</a></li>
            <li><a href="#4"><i class="fas fa-address-book"></i>Search Projects</a></li>
            <!-- <li><a href="#5"><i class="fas fa-address-book"></i>Add Project</a></li> -->
            <!-- <li><a href="#6"><i class="fas fa-address-book"></i>Favourite Projects</a></li> -->
            <!-- <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li> -->

        </ul>

    </div>

</div>
<div class="sidebar-right">
  <div id="1" style="min-height:1000px;background:#cfd8dc">
      <div class="addprofile_box">
          <section>
            <img src="avatar1.jpg" class="avatar1">
          </section>

          <div class="verticalline"></div>

          <div class="profile-text">
              <form>
                  <label for="name">Name:</label><br>
                  <input type="text" name="name" id="name" readonly value="<?php echo $name ?>"><br>

                  <label for="year">Year:</label><br>
                  <input type="text" name="year" id="Year" readonly value="<?php echo $year ?>"><br>

                  <label for="Department">Department:</label><br>
                  <input type="text" name="Department" id="Department" readonly  value="<?php echo $department?>"><br>

                  <label for="Hobbies">Hobbies:</label><br>
                  <input type="text" name="Hobbies" id="Hobbies" readonly  value="<?php echo $hobbies ?>"><br>

                  <label for="Domain">Domains of interest:</label><br>
                  <input type="text" name="Domain" id="Domain" readonly  value="<?php echo $domain ?>"><br>
              </form>
          </div>
      </div>
      <div class="button_profile">
     <?php if (strcmp($flag,"Add")==0) { ?>
       <button type="button" class="btn btn-outline-dark" onclick="window.location.href='addUserprofile.php'">Add Profile</button>
    <?php } else if(strcmp($flag,"Update")==0) { ?>

      <button type="button" class="btn btn-outline-dark" onclick="window.location.href='update_profile.php'">Update Profile</button>
    <?php } ?>
    <input type="button" class="btn btn-outline-dark" value="Delete Profile"  onclick="window.location.href='delete_profile.php'"></button>
      </div>
  </div>

  <div id="2" style="min-height:1000px;background:white">
    <!-- <div class= "addproj_box"> -->
          <div class="proj-text">
            <h1>User Projects</h1>
            <form method="POST" action="/addUProject.php">
                  <label>Project ID :</label><br>
                  <input type="text" name="ProjectID" placeholder="Enter Project ID" required autofocus><br>
                   <label>Project Name:</label><br>
                   <input type="text" name="projectName" placeholder="Enter Project Name" required autofocus><br>
                   <!-- <label>Roll No:</label>
                   <input type="text" name="rollno" placeholder="Enter rollno" required>
                   <label>Class:</label>
                   <input type="text" name="class" placeholder="Enter class"> -->
                   <label>Project Discription</label><br>
                   <textarea rows = "5" cols = "60" name = "ProjectDiscription" placeholder="Enter details here...">

                    </textarea><br>
                   <label>Year</label><br>
                   <input type="text" name="Pyear" placeholder="Enter Year"><br>
                   <label>Domain</label><br>
                   <input type="text" name="Domain" placeholder="Enter Domain"><br>
                   <label>Technology Stack</label><br>
                   <input type="text" name="TechnologyStack" placeholder="Enter Technology Stack used"><br>
                   <!-- <p>File:</p>
                   <input type="file" name="file" placeholder="Attach file"> -->
                   <div class="button1">
                   <input type="submit" name="SaveProject" class="btn btn-outline-dark">

                   <button type="button" class="btn btn-outline-dark">Cancel</button><br>
                   </div>
                   <table class="proj-table"  border="1">
                   <thead>
                     <tr>
                       <th><b>Project ID</th>
                       <th>Project Name</th>
                       <th>Project Description</th>
                     </tr>

                   </thead>
                   <tbody><?php
                     $db = $mongoConn->selectDB('miniProjectdb');
                     $collection = $db->selectCollection($loggedinUser);
                     $cursor = $collection->find(array('type' => 'Projects'));
                     foreach ($cursor as $document) {?>
                     <tr>
                       <th><?php echo $document['_id']?></th>
                       <th><?php echo $document['projectName']?></th>
                       <th><?php echo $document['ProjectDiscription']?></th>
                     </tr>
                     <?php }
                     ?>
                   </tbody>
                   </table>


            </form>
          </div>
    </div>


  <div id="3" style="min-height:1000px;background:lightblue;min-width: 500px;">

    <!-- <ul>
        <li>
          <t href="#">
            <h2>Title #1</h2>
             <p>Text Content #1</p>
          </t>
        </li>
        <li>
          <t href="#">
            <h2>Title #2</h2>
            <p>Text Content #2 </p>

          </t>
        </li>
        <li>
            <t href="#">
              <h2>Title #3</h2>
              <p>Text Content #3 </p>
            </t>
        </li>
        <li>
            <t href="#">
              <h2>Title #4</h2>
              <p>Text Content #4 </p>
            </t>
        </li>

    </ul> -->
    <table class="notes"  border="1">
          <thead>
            <tr>
              <th><b>NOTES:</th>
            </tr>

          </thead>
          <tbody><?php
            $db = $mongoConn->selectDB('miniProjectdb');
            $collection = $db->selectCollection($loggedinUser);
            $cursor = $collection->find(array('type' => 'Notes'));
            foreach ($cursor as $document) {?>
            <tr>
              <!-- <th><?php //echo $document['Notesno']?></th> -->
              <th><?php echo $document['data']?></th>
            </tr>
            <?php }
            ?>
          </tbody>
          </table>
          <form class="" action="/addnote.php" method="post">

            <textarea rows = "5" cols = "60" name = "notes" placeholder="Enter details here...">

            </textarea><br>
            <input type="submit" name="AddNotes" value="Add Notes">
          </form>
   </div>

   <div id="4" style="min-height:1000px;background:#cfd8dc">
     <div class="search">
       <table class="search"  border="1">
         <thead>
           <tr>
             <th><b>Project ID</th>
               <th>Project Name</th>
               <th>Project Description</th>
                 <th>Year</th>
                 <th>Domain</th>
                   <th>Technology Stack</th>
                   <th>FileName</th>
             </tr>

           </thead>
           <tbody><?php
           $db = $mongoConn->selectDB('AllProjectsdb');
           $collection = $db->selectCollection('Projects');
           $cursor = $collection->find(array('type' => 'Projects'));
           foreach ($cursor as $document) {?>
             <tr>
               <th><?php echo $document['_id']?></th>
               <th><?php echo $document['projectName']?></th>
               <th><?php echo $document['ProjectDiscription']?></th>
               <th><?php echo $document['Pyear']?></th>
               <th><?php echo $document['domain']?></th>
               <th><?php echo $document['TechnologyStack']?></th>
                <th><?php echo $document['fileName']?></th>
             </tr>
           <?php }
           ?>
         </tbody>
       </table>
     </div>
     </div>
         </div>

</body>
</html>
<?php
}
?>
