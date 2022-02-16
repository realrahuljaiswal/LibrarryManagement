
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


    <!--------------------php code ------------>

    <?php   

include 'loder.php';

?>
<?php  

include('smtp/PHPMailerAutoload.php');
// define variables to empty values  

$name = $email = $mobileno = $gender = $dob = $address = "";  
  
//Input fields validation  
if (isset($_POST['submit'])) {  
      
//String Validation  

if(empty($_POST["fname"]) || empty($_POST["dob"]) || empty($_POST["email"]) || empty($_POST["mobile"]) || empty($_POST["gender"]) || empty($_POST["address"]))
{
    echo "<script>alert('All Fields Required!!')</script>";  
}
else
{

    $name = input_data($_POST["fname"]);
    $email = input_data($_POST["email"]);
    $mobileno = input_data($_POST["mobile"]);
    $gender = input_data($_POST["gender"]);
    $dob = input_data($_POST["dob"]);
    $address = input_data($_POST["address"]);


    

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
	$check = "SELECT * FROM user WHERE email = '$email'";
    $rs = mysqli_query($con,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
    if($data[0] > 1) 
    {
        echo "<script>alert('Email Already Registered')</script>"; 

    }

    else
    {
		$password = randomPassword();
	$sql = "INSERT INTO `user`( `name`, `dob`, `email`, `mobile`, `gender`, `address`) VALUES ('$name','$dob','$email','$mobileno','$gender','$address')";
    
    $sql2 = "INSERT INTO `userlogin`(`email`, `pass`) VALUES ('$email','$password')";
    
    $result = mysqli_query($con,$sql);
    
    if(!$result)
    {
        $er= mysqli_error($con);
    
        echo "<script>alert('Can Not Success Your Query Error: $er')</script>"; 
    }
    else
    {
        $result2 = mysqli_query($con,$sql2);
        if(! $result2)
        {
            $err= mysqli_error($con);
            echo "<script>alert('Can Not Success login Your Query Error: $err')</script>"; 
        }
        else{
    
            $subject = "Readr's Adda";
       
            smtp_mailer($email,$subject, "<h2>Welcome To The Readr's Adda </h2><br><br><h3> Your ID = $email <br> Password = $password</h3>");
    
           // echo "<script>window.location.href='xxx.php?a=$email'</script>";
            
        echo "<script>alert('Registration Success and Password Send In Email!');window.location.href='adduser.php' </script>"; 
    
    
        }
    }
 
 }

    mysqli_close($con);
 }
   }  
}
    


 
function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  } 

  
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 7; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
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
                        <h3 class="mb-1">Add User In Your Library</h3>
                        <p class="mb-4 text-sm">Fill The Delails Correctly.... </p>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">


                            <div class="row mt-3">
                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">Full Name</h6>
                                    </label> <input type="text" name="fname" placeholder="John Doe">


                                </div>

                                <div class="col-md-6"> <label class="mb-0">


                                        <h6 class="mb-0 text-sm">Date Of Birth</h6>
                                    </label> <input type="date" name="dob"> </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">E-mail</h6>
                                    </label> <input type="email" name="email" placeholder="info@gmail.com"> </div>
                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">Mobile Number</h6>
                                    </label> <input type="text" name="mobile" maxlength="10"
                                        placeholder="+91-XXXXXXXXXX">
                                </div>
                            </div>

                            <div class="row mt-3">


                                <div class="col-md-6"> <label class="mb-0" style="margin-top: 20px;">
                                        <h6 class="mb-0 text-sm">Gender</h6>
                                    </label> <select name="gender" class="gen"
                                        style="border-radius: 10px;padding: 10px 12px 10px 12px;border: 1px solid lightgrey;border: 1px solid lightgrey;box-sizing: border-box; color: #2C3E50;font-size: 14px;width:100%">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-6"> <label class="mb-0">
                                        <h6 class="mb-0 text-sm">Address</h6>
                                    </label> <textarea type="text" name="address"
                                        placeholder="Mukhraji Nagar, Delhi"></textarea>
                                </div>




                            </div>

                            <div class="row px-3 mb-3"> </div>
                            <div class="row mb-4">
                                <div class="col-md-2"></div>
                                <div class="col-md-8"> <input type="submit" name="submit"
                                        class="btn btn-blue text-center mb-1 py-2" value='Create
                                        Account'> </div>
                                <div class="col-md-2"></div>
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