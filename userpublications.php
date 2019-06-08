	

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

 echo "<table width='100%' align='center' id='customers'>
  
    <tr>
    	
     <td>";
      
	$id=$_GET["UserID"];
 

		$search=$_POST["search"];
		$result = mysql_query("SELECT * FROM publication where AuthorID=$id order by SubmitDate desc ");
		
		echo "<table border='1' align='center'>
                 <tr>
		<th colspan='9'> Status pending</th>
              
		</tr>";
		
		
		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td>" . $row['0'] . "</td>";
         echo "<td>" . $row['1'] . "</td>";
          echo "<td>" . $row['2'] . "</td>";
		  echo "<td>" . $row['3'] . "</td>";
          echo "<td>" . $row['4'] . "</td>";
          echo "<td>" . $row['5'] . "</td>";
          echo "<td>" . $row['6'] . "</td>";
          echo "<td>" . $row['7'] . "</td>";
         echo "<td><a href='admindetails.php?PublicationID=".$row['0']."'>" .'Details' . "</a></td>";
       

		  echo "</tr>";
		  }
		  echo "</table>";
		

   echo    "</td>
      
    </tr>
    
</table>";

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