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
<table style="width:100%" align="center" cellspacing>

<tr valign="top">
<td>
</td>
</tr>

    <tr valign="top" >
         
    	 <td align="left" width=8px; ><?php include "types.php"?></td>


        <td   >
		<?php
		
		include 'db.php';
		$search=$_POST["search"];
		$result = mysql_query("SELECT * FROM publication where ((Title like '%$search%') or (Year like '%$search%') or (Format like '%$search%') or (Author1 like '%$search%') or (Author2 like '%$search%') or (Author3 like '%$search%') or (Pages like '%$search%')) and Status='Approved' ");
		
		echo "<table border='1' align='center' id='customers'>
		<tr>
		<th colspan='7'>Search result</th>
		</tr>
		<tr>
		        <th>Title</th>
                <th>Year</th>
                 <th>Format</th>
                 <th>Author</th>
                 <th>Author</th>
                 <th>Author</th>
                 <th>Pages</th>

		</tr>";
		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td><a href='pub_details.php?PublicationID=".$row['PublicationID']."'>" . $row['Title'] . "</a></td>";
              
		  echo "<td>" . $row['2'] . "</td>";
		  echo "<td>" . $row['3'] . "</td>";
		  echo "<td>" . $row['9'] . "</td>";
                   echo "<td>" . $row['10'] . "</td>";
		  echo "<td>" . $row['11'] . "</td>";

                  echo "<td>" . $row['13'] . "</td>";
		

		  echo "</tr>";
		  }
		echo "</table>";
		

		
		?></td>

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