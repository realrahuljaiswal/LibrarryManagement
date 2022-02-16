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


</head>

<body>

    <div class="wrapper">

      
  <!---top bar --->
        <?php  include 'header.php'?>
        <!--// top-bar -->




        <div class="container-fluid">
            <div class="row">

                <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">

                    <a href="checkbooks.php">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between "
                            style="background-color: #FF5733;">
                            <div class="s-l">
                                <h5>Check Books</h5>

                            </div>
                            <div class="s-r">
                                <h6>340
                                    <i class="fas fa-tasks"></i>
                                </h6>
                            </div>
                        </div>
                    </a>


                    <a href="mybooks.php">
                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between"
                        style="background-color: #11505e;">
                        <div class="s-l">
                            <h5>My Books</h5>

                        </div>
                        <div class="s-r">
                            <h6>250
                                <i class="fas fa-book"></i>
                            </h6>
                        </div>
                    </div>
                    </a>

                    <a href="profile.php">
                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between "
                        style="background-color: #921c53;">
                        <div class="s-l">
                            <h5>Profile</h5>

                        </div>
                        <div class="s-r">
                            <h6>232
                                <i class="fas fa-user"></i>
                            </h6>
                        </div>
                    </div>
                    </a>
                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between"
                        style="background-color: #6B3A6C;">
                        <div class="s-l">
                            <h5>Logout</h5>

                        </div>
                        <div class="s-r">
                            <h6>190
                                <i class="fas fa-sign-out-alt"></i>
                            </h6>
                        </div>
                    </div>
                </div>




                <!-- Stats -->
                <div class="outer-w3-agile col-xl">
                    <center>
                        <h1><u>Latest Notification</u></h1>




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
                        $sql = "SELECT * FROM sendnotice";
                        $result = mysqli_query($con, $sql);
                        
                        if( mysqli_num_rows($result) > 0 )
                     {
                     
                    $output = "<marquee width='80%' direction='up' height='250px' style='margin-top:30px'>";
                        while($row = mysqli_fetch_assoc($result))
                        {
                          $output .= "
                          <h6><img src='new.png' hieght='25px' width='25px' />&nbsp$row[headline]</h6 >
                          
                          <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$row[notice]</p>
                          <br>
                          "; 
                        }
                        $output .= "</marquee>";
                        echo $output;
                        
                     }
                    }
                        
                    mysqli_close($con);
                        ?>

                    </center>

                </div>
                <!--// Stats -->

                <!-- Pie-chart -->

            </div>

        </div>

        <!-- Copyright -->
        <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
            <p>© 2021 GPM's Library. All Rights Reserved | Design by
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