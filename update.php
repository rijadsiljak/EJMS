	

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
         
    	


        <td   ><?php
require_once('auth.php');
include 'db.php';

$query = "SELECT * FROM publication ORDER BY PublicationID";
$result2 = mysql_query($query, $con);


    $id = $_GET["PublicationID"];

    $query = "SELECT PublicationID,Title, Year, Format, Author1, Author2, Author3, Abstract, Pages FROM publication WHERE PublicationID='$id' ";
    $result = mysql_query($query, $con);


    $details = mysql_fetch_array($result);

    $savedTitle =  $details["Title"];
    $savedYear =   $details["Year"];
    $savedFormat = $details["Format"];
    $savedAuthor1 =$details["Author1"];
    $savedAuthor2 =$details["Author2"];
    $savedAuthor3 =$details["Author3"];
    $savedAbstract=$details["Abstract"];
    $savedPages =  $details["Pages"];
    $savedID=$details["PublicationID"];



if(isset($_POST["updatebtn"]))
{
    
    $pubid=$_POST['upID'];  
    $title= $_POST['upTitle'];
    $year= $_POST['upYear'];
    $format= $_POST['upFormat'];
    $author1= $_POST['upAuthor1'];
    $author2= $_POST['upAuthor2'];
    $author3= $_POST['upAuthor3'];
    $abstract= $_POST['upAbstract'];
    $pages= $_POST['upPages'];

    $sqls= "Update publication set  Title='$title',Year='$year',Format='$format',Author1='$author1',Author2='$author2',Author3='$author3',Abstract='$abstract',Pages='$pages' WHERE PublicationID ='$pubid' ";
    $ret = mysql_query( $sqls, $con );
if(! $ret )
{
  die('Could not enter data: ' . mysql_error());
}
else
echo " Edited succecfully";

}

?>



<div id="upserv">

<br/><br/>
    <form name="upServForm"  action="update.php" method="post" >
       
    
        <table width="300" border="1" id='customers' align='center'>
          <tr>
  <th colspan='2'> Update publication </th>
            </tr>
<tr>
            <td>Title</td>
            <td><input type="text" name="upTitle" id="upTitle" style="text-align:right" value="<? echo $savedTitle; ?>" /></td>
          </tr>
<tr>
            
            <td><input type="hidden" name="upID" id="upID" style="text-align:right" value="<? echo $savedID; ?>" /></td>
          </tr>
          <tr>
            <td>Year</td>
            <td><input type="text" name="upYear" id="upYear" style="text-align:right" value="<? echo $savedYear; ?>" /></td>
          </tr>
           <tr>
            <td>Format</td>
            <td><input type="text" name="upFormat" id="upFormat" style="text-align:right" value="<? echo $savedFormat; ?>" /></td>
          </tr>
  <tr>
            <td>First Author</td>
            <td><input type="text" name="upAuthor1" id="upAuthor1" style="text-align:right" value="<? echo $savedAuthor1; ?>" /></td>
          </tr>
  <tr>
            <td>Second Author</td>
            <td><input type="text" name="upAuthor2" id="upAuthor2" style="text-align:right" value="<? echo $savedAuthor2; ?>" /></td>
          </tr>
  <tr>
            <td>Third Author</td>
            <td><input type="text" name="upAuthor3" id="upAuthor3" style="text-align:right" value="<? echo $savedAuthor3; ?>" /></td>
          </tr>
  <tr>
            <td>Abstract</td>
            <td><input type="text" name="upAbstract" id="upAbstract" style="text-align:right" value="<? echo $savedAbstract; ?>" /></td>
          </tr>
  <tr>
            <td>Pages</td>
            <td><input type="text" name="upPages" id="upPages" style="text-align:right" value="<? echo $savedPages; ?>" /></td>
          </tr>
           
        </table>
</div>
<br/>
<div id="buttons">
    <input type="reset" value="Clear" />
 <input type="submit" value="Save" name="updatebtn" />

</div>
    </form>

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