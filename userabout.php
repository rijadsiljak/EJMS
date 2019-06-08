	

<?php

require_once('userauth.php');

?>
<html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
	
	include 'db.php';

?>
<table style="width:50%" bgcolor="#FFFFFF" align="center" id="groove"  >
<tr align="left">
<td> 
<img src="LOGO.png" height="81px" width="79px" </img>
<img src="name.png" height="80px" width="843px"</img>
</td>

<tr>

<tr >
<td>
<table style="width:100%" >



<tr >
<td background="navbar.png" height="39px">
<?php
	
	include 'usernavbar.php';
  
                
?>
</td>

</tr>


    <tr valign="top">
    	<td style="background:#ff8000"> <?php include "usersearch.php"?> </td>
    </tr>




    
</table>
</td>
</tr>

<tr valign="top">
<td>
<table style="width:100%" align="center" cellspacing>

<tr valign="top">
<td>
</td>
</tr>

    <tr valign="top" >
         
    	 <td align="left" width=8px; ><?php include "usertypes.php"?></td>


        <td   ><?php  echo " EJMS is a free Electronic Journal Management System website. It is designed to allow authors to submit their work for evaluation, after which their work will be submitted to review. This is a non-profit website, done as a Senior Design Project of a International Burch University student. Thank you. ";    ?> </td>

    </tr>
    



</table>
</td>
</tr>
<tr>
<td>

<?php include "footer.php"?>
</td>
</tr>
</table>
</body>
</html>