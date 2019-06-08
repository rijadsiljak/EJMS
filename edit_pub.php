	

<?php

require_once('auth.php');

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
<img src="name.png" height="80px" width="844px"</img>
</td>

<tr>

<tr >
<td>
<table style="width:100%" >



<tr >
<td background="navbar.png" height="39px">
<?php
	
	include 'adminnavbar.php';
  
                
?>
</td>

</tr>

    
</table>
</td>
</tr>

<tr valign="top">
<td>

<table style="width:100%" align="center" >


    <tr valign="top" >
         
    	


        <td   ><?php


include 'db.php';



$ids= $_GET["PublicationID"];

$sqls ="Update publication set Status='Approved' where PublicationID=$ids";

$ret = mysql_query( $sqls, $con );
if(! $ret )
{
  die('Could not enter data: ' . mysql_error());
}
else
echo " Approved succecfully";



?> </td>

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