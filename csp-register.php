<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
			
<h1><span>Cloud Service Provider Register</span></h1>
<div style="padding:10px">
          <div> <br>
            <form action="" method="post">
              <table width="97%" cellpadding="7" cellspacing="0">
                <tbody>
				
				 <tr>
                  <td class="body" id="Address" valign="top" align="left"><strong>Name: </strong></td>
                  <td valign="top" align="left"><input name="fname" size="30" type="text" required></td>
                </tr>

				<tr>
                  <td class="body" id="Company" width="25" valign="top" align="left"><strong>Username:</strong></td>
                  <td width="280" valign="top" align="left"><input name="uname" size="30" type="text" required></td>
                </tr>
                <tr>
                  <td class="body" id="Contact" valign="top" align="left"><strong>Password:</strong></td>
                  <td valign="top" align="left"><input name="upass" size="30" type="password" required></td>
                </tr>

                <tr>
                  <td></td>
                  <td><input name="submit" class="button" value="Register" type="submit"></td>
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
$fname=$_POST['fname'];
$uname=$_POST['uname'];
$upass=$_POST['upass'];


$q=mysql_query("select * from cloudmngr where fname='$fname'and uname='$uname' and upass='$upass'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('Manager already registered');</script>";
}
else
{
mysql_query("insert into cloudmngr(fname,uname,upass)values('$fname','$uname','$upass')");
echo "<script type='text/javascript'>alert('Manager registered successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=csp-login.php">';
}
}
	include "footer.php"; ?>
	