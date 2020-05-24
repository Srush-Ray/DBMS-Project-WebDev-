<?php
session_start();
$loggedinAdmin=$_SESSION['Loggedadmin'];
if($loggedinAdmin==null){
echo '<script type="text/javascript">alert("Admin not logged in.");</script>';
echo '<script type="text/javascript">window.location.href="first.php"</script>';
}else{
  $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
  $bulk = new MongoDB\Driver\BulkWrite;
  $mongoConn = new Mongo();
  $database = $mongoConn->selectDB('miniProjectdb');
  $collection = $database->selectCollection($loggedinAdmin);
  $id="adminDetails";
  $details = $collection->findOne(array('_id' => $id));
  if($details==null){
  }else{
  $name=$details['name'];
  $department=$details['department'];
  $domain=$details['Domain'];
  }
  if(isset($_POST['save'])){
    $fileProject=$_POST['Projectfile'];
  }
  if(isset($_POST['save'])){
    $fileProject=$_POST['Projectfile'];
  }
?>
<html>
<head>
    <title>Admin</title>
    <script>
  function sync()
  {
    var n1 = document.getElementById('ID');
    var n2 = document.getElementById('ID2');
    n2.value = n1.value;
  }
  </script>
    <link rel="stylesheet" href="assets/css/admin_design.css">
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
           <script type="text/javascript" src="assets/js/adminValid.js" ></script>
           <script type="text/javascript" src="assets/js/lib/jquery-3.4.1.min.js"></script>
           <script type="text/javascript" src="assets/js/project.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
  <body>
        <div class="wrapper">
                <div class="Admin">
                    <h2>Admin</h2>
                    <ul>

                        <li><a href="#11"><i class="fas fa-user"></i>Profile</a></li>
                        <!-- <li><a href="#"><i class="fas fa-address-card"></i>About</a></li> -->
                        <li><a href="#12"><i class="fas fa-project-diagram"></i>Add Admin</a></li>
                        <li><a href="#13"><i class="fas fa-blog"></i>Add Project</a></li>
                        <!-- <li><a href="#4"><i class="fas fa-address-book"></i>Project List</a></li> -->
                        <!-- <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li> -->

                    </ul>
                </div>
        </div>

        <div class="sidebar-right">
                <div id="11" style="min-height:1000px;background:lightblue">
                   <div class="adminprofile_box">
                        <section>
                                <img src="avatar1.jpg" class="avatar1">
                        </section>
                        <div class="verticalline"></div>

                        <div class="adminprofile-text">
                                <form>
                                    <label for="name">Name:</label><br>
                                    <input type="text" name="name1" id="name" readonly value="<?php echo $name ?>"><br>
                                    <label for="ID">ID:</label><br>
                                    <input type="text" name="ID1" id="ID1" readonly value="<?php echo $loggedinAdmin ?>"><br>
                                    <label for="Department">Department:</label><br>
                                    <input type="text" name="Department1" id="Department" readonly value="<?php echo $department ?>"><br>
                                    <label for="Domain">Domains of interest:</label><br>
                                    <input type="text" name="Domain1" id="Domain" readonly value="<?php echo $domain ?>"><br>
                                </form>
                                <div>
                                  <input type="button" class="btn btn-outline-dark" value="Delete Profile"  onclick="window.location.href='delete_Aprofile.php'"></button>
                                </div>
                            </div>
                            </div>
                   </div>



                <div id="12" style="min-height:1000px;background:white" >
                     <div class="addadmin">
                         <p><b>Add Admin</b></p>

                       <div class="row">
                           <div class="column">
                             <div class="col1-text">
                                    <form action="/addAdmin.php" method="POST"  name="addad" onsubmit="return advalidations()">
                                        <!-- <label for="Username">Name:</label><br>
                                        <input type="text" name="username" id="username" required><br> -->
                                        <label for="ID">ID:</label><br>
                                        <input type="text" name="ID" id="ID" required onkeyup="sync()"><br>
                                        <label for="Password">Password:</label><br>
                                        <input type="password" name="Password" id="Password" required><br>
                                        <label for="Confirm Password">Confirm Password:</label><br>
                                        <input type="password" name="Confirm_Password" id="Confirm Password" required><br>
                                        <!-- <div class="button_admin1">
                                          <input type="submit" class="btn btn-outline-dark" name="Admin" id="Admin" value="Add Admin" onclick="advalidations"></button>
                                        </div> -->

                                    <!-- </form> -->
                                </div>

                            </div>

                            <div class="verticalline1"></div>

                            <div class="column" >
                                    <div class="col2-text">
                                            <!-- <form action="/addAdmin.php" method="POST"> -->
                                                <label for="Username">Name:</label><br>
                                                <input type="text" name="username2" id="username" required><br>
                                                <label for="ID">ID:</label><br>
                                                <input type="text" name="ID2" id="ID2" required><br>
                                                <label for="Department">Department:</label><br>
                                                <input type="text" name="Department2" id="Department" required><br>
                                                <label for="Domains">Domains:</label><br>
                                                <input type="text" name="Domains2" id="Domains" required><br>
                                                <div class="button_admin1">
                                                        <input type="submit" class="btn btn-outline-dark" name="Admin" value="Add Admin"></button>
                                                </div>
                                            </form>

                                        </div>
                            </div>
                       </div>


                     </div>

                </div>
                <div id="13" style="min-height:1000px;background:white;min-width: 500px;">
                        <!-- <div class="adminprofile_box">
                                <section>
                                        <img src="avatar1.jpg" class="avatar1">
                                </section>
                           </div> -->
                    <div class="Form">
                     <p1 style="font-size: 20px">Add Projects</p1>
                     <form action="/AddAdminProject.php" method="POST" enctype="multipart/form-data" name="form1">
                           <label>Project ID :</label>
                           <input type="text" name="ProjectID" placeholder="Enter Project ID" required autofocus><br>
                            <label>Project Name:</label>
                            <input type="text" name="projectName" placeholder="Enter Project Name" required autofocus><br>
                            <label>Project Discription</label>
                            <textarea rows = "5" cols = "60" name = "ProjectDiscription" placeholder="Enter details here...">
                             </textarea><br> <label>Year</label>
                            <input type="text" name="Pyear" placeholder="Enter Year"><br>
                            <label>Domain</label>
                            <input type="text" name="Domain" placeholder="Enter Domain"><br>
                            <label>Technology Stack</label>
                            <input type="text" name="TechnologyStack" placeholder="Enter Technology Stack used" placeholder="Enter Domain"><br>
                            <p>Select File:</p>
                            <input type="file" name="file" id="file" placeholder="Attach file">
                            <div class="button1">
                            <input type="submit" value="Save" name="SaveProject" class="btn btn-outline-dark"></button>
                            </div>
                     </form>
                    </div>
                </div>
        </div>
</div>
  </body>
</html>
<?php
}
?>
