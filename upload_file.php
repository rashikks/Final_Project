<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
			
<h1><span>Upload File</span></h1>
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
                  <td class="body" id="Company" width="100" valign="top" align="left"><strong>Cloud Server Location:</strong></td>
                  <td width="280" valign="top" align="left">
				  <select name="location" required>
				  <option value="">Select Location</option>
				  <option value="chennai">Chennai</option>
				  <option value="coimbatore">Coimbatore</option>
				  <option value="madurai">Madurai</option>
				  <option value="other">Other Location</option>
				  </select>
                </tr>
				
				<tr>
                  <td class="body" id="Company" width="100" valign="top" align="left"><strong>Customer:</strong></td>
                  <td width="280" valign="top" align="left">
				  <select name="customer" required>
				  <option value="">Select customer</option>
				  <?php
				  $g=mysql_query("select * from customer");
				  while($h=mysql_fetch_array($g))
				  {
				  $email=$h['email'];
				  $uname=$h['uname'];
				  echo "<option value='$email'>$uname</option>";
				  }
				  ?>
				  </select>
                </tr>
                
				
						
                <tr>
                  <td></td>
                  <td><input name="submit" class="button" value="Upload" type="submit"></td>
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
$location=$_POST['location'];
$customer=$_POST['customer'];

//mail("$customer","Recieved the file notification", "Result updated, Please login to your acount to view the  files");


$to = "$customer";

   $subject="Recieved the file notification";
   $message="Result updated, Please login to your acount to view the  files";

   $from = "Admin";
	
$ufile=$_FILES['ufile']['name'];
$temp=$_FILES['ufile']['tmp_name'];


   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   $tmp_name = $_FILES['ufile']['tmp_name'];
   $type = $_FILES['ufile']['type'];
   $file_name = $_FILES['ufile']['name'];
   $size = $_FILES['ufile']['size'];



   if (file_exists($tmp_name)){
      if(is_uploaded_file($tmp_name)){
         $file = fopen($tmp_name,'rb');
         $data = fread($file,filesize($tmp_name));
         fclose($file);
         $data = chunk_split(base64_encode($data));
     }
      $headers = "From: $from\r\n" .
         "MIME-Version: 1.0\r\n" .
         "Content-Type: multipart/mixed;\r\n" .
         " boundary=\"{$mime_boundary}\"";

      $message = "This is a multi-part message in MIME format.\n\n" .
         "--{$mime_boundary}\n" .
         "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
         "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";

      $message .= "--{$mime_boundary}\n" .
         "Content-Type: {$type};\n" .
         " name=\"{$file_name}\"\n" .

         "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n" .
         "--{$mime_boundary}--\n";

     /*if (mail($to, $subject, $message, $headers))
	  {
echo "<script type='text/javascript'>alert('File sent successfully');</script>";
	  }
	  else
	  {
echo "<script type='text/javascript'>alert('File not sent');</script>";
	  }*/
	  }
  

$k=mysql_query("select * from customer where email='$customer'")or die(mysql_error());
$h=mysql_fetch_array($k);
$customer=$h['uname'];

mysql_query("insert into cloud(ufile,location,customer)values('$ufile','$location','$customer')");

if($location=='other')
{
move_uploaded_file("$temp","other/$ufile");
}
else
{
move_uploaded_file("$temp","$location/$ufile");
//move_uploaded_file("$temp","other/$ufile");
}

echo "<script type='text/javascript'>alert('File uploaded successfully');</script>";
}

include "footer.php"; ?>
	