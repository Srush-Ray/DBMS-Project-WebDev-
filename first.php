<!DOCTYPE html>
<html>
        <head>
          <title> FirstPage</title>
          <link rel="stylesheet" href="assets/css/firstpage_design.css">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="assets/bootstrap/bootstrap-4.3.1">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="assets/bootstrap/bootstrap-4.3.1-dist">
          <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
          <script type="text/javascript" src="assets/js/lib/jquery-3.4.1.min.js"></script>
          <script type="text/javascript" src="assets/js/loginValid.js"></script>

        </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container">
                <a class="navbar-brand" href="#">PROJECTS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                      <a class="nav-link" href="#">USER <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">ADMIN</a>
                    </li> -->
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="Login.html">Sign-up</a>
                    </li> -->
                    <li>
                            <button type="button" class="btn btn-outline-dark" onclick="window.location.href='Login.html'">User Sign-Up</button>
                    </li>

                  </ul>
                </div>
              </div>
             </nav>


        <div class="main">
            <section>
                <!-- <h1>Project List</h1> -->
                <div class = "search-box">
                  <input class="search-txt" type="text" name="" placeholder="Search project">
                  <a class="search-btn" href="#">
                  <i class="fa fa-search"></i>
                  </a>
                </div>

                <div class="button1">
                <button type="button" class="btn btn-outline-info">Domain</button>
                </div>
                <div class="button2">
                <button type="button" class="btn btn-outline-dark">Year</button>
                </div>


            </section>
            </table>

            <aside class="right">

                  <div id="main">
                         <!-- ****Design***** -->
                            <style type="text/css">
                                *{
                                    margin: 0;
                                    padding: 0;
                                    -webkit-box-sizing: border-box;
                                    -moz-box-sizing: border-box;
                                    box-sizing: border-box;
                                    font-family: 'Cabin';
                                }
                                /* body{
                                    background-color: #009688;
                                } */
                                #main{
                                    width: 75%;
                                    margin: 50px auto;
                                }
                                #tab-btn{
                                    display: -webkit-flex;
                                    display: -moz-flex;
                                    display: -ms-flex;
                                    display: -o-flex;
                                    display: flex;
                                    width: 100%;
                                    justify-content: center;
                                }
                                .login,.register{
                                    text-decoration: none;
                                    display: block;
                                    width: 100%;
                                    background-color: #37474f;
                                    text-align: center;
                                    color: #fff;
                                    font-size: 25px;
                                    padding: 10px;
                                }
                                .active{
                                    background-color: #eee;
                                    color: #000;
                                }
                                .content,.other{
                                    width: 100%;
                                    background-color: #eee;
                                    padding: 20px 30px 30px 30px;
                                    box-shadow: 2px 2px 5px #333;
                                }
                                .other{
                                    display: none;
                                }
                                .inp{
                                    width: 100%;
                                    padding: 12px;
                                    margin-bottom: 15px;
                                    font-size: 20px;
                                    border: 2px solid #888;
                                    border-bottom: 5px solid #888;
                                    background-color: #fff;
                                    color: #666;
                                }
                                .inp:focus{
                                    outline: none;
                                    border: 2px solid #555;
                                    border-bottom: 5px solid #555;
                                }
                                #sub-btn{
                                    width: 100%;
                                    padding: 12px;
                                    border: none;
                                    font-size: 20px;
                                    font-weight: bold;
                                    background-color: #f44336;
                                    color: #fff;
                                    cursor: pointer;
                                    border-bottom: 5px solid #444;
                                }
                                #sub-btn:focus{
                                    outline: none;
                                }
                                #sub-btn:active{
                                    border: none;
                                    margin-top: 5px;
                                }
                                #sub-btn:hover{
                                    color: darkred;
                                }

                                #forgot{
                                    font-size: 20px;
                                    color: #444;
                                    display: block;
                                }
                                h2{
                                    text-align: center;
                                    padding-bottom: 15px;
                                    color: #333;
                                    font-size: 30px;
                                    font-variant: small-caps;
                                }
                            </style>
                            <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script></script>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $(".register").click(function(){
                                        $(".other").show();
                                        $(".content").hide();
                                        $(".register").addClass('active');
                                        $(".login").removeClass('active');
                                    });
                                    $(".login").click(function(){
                                        $(".content").show();
                                        $(".other").hide();
                                        $(".login").addClass('active');
                                        $(".register").removeClass('active');
                                    });
                                });
                            </script>

                        <!-- *****Design**** -->
                    <div id="tab-btn">
                    <a href="#" class="login active">User</a>
                    <a href="#" class="register">Admin</a>
                    </div>

                    <div class="content">
                    <h2>User Login</h2>
                    <form method="POST" id="login-box">
                        <input type="text" name="username" placeholder="Registeration ID" class="inp" required autofocus><br>
                        <input type="password" name="password" placeholder="Password" class="inp" required><br>
                        <a href="#" id="forgot">Forgot Password?</a><br>
                        <input type="submit" name="submit" value="SIGN IN" id="sub-btn">
                    </form>
                    </div>

                  <div class="other">
                    <h2>Admin Login</h2>
                    <form method="post" id="reg-box">
                        <input type="text" name="Adminname" placeholder="Enter Admin ID" class="inp" required autofocus><br>
                        <!-- <input type="email" name="email" placeholder="Enter Email" class="inp" required><br> -->
                        <input type="password" name="Adminpass" placeholder="Enter Password" class="inp" required><br>
                        <!-- <input type="password" name="repass" placeholder="Confirm Password" class="inp" required><br> -->
                        <a href="#" id="forgot">Forgot Password?</a><br>
                        <input type="submit" name="submit" value="SIGN UP" id="sub-btn">
                    </form>

                  </div>
                </div>

            </aside>

        </div>
        <?php
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;
        if(isset($_POST["submit"]))
        {
          $nam=$_POST['username'];
          $password=$_POST['password'];
          $aduser=$_POST['Adminname'];
          $adpass=$_POST['Adminpass'];
        }

        $mongoConn = new Mongo();
        $database = $mongoConn->selectDB('miniProjectdb');
        if($nam!=null && $password!=null){
        $collection = $database->selectCollection('userLogin');
        $user = $collection->findOne(array('_id' => $nam,'password' => $password));
        if($user!=null){
          session_start();
          $_SESSION['Loggedusername']=$user['_id'];
          echo '<script type="text/javascript">window.location.href="slidebar.php"</script>';
          exit;
        }else {
        echo '<script type="text/javascript">alert("Enter the Registeration ID and Password correctly.");</script>';
        }
        }elseif($aduser!=null && $adpass!=null){
          $collect = $database->selectCollection('adminLogin');
          $admin = $collect->findOne(array('_id' => $aduser,'password' => $adpass));
          if($admin!=null){
            session_start();
            $_SESSION['Loggedadmin']=$admin['_id'];
            // header('Location: slidebar.html');
            echo '<script type="text/javascript">window.location.href="admin.php"</script>';
            exit;
              // header('Location: firstpage.html');
          }else {
            echo '<script type="text/javascript">alert("Enter the Admin ID and Password correctly.");</script>';
          }
        }
        ?>

    </body>
</html>
