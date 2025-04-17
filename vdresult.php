<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
<h1><span>View Department Result</span></h1>

<div style="padding:10px">
          <div>
            <table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
			<tr><td>Department</td><td>File</td></tr>
			<?php
			$g=mysql_query("select * from dresult");
		
			
		
			while($t=mysql_fetch_array($g))
			{
			$dept=$t['dept'];
			$ufile=$t['ufile'];
			
			echo "<tr><td>$dept</td><td><a href='upload/$ufile' target='_blank'>View file</a></td></tr>";
			
			
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
	