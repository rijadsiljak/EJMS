	

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
<img src="name.png" height="82px" width="940px"</img>
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
      
	
		$search=$_POST["search"];
		$result = mysql_query("SELECT * FROM user  order by UserID desc ");
		
		echo "<table border='1' align='center'>
                 <tr>
		<th colspan='12'>Users</th>
              
		</tr>
		
		  <tr>
		<th >UserID</th>
               <th >Username</th>
              <th >Name</th>
              <th >Department</th>
              <th >Institution</th>
              <th >email</th>
              <th >Birth Date</th>
              <th >Phone</th>
              <th >Address</th>
              <th >City</th>

              
              
		</tr>";
		
		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td>" . $row['10'] . "</td>";
          
          echo "<td>" . $row['0'] . "</td>";
         echo "<td>" . $row['2'] . "</td>";
          echo "<td>" . $row['3'] . "</td>";
          echo "<td>" . $row['4'] . "</td>";
          echo "<td>" . $row['5'] . "</td>";
          echo "<td>" . $row['6'] . "</td>";
           echo "<td>" . $row['7'] . "</td>";
          echo "<td>" . $row['8'] . "</td>";
          echo "<td>" . $row['9'] . "</td>";
 echo "<td><a href='userdelete.php?UserID=".$row['10']."'>" .'Delete' . "</a></td>";
 echo "<td><a href='userpublications.php?UserID=".$row['10']."'>" .'Publications' . "</a></td>";
      
  
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