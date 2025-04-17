<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
<h1><span>View Traffic</span></h1>

<div style="padding:10px">
          <div>
            <table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
			<tr><td>Customer</td><td>File</td><td>Location</td><td>File view count</td></tr>
			<?php
			$g=mysql_query("select * from cloud");
		
			
		
			while($t=mysql_fetch_array($g))
			{
			$location=$t['location'];
			$ufile=$t['ufile'];
			$vc=$t['vc'];
			$customer=$t['customer'];
			
			echo "<tr><td>$customer</td><td>$ufile</td><td>$location</td><td>$vc</td></tr>";
			
			
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
<?php include "footer.php"; ?>
	