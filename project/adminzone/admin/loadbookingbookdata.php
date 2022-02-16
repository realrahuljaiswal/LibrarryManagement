
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

$search_term = $_POST['book'];

$sql = "SELECT * FROM books WHERE bookname LIKE '%{$search_term}%' ";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

$output = "<ul>";

	if(mysqli_num_rows($result) > 0){  
		while($row = mysqli_fetch_assoc($result)){

			if($row['aq'] == 0)
			{
				break;
			}
			$output .= "<li>{$row['bookname']} &nbsp&nbsp&nbsp#{$row['bookid']}</li>";
		}
  }else{  
  	$output .= "<li>Book Not Found</li>";
  } 
$output .= "</ul>";

echo $output;

?>
