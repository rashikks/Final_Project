<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
			
<h1><span>User Register</span></h1>
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
                  <td class="body" id="Phone" valign="top" align="left"><strong> Phone: </strong></td>
                  <td valign="top" align="left"><input name="phone" size="30" type="text" required></td>
                </tr>
                <tr>
                  <td class="body" id="Email" valign="top" align="left"><strong> Email: </strong></td>
                  <td valign="top" align="left"><input name="email" size="30" type="text" required></td>
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
                  <td class="body" id="Company" width="25" valign="top" align="left"><strong>Register number:</strong></td>
                  <td width="280" valign="top" align="left"><input name="regno" size="30" type="text" required></td>
                </tr>
				
				
				
				<tr>
                  <td class="body" id="Company" width="25" valign="top" align="left"><strong>Location:</strong></td>
                  <td width="280" valign="top" align="left">
				  <select name="uplace" required>
				  <option value="">Select Location</option>
				  <option value="chennai">Chennai</option>
				  <option value="coimbatore">Coimbatore</option>
				  <option value="madurai">Madurai</option>
				  <option value="other">Other Location</option>
				  </select>
				  
				  
				  </td>
                </tr>
               
			   
                <tr>
                  <td></td>
                  <td><input name="submit" class="button" value="Subscribe" type="submit"></td>
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
$phone=$_POST['phone'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$uplace=$_POST['uplace'];

$regno=$_POST['regno'];




$q=mysql_query("select * from customer where fname='$fname' and phone='$phone' and email='$email' and uname='$uname' and upass='$upass'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('User already registered');</script>";
}
else
{
mysql_query("insert into customer(fname,phone,email,uname,upass,uplace,registernumber)values('$fname','$phone','$email','$uname','$upass','$uplace','$regno')");
echo "<script type='text/javascript'>alert('User registered successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=index.php">';
}
}
	include "footer.php"; ?>
	