<?php

include 'db.php';
require_once('userauth.php');

if(isset($_POST['ad']))
{


$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];
$format = $_POST['format'];
$genre = $_POST['genre'];
$genreid = $_POST['genreid'];



$sq = "INSERT INTO publication".
       "(Title, Author, Year, Format, Genre, GenreID) ".
       "VALUES('$title','$author','$year','$format','$genre','$genreid')";

$retval = mysql_query( $sq, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "";

}

?>
<html>
<head>
<title> Registration Screen </title>
</head>
<table border=1>
<body bgcolor="#CCCCCC">
<form method="post" action="#">


<tr><td>Title  : <input type="text" name="title" id="title" /></td></tr>
<tr><td>Author : <input type="text" name="author" id="author" /></td></tr>
<tr><td>Year   : <input type="text" name="year" id="year" /></td></tr>
<tr><td>Format : <input type="text" name="format" id="format" /></td></tr>
<tr><td>Genre  : <input type="text" name="genre" id="genre" /></td></tr>
<tr><td>GenreID: <input type="text" name="genreid" id="genreid" /></td></tr>




<td>
<input name="add" type="submit" id="ad" value="add ">
</td>
</div>

<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</head>
</html>