
 <?php

                                echo "<table border='1' align='left'  id='customers' width='40' >"; 
                          
                                     echo "<tr '>
                                        <th> Genre </th>
                                         </tr>";
                                       
		 	 echo "<tr>";
		                       include 'db.php';
                           $q="Select * from genre";
                          $res=mysql_query($q,$con);
                      while ($r=mysql_fetch_array ($res))
                         {
                         echo"<tr>";

                          echo"<td><a href='usertype.php?cid=$r[0]'>$r[1]</a></td>";
                          echo"</tr>";
                                    } 
      
                 echo "</tr>";
                  echo "</table>";
                              ?>
        