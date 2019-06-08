	

<?php

require_once('auth.php');

?>


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
         
    	


        <td   > <?php
include 'db.php';

$id=$_GET["PublicationID"];

$sql=("Delete from publication where PublicationID=$id " );
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}


echo "Publication is deleted";


?>
 </td>

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