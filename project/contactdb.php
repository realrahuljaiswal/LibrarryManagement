<!--------------------php code ------------>
    <?php  

include('smtp/PHPMailerAutoload.php');


// define variables to empty values  

$name = $email = $subject =  $message = "";  
  
//Input fields validation  
     
//String Validation  

if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["subject"]) || empty($_POST["message"])  )
{
    echo "<script>alert('All Fields Required!!');window.location.href='contact.php'</script>";  
}
else
{
	$name = input_data($_POST["name"]);
    $email = input_data($_POST["email"]);
    $subject = input_data($_POST["subject"]);
    $message = input_data($_POST["message"]);

$username = "root";
$pass = "";
$dbname = "minilms1";
$host = "localhost";


$con = mysqli_connect($host,$username,$pass,$dbname);

if(! $con)
{
    echo "Unaable To Connect Database" . mysqli_error($con);
}
else
{
$sql = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
$result = mysqli_query($con,$sql);
if(!$result)
{
    $er= mysqli_error($con);
    echo "<script>alert('Can Not Success Your Query Error: $er')</script>"; 
}
else
{
    $subject = "Readr's Adda";
	
    smtp_mailer($email,$subject, "<h2>Welcome To The Readr's Adda </h2><br><br><h3>Hy $name Thnaks for Enquiry <br> We are contact you soon...</h3>");
    echo "<script>alert('Thank We Are Contact You Soon!!');window.location.href='contact.php'
    </script>"; 
}
}
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
	$mail->Username = "rahulmohanjaiswal@gmail.com";
	$mail->Password = "Rahuljaiswal@2021";
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