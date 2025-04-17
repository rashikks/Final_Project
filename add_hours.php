<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
			
<h1><span>Add Working hours</span></h1>
<div style="padding:10px">
          <div> <br>
            <form action="" method="post">
              <table width="97%" cellpadding="7" cellspacing="0">
                <tbody>
				
				 <tr>
                  <td class="body" id="Address" valign="top" align="left"><strong>Hours : </strong></td>
                  <td valign="top" align="left"><input name="hour" size="30" type="text" required></td>
                </tr>
			   
                <tr>
                  <td></td>
                  <td><input name="submit" class="button" value="Add hours" type="submit"></td>
                </tr>
              </tbody></table>
            </form>
          </div>
			
			</div>
			
			
				<div class="clear"></div>
				</div>
			</div>
			
		
		<div class="clear"></div>
	</div>
	<?php
if(isset($_POST['submit']))
{
$hour=$_POST['hour'];
$uname=$_SESSION['uname'];

mysql_query("insert into hour(hour,user)values('$hour','$uname')");
echo "<script type='text/javascript'>alert('User working hours added');</script>";
}
	include "footer.php"; ?>
	