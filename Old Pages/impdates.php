<?php include'functions.php' ?>


<!doctype html>

<?php meta();?>

<style>

table,td,tr   
{
	margin-left: 35%;
  font-size: 16px;
  border: solid 2px black;
  padding: 10px;
  font-variant: normal;
  text-align: center;
}
#table_head
{
  font-size: 20px;
}</style>

</head>

<body id="ctl00_mainBody">





<?php head(); ?>




<?php social(); ?>

<?php mainnav(); ?>


<br><br>

<center><h1 style="font-size:20px;">IMPORTANT DATES</h1></center>

</br>
     <table>
      <tr >
        <td id="table_head" style="background-color:#66B9FF; font-weight:bold; color:#000000;"><strong>Event</strong></td>
         <td id="table_head" style="background-color:#66B9FF; font-weight:bold; color:#000000;"><strong>Date</strong></td>
      </tr>

      <tr>
        <td>Paper Submission Deadline</td>
         <td style="color:red"><strike>02<sup>nd</sup> November, 2015<br>23<sup>rd</sup> November, 2015<br></strike>(Closed)</td>
      </tr>

      <tr>
        <td>Notification of Acceptance</td>
         <td style="color:red">(Notified)<br><u><a href="files/ListOfAcceptedPapers.pdf">Click Here for List</u></a></td>
         <!--<td style="color:red"><strike>30<sup>th</sup> November, 2015<br>22<sup>nd</sup> December, 2015</strike><br>(Notified)</td>-->
      </tr>

      <tr>
        <td>Submission of Camera Ready Paper</td>
         <td><strike>30<sup>th</sup> December, 2015</strike></td>
      </tr>

      <tr>
        <td>Early Registration</td>
         <td style="color:green">11<sup>th</sup> January, 2016<br><a href="registration.php">(Click here for details)</a></td>
      </tr>

      <tr>
        <td>Tutorials</td>
         <td>03<sup>rd</sup> March, 2016</td>
      </tr>

      <tr>
        <td>Conference</td>
         <td>04<sup>th</sup> - 05<sup>th</sup> March 2016</td>
      </tr>

     </table>
 </br></br>

<?php footer(); ?>

<?php scripts(); ?>


</div>



</body>
</html>