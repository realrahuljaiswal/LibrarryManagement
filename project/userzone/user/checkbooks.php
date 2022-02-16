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



    <style>
    .t1 {
        font-weight: 600;

    }

    body {
        padding: 0;
        margin: 0
    }

    .s {
        margin-top: 100px
    }

    .modal-header {
        background: #ef715f;
        color: #fff
    }

    h5 {
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 33px;
        display: block;
        margin: 0 auto
    }

    .modal-header .close {
        height: 50px;
        width: 50px;
        border-radius: 51%;
        font-size: 30px;
        padding: 0;
        color: #fff;
        position: absolute;
        left: auto;
        right: 8px;
        top: 5px
    }

    .btn-custom {
        background: #ef715f;
        border-radius: 5px;
        color: #fff;
        padding: 9px 42px;
        margin: 20px auto;
        display: block;
        font-size: 20px;
        font-weight: 700
    }

    .btn-custom:hover {
        color: #fff
    }

    h3 {
        text-align: center;
        font-size: 35px;
        padding-top: 20px;
        letter-spacing: 2px;
        line-height: 40px
    }

    p {
        text-align: center;
        font-size: 20px;
        padding-top: 20px;
        margin: 0
    }

    @media(max-width: 575px) {
        .modal-dialog {
            margin: 1.5rem
        }

        h5 {
            padding-top: 20px;
            padding-bottom: 20px;
            font-size: 50px
        }

        h3 {
            font-size: 45px
        }
    }
    </style>

    <script>
    $(document).ready(function() {


        // function for load table
        function loadtable() {

            $.ajax({
                url: "loadbookajax.php",
                type: "POST",
                success: function(result) {
                    $("#table").html(result)
                }
            })
        }
        loadtable(); // load table

        //live serch




        $("#search").keyup(function() {
            var value = this.value.toLowerCase().trim();

            $("table tr").each(function(index) {
                if (!index) return;
                $(this).find("td").each(function() {
                    var id = $(this).text().toLowerCase().trim();
                    var not_found = (id.indexOf(value) == -1);
                    $(this).closest('tr').toggle(!not_found);
                    return not_found;
                });
            });
        });

    })
    </script>


</head>

<body>


    <?php   

include 'loder.php';

?>

    <div class="wrapper">


        <!---top bar --->
        <?php  include 'header.php'?>
        <!--// top-bar -->



        <div class="container-fluid mt-100">
            <div class="row">
                <div class="col-lg-12">


                    <div class="card">
                        <div class="card-body">
                            <div class="active-member">


                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-2 mb-4"></div>
                                    <!--Grid column-->
                                    <div class="col-md-8 mb-4">

                                        <div class="input-group md-form form-sm form-1 pl-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text purple lighten-3" id="basic-text1"
                                                    style="background-color: black;color:white"><i
                                                        class="fas fa-search text-blue" aria-hidden="true"></i></span>
                                            </div>
                                            <input class="form-control my-0 py-1" type="text"
                                                placeholder="Search Your Book - Book Name & Writter Name"
                                                aria-label="Search" id="search">
                                        </div>

                                    </div>
                                    <!--Grid column-->


                                </div>
                                <!--Grid row-->


                                <div class="table-responsive" style="margin-top: 20px;">

                                    <!-- loadtable -->
                                    <div class="col-sm-12" id="table">

                                    </div>


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