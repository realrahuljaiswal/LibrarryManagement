

<?php

session_start();

if( $_SESSION['email'] == "" || $_SESSION['usertype'] != 'admin')
{
    header("Location: ../../index.php");
}

$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>

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

 
<!----------------add header--------->
<?php include "header.php" ?>
<?php   

include 'loder.php';

?>

<!------------contant----------------->

    <div class="container-fluid">
        <div class="row">
            <!-- Stats -->
            <div class="outer-w3-agile col-xl">
                <a href="adduser.php">
                <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                    <div class="s-l">
                        <h5>Add User</h5>

                    </div>
                    <div class="s-r">
                        <h6>
                            <i class="fas fa-user-plus"></i>
                        </h6>
                    </div>
                </div></a>

                <a href="addbook.php">
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                    <div class="s-l">
                        <h5>Add Books</h5>

                    </div>
                    <div class="s-r">
                        <h6>
                            <i class="fas fa-book"></i>
                        </h6>
                    </div>
                </div></a>

                <a href="sendnotice.php">
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                    <div class="s-l">
                        <h5>Send Notification</h5>

                    </div>
                    <div class="s-r">
                        <h6>
                            <i class="fas fa-bell"></i>
                        </h6>
                    </div>
                </div></a>

                <a href="booking.php">
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                    <div class="s-l">
                        <h5>Give A Book</h5>

                    </div>
                    <div class="s-r">
                        <h6>
                            <i class="fas fa-comments"></i>
                        </h6>
                    </div>
                </div>
                </a>

            </div>
            <!--// Stats -->




            <!-- Pie-chart -->
            <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">

            <a href="usermanage.php">
                <div class="stat-grid p-3 d-flex align-items-center justify-content-between " style="background-color: #FF5733;">
                    <div class="s-l">
                        <h5>User Management</h5>

                    </div>
                    <div class="s-r">
                        <h6>340
                            <i class="fas fa-users"></i>
                        </h6>
                    </div>
                </div>
                </a>


                <a href="bookmanage.php">
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between" style="background-color: #11505e;">
                    <div class="s-l">
                        <h5>Books Management</h5>

                    </div>
                    <div class="s-r">
                        <h6>250
                            <i class="fas fa-tasks"></i>
                        </h6>
                    </div>
                </div>
                </a>
                <a href="contactmanage.php">
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between " style="background-color: #921c53;">
                    <div class="s-l">
                        <h5>Contact Management</h5>

                    </div>
                    <div class="s-r">
                        <h6>232
                            <i class="fas fa-address-book"></i>
                        </h6>
                    </div>
                </div>
                </a>
                

                <a href="noticemanage.php">
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between" style="background-color: #6B3A6C;">
                    <div class="s-l">
                        <h5>Notification Management</h5>

                    </div>
                    <div class="s-r">
                        <h6>190
                            <i class="fas fa-envelope-square"></i>
                        </h6>
                    </div>
                </div>
                </a>

            </div>
        </div>

    </div>

    <!-- Copyright -->
    <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
        <p>© 2021 GPM's Library . All Rights Reserved | Design by
            <a href="#"> Rahul Jaiswal </a>
        </p>
    </div>
    <!--// Copyright -->
    </div>
    </div>



    <!------------------  end Contacnt ---------------->


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