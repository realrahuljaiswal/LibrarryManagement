


<?php

session_start();

if( $_SESSION['email'] == "" || $_SESSION['usertype'] != 'user')
{
    header("Location: ../../index.php");
}

$email = $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Panel</title>

    <!-- Bootstrap Css -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->

    <!-- Common Css -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->

    <!-- Nav Css -->
    <link rel="stylesheet" href="../css/style4.css">
    <!--// Nav Css -->

    <!-- Fontawesome Css -->
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <link href="../css/bookmcss.css" rel="stylesheet">

    <!-- Required common Js -->
    <script src='../js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->





</head>

<body>


    <?php   

    

include 'loder.php';

?>

    <div class="wrapper">


     

    <!----------------add header--------->
    <?php include "header.php" ?>
    <!------------contant----------------->


    <div class="container-fluid mt-100">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="active-member">
                            <div class="table-responsive">
                            <?php

                         

$s = $_SESSION["email"];




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
  $sql = "SELECT * FROM booking INNER JOIN books ON booking.bookid = books.bookid WHERE booking.userid = '$s'";
  $result = mysqli_query($con, $sql);
  
  if( mysqli_num_rows($result) > 0 )
{
$output = " <table class='table table-xs table-striped mb-0'>
<thead>
    <tr>
        <th>Id</th>
        <th>Book Name</th>
        <th>Writter Name</th>
        <th>Language</th>
        <th>Price</th>
        <th>Time</th>
       
    </tr>
</thead>
<tbody>
";
$i = 1;
  while($row = mysqli_fetch_assoc($result))
  {
      $output .=  "<tr>
      <td class='t1' style='font-size:15px'># $i</td>
      <td class='t1' style='font-size:15px'>$row[bookname]</a></td>
      <td class='t1' style='font-size:15px'>$row[bwname]</a></td>
      <td class='t1' style='font-size:15px'>$row[blang]</a></td>
      <td class='t1' style='font-size:15px'>$row[bprice]&nbsp&#8377;</a></td>
      <td class='t1' style='font-size:15px'>$row[time]</a></td>
 
    
      </tr>";
     $i++;
    
  }
  $output .="</table>";

  echo $output;
}
}
  
mysqli_close($con);
  ?>

                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!------------------  end Contacnt ---------------->


        <!-- Copyright -->
        <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
            <p>© 2021 GPM's Library . All Rights Reserved | Design by
                <a href="#"> Rahul Jaiswal </a>
            </p>
        </div>
        <!--// Copyright -->
    </div>
    </div>





    <!-- Required common Js -->
    <script src='../js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->



    <!-- Sidebar-nav Js -->
    <script>
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>

    <!-- Js for bootstrap working-->
    <script src="../js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>