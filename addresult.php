<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
			
<h1><span>Add Result</span></h1>
<div style="padding:10px">
          <div> <br>
            <form action="" method="post" id="ContactForm" >
			<div>
                  <div  class="wrapper"> <strong>  Student:</strong>
                    <div class="bg">
					<select name="customer" required class="input" >
				  <option value="">Select customer</option>
				  <?php
				  $g=mysql_query("select * from customer");
				  while($h=mysql_fetch_array($g))
				  {
				  $email=$h['email'];
				  $uname=$h['uname'];
				  echo "<option value='$uname'>$uname</option>";
				  }
				  ?>
				  </select>
                    </div>
                  </div>
				  
			
				  
				  
              <div>
                  <div  class="wrapper"> <strong> Result type:</strong>
                    <div class="bg">
					<select name="rtype" class="input" >
					<option value="">Select Result type</option>
					<option value="CIA">CIA</option>
					<option value="Semester">Semester</option>
					</select>
                    </div>
                  </div>
				  
                  <div  class="wrapper"> <strong>Subject name1:</strong>
                    <div class="bg">
					
					<!--<select name="sname1" class="input" >
					<option value="">Select Subject name1</option>
					<option value="Graphics">Graphics</option>
					<option value="Multimedia">Multimedia</option>
					<option value="Datamining">Datamining</option>
					<option value="CIS">CIS</option>
					<option value="NetworkLab">NetworkLab</option>
					<option value="GM Lab">GM Lab</option>
					</select>-->


 <input type="text" class="input" name="sname1">
                    </div>
                  </div>


                  <div  class="wrapper"> <strong>Subject mark1:</strong>
                    <div class="bg">
                      <input type="text" class="input" name="smark1">
                    </div>
                  </div>
				  
				 
				  
				  
				  <div  class="wrapper"> <strong>Subject name2:</strong>
                    <div class="bg">
                      
					   <input type="text" class="input" name="sname2">
					  
                    </div>
                  </div>


                  <div  class="wrapper"> <strong>Subject mark2:</strong>
                    <div class="bg">
                      <input type="text" class="input" name="smark2">
                    </div>
                  </div>
				  
				 
				  
				    <div  class="wrapper"> <strong>Subject name3:</strong>
                    <div class="bg">
					   <input type="text" class="input" name="snam3e">

					
                    </div>
                  </div>


                  <div  class="wrapper"> <strong>Subject mark3:</strong>
                    <div class="bg">
                      <input type="text" class="input" name="smark3">
                    </div>
                  </div>
				  
				
				  
				    <div  class="wrapper"> <strong>Subject name4:</strong>
                    <div class="bg">
					   <input type="text" class="input" name="sname4">

                    </div>
                  </div>


                  <div  class="wrapper"> <strong>Subject mark4:</strong>
                    <div class="bg">
                      <input type="text" class="input" name="smark4">
                    </div>
                  </div>
				  
				
				  
				    <div  class="wrapper"> <strong>Subject name5:</strong>
                    <div class="bg">
                     
					   <input type="text" class="input" name="sname5">

                    </div>
                  </div>


                  <div  class="wrapper"> <strong>Subject mark5:</strong>
                    <div class="bg">
                      <input type="text" class="input" name="smark5">
                    </div>
                  </div>
				  
				                  
                  <input type="submit" name="submit" value="Add result" class="button"/>
				  </div>
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


$customer=$_POST['customer'];

$rtype=$_POST['rtype'];
$sname1=$_POST['sname1'];
$smark1=$_POST['smark1'];

$msg1='<table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">';	
$msg1=$msg1."<tr><td>Name</td><td colspan='2'>$customer</td></tr>";



$msg1=$msg1."<tr><td>Result type</td><td  colspan='2'>$rtype</td></tr>";
$msg1=$msg1."<tr><td>Subject</td><td>Mark</td><td>Result</td></tr>";


if($smark1>39)
{
$sresult1="PASS";
}
else
{
$sresult1="FAIL";
}

$msg1=$msg1."<tr><td>$sname1</td><td>$smark1</td><td>$sresult1</td></tr>";




$sname2=$_POST['sname2'];
$smark2=$_POST['smark2'];
if($smark2>39)
{
$sresult2="PASS";
}
else
{
$sresult2="FAIL";
}

$msg1=$msg1."<tr><td>$sname2</td><td>$smark2</td><td>$sresult2</td></tr>";

$sname3=$_POST['sname3'];
$smark3=$_POST['smark3'];
if($smark3>39)
{
$sresult3="PASS";
}
else
{
$sresult3="FAIL";
}
$msg1=$msg1."<tr><td>$sname3</td><td>$smark3</td><td>$sresult3</td></tr>";



$sname4=$_POST['sname4'];
$smark4=$_POST['smark4'];
if($smark4>39)
{
$sresult4="PASS";
}
else
{
$sresult4="FAIL";
}
$msg1=$msg1."<tr><td>$sname4</td><td>$smark4</td><td>$sresult4</td></tr>";



$sname5=$_POST['sname5'];
$smark5=$_POST['smark5'];
if($smark5>39)
{
$sresult5="PASS";
}
else
{
$sresult5="FAIL";
}

$msg1=$msg1."<tr><td>$sname5</td><td>$smark5</td><td>$sresult5</td></tr>";
$msg1=$msg1."</table>";



		
$myfile = fopen("$customer.txt", "a+") or die("Unable to open file!");
fputs($myfile, $msg1."\n"); 
fclose($myfile);


mysql_query("insert into result(rtype,sname1,smark1,sresult1,sname2,smark2,sresult2,sname3,smark3,sresult3,sname4,smark4,sresult4,sname5,smark5,sresult5,usid)values('$rtype','$sname1','$smark1','$sresult1','$sname2','$smark2','$sresult2','$sname3','$smark3','$sresult3','$sname4','$smark4','$sresult4','$sname5','$smark5','$sresult5','$customer')");


echo "<script type='text/javascript'>alert('User result added');</script>";
}
	include "footer.php"; ?>
	