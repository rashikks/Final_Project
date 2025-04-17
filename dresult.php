<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
			
<h1><span>Department result</span></h1>
<div style="padding:10px">
          <div> <br>
            <form action="" method="post" enctype="multipart/form-data">
              <table width="97%" cellpadding="7" cellspacing="0">
                <tbody>
				<tr>
                  <td class="body" id="Company" width="35" valign="top" align="left"><strong>File upload:</strong></td>
                  <td width="280" valign="top" align="left"><input name="ufile" size="30" type="file" required></td>
                </tr>
				
				<tr>
                  <td class="body" id="Company" width="100" valign="top" align="left"><strong>Department:</strong></td>
                  <td width="280" valign="top" align="left">
				  
				  <input type="text" class="input" name="dept" required>
                </tr>
				
				
                
				
						
                <tr>
                  <td></td>
                  <td><input name="submit" class="button" value="Upload" type="submit">
				  
				  <a href="vdresult.php" class="current"><input  class="button" value="View Department Result" type="button"> </a>
				  
				  </td>
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
$dept=$_POST['dept'];

//mail("$customer","Recieved the file notification", "Result updated, Please login to your acount to view the  files");


$ufile=$_FILES['ufile']['name'];
$temp=$_FILES['ufile']['tmp_name'];



move_uploaded_file("$temp","upload/$ufile");


  
mysql_query("insert into dresult(ufile,dept)values('$ufile','$dept')");


echo "<script type='text/javascript'>alert('Department result uploaded successfully');</script>";
}

include "footer.php"; ?>
	