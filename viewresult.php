<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
<h1><span>View Result</span></h1>

<div style="padding:10px; font-size:20px; line-height:30px;">
          <div>

						  
<?php
$uname=$_SESSION['uname'];
$myfile = fopen("$uname.txt", "r") or die("Unable to open file!");
$pageText=fread($myfile,filesize("$uname.txt"));
echo nl2br($pageText);
fclose($myfile);
?>


<?php
$uname=$_SESSION['uname'];
			  $j=mysql_query("select * from result where usid='$uname'");
			  $g=mysql_fetch_array($j);
			  $rtype=$g['rtype'];
			  ?>
			    <!--<table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
			  <tr><td>Result Type</td><td colspan="2"><?php echo $rtype; ?></td></tr>
			  <tr><td width="40%">Subject</td><td width="30%">Mark</td><td width="30%">Status</td></tr>
			  <?php
			  $l=mysql_query("select * from result where usid='$uname'");
			  while($t=mysql_fetch_array($l))
			  {
$sname1=$t['sname1'];
$smark1=$t['smark1'];
$sresult1=$t['sresult1'];

$sname2=$t['sname2'];
$smark2=$t['smark2'];
$sresult2=$t['sresult2'];

$sname3=$t['sname3'];
$smark3=$t['smark3'];
$sresult3=$t['sresult3'];

$sname4=$t['sname4'];
$smark4=$t['smark4'];
$sresult4=$t['sresult4'];


$sname5=$t['sname5'];
$smark5=$t['smark5'];
$sresult5=$t['sresult5'];			 
			 
echo "<tr><td>$sname1</td><td>$smark1</td><td>$sresult1</td></tr>";
echo "<tr><td>$sname2</td><td>$smark2</td><td>$sresult2</td></tr>";
echo "<tr><td>$sname3</td><td>$smark3</td><td>$sresult3</td></tr>";
echo "<tr><td>$sname4</td><td>$smark4</td><td>$sresult4</td></tr>";
echo "<tr><td>$sname5</td><td>$smark5</td><td>$sresult5</td></tr>";
			  }
			  ?>
			  
			  
			  </table>-->

			
 		
          </div>
			
			</div>
			
			
				<div class="clear"></div>
				</div>
			</div>
			
		
		<div class="clear"></div>
	</div>
<?php 
include "footer.php"; ?>
	