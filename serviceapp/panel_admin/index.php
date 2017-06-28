
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

  <div id="wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="navbar-header">
            <body><h1 align="center"> ServiceApp Admin Panel </h1>

              <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button> -->
              <!-- <a class="navbar-brand" href="index.php">Back to Admin</a> -->
          </div>
        </div>
<!--
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Back to Admin</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.html"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="portfolio.html"><i class="fa fa-tasks"></i> Portfolio</a></li>
                    <li><a href="blog.html"><i class="fa fa-globe"></i> Blog</a></li>
                    <li class="active"><a href="signup.html"><i class="fa fa-list-ol"></i> SignUp</a></li>
                    <li><a href="register.html"><i class="fa fa-font"></i> Register</a></li>
                    <li><a href="timeline.html"><i class="fa fa-font"></i> Timeline</a></li>
                    <li><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
                    <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                    <li><a href="bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                    <li><a href="bootstrap-grid.html"><i class="fa fa-table"></i > Bootstrap Grid</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav> -->

        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12 text-center v-center">

                    <h1>Sign In</h1>
                    <!-- <p class="lead">Enter your email to sign-up for our newsletter</p> -->

                    <br>
                    <br>
                    <br>

                    <form class="col-lg-12" action="index.php" method='post' enctype="multipart/form-data">
                        <div class="input-group" style="width: 340px; text-align: center; margin: 0 auto;">
                            <input class="form-control input-lg" title="Confidential signup." name="user"
                                placeholder="Enter username" type="text">
                                <div class="input-group" style="width: 340px; text-align: center; margin: 0 auto;">
                                    <input class="form-control input-lg" title="Confidential signup." name="upass"
                                        placeholder="Enter Password" type="text">
<br>
<br>
<br>
<br>
<br>
<!-- <input type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey" value=" Log In ;onclick:"window.location.href='index2.html'"> -->
<!-- <a class="btn" href="index2.html">Login</a> -->
<form>
  <button type="submit" name="submit" class="btn btn-primary">Login</button>
<!-- <input type="button" value="LogIn" name="btn" /> -->
<!-- onclick="window.location.href='index2.html' -->
</form>

                        </div>


                    </form>
                    <?php



                         if(isset($_POST['submit']))

                         {



                             if($_POST['user']=="abc" and $_POST['upass']=="123")

                             {





                                 echo "<script>window.location.href='index2.html';</script>";

                                 exit;



                             }

                             else if($_POST['user']==" " and $_POST['upass']==" ")

                             {

                                 echo "invalid username or password";

                             }
                             else

                             {

                                 echo "invalid username or password";

                             }









                         }



                         ?>

                <!-- </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="text-center">
                <h1>Follow us</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center v-center" style="font-size: 39pt;">
                    <a href="#"><span class="avatar"><i class="fa fa-google-plus"></i></span></a>
                    <a href="#"><span class="avatar"><i class="fa fa-linkedin"></i></span></a>
                    <a href="#"><span class="avatar"><i class="fa fa-facebook"></i></span></a>
                    <a href="#"><span class="avatar"><i class="fa fa-github"></i></span></a>
                </div>

            </div>
            <!-- /.row -->

<!-- </div> -->
        <!-- /#page-wrapper -->
    </div>
</body>
</html>
