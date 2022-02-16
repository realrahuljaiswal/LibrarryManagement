
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

$sql2 = "SELECT * FROM `user` WHERE `email` = '$search_term'";



$result = mysqli_query($conn, $sql2) or die("SQL Query Failed.");

	if(mysqli_num_rows($result) > 0){  

		while($row = mysqli_fetch_assoc($result))
        {

            
            $result2 = mysqli_query($conn, $sql2) or die("SQL Query Failed.");
            $row2 = mysqli_fetch_assoc($result2);
            
            

			$output = "{$row2['name']}";
		}
  }else{  
  	$output = "Email Not Found";
  } 


echo $output;

?>
