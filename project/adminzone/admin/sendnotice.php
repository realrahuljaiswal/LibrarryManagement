
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


// define variables to empty values  

$headline = $notice= "";  
  
//Input fields validation  

if (isset($_POST['submit']))

{  
      
//String Validation  

if(empty($_POST["headline"]) || empty($_POST["notice"]) )
{
    echo "<script>alert('All Fields Required!!')</script>";  
}
else
{

    $headline = input_data($_POST["headline"]);
    $notice = input_data($_POST["notice"]);
   
    



$username = "root";
$pass = "";
$dbname = "minilms1";
$host = "localhost";


$con = mysqli_connect($host,$username,$pass,$dbname);

if(! $con)
{
    echo "Unaable To Connect Database" . mysqli_errno($con);
}
else
{


$sql = "INSERT INTO `sendnotice`(`headline`, `notice`) VALUES ('$headline','$notice')";

$result = mysqli_query($con,$sql);

if(!$result)
{
    $er= mysqli_error($con);

    echo "<script>alert('Can Not Success Your Query Error: $er')</script>"; 
}
else
{
    echo "<script>alert('Notification Send Successfully !!');document.getElementById('form').reset();
    </script>"; 
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

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="form">
                            <div class="row mt-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">HeadLine</h6>
                                    </label> <input type="Text" name="headline" placeholder="Heading"> </div>
                                <div class="col-md-3"></div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">Notice</h6>
                                    </label> <textarea type="text" name="notice" placeholder="Fill Details..."
                                        rows="3"> </textarea></div>


                                <div class="col-md-3"></div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <input type="submit" name="submit"
                                        class="btn btn-blue text-center mb-1 py-2" value="Send Notification"></div>
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