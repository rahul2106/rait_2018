<?php include'functions.php' ?>


<!doctype html>

<?php meta();?>

</head>

<body id="ctl00_mainBody">





<?php head(); ?>




<?php social(); ?>

<?php mainnav(); ?>

</br></br></br></br>

<form  style ="margin-left:20%" id="form1" name="form1" method="post" action="index.php">

            <table width="100%" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td width="29%" class="ralign"><span class="ralign">Name&nbsp;</span></td>
                  <td colspan="2" class="lalign"><input name="name" type="text" id="name" size="30" maxlength="30" /></td>
                </tr>
                <tr>
                  <td class="ralign"><span class="style1">Email ID&nbsp;</span></td>
                  <td colspan="2" class="lalign"><input name="email" type="text" id="email" size="30" maxlength="30" /></td>
                </tr>
                <tr>
                  <td class="ralign"><span class="style1">Phone no</span></td>
                  <td colspan="2" class="lalign"><input name="phone" type="text" id="phone" size="30" maxlength="30" /></td>
                </tr>
                <tr>
                  <td class="ralign"><span class="style1">Designation</span></td>
                  <td colspan="2" class="lalign"><select name="designation" size="1" id="designation">
                    <option>Student&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                    <option>Teacher&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                    <option>Other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                  </select></td>
                </tr>
                <tr>
                  <td class="ralign"><span class="style1">Comments</span></td>
                  <td colspan="2" class="lalign"><textarea name="comments" cols="24" id="comments"></textarea></td>
                </tr>
                <tr>
                  <td class="ralign">&nbsp;</td>
                  <td width="11%">
                    
                    <div align="left">
                      <input type="reset" name="Reset" id="Reset" value="Reset" />
                    </div></td>
                  <td width="60%" class="lalign">
                    <div align="left">
                      <input type="submit" name="Submit" id="Submit" value="Submit" />
                    </div></td>
                </tr>
              </table>
            </form>


</br></br>

<?php footer(); ?>

<?php scripts(); ?>


</div>



</body>
</html>
