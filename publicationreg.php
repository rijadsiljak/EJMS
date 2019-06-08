	

<?php

require_once('userauth.php');

?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<script language="javascript">
function validate()

{
 var a = document.forms["my"]["title"].value;
    if (a==null || a=="") 
{
        alert("Publication title must be filled out");
        return false;
    }
 var b = document.forms["my"]["year"].value;
    if (b==null || b=="") {
        alert("Publication Year name must be filled out");
        return false;
    }
 var c = document.forms["my"]["abstract"].value;
    if (c==null || c=="" )
{
        alert("Abstract must be filled out");
        return false;
    }
else if  (c.length < 200)

 {
        alert("Abstract has to be at least 200 characters");
        return false;
    }


 var e = document.forms["my"]["format"].value;
    if (e==null || e=="") {
        alert("Format must be filled out");
        return false;
    }
 var f = document.forms["my"]["pages"].value;
    if (f==null || f=="") {
        alert("Number of pages must be filled out");
        return false;
    } 
 var g = document.forms["my"]["author1"].value;
    if (g==null || g=="") {
        alert("At least one author's name must be filled out");
        return false;
    }
 var h = document.forms["my"]["pubfile"].value;
    if (h==null || h=="") {
        alert("You must upload a publication");
        return false;
    }

}
</script>
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


        <td >  <?php

require_once('userauth.php');

?>

<?php

include 'db.php';

$gen=("Select * from genre");

$res=mysql_query($gen);


if(isset($_POST['add']))
{
$authorid=$_SESSION['SESS_MEMBER_ID'];
$title=$_POST['title'];
$year=$_POST['year'];
$format=$_POST['format'];
$genreid=$_POST['genreid'];
$pages=$_POST['pages'];
$author1=$_POST['author1'];
$author2=$_POST['author2'];
$author3=$_POST['author3'];
$abstract=$_POST['abstract'];

   


$sql = "INSERT INTO publication ".
       "(Title, Year, Format, GenreID,Pages, Author1, Author2, Author3, Abstract) ".
       "VALUES('$title','$year','$format ','$genreid','$pages','$author1','$author2','$author3','$abstract')";

$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "";

}

?>





<table border=1 id="customers" align="center">

<form name="my" onsubmit="return validate()" method="post" action="pubsubmit.php" enctype="multipart/form-data" >
<tr>
<th >Fill the fields</th>
</tr>
<tr align="right" ><td>Title  : <input type="text" name="title" id="title" /> </td></tr>
<tr align="right" ><td>Year   : <input type="text" name="year" id="year" /></td></tr>
<tr align="right"  ><td>Format : <input type="text" name="format" id="format" /></td></tr>
<tr align="right"  ><td>Pages: <input type="text" name="pages" id="pages" /></td></tr>
<tr align="right"  ><td>First Author : <input type="text" name="author1" id="author1" /></td></tr>
<tr align="right"  ><td>Second Author: <input type="text" name="author2" id="author2" /></td></tr>
<tr align="right"  ><td>Third Author: <input type="text" name="author3" id="author3" /></td></tr>
<tr align="right"  ><td>Genre <select name="genreid"  >
<?php

while($row=mysql_fetch_array($res))
{
 echo  "<option value='$row[0]'>$row[1]</option>";
}
?>
</select></td></tr>
<tr align="right"  ><td valign="top">Abstract: <textarea name="abstract" id="abstract" rows="10" cols="70"></textarea></td></tr>


<tr align="right" >
<td>
<input type="file" name="pubfile"/>
</td>
</tr>
<tr align="right" >
<td>
<input name="add" type="submit" id="add" value="Submit">
</td>
</tr>
</form>

		</td>

    </tr>
    



</table> </td>

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