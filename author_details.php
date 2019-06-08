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
	
	include 'navbar.php';
  
                
?>
</td>

</tr>


    <tr valign="top">
    	<td style="background:#ff8000"> <?php include "search.php"?> </td>
    </tr>




    
</table>
</td>
</tr>

<tr valign="top">
<td>
<table style="width:100%" align="center" cellspacing id='customers'>

<tr valign="top">
<td>
</td>
</tr>

    <tr valign="top" >
         
    	 <td align="left" width=8px; ><?php include "types.php"?></td>


        <td>  <?php
		include 'db.php';
		$auid=$_GET["AuthorID"];
		$result = mysql_query("SELECT * FROM user,publication where AuthorID=$auid and (UserID=AuthorID) and Status='Approved'  ");
		
		echo "<table border='1'align='center' >
		<tr>
		<th>Name</th>
                <th>Title</th>
		
		</tr>";
		
		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td>" . $row['Fname'] . "</td>";
	        
		 echo "<td><a href='pub_details.php?PublicationID=".$row['PublicationID']."'>" . $row['Title'] . "</a></td>";
	
		  echo "</tr>";
		  }
		echo "</table>";
	
      
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