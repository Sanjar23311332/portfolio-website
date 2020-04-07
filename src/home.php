<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <?php
        error_reporting(E_ALL ^ E_DEPRECATED);
        ini_set('display_errors', 1);
        include 'database.php';
        function personalInfo($info){
            $query = "SELECT $info FROM user WHERE id = 1";
            $result = mysql_query($query);
            $array = mysql_fetch_assoc($result);
            return $array[$info];
        } 


        if(isset($_POST['update'])){
            updateInfo("job");
            updateInfo("name");
            updateInfo("dob");
            updateInfo("phone");
            updateInfo("phone");
            updateInfo("address");
            updateInfo("email");
            updateInfo("website");
            echo "<script> alert(\"The information successfully updated !!!\")</script>";
        }

        function updateInfo($info){
            $query = "UPDATE user SET $info = '$_POST[$info]' WHERE id = 1" ;
            mysql_query($query);
        }
    ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Page</a>
            </div>
            <a class="navbar-text navbar-right" href="index.php">Back to site</a>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="home.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="about.php"><i class="fa fa-info-circle fa-fw"></i> About</a>
                        </li>
                        <li>
                            <a href="skills.php"><i class="fa fa-eercast fa-fw"></i> Skills</a>
                        </li>
                        <li>
                            <a href="experience.php"><i class="fa fa-building fa-fw"></i> Experience</a>
                        </li>
                        <li>
                            <a href="portfolio.php"><i class="fa fa-briefcase fa-fw"></i> Portfolio</a>
                        </li>
                        <li>
                            <a href="education.php"><i class="fa fa-graduation-cap fa-fw"></i> Education</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <br>
           <form action="home.php" method="post">
              <div class="form-group">
                <label for="job">Job: </label>
                <input name="job" type="text" class="form-control" id="job" value="<?php echo personalInfo("job") ?>">
              </div>
              <div class="form-group">
                <label for="name">Name: </label>
                <input name="name" type="text" class="form-control" id="name" value="<?php echo personalInfo("name") ?>">
              </div>
              <div class="form-group">
                <label for="dob">D.O.B: </label>
                <input name="dob" type="text" class="form-control" id="dob" value="<?php echo personalInfo("dob") ?>">
              </div>
              <div class="form-group">
                <label for="phone">Phone: </label>
                <input name="phone" type="text" class="form-control" id="phone" value="<?php echo personalInfo("phone") ?>">
              </div>
              <div class="form-group">
                <label for="address">Address: </label>
                <input name="address" type="text" class="form-control" id="address" value="<?php echo personalInfo("address") ?>">
              </div>
              <div class="form-group">
                <label for="email">Email: </label>
                <input name="email" type="text" class="form-control" id="email" value="<?php echo personalInfo("email") ?>">
              </div>
              <div class="form-group">
                <label for="website">Website: </label>
                <input name="website" type="text" class="form-control" id="website" value="<?php echo personalInfo("website") ?>">
              </div>
              <button type="submit" class="btn btn-success" name="update">Update</button>
            </form>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
