<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
			
<h1><span>Cloud Service Provider Login</span></h1>
<div style="padding:10px">
          <div> <br>
            <form action="" method="post">
              <table width="97%" cellpadding="7" cellspacing="0">
                <tbody>
				<tr>
                  <td class="body" id="Company" width="5" valign="top" align="left"><strong>Username:</strong></td>
                  <td width="280" valign="top" align="left"><input name="uname" size="30" type="text" required></td>
                </tr>
                <tr>
                  <td class="body" id="Contact" valign="top" align="left"><strong>Password:</strong></td>
                  <td valign="top" align="left"><input name="upass" size="30" type="password" required></td>
                </tr>
				
						
                <tr>
                  <td></td>
                  <td><input name="submit" class="button" value="Login" type="submit"></td>
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
<?php if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$q=mysql_query("select * from cloudmngr where uname='$uname' and upass='$upass'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
$r=mysql_fetch_array($q);
$_SESSION['eid']=$r['eid'];
$_SESSION['cluname']=$r['uname'];
$_SESSION['mtype']=$r['mtype'];
$_SESSION['pcloud']=$r['cloud'];

echo "<script type='text/javascript'>alert('Cloud manager login successful');</script>";
echo '<meta http-equiv="refresh" content="0;url=upload_file.php">';
}
else
{
echo "<script type='text/javascript'>alert('You are not authorised user');</script>";
}
}

include "footer.php"; ?>
	