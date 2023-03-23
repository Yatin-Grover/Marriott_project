<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$rooms = mysqli_real_escape_string($link, $_REQUEST['rooms']);
$guest = mysqli_real_escape_string($link, $_REQUEST['guest']);
$ddate = mysqli_real_escape_string($link, $_REQUEST['ddate']);
$adate = mysqli_real_escape_string($link, $_REQUEST['adate']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);


// Attempt insert query execution
$sql = "INSERT INTO stay (username, email, mobile, rooms, guest, ddate, adate, message) VALUES ('$username', '$email', '$mobile', '$rooms', '$guest', '$ddate', '$adate', '$message')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
     header("location: ../project/alert.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>

