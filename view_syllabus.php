<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
<h1><span>View Syllabus</span></h1>

<div style="padding:10px">
          <div>
            <table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
			<tr><td>Name</td><td>Location</td><td>File Download</td></tr>
			<?php
			$uname=$_SESSION['uname'];
			$uplace=$_SESSION['uplace'];

			$g=mysql_query("select * from cloud where location='$uplace' and customer='$uname'");
		
			
		
			while($t=mysql_fetch_array($g))
			{
			$location=$t['location'];
			$ufile=$t['ufile'];
			$vc=$t['vc'];
			$cid=$t['cid'];
			//
			
			echo "<tr><td>$ufile</td><td>$location</td><td><a href='view_syllabus.php?cid=$cid' target='_blank'>Download</a></td></tr>";
			
			
			}
			
			?>
			</table>
          </div>
			
			</div>
			
			
				<div class="clear"></div>
				</div>
			</div>
			
		
		<div class="clear"></div>
	</div>
<?php 
if($_GET['cid']!='')
{
$cid=$_GET['cid'];
$uname=$_SESSION['uname'];
			$uplace=$_SESSION['uplace'];

			$g=mysql_query("select * from cloud where location='$uplace' and customer='$uname' and cid='$cid'");
		
			while($t=mysql_fetch_array($g))
			{
			$location=$t['location'];
			$ufile=$t['ufile'];
			$vc=$t['vc'];
			$cid=$t['cid'];
			mysql_query("update cloud set vc=vc+1 where location='$uplace' and customer='$uname' and cid='$cid'");
			
			
			//echo "<a href='$location/$ufile' target='_blank'>view</a>";
			
$file = "$location/$ufile";
// Quick check to verify that the file exists
if( !file_exists($file) ) die("File not found");
// Force the download
header("Content-Disposition: attachment; filename=".basename($file));
header("Content-Length: ".filesize($file));
header("Content-Type: application/octet-stream;");
readfile($file);



			}

}
include "footer.php"; ?>
	