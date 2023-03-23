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
$message = mysqli_real_escape_string($link, $_REQUEST['message']);

// Attempt insert query execution
$sql = "INSERT INTO cont (username, email, mobile, message) VALUES ('$username', '$email', '$mobile', '$message')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
     header("location: dashboard1.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>