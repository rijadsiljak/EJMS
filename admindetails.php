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
<img src="name.png" height="81px" width="843px"</img>
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
		$pubid=$_GET["PublicationID"];
		$result = mysql_query("SELECT p.Title,p.Year, p.Format, g.genre, p.FileName,p.Abstract,p.Author1,p.Author2,p.Author3,p.Pages,p.Status,p.PublicationID FROM publication p, genre g where PublicationID=$pubid and g.genreID=p.GenreID ");
		
		echo "<table border='1'align='center' width='100%' id='customers'>
		<tr>
		<th>Title</th>
		<th>Year</th>
		<th>Format</th>
		<th>Genre</th>
                 <th >Status</th>
                 
                 <th>First Author</th>
		 <th>Second Author</th>
		 <th>Third Author </th>
                 <th>Pages</th>
                 <th>Download</th>
		</tr>";
		
		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td>" . $row['0'] . "</td>";
		  echo "<td>" . $row['1'] . "</td>";
		  echo "<td>" . $row['2'] . "</td>";
		  echo "<td>" . $row['3'] . "</td>";
                  if($row['10']=='Approved')
                    {
                       echo "<td>" . $row['10'] . "</td>";

                        echo "<td>" . $row['6'] . "</td>";
		  echo "<td>" . $row['7'] . "</td>";
		  echo "<td>" . $row['8'] . "</td>";
		  echo "<td>" . $row['9'] . "</td>";
                   echo "<td><a href='http://ejms.orgfree.com/".$row['4']."'><img src='pdficon.png' width='50' height='50' /></a></td>";
                      echo "<td><a href='delete.php?PublicationID=".$row['11']."'>" .'Delete' . "</a></td>";
                     echo "<td><a href='update.php?PublicationID=".$row['11']."'>" .'Update' . "</a></td>";
		  echo "</tr>";}
                 else if ($row['10']=='Pending') 


                 {      echo "<td>" . $row['10'] . "</td>";

                    
                             echo "<td>" . $row['6'] . "</td>";
		  echo "<td>" . $row['7'] . "</td>";
		  echo "<td>" . $row['8'] . "</td>";
		  echo "<td>" . $row['9'] . "</td>";
                  echo "<td><a href='http://ejms.orgfree.com/".$row['4']."'><img src='pdficon.png' width='50' height='50' /></a></td>"; 
                  echo "<td><a href='edit_pub.php?PublicationID=".$row['11']."'>" .'Approve' . "</a></td>";
                  echo "<td><a href='delete.php?PublicationID=".$row['11']."'>" .'Delete' . "</a></td>";
                   echo "<td><a href='update.php?PublicationID=".$row['11']."'>" .'Update' . "</a></td>";
		  echo "</tr>"

                                   ; }
              
                

 echo "<tr>";
 echo "<th colspan='10'>Abstract</th>";
 echo "</tr>";
 echo "<tr>";
 echo "<td colspan='9'>" . $row['5'] . "</td>";
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