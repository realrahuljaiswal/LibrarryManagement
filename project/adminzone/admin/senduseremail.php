
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

    <style>
    .gen:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #512DA8;
        outline-width: 0
    }
    </style>

</head>

<body style="background-color: #eee;">
<?php   

include 'loder.php';

?>

    <!--------------------php code ------------>
<?php  
require 'smtp/class.phpmailer.php';
include('smtp/PHPMailerAutoload.php');
// define variables to empty values  


$email = $_GET["email"];
$name =$_GET["name"];
  
//Input fields validation  
if (isset($_POST['submit'])) {
    
    $n = $_POST['n'];
    $msj = $_POST['mes'];
      
//String Validation  
 
            $subject = "Readr's Adda";
       
           if( smtp_mailer($email,$subject, $msj))
           {
            echo "<script>alert('Email Send Successfully !!!');window.location.href='usermanage.php'</script>"; 
           }
           else
           {
            echo "<script>alert('Email Not Send !!!');window.location.href='usermanage.php'</script>"; 
           }

            
    
           // echo "<script>window.location.href='xxx.php?a=$email'</script>";
  
}    
  


 
function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  } 

  




function smtp_mailer($to,$subject, $msg)
{
	$mail = new PHPMailer(); 
//	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "tannusingh10july@gmail.com";
	$mail->Password = "10tanya1999";
	$mail->SetFrom("readersadda@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return "echo '<script>alert('success')'</script>";
	}
}



?>
    <!--------------------end php code ------------>

    <!----------------add header--------->
    <?php include "header.php" ?>
    <!------------contant----------------->

    
    <div class="container-fluid px-2 px-md-4 py-5 mx-auto" style="margin-top: -70px;">

        <div class="card card0 border-0">

            <div class="row d-flex">

                <div class="col-lg-12">
                    <div class="card2 card border-0 px-4 px-sm-5 py-5">
                        <center>
                            <h2 class="mb-1">Send Notification</h2>
                        </center>

                        <form action="<?php   echo "senduseremail.php?email=$email"?>" method="POST" id="form">
                            <div class="row mt-3">
                                <div class="col-md-3"></div>
                                
                                <div class="col-md-3"></div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">Email</h6>
                                    </label> <input type="text"  value="<?php  echo $email ?> " name="na" readonly></div>


                                <div class="col-md-3"></div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">New Value</h6>
                                    </label> <textarea type="text" name="mes" placeholder="Fill Details..." rows="5" ></textarea></div>


                                <div class="col-md-3"></div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-3"></div>
                                <div class="col-md-6"> <input type="submit" name="submit"
                                        class="btn btn-blue text-center mb-1 py-2" value="Send Mail..."></div>
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