<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>alert</title>
</head>
<style type="text/css">
body{
	background-image: url("pics/image8.jpg");
	background-size: 1500px 760px;
	background-repeat: no-repeat;
	
}
	.box{
	width:35%;
	height:300px;
	/*border: 1px solid black;*/
	margin-top: 320px;
	margin-left: 850px;
	background-color: rgb(14, 134, 25,.2);
	background-size: cover;
	background-position:  cover;
	background-repeat: no-repeat;
	border-radius: 5px;
}
	 button{
	background-color: goldenrod;
	/*border:2px solid red;*/
	border-radius: 4px;
	color: #fff;
	position: absolute;
	display: inline-block;
	font-family: inherit;
	font-size: 16px;
	/*box-shadow: 1px 2px 1px brown;*/
	margin: 8px;
	padding: 10px;
	width: 100px;
	cursor: pointer;
	margin-top: -30px;
	margin-left: 20px;
}
.box h2{
	color: goldenrod;
	margin-left: 100px;
	font-size: 40px;
}
.box h1{
	color: goldenrod;
	margin-left: 20px;
	font-family: trajan;
}
 .box:hover button {
	background-color: rgb(14, 134, 25,.3);
	/*border-color: red;
}
</style>
<body>
	
<div class="box">
	<h1>Record save successfully</h1>
	<h2 style="margin-left: 170px; font-size: 50px; margin-top:-10px ;" >Thanks </h2>
	<h2 style="margin-left: 210px;  margin-top:-30px ;">For </h2>
	<h2 style="margin-left: 165px;  margin-top:-30px ; font-size: 50px;">Booking </h2>
	<a href="home.php"><button>Back</button></a>
</div>

</body>
<script>
 {
   alert("Your record is successfully submit");
}
</script>
</html>

