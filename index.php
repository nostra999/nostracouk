<?php
include("config.php");

$link=mysqli_connect("localhost",$db_un,$db_pw,$db_db);

if (!$link) {
 die('Could not connect: ' . mysqli_error());
}

$data = "SELECT * FROM fitbit WHERE id='1'";
$query=mysqli_fetch_assoc(mysqli_query($link,$data));

//fitbit start
$fitbit = json_decode($query["value"]);
$sleep = json_decode($query["sleep"]);
//echo $fitbit->summary->steps;
$steps = $fitbit->summary->steps;
$sleep_time = $sleep->summary->totalMinutesAsleep;
$shours = floor($sleep_time / 60);
$sminutes = $sleep_time % 60;
//fitbit end
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Richard Moseley, Web Developer, Apple Fan Boy, Server Engineer, Wannabe Photographer">
    <meta name="author" content="Richard Moseley - richard@nostra.co.uk">

    <title>Richard Moseley - Online Portfolio</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="css/homepage.css" rel="stylesheet">

</head>

<body>

    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Richard Moseley</h1>
                        <h3>Gloucester, UK</h3>
                        <p>&nbsp;</p>
                        <!--<hr class="intro-divider">-->
                        <ul class="list-inline intro-social-buttons"  style="font-weight: 700;" style="border-top: 1px black dotted;">
                            <li><a href="https://twitter.com/nostra999" class="btn btn-default btn-lg"  target="_blank"><i class="fa fa-twitter fa-fw"></i> <span class="network-name" ></span></a></li>
                            <li><a href="http://uk.linkedin.com/pub/richard-moseley/35/238/427" class="btn btn-default btn-lg"  target="_blank"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name"></span></a></li>
                            <li><a href="mailto:richard@nostra.co.uk" class="btn btn-default btn-lg"  target="_blank"><i class="fa fa-envelope fa-fw"></i> <span class="network-name"></span></a></li>
                            <li title="Steps so far today by fitbit api"><a href="https://www.fitbit.com/user/2CL29K" class="btn btn-default btn-lg"  target="_blank"><i class="fa fa-map-marker fa-fw"></i> <span class="network-name" title="steps by fitbit api"></span><?php echo number_format($steps, 0, ',', ',')." steps"; ?></a></li>
                            <li title="Hours sleep provided by fitbit api"><a href="https://www.fitbit.com/user/2CL29K" class="btn btn-default btn-lg"  target="_blank"><i class="fa fa-moon-o fa-fw"></i> <span class="network-name"></span><?php echo "$shours:$sminutes"; ?></a></li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.cbtx -->

    </div>
    <!-- /.intro-header -->



    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <!--<hr class="section-heading-spacer">-->
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Web Developer</h2>
                    <p class="lead">I have been working in Web Development since 2005, building cutting edge systems using PHP, MySQL, and jQuery. These systems include high security e-commerce portals with turnover of multiple million pounds per year. I love integrating with API, such examples can be seen by my live fitbit feed below. While I like to use soap to clean, I am also a keen fan of Simple Object Access Protocol integrations and oAuth.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6 a-centre"  style="padding-top:50px;">
                    <i class="fa fa-code fa-5x" style="font-size:200px;"></i>
                </div>
            </div>

        </div>
        <!-- /.cbtx -->

    </div>
    <!-- /.end-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                   <!--<hr class="section-heading-spacer">-->
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Server Engineer</h2>
                    <p class="lead">While my main server experience is with centOS, Fedora and Redhat Linux in enterprise high availability clustered networks I also have experience of maintaining Microsoft Windows servers and Apple servers. When building High Availability networks I also have experience of CDN configuration to allow for worldwide and efficient data clustering.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6 a-centre" style="padding-top:50px;">
                   <i class="fa fa-linux fa-5x" style="font-size:200px;"></i>
                </div>
            </div>

        </div>
        <!-- /.cbtx -->

    </div>
    <!-- /.end-a -->
    
    
 <!-- /.end-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
               <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <!--<hr class="section-heading-spacer">-->
                    <div class="clearfix clearbothc"></div>
                    <h2 class="section-heading">Wannabe Photographer</h2>
                    <p class="lead">I do not claim to being an expert in photography, but I love a good photo. Can often be found trying to get that perfect picture from my iPhone 5S or Panasonic Lumix. You will find my photos on <a href="http://www.twitter.com/nostra999/">twitter</a>. My next plan is to integrate my PictureLife and FitBit data to present images based on the day I am having, watch this space.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6 a-centre"  style="padding-top:50px;">
                    <i class="fa fa-camera-retro fa-5x" style="font-size:200px;"></i>
                </div>
            </div>

        </div>
        <!-- /.cbtx -->

    </div>
    <!-- /.end-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <!--<hr class="section-heading-spacer">-->
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Apple Fanboy</h2>
                    <p class="lead">With my first Apple hardware being purchased in 2006 I am now the ultimate <a href="https://twitter.com/search?q=%23applegeek&src=typd" target="_blank">#applegeek</a>. As a result of my geekdom I am also a regular reader of <a href="http://www.9to5mac.com">9to5mac</a> and <a href="http://www.macrumors.com">macrumors</a> for all the latest apple gossip.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6 a-centre"  style="padding-top:50px;">
                    <i class="fa fa-linkedin fa-apple fa-5x a-centre" style="font-size:200px;"></i>
                </div>
            </div>

        </div>
        <!-- /.cbtx -->

    </div>
    <!-- /.end-a -->


    <div class="banner">

        <div class="container">

            <div class="row " style="text-align:center;">
                 <ul class="list-inline intro-social-buttons"  style="font-weight: 700;" >
                            <li><a href="https://twitter.com/nostra999" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-twitter fa-fw"></i> <span class="network-name" ></span></a></li>
                            <li><a href="http://uk.linkedin.com/pub/richard-moseley/35/238/427" class="btn btn-default btn-lg"  target="_blank"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name"></span></a></li>
                            <li><a href="https://www.facebook.com/nostra999" class="btn btn-default btn-lg"  target="_blank"><i class="fa fa-facebook fa-fw"></i> <span class="network-name" ></span></a></li>
                            <li><a href="http://www.google.com/+RichardMoseley999" class="btn btn-default btn-lg"  target="_blank"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name" ></span></a></li>
                            <li><a href="mailto:richard@nostra.co.uk" class="btn btn-default btn-lg"  target="_blank"><i class="fa fa-envelope fa-fw"></i> <span class="network-name"></span></a></li>
                        </ul>
                
            </div>

        </div>
        <!-- /.cbtx -->

    </div>
    <!-- /.banner -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
