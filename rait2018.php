<?php include'functions.php' ?>


<!doctype html>

<!-- Mirrored from convention.bio.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Feb 2015 10:23:23 GMT -->


<?php meta(); ?>


<?php head(); ?>

<script type = "text/javascript">
          function displayNextImage() {
              x = (x === images_2007.length - 1) ? 0 : x + 1;
              document.getElementById("img2007").src = images_2007[x];
              document.getElementById("img2009").src = images_2009[x];
              document.getElementById("img2012").src = images_2012[x];
              document.getElementById("img2014").src = images_2014[x];
          
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img2007").src = images_2007[x];
              document.getElementById("img2009").src = images_2009[x];
              document.getElementById("img2012").src = images_2012[x];
              document.getElementById("img2014").src = images_2014[x];
    
          }

          function startTimer() {
              setInterval(displayNextImage, 2000);
          }

          var images_2007 = [], x = -1;
          images_2007[0] = "gallery/img2007/1.jpg";
          images_2007[1] = "gallery/img2007/2.jpg";
          images_2007[2] = "gallery/img2007/3.jpg";
          images_2007[3] = "gallery/img2007/4.jpg";
          images_2007[4] = "gallery/img2007/5.jpg";

           var images_2009 = [], x = -1;
          images_2009[0] = "gallery/img2009/1.jpg";
          images_2009[1] = "gallery/img2009/2.jpg";
          images_2009[2] = "gallery/img2009/3.jpg";
          images_2009[3] = "gallery/img2009/1.jpg";
          images_2009[4] = "gallery/img2009/2.jpg";
       
       var images_2012 = [], x = -1;
          images_2012[0] = "gallery/img2012/1.JPG";
          images_2012[1] = "gallery/img2012/2.JPG";
          images_2012[2] = "gallery/img2012/3.JPG";
          images_2012[3] = "gallery/img2012/4.JPG";
          images_2012[4] = "gallery/img2012/5.JPG";
        var images_2014 = [], x = -1;
          images_2014[0] = "gallery/img2014/1.JPG";
          images_2014[1] = "gallery/img2014/2.JPG";
          images_2014[2] = "gallery/img2014/3.JPG";
          images_2014[3] = "gallery/img2014/4.JPG";
          images_2014[4] = "gallery/img2014/5.JPG";
      
      </script>

<style>

table,td,tr   
{
	margin-left: 35%;
  font-size: 16px;
 border: solid 2px #ddd;
  padding: 10px;
  font-variant: normal;
  text-align: center;
}
#table_head
{
  font-size: 20px;
}

#img2007 ,#img2009,#img2012, #img2014 


{
	height:150px;

}
#rait_gallery tr td
{
	text-align: center;

}

#slide_change:hover
{
	cursor: pointer;
}
</style>


<?php social(); ?>

<?php mainnav(); ?>


<body onLoad="startTimer()">



<div class="container-fluid home-slider">
	<div class="row">
	    <div id="myCarousel" class="carousel slide span12">
	      <ol class="carousel-indicators">
	        
			        <li data-target="#myCarousel" data-slide-to='0' class='active'></li>
			    
			        <li data-target="#myCarousel" data-slide-to='1' class=''></li>
			    
			        <li data-target="#myCarousel" data-slide-to='2' class=''></li>
			    
			        <li data-target="#myCarousel" data-slide-to='3' class=''></li>
			    
			        <li data-target="#myCarousel" data-slide-to='4' class=''></li>
			    
	        
	      </ol>
		  <div class="selector-arrows">
		 	<span href="#myCarousel" data-slide="prev" class="" id="slide_change"> < </span>
		  	<span href="#myCarousel" data-slide="next" class="" id="slide_change" >></span>
	 	 </div>
		 <div class="slider-switch">
			 <!--<div>
			    <a href="files/brochure.pdf"title="Call for Sessions" target="_blank">Brochure</a>
			 	
			 </div>
			 <div>
			    <a href="registration.php" title="Registration Packages" target="_blank">Registration Packages</a>
			 	
			 </div> -->
		 </div>
	      <div class="carousel-inner">
	      	        <!--NEEDS CLASS ACTIVE IF ITS FIRST-->
			
			
			
			
			        <div class='item active'>
	                  <img src='images/rait_slide1.jpg' alt="">
	                  <div class="container">
	                    <div class="carousel-caption" style='margin-top:80px !important'>
	                      <h1>4<sup>th</sup> IEEE International Conference on <br />Recent Advances in Information Technology</h1>
	                      <p></p>
	                      <p><a class="btn btn-large btn-primary" href='registration.php'>Register</a></p>
	                    </div>
	                  </div>
	                </div>
			    
			        <div class='item '>
	                  <img src='images/rait_slide2.jpg' alt="">
	                  <div class="container">
	                    <div class="carousel-caption" style='margin-top:150px !important'>
	                      <h1>RAIT 2018 Call For Papers<br />Feel free to contact us </h1>
	                      <p></p>
	                      <p><a class="btn btn-large btn-primary" href='contactus.php'>Contact Us</a></p>
	                    </div>
	                  </div>
	                </div>
			    
			        <div class='item '>
	                  <img src='images/rait_slide3.jpg' alt="">
	                  <div class="container">
	                    <div class="carousel-caption" style='margin-top:80px !important'>
	                      <h1>IIT(ISM), Dhanbad <br />Home to RAIT 2018 </h1>
	                      <p>Join us as an Exhibitor <br />and Sponsor </p>
	                      <p><a class="btn btn-large btn-primary" href='sponsors.php'>Be a partner at RAIT</a></p>
	                    </div>
	                  </div>
	                </div>
			    
			        <div class='item '>
	                  <img src='images/rait_slide4.jpg' alt="">
	                  <div class="container">
	                    <div class="carousel-caption" style='margin-top:80px !important'>
	                      <h1>Past Conferences<br />from RAIT 2007 </h1>
	                      <p>Legacy of the RAIT 2018 <br /> since 2007	</p>
	                      <p><a class="btn btn-large btn-primary" href='index.php#previousconference'>View Images</a></p>
	                    </div>
	                  </div>
	                </div>
			    
			        <div class='item '>
	                  <img src='images/rait_slide5.jpg' alt="">
	                  <div class="container">
	                    <div class="carousel-caption" style='margin-top:30px !important'>
	                      <h1>Join us @ RAIT 2018<br />Start Planning Today</h1>
	                      <p>Indian Institute of Technology<br/>(Indian School of Mines), Dhanbad<br/><br/>Mark your calendar!</p>
	                      <p><a class="btn btn-large btn-primary" href='impdates.php'>Important Dates</a></p>
	                    </div>
	                  </div>
	                </div>

			    
			
			
	      </div>
	    </div>
	</div>
</div>

<div class="home-body">

    <div class="container home-pannels">
	    <div class="row text-center">
		    
            

            

            
			        <div class='col-lg-4 hero-feature pannel1'>
                        <div class="thumbnail">
	                      <img title="Convention Photos" alt="Convention Photos" src="images/small1.jpg" />
	                      <div class="caption">
	                          <h3>RAIT 2018</h3>
	                          <p>There are lots of great reasons to book with us! More than 30 hotels are offering discounts through<br /> 15<sup>th</sup>-17<sup>th</sup> MARCH, 2018.</p><a href="accomodation.php">LEARN HOW TO BOOK ACCOMODATION</a>
	                      </div>
	                    </div>
                    </div>
			    
   <div class='col-lg-4 hero-feature pannel2'>
                        <div class="thumbnail">
	                      <img title="Speakers" alt="Speakers" src="images/small2.jpg" />
	                      <div class="caption">
	                          <h3>Our Speakers</h3>
	                          <p>Take a glimpse at the experts who will share their ideas about the rapid strides being made in technology.<br /><br/></p><a target="_blank" href="speakers.php">VIEW SPEAKERS</a>
	                      </div>
	                    </div>
                    </div>
			    
			        <div class='col-lg-4 hero-feature pannel3'>
                        <div class="thumbnail">
	                      <img title="Schedule" alt="Calendar Icon" src="images/small3.jpg" />
	                      <div class="caption">
	                          <h3>Schedule at a Glance</h3>
	                          <p style="padding-bottom:2.5em;">3 full days of partnering, education and exhibits! You are invited to join us !</p><a href="503.php">VIEW THE SCHEDULE HERE</a>
	                      </div>
	                    </div>
                    </div>

    </div>



    <br><br>	   
      
      </div>
    </div>
    
</div>


<?php footer(); ?>


<?php scripts(); ?>

  </body>

<!-- Mirrored from convention.bio.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Feb 2015 10:24:30 GMT -->
</html>