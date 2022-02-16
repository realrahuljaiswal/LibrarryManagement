

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
    .container {
    margin-top: 50px
}

.stretch-card>.card {
    width: 100%;
    min-width: 100%
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 0
}

.btn-info {
    color: #fff;
    background-color: #3da5f4;
    border-color: #3da5f4
}

.btn {
    font-size: 0.875rem;
    line-height: 1;
    font-weight: 400;
    padding: .7rem 1.5rem;
    border-radius: 0.1275rem
}

h6 {
    font-size: .9375rem
}



.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active,
.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #fc0505;
    border-color: #fc0505
}

.contact-clean {

}

@media (max-width:767px) {
    .contact-clean {
        padding: 20px 0
    }
}

.contact-clean form {
    max-width: 480px;
    width: 90%;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 40px;
    border-radius: 4px;
    color: #505e6c;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1)
}

@media (max-width:767px) {
    .contact-clean form {
        padding: 30px
    }
}

.contact-clean h2 {
    margin-top: 5px;
    font-weight: bold;
    font-size: 28px;
    margin-bottom: 36px;
    color: inherit
}

.contact-clean .form-group:last-child {
    margin-bottom: 5px
}

.contact-clean form .form-control {
    background: #fff;
    border-radius: 2px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.05);
    outline: none;
    color: inherit;
    padding-left: 12px;
    height: 42px
}

.contact-clean form .form-control:focus {
    border: 1px solid #b2b2b2
}

.contact-clean form textarea.form-control {
    min-height: 100px;
    max-height: 260px;
    padding-top: 10px;
    resize: vertical
}

.contact-clean form .btn {
    padding: 16px 32px;
    border: none;
    background: none;
    box-shadow: none;
    text-shadow: none;
    opacity: 0.9;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 13px;
    letter-spacing: 0.4px;
    line-height: 1;
    outline: none !important
}

.contact-clean form .btn:hover {
    opacity: 1
}

.contact-clean form .btn:active {
    transform: translateY(1px)
}

.contact-clean form .btn-primary {
    background-color: #fc0505 !important;
    margin-top: 15px;
    color: #fff
}

.message {
    resize: none
}
   
    </style>

    


</head>

<body>


    <?php   

include 'loder.php';

?>


<?php  

//Input fields validation  

if (isset($_POST['submit']))

{  
  
   
//String Validation  

if( empty($_POST["newpass"]))
{
echo "<script>alert('All Fields Required!!')</script>";  
}



else
{
   
     $newpass = $_POST['newpass'];
 
    
       
      $username = "root";
      $pass = "";
      $dbname = "minilms";
      $host = "localhost";
      
      
      $con = mysqli_connect($host,$username,$pass,$dbname);
      
      if(!$con)
      {
      echo "<script>alert('Unaable To Connect Database')</script>";
      }
      else
      {
      
      
      $sql = " UPDATE userlogin SET pass ='$newpass' WHERE email = '$email'";
      $result = mysqli_query($con,$sql);
      
      
      
      if(!$result)
      {
      echo "<script>alert('Data Not Update !!');window.location.href='profile.php'</script>";
      
      echo mysqli_error($con); 
      }
      else
      {
      
      echo "<script>alert('Password Update Successfully !!');window.location.href='profile.php'</script>"; 
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
         




    <div class="wrapper">


        <!---top bar --->
        <?php  include 'header.php'?>
        <!--// top-bar -->



        <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
          <div class="col-md-3"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center">
                        <div> <img src="https://img.icons8.com/bubbles/100/000000/administrator-male.png" class="img-lg rounded-circle mb-4" alt="profile image">
                            <h4><?php echo $_SESSION['username'] ?></h4>
                            <p class="text-muted mb-0"><?php echo $_SESSION['email'] ?></p>
                        </div>
                        <p class="mt-2 card-text"> You can change your password, Frist time required..</p> 
                  <button class="btn btn-info btn-sm mt-3 mb-4" data-toggle="modal" data-target="#exampleModal" style="background: #007bff;">Change Password</button></a>
                        <div class="border-top pt-3">
                            <div class="row">
                                <div class="col-4" >
                                    <h6 style="font-size:48px">&#128512;</h6>
                                    
                                </div>
                                <div class="col-4">
                                    <h6 style="font-size:48px">&#128151;</h6>
                                   
                                </div>
                                <div class="col-4">
                                    <h6 style="font-size:48px">&#128512;</h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
      <!----------------modal change password ------------------>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      
      <div class="contact-clean">
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <h2 class="text-center"> Change Password...</h2>
        <div class="form-group"><input class="form-control" type="password" name="newpass" placeholder="New Password" id="myInput"></div>
        <input type="checkbox" onclick="myFunction()" class=""> Show Password 
        
        
       
        <div class="form-group">
        <input class="btn btn-primary" type="submit" name="submit" value="Change..." style="width: 100%;">
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
                <a href="#"> Rahul Jaiswal</a>
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

    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>

    <!-- Js for bootstrap working-->
    <script src="../js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>