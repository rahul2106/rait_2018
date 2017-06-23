<?php include'functions.php' ?>


<!doctype html>

<?php meta();?>
<style type="text/css">
body
{
  font-size: 16px;
  line-height: 1.6;
}
#content
{
 margin-left: 10%;
  width: 80%;
}
.page_heading_mohit
{
  font-size:24px;
  font-weight:800; 
  color:#102049;
  text-align: center;
}
#map-canvas{



  height:350px;
  width:71%;
  margin-left:13%;
  
  
}


</style>
<script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      
    </script>
</head>

<body id="ctl00_mainBody">





<?php head(); ?>




<?php social(); ?>

<?php mainnav(); ?>


</br></br>

<div id="content">
  <h2 class="page_heading_mohit">VENUE</h2>
  <hr width="50%"/>
	<p style="text-align:justify;">
              <br />
            <p>Indian Institute of Technology (Indian School of Mines)  is located at a distance of 3 kms from Dhanbad    Railway Station. Dhanbad is well connected by rail and road with important    cities of the country like Chennai, Delhi, Kolkata, Mumbai. The  nearest airports are Kolkata (250Km) and Ranchi (180Km).</p>

            <p align="center" class="style1">
              <div id="map-canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1910346099958!2d86.44478999999997!3d23.811804999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6bc9972c5cbd9%3A0xf421418d16d76691!2sIndian+School+of+Mines+Gate+2!5e0!3m2!1sen!2sin!4v1421519418038" width="859" height="350" frameborder="0" style="border:0"></iframe></div>          


            </p>
            <br/>
            <h2>Tourist Places</h2>
            <hr width="50%"/>

              <br /><p>The collieries,    various technical institutions and research centres of high order,    attractives neighbourhood and the landscapes are the attractions of this    industrial city. </p>

            <ul type="disc">

              <li class="style1"><strong>Bodh Gaya : </strong>255 km from Dhanbad. Gautama Buddha is said to have attained Enlightment here, known by Buddhists as 'Bodhimandala'.  </li>

              <li class="style1"><strong>Parasnath : </strong>47 km from Dhanbad.  Highest mountain in state of Jharkhand, refered to as Shri Sammet Shikhar Teerth in Jainism. </li>

              <li class="style1"><strong>Topchanchi         :</strong> 37 kms. This is a beautiful lake, surrounded by         green hills. </li>

              <li class="style1"><strong>Jharia         : </strong>Suburbs of Dhanbad, is rich colliery centre &amp; has         entensive commerce. </li>

              <li class="style1"><strong>Sindri         :</strong> 30 kms. Fertiliser &amp; other factories &amp; Bihar         Institute of Technology. </li>

              <li class="style1"><strong>Maithon         Dam : </strong>52 kms. D.V.C Dam. </li>

              <li class="style1"><strong>Panchet         Dam : </strong>D.V.C Dam. </li>

            </ul><br />

           <h2>For more information</h2>
            <hr width="50%"/>
            <a href="http://www.traveljharkhand.com" target="_blank">TravelJharkhand.com</a>
	          <br/>
            <a href="#" class="style4">List of Trains to and from Dhanbad</a>
            <br/>
            <a href="accomodation.php" class="style4">List of Hotels in Dhanbad</a>
</div>

</br></br>


<?php footer(); ?>

<?php scripts(); ?>


</div>



</body>
</html>
