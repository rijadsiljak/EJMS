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


        <td   >  <?php
include 'db.php';
$_GET["cid"];
$id=$_GET["cid"];

$resu=mysql_query("Select p.Title,u.Fname, p.Year,p.Format,p.AuthorID,p.PublicationID from publication p, user u where ((GenreID=$id) and (Status='Approved')) and u.UserID=p.AuthorID" );
echo "<table border='1' align='center' id='customers' width=100%>
		
                <tr>
		<th>Title</th>
		<th>Author</th>
		<th>Year</th>
		<th>Format</th>
		
                </tr>";
    while($row = mysql_fetch_row($resu)) 
{ 
                  echo "<tr>";
		    echo "<td><a href='pub_details.php?PublicationID=".$row['5']."'>" . $row['0'] . "</a></td>";
                   echo "<td><a href='author_details.php?AuthorID=".$row['4']."'>" . $row['1'] . "</a></td>";
		  echo "<td>" . $row['2'] . "</td>";
		  echo "<td>" . $row['3'] . "</td>";
		
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
</html>n