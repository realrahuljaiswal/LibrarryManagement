<?php

session_start();

if( $_SESSION['email'] == "" || $_SESSION['usertype'] != 'admin')
{
    header("Location: ../../index.php");
}

$email = $_SESSION['email'];

?>


<?php  
  
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
      $dbname = "minilms1";
      $host = "localhost";
      
      
      $con = mysqli_connect($host,$username,$pass,$dbname);
      
      if(!$con)
      {
      echo "<script>alert('Unaable To Connect Database')</script>";
      }
      else
      {
      
      
      $sql = " UPDATE adminlogin SET password ='$newpass' WHERE email = '$email'";
      
      $result = mysqli_query($con,$sql);
      
      
      
      if(!$result)
      {
      echo "<script>alert('Data Not Update !!');window.location.href='admin.php'</script>";
      
      echo mysqli_error($con); 
      }
      else
      {
      
      echo "<script>alert('Password Update Successfully !!');window.location.href='admin.php'</script>"; 
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