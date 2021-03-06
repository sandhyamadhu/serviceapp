<?php
ob_start();
//error_reporting(0);
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms - Deep Blue Admin</title>

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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Back to Admin</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.html"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="portfolio.html"><i class="fa fa-tasks"></i> Portfolio</a></li>
                    <li><a href="blog.html"><i class="fa fa-globe"></i> Blog</a></li>
                    <li><a href="signup.html"><i class="fa fa-list-ol"></i> SignUp</a></li>
                    <li><a href="register.html"><i class="fa fa-font"></i> Register</a></li>
                    <li><a href="timeline.html"><i class="fa fa-font"></i> Timeline</a></li>
                    <li class="active"><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
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
        </nav>

       <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-6">

                    <form role="form">



                        <form  action="#" method='post' enctype="multipart/form-data">
                            <label>Shop Name</label>
                            <input class="form-control" name="name">
                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                        </div>

                        <div class="form-group">
                            <label>Shop Lattitude</label>
                            <input class="form-control" name="lat">
                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                        </div>

                        <div class="form-group">
                            <label>Shop Longitude</label>
                            <input class="form-control" name="lng">
                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                        </div>

                        <div class="form-group">
                            <label>Shop Description</label>
                            <input class="form-control" name="desc">
                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                        </div>

                        <div class="form-group">
                            <label>Shop Address</label>
                            <input class="form-control" name="address">
                        </div>
<!--
                        <div class="form-group">
                            <label>Static Control</label>
                            <p class="form-control-static">email@example.com</p>
                        </div> -->
<!--
                        <div class="form-group">
                            <label>File input</label>
                            <input type="file">
                        </div> -->

                        <!-- <div class="form-group">
                            <label>Text area</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Checkboxes</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Checkbox  1
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Checkbox  2
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Checkbox  3
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Inline Checkboxes</label>
                            <label class="checkbox-inline">
                                <input type="checkbox">
                                1
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox">
                                2
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox">
                                3
                            </label>
                        </div>

                        <div class="form-group">
                            <label>Radio Buttons</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Radio  1
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Radio  2
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                    Radio  3
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Inline Radio Buttons</label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>
                                1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">
                                2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">
                                3
                            </label>
                        </div>

                        <div class="form-group">
                            <label>Selects</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Multiple Selects</label>
                            <select multiple class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
 -->
                        <button type="submit" class="btn btn-default" name="btn_shop">Submit </button>
                          </form>
                          <?php

                                             if(isset($_POST['btn_shop']))
                                              {
                                                  $s_name=mysqli_real_escape_string($con,$_POST['name']);
                                                    $s_lat=,mysqli_real_escape_string($con,$_POST['lat']);
                                                      $s_lng=mysqli_real_escape_string($con,$_POST['lng']);
                                                        $s_desc=mysqli_real_escape_string($con,$_POST['desc']);
                                                          $s_add=mysqli_real_escape_string($con,$_POST['address']);

                                                  // $bdsd=mysqli_real_escape_string($con,$_POST['username']);
                                                    $uniqid = uniqid('',true);
                          $mmk="INSERT INTO categories_details (shop_id,shop_name,shop_lat,shop_lng,shop_desc,shop_address) values ('$s_name','$s_lat',$s_lng,$s_desc,$s_add)";
                          $hhby=mysqli_query($con,$mmk);

                                                header("location:category_insert.php?yes=1");
                                                  ob_end_flush();
                                                  exit;
                                              }

                                            ?>
                        <!-- <button type="reset" class="btn btn-default">Reset Button</button>

                    </form>

                </div>
                <div class="col-lg-6">
                    <h1>Disabled Form States</h1>

                    <form role="form">

                        <fieldset disabled>

                            <div class="form-group">
                                <label for="disabledSelect">Disabled input</label>
                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                            </div>

                            <div class="form-group">
                                <label for="disabledSelect">Disabled select menu</label>
                                <select id="disabledSelect" class="form-control">
                                    <option>Disabled select</option>
                                </select>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Disabled Checkbox
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">Disabled Button</button>

                        </fieldset>

                    </form>

                    <h1>Form Validation</h1>

                    <form role="form">

                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess">Input with success</label>
                            <input type="text" class="form-control" id="inputSuccess">
                        </div>

                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning">Input with warning</label>
                            <input type="text" class="form-control" id="inputWarning">
                        </div>

                        <div class="form-group has-error">
                            <label class="control-label" for="inputError">Input with error</label>
                            <input type="text" class="form-control" id="inputError">
                        </div>

                    </form>

                    <h1>Input Groups</h1>

                    <form role="form">
                        <div class="form-group input-group">
                            <span class="input-group-addon"> </span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>

                        <div class="form-group input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-addon">.00</span>
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-eur"></i></span>
                            <input type="text" class="form-control" placeholder="Font Awesome Icon">
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon">.00</span>
                        </div>

                        <div class="form-group input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>

                    </form>
                </div>
            </div>
        </div> -->
    </div>

</body>
</html>
