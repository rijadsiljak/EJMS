	

<?php

require_once('userauth.php');

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


        <td > <?php

include("db.php");
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

   






  $query = "INSERT INTO publication ".
       "(Title, Year, Format, GenreID,Pages, Author1, Author2, Author3, Abstract,AuthorID) ".
       "VALUES('$title','$year','$format ','$genreid','$pages','$author1','$author2','$author3','$abstract','$authorid')";
		   
			  $result=mysql_query($query);
	if(!$result)
	{
	
	header("Location:publicationreg.php?mesaj=1&sayfa=$sayfa&sayi=$sayi");		
	
	}		   
			   
			   if ( (isset($_FILES['pubfile']['name']) && 
        is_uploaded_file($_FILES['pubfile']['tmp_name']))) 
  {

 $pub= mysql_insert_id();

 $type = basename($_FILES['pubfile']['type']);

    switch ($type)

   {
      case 'pdf':
         $filename = "uploads/$pub.pdf";
                      move_uploaded_file($_FILES['pubfile']['tmp_name'], 
                                         $filename);
break;

      case 'doc':
         $filename = "uploads/$pub.doc";
                      move_uploaded_file($_FILES['pubfile']['tmp_name'], 
      
                                   $filename);
break;
      case 'docx':
         $filename = "uploads/$pub.docx";
                      move_uploaded_file($_FILES['pubfile']['tmp_name'], 
                                         $filename);
break;
default:        
	  			
			header("Location:publicationreg.php?error");		
					  	 
    }

$query = "update publication
                                set FileName = '$filename'
                                where PublicationID = $pub";
                      $result = mysql_query($query);
}
echo "Upload is successful";
			
		

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