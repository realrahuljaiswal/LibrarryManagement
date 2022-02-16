 
 
 
<?php

session_start();

if( $_SESSION['email'] == "" || $_SESSION['usertype'] != 'user')
{
    header("Location: ../../index.php");
}

$email = $_SESSION['email'];

?>
 
 <?php
                        $username = "root";
                        $pass = "";
                        $dbname = "minilms1";
                        $host = "localhost";
                        
                        
                        $con = mysqli_connect($host,$username,$pass,$dbname);
                        
                        if(! $con)
                        {
                            echo "Unaable To Connect Database" . mysqli_connect_error();
                        }
                        else
                        {
                            $sql = "SELECT * FROM books WHERE aq != 0";
                            $result = mysqli_query($con, $sql);
                            
                            if( mysqli_num_rows($result) > 0 )
                         {
                          $output = " <table class='table table-xs table-striped mb-0'>
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Book Name</th>
                                  <th>Writter</th>
                                  <th>Language</th>
                                  <th>Edition</th>
                                  <th>Quantity</th>
                                
                              </tr>
                          </thead>
                          <tbody>
                          ";
                        
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $output .=  "<tr>
                                <td class='t1' style='font-size:15px'># $row[id]</td>
                                <td class='t1' style='font-size:15px'>$row[bookname]</a></td>
                                <td class='t1' style='font-size:15px'>$row[bwname]</a></td>
                                <td class='t1' style='font-size:15px'>$row[blang]</td>
                                <td class='t1' style='font-size:15px'>$row[byear]</td>
                                <td class='t1' style='font-size:15px'>$row[bprice] &#8377;</td>
                                
                                </tr>";
                            }
                            $output .="</table>";
                        
                            echo $output;
                         }
                        }
                            
                        mysqli_close($con);
                            ?>