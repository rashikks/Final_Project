<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>alert('Logout successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=index.php">';
?>