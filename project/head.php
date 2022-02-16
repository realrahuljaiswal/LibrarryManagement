


<?php

if(isset($_POST['submit']) )

{

session_start();
$con=mysqli_connect("localhost","root","","minilms1");
if($con==true)
{
	$username=$_POST["email"];
	$pass=$_POST["password"];


	$query="SELECT * FROM userlogin WHERE email='$username' AND pass='$pass' ";
	$result=mysqli_query($con,$query);
	$qq="SELECT * FROM adminlogin WHERE email='$username' AND password='$pass' ";
	$rrr=mysqli_query($con,$qq);
	if($row=mysqli_fetch_array($result))
	{
		$user=$row[1];
		$p=$row[2];
		if($username==$user && $pass==$p)
		
	  //set session here...
	  {

      $query2="SELECT * FROM user WHERE email='$username' ";
      $result2=mysqli_query($con,$query2);
      if($row2 = mysqli_fetch_array($result2))
      {
        $_SESSION['username'] = $row2[1];
        $_SESSION['usermobile'] = $row2[4];
        $_SESSION['address'] = $row2[6];
      }




	  $_SESSION["email"]=$username;
    $_SESSION["usertype"] = "user";

			echo "<script>alert('Welcome Back In Your Library...');window.location.href='userzone/user/user.php';</script>";
		} 	 
		else
		{
			echo "<script>alert('Invalid userid or password');window.location.href='index.php';</script>";
		}
	}
	//login adminlogin
	if($roww=mysqli_fetch_array($rrr))
	{
		$admin=$roww[1];
		$pp=$roww[2];
		if($username==$admin && $pass==$pp)
		
	  //set session here...
	  {
		$_SESSION["email"]=$username;
		$_SESSION["usertype"] = "admin";
		echo "<script>alert('Welcome Back In Your Library...');window.location.href='adminzone/admin/admin.php';</script>";
		} 	 
		else
		{
			echo "<script>alert('Invalid userid or password');window.location.href='index.php';</script>";
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	else
		{
			echo "<script>alert('Invalid userid or password');window.location.href='index.php';</script>";
		} 
	
}	
else
{
	mysqli_error($conn);
}
}

function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  


?>



<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">GPM Library</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="#testimonials">Feedback</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <button  class="get-started-btn" data-toggle="modal" data-target="#exampleModalCenter" style='border:none'>Login</button>

    </div>
  </header><!-- End Header -->
  
  

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Only Registered Users Allowed...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 <center>
                           <div class="card car" style="background:rgb(223, 223, 223)(201, 201, 201);">
                               <div class="text-center intro"> <img src="https://i.imgur.com/uNiv4bD.png" width="160"> </div>
                               <div class="mt-4 text-center">
                                   <h4>Log In.</h4> <span>Login with your Account credentials</span>
                                   <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
                           


                                   <div class="mt-3 inputbox boxx"> <input type="text" class="form-control controll" name="email" placeholder="Email"> <i class="fa fa-envelope"></i> </div>


                                   <div class="inputbox boxx"> <input type="password" class="form-control controll" name="password" placeholder="Password"> <i class="fa fa-lock"></i> </div>


                               </div>
                               <div class="d-flex justify-content-between">
                                   <div> <a href="#" class="forgot">Forgot Password?</a> </div>
                               </div>
                               <div class="mt-2"> <input type="submit"  name= 'submit' class="btn btn-primary btn-block" value="Log In"></div>
                               </form>
                           </div>
                       </center>
</div>
    </div>
  </div>
</div>


<style>


.car {
    width: 400px;
    padding: 20px;
    border: none
}

.account {
    font-weight: 500;
    font-size: 17px
}

.contactt {
    font-size: 13px
}

.controll {
    text-indent: 14px
}

.controll:focus {
    color: #495057;
    background-color: #fff;
    border-color: #4a148c;
    outline: 0;
    box-shadow: none
}

.inputbox {
    margin-bottom: 10px;
    position: relative
}

.boxx i {
    position: absolute;
    left: 8px;
    top: 12px;
    color: #dadada
}

.label {
    font-size: 13px
}

.in {
    width: 14px;
    height: 15px;
    margin-top: 5px
}

.forgot {
    font-size: 14px;
    text-decoration: none;
    color: #4A148C
}

.mail {
    color: #ff481b;
    text-decoration: none
}

.k {
    cursor: pointer
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color:#007bff;
}

.modal-backdrop{
    backdrop-filter: blur(5px);
    background-color: #01223770;
}
.modal-backdrop.in{
    opacity: 1% !important;
}




</style>
