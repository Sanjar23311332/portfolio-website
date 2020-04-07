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
        if(isset($_POST['update'])){
            $query = "SELECT COUNT(*) as count FROM education";
            $result = mysql_query($query);
            $array = mysql_fetch_assoc($result);
            $id = $array['count'];
            for($i = 1; $i <= $id; $i++){
                $desc = $_POST[$i];
                $query = "UPDATE education SET school_text = '$desc' WHERE id = '$i'";
                mysql_query($query) or die("ss");
            }
            echo "<script> alert(\"The information successfully updated !!!\")</script>";
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
           <form action="education.php" method="post">
              <div class="form-group">
          <?php 
            education();
                function education(){
                    $query = "SELECT * FROM education";
                    $result = mysql_query($query);
                    while($array = mysql_fetch_assoc($result)){
                        $name = $array['school'];
                        $desc = $array['school_text'];
                        $duration = $array['duration'];
                        $id =$array['id'];
                        ?>
                        <label for="<?php echo $id ?>"><?php echo $name ?></label>
                        <label for="<?php echo $id ?>"><?php echo $duration ?></label>
                        <textarea name="<?php echo $id ?>" class="form-control" id="<?php echo $id ?>"><?php echo $desc?></textarea>
                <?php }
            }
            ?>
              </div>
              <button type="submit" class="btn btn-success" name="update">Update</button>
            </form>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
