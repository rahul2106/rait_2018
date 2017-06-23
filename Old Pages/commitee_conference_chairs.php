<?php include'functions.php' ?>


<!doctype html>

<?php meta();?>



<style>


h1
{
  font-size: 20px;
}
h2
{ 
  color:#102049;
  font-size: 20px;
  font-weight: 800;
}
.header_top{
  font-weight: 500;
}
#content
{
    font-size: 14px;
    line-height: 1.6;
}
.names
{
    font-weight: 800;
}
#advisoryboard
{
    text-align: left;
    left:10%;
    position: fixed;
}
#conferencechairs 
{   clear:both;
    text-align: left;
    position: relative;
    left: 13%;
}
#organizingcommittee
{
  clear:both;
    text-align: left;
    position: relative;
}

#scrollable{
  position: relative;
  left: 35%;
}

#jump_links{
  background-color: #EEEEEE;
  padding: 10px;
  border-radius: 5px;

}

#jump_links a
{
  font-size: 20px;
}

#jump_links a:hover
{
  color: red;
  cursor: pointer;
}
#center_content{
  margin-left: 40%;
  line-height: 1.6;

  padding-top: 5%;
  padding-bottom: 0px;
}

</style>
<script src="js/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

            
</head>

<body id="ctl00_mainBody" >





<?php head(); ?>




<?php social(); ?>

<?php mainnav(); ?>

  <div id="center_content">
    <h2 style="margin-left:50px; margin-bottom: 30px; font-size: 28px">Conference Chairs</h2>
    <div style="font-size:1.1em">
<span class="names">General & Program Chair:</span>       Dr. Chiranjeev Kumar<br/>
<span class="names">Program Co-Chair: </span>          Dr. Haider Banka <br/>
<span class="names">Organizing Chair:       </span>    Dr. S. Mukhopadhyay <br/>
<span class="names">Organizing Co-Chair:  </span>      Dr. Dharavath Ramesh    <br/> 
<span class="names">Tutorial Chair:    </span>         Dr. Sukomal Pal <br/>
<span class="names">Tutorial Co-Chairs: </span>        Dr. Soumen Bag, Ms. Tanusree Kaibartta<br/> 
<span class="names">Finance Chair:      </span>    Dr. Sachin Tripathi <br/>
<span class="names">Finance Co-Chairs:  </span>        Mr. A. C. S. Rao <br/>
<span class="names">Publication Chair:  </span>        Dr. Hari Om <br/>
<span class="names">Publication Co-Chair:</span>       Dr. A. Tarachand<br/> 
<span class="names">Sponsorship Chair:   </span>       Dr. Arup Kumar Pal <br/>
<span class="names">Sponsorship Co-Chair: </span>      Ms. Shweta R. Malwe <br/>
<span class="names">Publicity Chair:     </span>       Dr. Sushila Maheshkar<br/> 
<span class="names">Publicity Co-Chair:  </span>           Mr. Rajendra Pamula 
</div>
    
  </div><br><br><br><br><br>

            <footer class="sub-footer" style="position:fixed;bottom:0;width:100%;height:10%;padding:15px;">
    <div class="container">
      <p class="address" >
        © 2016 | Recent Advances In Information Technology | Indian School Of Mines | Dhanbad, Jharkhand | India
      </p>
      <p class="footer-menu">
        <a href="contactus.php">Contact Us</a> | <a>Site map</a> | <a target="_blank" href="">Terms &amp; Conditions</a> | <a target="_blank" href="">Privacy</a>
      </p>
    </div>
</footer>




<?php scripts(); ?>


</div>



</body>
</html>
