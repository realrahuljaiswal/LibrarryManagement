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
    <link href="../css/admin.css" rel="stylesheet">

</head>

<body style="background-color: #eee;">


    <!----------------add header--------->
    <?php include "header.php" ?>

    <!--------------------php code ------------>
    <?php   

include 'loder.php';

?>

    <?php  
    $sql = $notice= $val = $name = $id= $update = "";

$val = $_GET['e'];
$name = $_GET['name'];
$id = $_GET["id"];

 
//Input fields validation  

if (isset($_POST['submit']))

{  
      
//String Validation  

if( empty($_POST["update"]) )
{
    echo "<script>alert('All Fields Required!!')</script>";  
}
else
{


$notice = $_POST["update"];
   
  
$username = "root";
$pass = "";
$dbname = "minilms1";
$host = "localhost";


$con = mysqli_connect($host,$username,$pass,$dbname);

if(!$con)
{
    echo "<script>alert('Unaable To Connect Database')</script>";
}
else
{
    
   
    $sql = " UPDATE books SET $name='$notice' WHERE bookid = '$id'";
    $result = mysqli_query($con,$sql);



if(!$result)
{
    echo "<script>alert('Data No Update !!');window.location.href='bookmanage.php'</script>";

    echo mysqli_error($con); 
}
else
{
    
    echo "<script>alert('Data Update Successfully !!');window.location.href='bookmanage.php'</script>"; 
}
}
}
}  

function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  }  
  

?>
    <!--------------------end php code ------------>


    <!------------contant----------------->

    <div class="container-fluid px-2 px-md-4 py-5 mx-auto" style="margin-top: -70px;">

        <div class="card card0 border-0">

            <div class="row d-flex">

                <div class="col-lg-12">
                    <div class="card2 card border-0 px-4 px-sm-5 py-5">
                        <center>
                            <h2 class="mb-1">Send Notification</h2>
                        </center>

                        <form action="<?php   echo "bedit.php?name=$name&id=$id&e=$val"?>" method="POST" id="form">
                            <div class="row mt-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">ID</h6>
                                    </label> <input type="Text" name="id" value="<?php echo $id ?>" readonly style="font-weight: bold;"> </div>
                                <div class="col-md-3"></div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">Current Value</h6>
                                    </label> <input type="text"  value="<?php  echo $val ?>" readonly></div>


                                <div class="col-md-3"></div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">New Value</h6>
                                    </label> <input type="text" name="update" placeholder="Fill Details..." ></div>


                                <div class="col-md-3"></div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <input type="submit" name="submit"
                                        class="btn btn-blue text-center mb-1 py-2" value="Update Value..."></div>
                                <div class="col-md-3 "></div>
                            </div>
                        </form>
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