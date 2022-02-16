<?php

session_start();

if( $_SESSION['email'] == "" || $_SESSION['usertype'] != 'admin')
{
    header("Location: ../../index.php");
}

$email = $_SESSION['email'];

?>



<?php


$userid = $_POST["id"];
$bookid = $_POST["bookid"];

$conn = mysqli_connect("localhost","root","","minilms1") or die("Connection Failed");


$sql = "SELECT  `aq` FROM `books` WHERE `bookid` = '$bookid'";
$sql1 = "INSERT INTO `booking`(`userid`, `bookid`) VALUES ('$userid','$bookid')";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");


if(mysqli_num_rows($result) > 0){  
    while($row = mysqli_fetch_assoc($result)){
        $output = "{$row['aq']}";
        $output = $output - 1;
    }
}else{  
  $output = "Book Not Found";
} 

$result2 = mysqli_query($conn, $sql1) or die("SQL Query Failed.");

if($result2)
{
     $sql3 = "UPDATE `books` SET `aq`='$output' WHERE `bookid` = '$bookid'";

     $result3 = mysqli_query($conn, $sql3) or die("SQL Query Failed.");

     if($result3)
     {
          echo "<script>alert('Done');window.location.href='booking.php'</script>";
     }
     else
     {
        echo "<script>alert('Dose Not Update Value');window.location.href='booking.php'</script>";
     }
}
else
{
    echo "<script>alert('Booking Dose Not Success !!!');window.location.href='booking.php'</script>";
}


mysqli_close($conn);


?>
