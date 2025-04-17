<?php include "header.php"; ?>
<div id="bodycontainer">
			<div id="welcomezone">
			
<h1><span>Graph</span></h1>
<div style="padding:10px">
          <div> <br>
            <?php
			
include "libchart/classes/libchart.php";

	$chart = new PieChart();

	$dataSet = new XYDataSet();
	
	//$g=mysql_query("select count(*) as total,country,pcat from products group by country")or die(mysql_error());
	
	$q=mysql_query("SELECT * FROM cloud")or die(mysql_error());
	
		  while($r=mysql_fetch_array($q))
		  {
		  $vc=$r['vc'];
		   $customer=$r['customer'];
		  
	  	$dataSet->addPoint(new Point("$customer - $vc", $vc));

		 }

	
	$chart->setDataSet($dataSet);

	$chart->setTitle("User File views count Traffic");
	$chart->render("generated/traffic.png");
	

	
?>

<img alt="Line chart" src="generated/traffic.png" style="border: 1px solid gray;"/>


	
	
	      </div>
			
			</div>
			
			
				<div class="clear"></div>
				</div>
			</div>
			
		
		<div class="clear"></div>
<?php include "footer.php"; ?>
	