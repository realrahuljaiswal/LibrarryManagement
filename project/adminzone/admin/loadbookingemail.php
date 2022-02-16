
<?php

session_start();

if( $_SESSION['email'] == "" || $_SESSION['usertype'] != 'admin')
{
    header("Location: ../../index.php");
}

$email = $_SESSION['email'];

?>



<?php

$conn = mysqli_connect("localhost","root","","minilms1") or die("Connection Failed");

$search_term = $_POST['email'];

$sql = "SELECT distinct(email) FROM user WHERE email LIKE '%{$search_term}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

$output = "<ul>";

	if(mysqli_num_rows($result) > 0){  
		while($row = mysqli_fetch_assoc($result)){
			$output .= "<li>{$row['email']}</li>";
		}
  }else{  
  	$output .= "<li>email Not Found</li>";
  } 
$output .= "</ul>";

echo $output;

?>
