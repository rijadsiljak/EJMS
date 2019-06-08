<style>
#customers
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;

border-collapse:collapse;
}
#customers td, #customers th 
{
font-size:1em;
border:0px solid #FFEAC1;
padding:3px 7px 2px 7px;
}
#customers th 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#FFEAC1;
color:#000000;
}
#customers tr.alt td 
{
color:#000000;
background-color:#FFFFFF;
}
#customers tr.al td 
{
color:#000000;
background-color:#FFFFFF;
height:100px;
}
</style>
    <?php        
    echo "<table border='1' id='customers' align='left' width='100%'>"; 
                          
         echo "<tr>
                     <th colspan=2> Recently submitted publications </th>

                                     
                 </tr>";
                  
                    



        
		               include 'db.php';
		                $search=$_POST["search"];
		                $result = mysql_query("SELECT p.PublicationID,p.Title,u.UserID,u.Fname,p.Year,g.genre,p.Format,p.Author1,p.Author2,p.Author3,p.Abstract,p.Pages FROM publication p, user u,genre g where Status='Approved' and UserID=AuthorID and g.genreID=p.GenreID order by SubmitDate desc limit 20");
           		        $rows=mysql_num_rows($result);

                               
                                $rows=floor($rows/2);

                               // while($row = mysql_fetch_array($result))
                                for($i=0;$i<$rows;$i++)
{


echo "<tr>";
for ($j=0;$j<2;$j++)
{
$row = mysql_fetch_array($result);
echo "<td align=left>";
            
echo "<table border=1 width=415 height=160>";
                       
                           echo "<tr>"; 
							     
                                  echo "<td colspan=4 >Title  <a href='pub_details.php?PublicationID=".$row['0']."'>" . $row['1'] . "</a>";"</td>";
                              
							   echo "</tr>";
							   
                               echo    "<tr>";
							   
                                  echo "<td >Authors:   <a href='author_details.php?AuthorID=".$row['2']."'>" . $row['3']  . "</a></td>";
                                  echo "<td >" . $row['7'] . "</td>";
                                  echo "<td >" . $row['8'] . "</td>";
                                  echo "<td >" . $row['9'] . "</td>";
								  
                               echo "</tr>"; 

                               echo "<tr>";
                                  echo "<td>Year:   " . $row['4']  . "</td>";
                                  echo "<td>Genre:   " . $row['5'] . "</td>";
                                  echo "<td>Format:   " . $row['6'] . "</td>";
                                  echo "<td>Pages:    " . $row['11'] . "</td>";
                                  echo "</tr>";
echo "</table>";
echo "</td>";
 }                        
echo "</tr>";     
		}
						  
            echo "</table>"; 

         		 
?>	