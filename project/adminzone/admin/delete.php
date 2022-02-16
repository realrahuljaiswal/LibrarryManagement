<?php

session_start();

if( $_SESSION['email'] == "" || $_SESSION['usertype'] != 'admin')
{
    header("Location: ../../index.php");
}

$email = $_SESSION['email'];

?>



<?php

$value = $_GET['d'];


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
                            $sql = "DELETE FROM books WHERE bookid = '$value'";
                             $result = mysqli_query($con,$sql);

                             if(! $result)
                             {
                                 echo "<script>alert('Data Not Deleted !!');window.location.href='bookmanage.php'</script>";
                             }
                             else
                             {
                                echo "<script>alert('Data Deleted Successfully !!');window.location.href='bookmanage.php'</script>";
                             }

                        }










?>