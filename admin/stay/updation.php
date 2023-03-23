<?php

include "config.php"; 
if(isset($_GET['id']))
{
	$update=$_GET['id'];
	$q2=mysqli_query($link,"SELECT * FROM cont WHERE id=$update") or die(mysqli_error());
	$d=mysqli_fetch_array($q2);
	?>
	
   <form action=# method=post>
   	<input type=text name=up_id value="<?php echo $d['id']; ?>">
	   <input type=text name=up_username value="<?php echo $d['username']; ?>">
	   <input type=text name=up_email value="<?php echo $d['email']; ?>">
	    <input type=text name=up_mobile value="<?php echo $d['mobile']; ?>">
	     <input type=text name=up_message value="<?php echo $d['message']; ?>">
	  
	   <input type=submit value=Update>
   </form>

	<?php
	if(isset($_POST['up_username']))
	{
		$up_id=$_POST['up_id'];
		$up_username=$_POST['up_username'];
		$up_email=$_POST['up_email'];
		$up_mobile=$_POST['up_mobile'];
		$up_message=$_POST['up_message'];
		
		

		mysqli_query($link,"UPDATE cont SET id='$up_id', username='$up_username', email='$up_email', mobile='$up_mobile', message='$up_message' WHERE id=$update");
		header('location:dashboard1.php');
	}
}