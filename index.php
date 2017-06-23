<?php include'functions.php' ?>
<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RAIT- Recent Advances in Information Technology</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/graybootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <link href="css/graymain.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    	 /* Fade transition for carousel items */
        .carousel .item {
            left: 0 !important;
              -webkit-transition: opacity .6s; /*adjust timing here */
                 -moz-transition: opacity .6s;
                   -o-transition: opacity .6s;
                      transition: opacity .6s;
        }
        .carousel-control {
            background-image: none !important; /* remove background gradients on controls */
        }
        /* Fade controls with items */
        .next.left,
        .prev.right {
            opacity: 1;
            z-index: 1;
        }
        .active.left,
        .active.right {
            opacity: 0;
            z-index: 2;
        }
        @media(min-width:768px) {
            .last_carousel{
                margin-left: -107%;
                margin-top: -10%;
            }
            .last_header{
                margin-left: -215%;
            }
            #previousconference{}
        }
    </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll link" href="#previousconference">Previous Conferences</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro" id="rait2016" >
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">RAIT- 2018</h1>
                        <p class="intro-text">4<sup>th</sup> IEEE International Conference on 
Recent Advances in Information Technology</p>
                            <form action="rait2018.php">
                               <input type="submit" value="Enter RAIT 2018">
                            </form> 
                            <form action="images.php">
                               <input type="submit" value="View RAIT 2016 Images">
                            </form> 
                        <br><br><p class="intro-text" style="font-size: 1.5em">Organised by<br>Department of Computer Science and Engineering,<br>IIT(ISM) Dhanbad</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section  class="container content-section text-center">
        <div class="row a_little_above">
            <center><h2>Previous Conferences</h2></center>
        </div>
        <div class="row" id="previousconference"><br><br>
            <div class="row prev">
                <div class="col-lg-4">
                   <div class="container">
                    <br>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="../gallery/img2007/1.jpg" width="30%" height="30%">
                                </div>

                                <div class="item">
                                    <img src="../gallery/img2007/2.jpg" width="30%" height="30%">
                                </div>
        
                                <div class="item">
                                    <img src="../gallery/img2007/5.jpg" width="30%" height="30%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><h3>RAIT-2007</h3>

                </div>
                <div class="col-lg-4">
                   <div class="container">
                    <br>
                        <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel2" data-slide-to="1"></li>
                                <li data-target="#myCarousel2" data-slide-to="2"></li>
                                <li data-target="#myCarousel2" data-slide-to="3"></li>
                                <li data-target="#myCarousel2" data-slide-to="4"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="../gallery/img2009/4.jpg" width="30%" height="30%">
                                </div>

                                <div class="item">
                                    <img src="../gallery/img2009/5.jpg" width="30%" height="30%">
                                </div>
        
                                <div class="item">
                                    <img src="../gallery/img2009/3.jpg" width="30%" height="30%">
                                </div>
                                
                                <div class="item">
                                    <img src="../gallery/img2009/2.jpg" width="30%" height="30%">
                                </div>
                                
                                <div class="item">
                                    <img src="../gallery/img2009/1.jpg" width="30%" height="30%">
                                </div>
                            </div>
                        </div>
                </div>
                <br><h3>RAIT-2009</h3>
            </div>
            <div class="col-lg-4">
               <div class="container">
                <br>
                    <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                    
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel3" data-slide-to="1"></li>
                            <li data-target="#myCarousel3" data-slide-to="2"></li>
                            <li data-target="#myCarousel3" data-slide-to="3"></li>
                            <li data-target="#myCarousel3" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                    <img src="../gallery/img2012/6.jpg" width="30%" height="30%">
                                </div>
                                <div class="item">
                                    <img src="../gallery/img2012/4.jpg" width="30%" height="30%">
                                </div>
                                <div class="item">
                                    <img src="../gallery/img2012/5.jpg" width="30%" height="30%">
                                </div>

                                <div class="item">
                                    <img src="../gallery/img2012/7.jpg" width="30%" height="30%">
                                </div>
        
                                <div class="item">
                                    <img src="../gallery/img2012/3.jpg" width="30%" height="30%">
                                </div>
                        </div>
                    </div>
            </div>
            <br><h3>RAIT-2012</h3>
            <div >
               <div class="container last_carousel">
                <br>
                    <div id="myCarousel4" class="carousel slide" data-ride="carousel">
                    
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel4" data-slide-to="1"></li>
                            <li data-target="#myCarousel4" data-slide-to="2"></li>
                            <li data-target="#myCarousel4" data-slide-to="3"></li>
                            <li data-target="#myCarousel4" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="../gallery/img2014/7.jpg" width="30%" height="30%">
                            </div>

			    <div class="item">
                                <img src="../gallery/img2014/6.jpg" width="30%" height="30%">
                            </div>
                            <div class="item">
                                <img src="../gallery/img2014/1.jpg" width="30%" height="30%">
                            </div>
                            <div class="item">
                                <img src="../gallery/img2014/2.jpg" width="30%" height="30%">
                            </div>
    
                            <div class="item">
                                <img src="../gallery/img2014/5.jpg" width="30%" height="30%">
                            </div>
                        </div>
                    </div>
            </div>
            <br><h3 class="last_header">RAIT-2014</h3>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section2 text-center">
        <div class="row sponsors">
        <div class="row span12">
    <div class="col-md-4">
    </div>
    <div class="col-md-4 thanks">
       Previous Technical Sponsors
    </div>
    <div class="col-md-4">
    </div>
  </div>
  <div class="row span12 logo-row">
    <div class="col-md-4 col-sm-4">
    </div>
    <div id="footerDoubleHelix" class="col-md-2 col-sm-2">
      <h3></h3>
      <img src="images/IEEE.gif" style="margin-left:5px;"height="80px" width="190px"/>

    </div>
    <div id="footerHelix" class="col-md-2 col-sm-2">
      <!-- Silver Sponsors in h3-->
      <h3></h3>
      <img src="images/ieee_cs_cc.gif" style="margin-left:5px;"height="80px" width="190px"/>
      
    </div>
 
    <div class="col-md-4 col-sm-4">
    </div>
  </div>
</div>

    </section>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>