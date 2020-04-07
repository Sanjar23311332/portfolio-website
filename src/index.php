<!DOCTYPE HTML>
<html>
<head>
    <title>Portfolio</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery.min.js"></script>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- webfonts -->
    <link href='//fonts.googleapis.com/css?family=Asap:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <!-- webfonts -->
</head>

<?php
	include 'database.php';
    function personalInfo($info){
        $query = "SELECT $info FROM user WHERE id = 1";
        $result = mysql_query($query);
      	$array = mysql_fetch_assoc($result);
        return $array[$info];
    }
    
    function aboutMe(){
        $query = "SELECT info FROM personalinfo WHERE id = 1";
        $result = mysql_query($query);
      	$array = mysql_fetch_assoc($result);
        return $array['info'];
    }
    
?>
    <body>
    <!-- container -->
        <!-- header -->
         <div id="home" class="header">
            <div class="container">
            <!-- top-hedader -->
            <div class="top-header">
                <!-- /logo -->
                <!--top-nav---->
                <div class="top-nav">
                    <div class="navigation">
                        <div class="logo">
                            <h1><a href="index.php"><span>P</span>ORTFOLIO</a></h1>
                        </div>
                        <div class="navigation-right">
                            <span class="menu"><img src="images/menu.png" alt=" " /></span>
                            <nav class="link-effect-3" id="link-effect-3">
                                <ul class="nav1 nav nav-wil">
                                    <li class="active"><a data-hover="Home" href="index.php">Home</a></li>
                                    <li><a class="scroll" data-hover="About" href="#about">About</a></li>
                                    <li><a class="scroll" data-hover="Skills" href="#skills" >Skills</a></li>
                                    <li><a class="scroll" data-hover="Experience" href="#work">Experience</a></li>
                                    <li><a class="scroll" data-hover="Portfolio" href="#port">Portfolio</a></li>
                                    <li><a class="scroll" data-hover="Education" href="#education">Education</a></li>
                                    <li><a class="scroll" data-hover="Contact" href="#contact">Contact</a></li>
                                    <li><a class="scroll"  data-hover="Login" href="login.php">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                <!-- /top-hedader -->
                </div>
                <div class="banner-info">
                    <div class="col-md-7 header-right">
                        <h1>Hi !</h1>
                        <h6><?php echo personalInfo("job") ?></h6>
                        <ul class="address">
                            <li>
                                <ul class="address-text">
                                    <li><b>NAME</b></li>
                                    <li>I'M <?php echo personalInfo("name") . " " . personalInfo("surname") ?></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>D.O.B</b></li>
                                    <li><?php echo personalInfo("dob") ?></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>PHONE </b></li>
                                    <li><?php echo personalInfo("phone") ?></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>ADDRESS </b></li>
                                    <li><?php echo personalInfo("address") ?></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>E-MAIL </b></li>
                                    <li><a href="mailto:<?php echo personalInfo("email") ?>"> <?php echo personalInfo("email") ?></a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>WEBSITE </b></li>
                                    <li><a href="http://<?php echo personalInfo("website") ?>"><?php echo personalInfo("website") ?></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 header-left">
                        <img src="images/img1.jpg" alt="">
                    </div>
                    <div class="clearfix"> </div>
              </div>
        </div>
            </div>
        </div>
        <!-- /header -->
        
        <!-- about -->
        <div id="about" class="about">
                <div class="col-md-6 about-left">
                    <div>
                        <div class="item">
                            <div class="about-left-grid">
                                <h2>Hi! I'm <span><?php echo personalInfo("name") . " " . personalInfo("surname") ?></span></h2>
                                <p><?php echo aboutme() ?></p>
                                <ul>
                                    <li><a class="a-btn-a scroll" href="#port">My Work</a></li>
                                    <li><a class="a-btn-h scroll" href="#contact">Hire Me</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 about-right"></div>
                <div class="clearfix"> </div>
                    
            </div>
        <!-- /about -->
        
        <!-- services -->
        <div id="skills" class="skills">
            <div class="container">
                <div class="service-head one text-center ">
                    <h4>WHAT I DO</h4>
                    <h3>MY <span>SKILLS</span></h3>
                    <span class="border two"></span>
                </div>
               <br>
               <br>
                <?php 
                skills();
                function skills(){
                    $query = "SELECT * FROM skills";
                    $result = mysql_query($query);
                    while($array = mysql_fetch_assoc($result)){
                        $skill = $array['skill'];
                        $skills_desc = $array['skills_desc'];
                ?>
                <div class="col-md-6">
                    <div class="col-xs-2 grid_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </div>
                    </div>
                    <div class="col-xs-10 grid_about_right_grid_right">
                        <h4><?php echo $skill ?></h4>
                        <p><?php echo $skills_desc ?></p>
                        <br>
                    </div>
                </div>
                <?php 
                    }
                }
                ?>
            </div>
        </div>
        <!-- services -->
           
        <!--work-experience-->
        <div id="work" class="work">
            <div class="container">
                <div class="service-head text-center">
                    <h4>WHAT I DID</h4>
                    <h3>MY <span>EXPERIENCE</span></h3>
                    <span class="border one"></span>
                </div>
                <?php
                experience();
                function experience(){
                    $query = "SELECT * FROM experience";
                    $result = mysql_query($query);
                    while($array = mysql_fetch_assoc($result)){
                        $duration = $array['duration'];
                        $desc = $array['desc'];
                        $company = $array['company'];
                ?>
                <div class="time-main w3l-agile">
                    <div class="col-md-6 year-info">
                       <ul class="year">
                           <li><?php echo $duration ?></li>
                           <div class="clearfix"></div>
                        </ul>
                    </div> 
                    <ul class="col-md-6 timeline">
                        <li>
                          <div class="timeline-badge info"><i class="glyphicon glyphicon-briefcase"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <h4 class="timeline-title"><?php echo $company ?></h4>
                            </div>
                            <div class="timeline-body">
                              <p><?php echo $desc ?></p>
                            </div>
                          </div>
                        </li>
                    </ul>
                </div>
                <?php 
                    }
                }
                ?>
            </div>
        </div>
        <!--//work-experience-->

        <!-- portfolio -->
        <div class="portfolio" id="port">
                <div class="service-head text-center">
                        <h4>MY WORKS</h4>
                        <h3>MY <span>PORTFOLIO</span></h3>
                        <span class="border"></span>
                    </div>
            <div class="container">
                <div class="row text-center">
                <?php
                    portfolio();
                    function portfolio(){
                        $query = "SELECT * FROM portfolio";
                        $result = mysql_query($query);
                        while($array = mysql_fetch_assoc($result)){
                            $pName = $array['project_name'];
                            $pDesc = $array['project_description'];
                            $pPhoto = $array['project_photo'];
                ?>
                    <div class="col-md-4">
                        <img src="images/<?php echo $pPhoto ?>" alt="image" class="img-responsive" data-toggle="modal" data-target="#<?php echo $pName ?>">

                         <div class="modal fade" id="<?php echo $pName ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $pName ?></h4>
                              </div>
                              <div class="modal-body">
                               <img src="images/<?php echo $pPhoto ?>" alt="image" class="img-responsive">
                                <?php echo $pDesc ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h3><?php echo $pName ?></h3>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
</div>
        <!-- //portfolio -->
        
        <!-- education -->
        <div class="education" id="education">
            <div class="container">
                <div class="service-head text-center">
                <h4>EDUCATION</h4>
                <h3>MY <span>EDUCATION</span></h3>
                <span class="border one"></span>
                <br>
                <br>
            </div>
            <?php 
                education();
                function education(){
                    $query = "SELECT * FROM education";
                    $result = mysql_query($query);
                    while($array = mysql_fetch_assoc($result)){
                        $name = $array['school'];
                        $desc = $array['school_text'];
                        $photo = $array['photo'];
                        $duration = $array['duration'];
            ?>
           <div class="row">
               <div class="col-md-6">
                   <img src="images/<?php echo $photo ?>" alt="image" class="img-responsive">
               </div>
               <div class="col-md-6 text-center" style="vertical-align: middle;">
                   <h3><?php echo $name ?></h3>
                   <h4><?php echo $duration ?></h4>
                   <p>
                       <?php echo $desc ?>
                   </p>
               </div>
           </div>
            <?php
                }
            }
            ?>

            </div>
        </div>
        <!-- /education -->
    <div class="footer" id="contact">
    <div class="container">
        <div class="service-head one text-center">
            <h4>CONTACT ME</h4>
            <h3>GET <span>IN TOUCH WITH ME</span></h3>
            <span class="border two"></span>
        </div>
        <div class="mail_us">
            <div class="col-md-6 mail_left">
                <div class="contact-grid1-left">
                    <div class="contact-grid1-left1">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        <h4>Contact By Email</h4>
                        <ul>
                            <li>Mail: <a href="mailto:<?php echo personalInfo("email") ?>"><?php echo personalInfo("email") ?></a></li>
                        </ul>
                    </div>
                </div>
                    <div class="contact-grid1-left">
                        <div class="contact-grid1-left1">
                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            <h4>Contact By Phone</h4>
                            <ul>
                                <li><?php echo personalInfo("phone") ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-grid1-left">
                        <div class="contact-grid1-left1">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                            <h4>Looking For Address</h4>
                            <ul>
                                <li><?php echo personalInfo("address") ?></li>
                            </ul>
                        </div>
                    </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 mail_right">
                <form action="#" method="post">
                    <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                    <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="text" name="Mobile number" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
                    <textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                    <input type="submit" value="Send">

                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="copy_right text-center">
            <p>&copy; 2017 Preface . All rights reserved | Design by <a href="<?php echo personalInfo("website") ?>" target="_blank"><?php echo personalInfo("name") ?></a></p>
             <ul class="social-icons two">
                <li><a href="#"> </a></li>
                <li><a href="#" class="fb"> </a></li>
                <li><a href="#" class="in"> </a></li>
                <li><a href="#" class="dott"> </a></li>
            </ul>
        </div>
    </div>
    </div>

    <script src="js/bootstrap.js"></script>

    </body>
</html>

