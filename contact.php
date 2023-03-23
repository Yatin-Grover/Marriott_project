<!DOCTYPE html>
<html>
<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site meta -->
  <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
  <link rel="stylesheet" href="pure-css-slider-with-custom-effects/css/style.css">
	<title>contact</title>
	<!-- font icon link -->
	<script src="https://kit.fontawesome.com/c22e3c78ef.js"crossorigin="anonymous"></script>
	<link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
	
</head>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Red+Hat+Display:900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
*{
	/*box-sizing: border-box;*/
}
html,body{
	/*background-color: white;*/
	margin: 0;
	padding: 0;
	background-image: url("pics/image45.jpg");
	background-repeat: no-repeat;
	background-size: 1500px 770px;
	/*max-width: 100%/;*/
	height: auto;
	display: initial;
	overflow: auto;

}
.box
	{
		/*border: 1px solid grey;*/
		width: 100%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
		height: 60px;
		background-color:white ;
		margin: auto;
		float: left;
	}

.box1{
	background-image: url("pics/image20.jpg");
	border-radius: 2px;
	background-repeat: no-repeat;
	background-position: center;
	background-size: 150px 55px;
/*border: 1px solid grey;*/
margin: 1px;
		width: 150px;
		height: 55px;
}
.inbox{
			border-radius: 5px;
	width: 48%;
	height: 55px;	
	/*margin: 20px;*/
	margin-left: 550px;
	float: left;
}
ul{
				list-style-type: none;
				padding: 0px;
				margin: 0px;
			}
			li{
				/*display: inline-block;*/
				float: left;
				/*margin-left: 40px;*/
				/*margin-top: 20px;*/
				color: snow;
				font-size: 20px;
				font-family: Arial;
				font-weight: bold;
			}
			.li1{
				background-color: rgb(97, 106, 107 ,0.5);
				border-radius: 4px;
				/*border: 1px solid green;*/
				height: 100px;
				width: 105px;
				margin-left: 8px;
				margin-top: 0px;
				position: absolute;
				font-size: 20px;
				font-family: Arial;
				/*font-weight: bold;*/
				visibility: hidden;
				display: none;
			} 
			 .inbox button{
	background-color: rgb(206, 36, 74);
	border:2px solid red;
	border-radius: 4px;
	color: #fff;
	position: relative;
	display: inline-block;
	/*font-family: inherit;*/
	font-size: 16px;
	box-shadow: 1px 2px 1px blue;
	margin: 8px;
	padding: 10px;
	width: 100px;
	cursor: pointer;
}
.inbox 	button :hover{
	background: red;
	border-color: red;
}

.stay{
	/*border:3px solid black ;*/
    width: 	120px;
    height: 50px;
    margin-top: 80px;
    /*margin-left: 50px;*/
    /*display: block;*/
    font-family: 'Source Sans Pro', sans-serif;
    background: #FFF;
    float: left;
    position: fixed;
    font-size: 25px;
background: red;
position: fixed;
box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
    .stay a{
    	margin-left:30px ;
    	margin-top:7%;
   text-decoration: none;
   color: white;
   float: left;
   font-family: Josefin Sans;
    }
    .stay:hover{
    	background-color: rgb(207, 33, 72);
    }
    .tooltiptext {
  visibility: hidden;
  width: 160px;
  height: 40px;
  background-color: red;
  color: white;
  text-align: center;
  /*border-radius: 6px;*/
  padding: 5px 0;
  margin-top: 55px;
  margin-left: -60px;
  float: left;


  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  opacity: 0;
  transition: opacity 1s;
}
.tooltiptext:after {
  content: " ";
  position: absolute;
  right: 100px;
  top: -15px;
  border-top: none;
  border-right: 15px solid transparent;
  border-left: 15px solid transparent;
  border-bottom: 15px solid red;
  float: left;
  
}
.stay:hover .tooltiptext{
  visibility: visible;
  opacity: 1;
}

/*font slide*/
.slider--el-heading {
/*width: 100%;*/
  font-size: 9.5vw;
  line-height: 9vw;
  margin: 0;
  font-family: 'Red Hat Display', sans-serif;
  font-weight: 900;
  background: url("pics/image55.jpg");
  /*background-color: white;*/
  background-size: 50%;
  background-position: 50% 50%;
  -webkit-background-clip: text;
  color: rgba(0,0,0,0.08);
  animation: zoomout 10s ease 500ms forwards infinite;
  margin-left: 20px;
  margin-top: 6%;
}

@keyframes zoomout {
  from {
    background-size: 40%;
  }
  to {
    background-size: 10%;
  }
}
/*welcome*/
.welcome{
	
		/*border: 3px solid grey;*/
		width: 100%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
		height: 250px;
		background-color:black ;
		margin-top:50% ;
		float: left;
}
/*Contact*/
.contact{
	/*border: 1px solid black;*/
	width: 100%;
	height: 170px;
	margin-top: 67%;
	position: absolute;
	display: flex;
	background-color: white;
}
.contact h2{
font-size: 45px;
	font-family: trajan;
	margin-left: 43%;
	margin-top: 40px;
}
.contact h3{
	font-size: 20px;
	font-family: trajan;
	margin-left: -11.5%;
	margin-top: 100px;
	color: goldenrod;
}
.contactno{
	/*border: 1px solid black;*/
	width: 100%;
	height: 600px;
	margin-top: 78.4%;
	position: absolute;
	display: flex;
	background-color: white;
	background-image: url("pics/image100.jpg");
	background-size: 1500px 600px;
	background-repeat: no-repeat;
}
.container1{
	background: rgba(20, 237, 170, .2);
border-radius: 5px;
overflow: hidden;
/*max-height: 100vh;*/
box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
width: 437px;
height:550px;
max-width: 100%;
display: absolute;
/*max-height: 100%;*/
margin-top: 20px;
margin-left: 900px;
position: absolute;
}
.header{
	border-radius: ;
	text-align: center;
	padding: 20px 30px;
	/*position: relative;*/
	background: rgba(255, 255, 255, .2);
}
.header h2{
	margin: 0;
	font-size: 32px;
}
.form{
	padding: 20px 20px;
}
.form-control1{
	padding-bottom: 10px;
	margin-bottom: 8px;
	position: relative;
}
.form-control1 label{
	display: inline-block;
	margin-top: 10px;
	font-size: 15px;
	color: black;
	font-family: gilroy;
	margin-left: 20px;
}
.form-control1 input{
	
	background: rgba(176,196,222 .8);
	position: absolute;
	border: 1px solid grey;
	border-radius: 4px;
	font-family: inherit;
	width: 90%;
	padding: 8px;
	display: block;
	font-size: 14px;
	margin-left: 20px;
}
.form-control2{
	padding-bottom: 10px;
	margin-bottom: 8px;
	position: relative;
}
.form-control2 label{
	display: inline-block;
	margin-top: 10px;
	font-size: 15px;
	color: black;
	font-family: gilroy;
	margin-left: 20px;
}
.form-control2 input{
	
	background-color: rgba(176,196,222 .8);
	position: absolute;
	border: 1px solid grey;
	border-radius: 4px;
	/*font-family: inherit;*/
	width: 90%;
	padding: 8px;
	/*display: block;*/
	font-size: 14px;
	height: 120px;
		margin-left: 20px;
}

.form-box{
	border: 1px solid grey;
	padding: 8px 16px 8px;
	border-radius: 3px;
	display:inline-block;
	width: auto;
	background: rgba(237, 20, 20, .4);
}
	 .inbox1 button{
	background-color: red;
	/*border:2px solid red;*/
	border-radius: 4px;
	color: #fff;
	position: relative;
	display: inline-block;
	/*font-family: inherit;*/
	font-size: 16px;
	box-shadow: 1px 2px 1px brown;
	margin: 8px;
	padding: 10px;
	width: 100px;
	cursor: pointer;
	margin-top: 110px;
	margin-left: 0px;
	margin-left: 20px;
}
.inbox1:hover button{
	background-color: blue;
	/*border-color: red;*/
}


/*brand*/
.brand{

	border: 1px solid goldenrod;
	width: 100%;
	height: 170px;
	margin-top: 40.5%;
	position: absolute;
	display: flex;
	background-color: black;
}
.brand h2{
	color: goldenrod;
	font-family: trajan;
	margin-left: 670px;
	margin-top: 5px;
}
.brand1{
	/*border: 1px solid goldenrod;*/
	width: 150px;
	height: 120px;
	margin-top: 40px;
	margin-left: -730px;
	background-image: url("pics/image84.jpg");
	background-size: cover;
}
.brand2{
	/*border: 1px solid goldenrod;*/
	width: 150px;
	height: 120px;
		margin-top: 40px;
	margin-left: 80px;
	background-image: url("pics/image83.jpg");
	background-size: cover;
}
.brand3{
	/*border: 1px solid goldenrod;*/
	width: 150px;
	height: 120px;
		margin-top: 40px;
	margin-left: 80px;
	background-image: url("pics/image97.jpg");
	background-size: 150px 120px;
}
.brand4{
	/*border: 1px solid goldenrod;*/
	width: 170px;
	height: 120px;
		margin-top: 40px;
	margin-left: 80px;
	background-image: url("pics/image82.jpg");
	background-size: 160px 110px;
}
.brand5{
	/*border: 1px solid goldenrod;*/
	width: 170px;
	height: 120px;
		margin-top: 40px;
	margin-left: 80px;
	background-image: url("pics/image94.jpg");
	background-size: 160px 100px;
}
.brand6{
	/*border: 1px solid goldenrod;*/
	width: 170px;
	height: 120px;
		margin-top: 40px;
	margin-left: 80px;
	background-image: url("pics/image81.jpg");
	background-size: 160px 100px;
}
.info{

	border: 2px solid white;
	width: 100%;
	height: 420px;
	margin-top: 51.5%;
	position: absolute;
	display: flex;
	background-color: rgb(46, 64, 83,.9);
}
.info1{
		/*border: 2px solid white;*/
	width: 42%;
	height: 30px;
	margin-top: 390px;
	margin-left: 400px;
	position: absolute;
	display: flex;
}
.info1 h2{
	font-size: 15px;
	color: white;
}
.info2{
		/*border: 2px solid white;*/
	width: 12%;
	height: 200px;
	margin-top: 50px;
	margin-left: 100px;
	position: absolute;
	/*display: flex;*/
}
.info2 h2{
color: red;

}
.info2 h3{
color: white;
font-family: helvetica;
}
.info3{
		/*border: 2px solid white;*/
	width: 12%;
	height: 200px;
	margin-top: 50px;
	margin-left: 350px;
	position: absolute;
	/*display: flex;*/
}
.info3 h2{
color: red;
/*margin-left: 20px;*/

}
.info3 h3{
font-family: helvetica;
color: white;
}
.info4{
		/*border: 2px solid white;*/
	width: 12%;
	height: 200px;
	margin-top: 50px;
	margin-left: 630px;
	position: absolute;
	/*display: flex;*/
}
.info4 h2{
color: red;
/*margin-left: 20px;*/
}
.info4 h3{
	font-family: helvetica;
color: white;
}
.info5{
		/*border: 2px solid white;*/
	width: 12%;
	height: 200px;
	margin-top: 50px;
	margin-left: 900px;
	position: absolute;
	/*display: flex;*/

}
.info5 h2{
color: red;

}
.info5 h3{
	font-family: helvetica;
	color: white;
}
.info6{
		/*border: 2px solid white;*/
	width: 15%;
	height: 200px;
	margin-top: 50px;
	margin-left: 1200px;
	position: absolute;
	/*display: flex;*/

}
.info6 h2{
color: red;

}
.info6 h3{
	font-family: helvetica;
	color: white;
}
.icn1{
	/*border: 1px solid white;*/
	width: 20%;
	height: 50px;
	margin-left: 0px;
	margin-top: 20px;
}
.icn1 i{
margin-left: 2px;
font-size: 40px;
color: white;
}
 .icn1:hover i{
	color: blue;
}
.icn2{
	/*border: 1px solid white;*/
	width: 20%;
	height: 50px;
	margin-left: 50px;
	margin-top: -50px;
}
.icn2 i{
margin-left: 2px;
font-size: 40px;
color: white;
}
 .icn2:hover i{
	color: blue;
}
.icn3{
	/*border: 1px solid white;*/
	width: 20%;
	height: 50px;
	margin-left: 105px;
	margin-top: -50px;
}
.icn3 i{
margin-left: 2px;
font-size: 40px;
color: white;
}
 .icn3:hover i{
	color: blue;
}
.icn4{
	/*border: 1px solid white;*/
	width: 20%;
	height: 50px;
	margin-left: 160px;
	margin-top: -50px;
}
.icn4 i{
margin-left: 2px;
font-size: 40px;
color: white;
}
 .icn4:hover i{
	color: blue;
}
/*nav*/

.sidenav {
  height: 100%;
  width: 0px;
  display: block;
  
  position: fixed;
  float: left;
  z-index: 51;
  bottom: 0;
  right: 0;
  background-color:rgb(206, 36, 74);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
   
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: black;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 35px;}
  .sidenav a {font-size: 18px;}
}


</style>
<body>
	<form action="../project/insert.php" method="post">
<div class="box">
	<div class="box1"></div>
<div class="inbox">
		<ul>
			<li><a href="home.php"><button>Home</button></a></li>
		<li><a href="about.php"><button>About</button></a>
<ul class="li1">
	
	<!-- <li class="li2"><a href=""><button>SignIn</button></a></li> -->
	<!-- <li  class="li3"><a href=""><button>SignUp</button></a></li> -->
		</ul></li>
		<li><a href="rooms.php"><button>Rooms</button></a></li>
		<li><a href="services.php"><button>Services</button></a></li>
		<ul class="li1">
	<li class="li2"><a href=""><button></button></a></li>
	<li  class="li3"><a href=""><button></button></a></li>
		</ul></li>
		<li><a href="blog.php"><button>Blog</button></a></li>

		<li><a href="contact.php"><button>Contact</button></a></li>
	</ul>
</div>
<!-- nav -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)"  class="closebtn"  onclick="closeNav()">&times;</a>
  <a href="home.php">Home</a>
  <a href="about.php">About</a>
  <a href="rooms.php">Room</a>
  <a href="services.php">Services</a>
  <a href="blog.php">Blog</a>
  <a href="contact.php">Contact</a>
  <a href="stay.php">Booking Stay</a>
  <a href="resturant.php">Restaurant</a>
</div>
<span style="font-size:30px;cursor:pointer; margin-left: 0px; margin-top: 10px; color: red;" onclick="openNav()">&#9776;</span>

</div>
</div>

<!-- <div class="stay"><a href=""><tooltip><b>STAY</b> <span class="tooltiptext">Book your stay</span></tooltip></a> </div>
 -->	
	<!-- /*slider*/ -->
 <div class="slider">

  <input name="control" id="page1" type="radio" checked/>
  <input name="control" id="page2" type="radio"/>
  <input name="control" id="page3" type="radio"/>
  <input name="control" id="page4" type="radio"/>
  <div class="slider--el slider--el-1 anim-4parts">
    <div class="slider--el-bg">
      <div class="part top left"></div>
      <div class="part top right"></div>
      <div class="part bot left"></div>
      <div class="part bot right"></div>
    </div>
   
    <div class="slider--el-content">
    	 <div class="slider--el-tooltip">
    	<div class="stay"><a href="stay.php"><tooltip><b>STAY</b> <span class="tooltiptext">Book your stay</span></tooltip></a> </div>
    </div>
      <!-- <h2 class="slider--el-heading">Welcome<br> to  <br> Marriott</h2> -->
    </div>
  </div>
  <div class="slider--el slider--el-2 anim-9parts">
    <div class="slider--el-bg">
      <div class="part left-top"></div>
      <div class="part mid-top"></div>
      <div class="part right-top"></div>
      <div class="part left-mid"></div>
      <div class="part mid-mid"></div>
      <div class="part right-mid"></div>
      <div class="part left-bot"></div>
      <div class="part mid-bot"></div>
      <div class="part right-bot"></div>
    </div>
    <div class="slider--el-content">
    <div class="slider--el-tooltip">
    	<div class="stay"><a href="stay.php"><tooltip><b>STAY</b> <span class="tooltiptext">Book your stay</span></tooltip></a> </div>
    </div>
      <h2 class="slider--el-heading"></h2>
    </div>
  </div>
  <div class="slider--el slider--el-3 anim-5parts">
    <div class="slider--el-bg">
      <div class="part part-1"></div>
      <div class="part part-2"></div>
      <div class="part part-3"></div>
      <div class="part part-4"></div>
      <div class="part part-5"></div>
    </div>
    <div class="slider--el-content">
    		<div class="slider--el-tooltip">
    	<div class="stay"><a href="stay.php"><tooltip><b>STAY</b> <span class="tooltiptext">Book your stay</span></tooltip></a> </div>
    </div>
      <h2 class="slider--el-heading"></h2>
    </div>
  </div>
  <div class="slider--el slider--el-4 anim-3parts">
    <div class="slider--el-bg">
      <div class="part left"></div>
      <div class="part mid"></div>
      <div class="part right"></div>
    </div>
    <div class="slider--el-content">
    	<div class="slider--el-tooltip">
    	<div class="stay"><a href="stay.php"><tooltip><b>STAY</b> <span class="tooltiptext">Book your stay</span></tooltip></a> </div>
    </div>
      <h2 class="slider--el-heading"></h2>
    </div>
  </div>
  <div class="slider--control left">
    <label class="page1-left" for="page1"></label>
    <label class="page2-left" for="page2"></label>
    <label class="page3-left" for="page3"></label>
    <label class="page4-left" for="page4"></label>
  </div>
  <div class="slider--control right">
    <label class="page1-right" for="page1"></label>
    <label class="page2-right" for="page2"></label>
    <label class="page3-right" for="page3"></label>
    <label class="page4-right" for="page4"></label>
  </div>
</div>
<!-- /*slider off*/ -->

        <!-- <div id="settings-button"> -->
        	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="pure-css-slider-with-custom-effects/js/index.js"></script>
    <!-- welcome -->
    <div class="welcome">
	 <h2 class="slider--el-heading">Get In Touch With Us</h2>
</div>
<!-- contact -->
	<div class="contact">
		<h2>Contact</h2>
		<h3>contact us for get in touch</h3>
	</div>
		<div class="contactno">
			<!-- <div class="marriott"> -->
<!-- <h2>Marriott</h2> -->
<!-- <h3>A</h3> -->
<!-- <h4>Luxury Hotel</h4> -->
		<!-- </div> -->
			<div class="marriott1"></div>
			<div class="container1">
	<div class="header">
		<h2>CONTACT</h2>
		<div><i style="font-size:24px" class="fas fa-user-circle"></i></div>
	</div>
	<form class="form" id="form">
		<div class="form-control1">
			<label>UserName:-</label><br>
			<input type="text" name="username" id="username" placeholder="Enter your fullname" required=""><br>
</div>
	<div class="form-control1">
			<label>Email:-</label><br>
			<input type="text" name="email" id="email" placeholder="Enter your Email-@gmail.com" required=""><br>
</div>
	<div class="form-control1">
			<label>Mobile:-</label><br>
			<input type="text" name="mobile" id="mobile" placeholder="Enter your mobile-no" required=""><br>
			</div>	
			<div class="form-control2">
			<label>Message:-</label><br>
			<input type="text" name="message" id="message" placeholder="Your message" required=""><br>
			</div>
			<div class="inbox1">
	<button  type="submit">Submit</button></div>	
	</form>
		</div>
		<!-- brand -->
		<div class="brand">
			<h2>Marriott brands</h2>
			<div class="brand1"></div>
			<div class="brand2"></div>
			<div class="brand3"></div>
			<div class="brand4"></div>
				<div class="brand5"></div>
					<div class="brand6"></div>
		</div>
			<div class="info">
				<div class="info1"><h2>© Domain.com
All Rights Reserved. Designed by FreeHTML5.co Demo Images: Unsplash</h2>
			</div>
			<div class="info2">
				<h2>Company</h2><br>
				<h3>Home</h3>
				<h3>About</h3>
				<h3>Rooms</h3>
				<h3>Services</h3>
				<h3>Blog</h3>
				<h3>Contact</h3>
			</div>
			<div class="info3">
				<h2>Our Facilities</h2><br>
				<h3>Restaurant</h3>
				<h3>Bar</h3>
				<h3>Pick-up</h3>
				<h3>Swimming</h3>
				<h3>Pool</h3>
				<h3>Spa</h3>
				<h3>Gym</h3>
			</div>
			<div class="info4">
				<h2>Other links</h2><br>
				<h3>Bonvoy</h3>
				<h3>Fairfield</h3>
				<h3>Moxy</h3>
				<h3>Huawei</h3>
				<h3>Halcyon</h3>
				<h3>Wonder</h3>
				<h3>Vertoz</h3>
				<h3>Sheraton</h3>
			</div>
				<div class="info5">
				<h2>Contact Us</h2><br>
	<h3 style=" color: rgba(171, 178, 185);">Phone:-</h3>
<h3>+91 7696243435</h3><br>
<h3 style=" color: rgba(171, 178, 185);">Email:-</h3>
<h3>16yatingrover@gmail.com</h3><br>
<h3 style=" color: rgba(171, 178, 185);">Location:-</h3>
<h3>Distt-Jalandhar, Teh:Phillaur, India</h3>
			</div>
			<div class="info6">
				<h2>Social Info</h2><br>
				<h3>We are also in social sites</h3><br>
				<h3>Catch on social</h3>
					<!-- icons -->
			<div class="icn">
				<div class="icn1"><a href="https://www.instagram.com/yatingrover1620"><i class="fab fa-instagram"></i></a></div>
				<div class="icn2"><a href="https://www.facebook.com/Yatin Grover"><i class="fab fa-facebook"></i></a></div>
				<div class="icn3"><a href="https://www.twitter.com/yatingrover1620"><i class="fab fa-twitter"></i></a></div>
				<div class="icn4"><a href="https://www.gmail.com/16yatingrover@gamil.com"><i class="far fa-envelope"></i></a></div>
			</div>
			</div>
		
			</div>
			 <!-- nav -->
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</form>
</body>
</html>