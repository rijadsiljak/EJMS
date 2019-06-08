<html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
function validateForm()
{
    var x = document.forms["myform"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
 var a = document.forms["myform"]["fname"].value;
    if (a==null || a=="") {
        alert("First name must be filled out");
        return false;
    }
 var b = document.forms["myform"]["uname"].value;
    if (b==null || b=="") {
        alert("User name must be filled out");
        return false;
    }
 var c = document.forms["myform"]["pword"].value;
    if (c==null || c=="" ){
        alert("Pwordname must be filled out");
        return false;
    }
else if  (c.length < 8)

 {
        alert("Password has to be at least 8 characters");
        return false;
    }
 var d = document.forms["myform"]["city"].value;
    if (d==null || d=="") {
        alert("City must be filled out");
        return false;
    }
 var e = document.forms["myform"]["address"].value;
    if (e==null || e=="") {
        alert("Address must be filled out");
        return false;
    }
 var f = document.forms["myform"]["phone"].value;
    if (f==null || f=="") {
        alert("Phone must be filled out");
        return false;
    } 
var g = document.forms["myform"]["dept"].value;
    if (g==null || g=="") {
        alert("Department must be filled out");
        return false;
    }
 var h = document.forms["myform"]["inst"].value;
    if (h==null || h=="") {
        alert("Institution must be filled out");
        return false;
    }
 var i = document.forms["myform"]["bdate"].value;
    if (i==null || i=="") {
        alert("Birth date must be filled out");
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
<img src="name.png" height="80px " width="844px" </img>
</td>

</tr>

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


        <td >



 <?php


include 'db.php';


if(isset($_POST['add']))
{

$fname = $_POST['fname'];

$email = $_POST['email'];
$uname = $_POST['uname'];
$pword = $_POST['pword'];
$city = $_POST['city'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$dept = $_POST['dept'];
$inst = $_POST['inst'];
$bdate = $_POST['bdate'];
   


$sql = "INSERT INTO user ".
       "(Fname,  EMail, Username, Password, City, Address, Phone, Department, Institution, BirthD) ".
       "VALUES('$fname','$email','$uname','$pword','$city','$address','$phone','$dept','$inst','$bdate')";

$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo " The user has registered. ";

}

?>

<title> Registration Screen </title>

<table border=1 align="center" id="customers">
<tr>
<th>Fill all fields</th>
</tr>

<form name="myform" onsubmit="return validateForm()" method="post" action="#">

<tr align="right"><td>Name  : <input type="text" name="fname" id="fname"  /> </td></tr>
<tr align="right"><td>Email       : <input type="text" name="email" id="email"  /></td></tr>
<tr align="right"><td>User name   : <input type="text" name="uname" id="uname" /></td></tr>
<tr align="right"><td>Password    : <input type="password" name="pword" id="pword" /></td></tr>
<tr align="right"><td>City        : <input type="text" name="city" id="city" /></td></tr>
<tr align="right"><td>Address     : <input type="text" name="address" id="address" /></td></tr>
<tr align="right"><td>Phone       : <input type="text" name="phone" id="phone" /></td></tr>
<tr align="right"><td>Department  : <input type="text" name="dept"  id="dept"/></td></tr>
<tr align="right"><td>Institution : <input type="text" name="inst" id="inst" /></td></tr>
<tr align="right"><td>Birth Date  : <input type="text" name="bdate" id="bdate"/></td></tr>


<td>
<input name="add" type="submit" id="add" value="Submit ">
</td>


</td>
</form>
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