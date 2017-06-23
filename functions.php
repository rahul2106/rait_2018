<?php 

function meta() {

  ?>

  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head id="ctl00_Head1"><meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>
   RAIT 2018 | IIT(ISM)
</title><meta name="description" />
<meta name="author" />
<link rel="stylesheet" type="text/css" href="WorkArea/FrameworkUI/css/ektron.stylesheetd9b8.css?id=-1759591071" />
<link href="redesign/css/bootstrap.css" rel="stylesheet" /><link href="redesign/css/main.css" rel="stylesheet" />
<link href="redesign/css/jquery.jscrollpane.css" rel="stylesheet" />
<!--[if lt IE 9]>
      <script src="/redesign/js/htmKl5shiv.js"></script>
    <script src="/redesign/js/html5shiv-printshiv.js"></script>
      <script src="/redesign/js/respond.min.js"></script>
      <script src="/redesign/js/css3-mediaqueries.js"></script>
<![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->

<script type='text/javascript'>var menuSection = 'Attend';</script>

<script type="text/javascript">
    function OnSubmitForm() {
        document.search_form.action = "/SearchConvention.aspx?SearchString=" + document.getElementById("search_term").value;
        //document.search_form.action = "/SearchResults.aspx?terms=" + document.getElementById("search_term").value;
        return true;
    }
  </script>
  <style type="text/css">
        li#topItem8 {display:none;}
  </style>
  
    <script type="text/javascript">
        function OnSubmitSignUp() {
            document.signup_form.action = "/SignUp.aspx?email=" + document.getElementById('txtEmail').value;
            return true;
        }
  </script>
  <style>
    aside.sponsors {display:none;}
    /*.carousel-caption p {margin-top:0;margin-bottom:0;}*/
      .home-pannels .pannel1 a { display:inline; }
    @media only screen and (max-width: 320px) {
    .thumbnail .caption {margin-top:5px;}
    }
  </style>

  
  <a href="../plus.google.com/104368869349140135376.html" rel="publisher"><span style="color:white;display:none;">Google+</span></a>

<?php
}



function  head() {
	?>
<div class="static-menu">
  <div class="container">
       <img class="bio-logo" id="ieee-logo" alt="logo" src="images/IEEE.gif">
    <a id="mini-logo" href="index.php">
      <img class="bio-logo" id="rait-logo" alt="logo" src="redesign/images/logo.png"></a>
  
  </div>
  <div class="container header-text" style="margin-top: -30px;">
    
    <div class="register">
        
  
        
      
        
      <!--Search Area-->
      <div class="form" id="search-bar">
        <div class="collapse navbar-collapse"  >
          <ul class="nav navbar-nav visible-xs">
            <li>
              <a href="#" data-toggle="collapse" data-target="#search-bar" class="close-btn text-left visible-xs">
                <span class="glyphicon glyphicon-remove-sign"></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!--Search Area Ends-->
      
    </div>
    <h2 class="header_top" style="line-height:1.5;">4<sup>th</sup> IEEE International Conference on Recent Advances In Information Technology<br>15<sup>th</sup> - 17<sup>th</sup> March'18 | Dhanbad, INDIA</h2>
  </div>
</div>
	

	<?php
}


function social (){
  ?>
  <nav class="social"> 
  <a target="_blank" href="#" class="ico-lk">
    <img alt="Linkdin" src="redesign/images/lk.png">
  </a>
  <a target="_blank" href="" class="ico-tw">
    <img alt="Twitter" src="redesign/images/tw.png">
  </a>
  <a href="http://www.facebook.com/raitcse" href="" class="ico-fb">
    <img alt="Facebook" src="redesign/images/fb.png">
  </a>
  <a target="_blank" href="" class="ico-gp">
    <img alt="Google+" src="redesign/images/googleplus.png">
  </a>
  <a target="_blank" href="" class="ico-m">
    <img alt="M" src="redesign/images/m.png">
  </a>
  <a target="_blank" href="" class="ico-yt">
    <img alt="YouTube" src="redesign/images/yt.png">
  </a>
  <a target="_blank" href="" class="ico-fk">
    <img alt="Flickr" src="redesign/images/fk.png">
  </a>
  <a href="#" class="ico-rs">
    <img alt="RSS" src="redesign/images/rs.png">
  </a>
  <a target="_blank" href="" class="ico-ig">
    <img alt="Instagram" src="redesign/images/ig.png">
  </a>
  <!--<a target="_blank" href="#" class="ico-s">
    <img alt="Share" src="/redesign/images/s.png">
  </a>-->
</nav>


<?php
}




function mainnav (){


?>
<style type="text/css">
/*#technicalSession a{
  color:yellow !important;
}*/
/*#topItem4 a{
  color:yellow !important;
}*/
#importantdates a{
  color:yellow !important;
}
</style>
<div class="quick-links-tab">
    <div>
      <p>Quick Links</p>
    </div>
    <nav class="quick-links">
     <ul>
       <li><a href="brochure.php" >Brochure</a></li>
       <li id="importantdates"><a href="impdates.php" title="2015 Housing">&#9733 Important Dates</a></li>
       <li><a href="accomodation.php" title="2015 Exhibiting Info">Accomodation</a></li>
       <li><a href="registration.php">Registration</a></li>
       <li><a href="venue.php">Venue</a></li> 
       <li><a href="contactus.php">Contact Us</a></li>
     </ul>  
      
    </nav>
</div>


<!--Mobile Nav Starts-->
  <div class="mobile-top-menu visible-xs">
    <a href="#" data-toggle="collapse" data-target="#search-bar" class="navbar-toggle collapsed search-button"><span class="glyphicon glyphicon-search"></span></a>
    <a href="#" class="bordered " data-toggle="collapse" data-target="#quick-link" ><span class="glyphicon glyphicon-link"></span></a>
    <button type="button" class="navbar-toggle collapsed pull-right push-control" data-toggle="collapse" data-target="#menu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
<!--Mobile Nav Ends-->
<!--Push-menu-->
<div data-spy="affix" data-offset-top="120" class="navbar navbar-default navbar-fixed-top home-menu push-menu">
  <div class="container">
    <div id="menu" class="collapse navbar-collapse">
      <ul class="list-unstyled">
        <li>
          <a href="#" data-toggle="collapse" data-target="#menu" class="close-btn"><span class="glyphicon glyphicon-remove-sign"></span></a>
        </li>
      </ul>
          <nav>
          </nav>
      </div>
    </div>
</div>
<!--Push Menu Ends--> 
<!--Search Bar-->
<div data-spy="affix" data-offset-top="120" class="navbar navbar-default navbar-fixed-top visible-xs">
  <div class="container">
    <div class="collapse navbar-collapse"  >
    <ul class="nav navbar-nav visible-xs">
      <li class="no-border">
        <a href="#" data-toggle="collapse" data-target="#search-bar" class="close-btn"><span class="glyphicon glyphicon-remove-sign"></span></a>
      </li>
      <li class="append-search no-border">
        
      </li>
    </ul>
    </div>
  </div>
</div>
<!--Search Bar Ends-->
<!--Quick Links-->
<div data-spy="affix" data-offset-top="120" class="navbar navbar-default navbar-fixed-top  visible-xs">
  <div class="container">
    <div class="collapse navbar-collapse" id="quick-link">
      <ul class="nav navbar-nav visible-xs">
        <li>
          <a href="#" data-toggle="collapse" data-target="#quick-link" class="close-btn"><span class="glyphicon glyphicon-remove-sign"></span></a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--Quick Links Ends-->


<div data-spy="affix" data-offset-top="120" class="navbar navbar-default navbar-fixed-top home-menu">
  <div class="container">
    <div class="collapse navbar-collapse menu-append" id="main_nav_top">
        <ul class="nav navbar-nav">
        <li><a id="mini-logo" href="index.php"><img class="mini-logo" alt="logo" src="redesign/images/mini-logo.png"></a></li>
            <li id="topItem1" class="dropdown">


<a href="rait2018.php"  class="dropdown-toggle" data-toggle="dropdown" alt="">
Home</a>

</li>
<li id="topItem2" class="dropdown">
<a href="rait2018.php"  class="dropdown-toggle" data-toggle="dropdown" alt="">
About</a>
<ul class="dropdown-menu"><li><div class="row">
<ul class="list-unstyled col-md-6">
<li  >
<a href="aboutrait.php"   alt="">About RAIT</a>
</li>
<li  >
<a href="aboutdepartment.php"   alt="">About Department</a>
</li>
<li></li>
<a href="aboutism.php"   alt="">About IIT(ISM)</a>
</li>
</ul>
</div></li></ul>
</li>
<li id="topItem2" class="dropdown">
<a href="#"  class="dropdown-toggle" data-toggle="dropdown" alt="">
Committee</a>
<ul class="dropdown-menu">
  <li><div class="row">
    <ul class="list-unstyled col-md-6">
      <li>
      <a href="commitee_conference_chairs.php">Conference Chairs</a>
      </li>
      <li  >
      <a href="commitee_advisory.php" >Advisory Board</a>
      </li>
      <li>
      </li>
      <li>
      <a href="commitee_organising.php"   alt="">Organizing & Technical Committe</a>
      </li>
    </ul>
  </div></li>
</ul>
</li>
<li id="topItem3" class="dropdown">
  <a href="rait2018.php"  class="dropdown-toggle" data-toggle="dropdown" alt="">
  Schedule</a>
  <ul class="dropdown-menu">
    <li>
      <div class="row">
        <ul class="list-unstyled col-md-6">
        <!-- 
        <li>
          <a href="files/ProgramSchedule.pdf" alt="">Program Schedule</a>
        </li>
        <li>
          <a href="files/TechnicalSession.pdf" alt="">Technical Session</a>
        </li> -->
        <li><i>(To Be Announced)</i></li>        
        </ul>
      </div>
    </li>
  </ul>
</li>
<li id="topItem4" class="dropdown">
<a href="rait2018.php"  class="dropdown-toggle" data-toggle="dropdown" alt="">
Tutorials</a>
<ul class="dropdown-menu">
  <li><div class="row">
    <ul class="list-unstyled col-md-6">
      <!-- <li>
      <a href="commitee_conference_chairs.php">Conference Chairs</a>
      </li>
      <li  >
      <a href="commitee_advisory.php" >Advisory Board</a>
      </li>
      <li>
      </li>
      <li>
      <a href="commitee_organising.php"   alt="">Organising Committe</a>
      </li> -->
      <li><i>(To Be Announced)</i></li>
    </ul>
  </div></li>
</ul>
</li>
<li id="topItem5" class="dropdown">
<a href="rait2018.php"  class="dropdown-toggle" data-toggle="dropdown" alt="">
Speakers</a>
<ul class="dropdown-menu">
  <li><div class="row">
    <ul class="list-unstyled col-md-6">
      <!-- <li>
      <a href="commitee_conference_chairs.php">Conference Chairs</a>
      </li>
      <li  >
      <a href="commitee_advisory.php" >Advisory Board</a>
      </li>
      <li>
      </li>
      <li>
      <a href="commitee_organising.php"   alt="">Organising Committe</a>
      </li> -->
      <li><i>(To Be Announced)</i></li>
    </ul>
  </div></li>
</ul>
<!--
<ul class="dropdown-menu"><li><div class="row">
<ul class="list-unstyled col-md-6">
<li  >
<a href="callforpaper.php"  alt="">Call For Papers</a>
</li>
<li  >
<a href="speakers.php"   alt="">Speakers</a>
</li>
<li  >
<a href="newAcceptedPapers.php"    alt="">List of New Accepted Papers</a>
</li>
</ul>
<ul class="list-unstyled col-md-6">
<li  >
<a href="files/TechnicalSession.pdf" alt="">Program Schedule</a>
</li>

<li  >
<a href="acceptedPapers.php"    alt="">List of Accepted Papers</a>
</li>

</ul>
</div></li></ul>-->
</li>
<li id="topItem7" class="dropdown">
<a href="sponsors.php"  class="dropdown-toggle" data-toggle="dropdown" alt="">
Sponsors</a>
</li>
<li id="topItem8" class="dropdown">
  <a href=""  class="dropdown-toggle" data-toggle="dropdown" alt="">
  More Info</a>
  <ul class="dropdown-menu">
    <li>
      <div class="row">
        <ul class="list-unstyled col-md-6">
        <li>
          <a href="accomodation.php"   alt="">Accomodation</a>
        </li>
        <li>
        <a href="venue.php"   alt="">Venue</a>
        </li>
        </ul>
      </div>
    </li>
  </ul>
</li>
<li id="topItem9" class="dropdown">
  <a href="contactus.php"  class="dropdown-toggle" data-toggle="dropdown" alt="">
Contact Us</a>
</li>

    
      </ul>
    </div>
  </div>

  <!--<div class= "container" >
    <font color="white" size="4"><b><marquee onmouseover="this.stop();" onmouseout="this.start();"><a href="files/RAIT2016Report.pdf"><span style="color:#FFF;">
    *** Report of RAIT-2016 ***</span></marquee></b></a>
  </font>
  </div>-->

</div>

<?php
}


function  footer (){


  ?>

  <div class="row sponsors">
  <div class="row span12">
    <div class="col-md-4">
    </div>
    <div class="col-md-4 thanks">
       Technical Sponsors
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
<!-- Dev 4106 - Live 5103 -->

<!--
<aside class="box sponsors auto-rotate"><h2>Sponsors</h2><ul><li id="sponsorCategory_1"><h3>Event Sponsors</h3><ul class="slides"><li class="active"><a href="" target="_blank">  <img src="images/CSI.jpg " height="80px"/>
    </a></li><li><a href="" target="_blank"><img title="Amgen" style="" alt="Amgen" src=""/></a></li><li><a href="" target="_blank"><img src="" alt="Astrazeneca" /></a></li><li><a href="" target="_blank"><img title="JnJ" alt="JnJ" src="" /></a></li><li><a href="" target="_blank"><img title="_Lilly_" style="" alt="_Lilly_" src="" /></a></li><li><a href="" target="_blank"><img src="" alt="Merck" /></a></li><li><a href="#" target="_blank"><img src="" alt="Takeda" title="Takeda" /></a></li></ul></li><li id="sponsorCategory_2"><h3>Silver Sponsors</h3><ul class="slides"><li class="active"><a href="" target="_blank"><img src="" alt="Baxter" /></a></li><li><a href="" target="_blank"><img src="" alt="Pfizer" /></a></li></ul></li><li id="sponsorCategory_3"><h3>Sponsors</h3><ul class="slides"><li class="active"><a href="" target="_blank"><img src=""Alt="Alexandria" /></a></li><li><a href="" target="_blank"><img alt="daiichi" src="" title="daiichi" /></a></li><li><a href="" target="_blank"><img title="Ernst" style="height: 82px; width: 170px;" alt="Ernst" src="" width="170" height="82" /></a></li><li><a href="" target="_blank"><img title="foley" alt="foley" src="" /></a></li><li><a href="" target="_blank"><img src="" alt="Genentech" /></a></li><li><a href="" target="_blank"><img src="" alt="Georgia" /></a></li><li><a href="" target="_blank"><img title="GSK" alt="GSK" src="" /></a></li><li><a href="" target="_blank"><img src="" alt="Novartis1" /></a></li><li><a href="" target="_blank"><img src="" alt="PA-BIO" /></a></li><li><a href="" target="_blank"><img src="" alt="Sanofi" /></a></li></ul></li></ul></aside>-->

<footer class="footer">
<div class="container">



<div class="row span12 big-footer home-accordion" id="accordion-inner" data-collapse-type="manual">
      <div class="col-md-4 col-sm-4 accordion-group">
        <h3 class="accordion-toggle collapsed nothing" data-toggle="collapse" data-parent="#accordion-inner">Follow @RAIT2018</h3>
        <p style="font-size:1em;padding-top:7%"><a href="http://www.facebook.com/raitcse">
          <img style="height:15%;width:15%;margin-top:-5.5%;margin-right:10%;" alt="Facebook" src="images/fb.png">Facebook</a>
        </p>
        <!-- <h3 class="accordion-toggle collapsed nothing" data-toggle="collapse" data-parent="#accordion-inner">Other Events</h3>
        <p style="font-size:1em;padding-top:7%;margin-bottom:-15%;"><a href="http://www.hackfestism.org">
          <img style="height:15%;width:15%;margin-top:-5.5%;margin-right:10%;" alt="HackfestISM" src="images/hackfest.png">HackfestISM</a>
        </p> -->
      </div>
      <div class="col-md-4 middle">
        <h3>&nbsp;&nbsp;We are here to help</h3>
        <br>
        <p class="sub-text" style="padding-left:1.8em">&nbsp;&nbsp;Mail us your questions at<br><a href="mailto:rait2018@cse.ism.ac.in">rait2018@cse.ism.ac.in</a></p>
      <!--
        <p>Exhibiting/Advertising......<span><a href="">exhibit@bio.org</a></span></p>
        <p>Housing....................<span><a href="">BIO@tphousing.com</a></span></p>   -->


      </div>
      <div class="col-md-4 col-sm-4">
        <h3 class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-inner" href="#bio-byday">One-on-One Partnering </h3>
        <div id="bio-byday" class="collapse">
        <br>
        <a style="text-align:left; " href="sponsors.php">Our Previous Sponsors</a>

      
        </div>
      </div>
    </div>


    
    
</div>
</footer>
<footer class="sub-footer">
    <div class="container">
      <p class="address">
        © 2018 | Recent Advances In Information Technology | Indian Institute of Technology (Indian School Of Mines) | Dhanbad, Jharkhand | India
      </p>
      <p class="footer-menu">
        <a href="contactus.php">Contact Us</a>
      </p>
    </div>
</footer>

<?php


}


function scripts (){

  ?>


<script src="redesign/js/jquery.js"></script>
    <script src="redesign/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="redesign/js/bootstrap.js"></script>
  <script type="text/javascript" src="redesign/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="redesign/js/jquery.mousewheel.js"></script>
  <script type="text/javascript" src="redesign/js/jquery.contentcarousel.js"></script>
  <script type="text/javascript" src="redesign/js/main.js"></script>
  <!--Push Menu-->
    <script src="redesign/js/jquery.multilevelpushmenu.min.js"></script>
      <script type="text/javascript" src="redesign/js/bootstrap_integration.js"></script>
  <!--Push Menu Ends--> 
  <script type="text/javascript">

      var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-27376923-1']);
                _gaq.push(['_setDomainName', 'convention.bio.org']);
                _gaq.push(['_setAllowLinker', true]);
                _gaq.push(['_trackPageview']);
                
                (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();

                (function($) {
                    $(function() {
                        $('a[href*="www.compusystems.com"], a[href*="bio13.mapyourshow.com"]').click(function(e) {
                            e.preventDefault();
                            if($(this).attr('href') == 'https://www.compusystems.com/servlet/ar?evt_uid=402')
                                _gaq.push(['_trackEvent','RegisterNow','https://www.compusystems.com/servlet/ar?evt_uid=402']);
                            _gaq.push(['_link', $(this).attr('href')]);
                        });
                    });
                })(jQuery);
    </script>
  
  <script type="text/javascript">
      $(function() {
          $('.fancybox-youtube').click(function(e) {
              e.preventDefault();
              _gaq.push(['_trackEvent', 'Digital Daily Videos', $(this).next().text()]);
          });
      });
       </script> 



       
    <!-- Google Code for All Website Visitors Remarketing List -->

 <!--   
    <script type="text/javascript">
        var google_conversion_id = 977693820;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "GNVeCJTYywMQ_NiZ0gM";
        var google_conversion_value = 0;
    </script>
 
    <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/977693820/?label=GNVeCJTYywMQ_NiZ0gM&amp;guid=ON&amp;script=0"/>
        </div>
    </noscript>
    -->
  <?php

}



