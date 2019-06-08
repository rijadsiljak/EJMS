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


        <td> <?php
		include 'db.php';
		$pubid=$_GET["PublicationID"];
		$result = mysql_query("SELECT p.Title,p.Year, p.Format, g.genre,p.FileName,p.Abstract FROM publication p, genre g where PublicationID=$pubid and g.genreID=p.GenreID ");
		
		echo "<table border='1'align='center' width='100%' id='customers'>
		<tr>
		<th>Title</th>
		<th>Year</th>
		<th>Format</th>
		<th>Genre</th>
               
		</tr>";
		
		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td>" . $row['0'] . "</td>";
		  echo "<td>" . $row['1'] . "</td>";
		  echo "<td>" . $row['2'] . "</td>";
		  echo "<td>" . $row['3'] . "</td>";
          
		  echo "</tr>";

            echo "<tr>";
              echo "<th colspan='4' >Abstract</th>";

           echo "</tr>"; 
echo "<tr>";      
                  echo "<td colspan='4'>" . $row['5'] . "</td>";
echo "</tr>"; 
		  }
		echo "</table>";
	echo "If you would like to see this publication in more detail you should ";
        echo "<a href='regi.php'>" .'  Register  ' . "</a>"; 
        echo "  or  ";
        echo "<a href='userind.php'>" .'  Login   ' . "</a>"; 
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