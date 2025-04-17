<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
<h1><span>View Cloud working hours</span></h1>

<div style="padding:10px">
          <div>
		  <?php if($_SESSION['cluname']!='') { ?>
		  <form name="" action="" method="post">
            <table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
			<tr><td>Select</td><td>hours</td><td>Name</td></tr>
			<?php
			$g=mysql_query("select * from hour");

			while($t=mysql_fetch_array($g))
			{
			$hour=$t['hour'];
			$hid=$t['hid'];
			$user=$t['user'];
			echo "<tr><td><input type='radio' name='hid' value='$hid'></td><td>$hour</td><td>$user</td></tr>";
			}
			?>
			</table>
			<p>&nbsp;</p>
			Cost : <input name="cost" size="30" type="text" required><br /><br />
			<input name="submit" class="button" value="Add cost" type="submit"><br /><br />
			</form>
			<?php
			}
			else
			{
			?>
			<table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
			<tr><td>Name</td><td>Hours worked</td><td>Cost</td></tr>
			<?php
			$g=mysql_query("select * from hour");

			while($t=mysql_fetch_array($g))
			{
			$hour=$t['hour'];
			$hid=$t['hid'];
			$user=$t['user'];
			$cost=$t['cost'];
			echo "<tr><td>$user</td><td>$hour</td><td>$cost</td></tr>";
			}
			?>
			</table>
			<?php
			}
			?>
          </div>
			
			</div>
			
			
				<div class="clear"></div>
				</div>
			</div>
			
		
		<div class="clear"></div>
	</div>
<?php if(isset($_POST['submit']))
{
$cost=$_POST['cost'];
$hid=$_POST['hid'];


mysql_query("update hour set cost='$cost' where hid='$hid'");
echo "<script type='text/javascript'>alert('Cloud useage cost updated');</script>";

}

include "footer.php"; ?>
	