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
	<title>blog</title>
	<!-- font icon link -->
	<script src="https://kit.fontawesome.com/c22e3c78ef.js"crossorigin="anonymous"></script>
	<link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
	<!-- testimonial carousel link -->

<link rel="stylesheet" href="carousel-08\css\owl.carousel.min.css">
    <link rel="stylesheet" href="carousel-08\css\owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="carousel-08\css\animate.css">
		<link rel="stylesheet" href="carousel-08\css\style.css">
	
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
	/*height: auto/;*/
	overflow: auto;
	display: initial;
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
  margin-left: 30px;
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
/*testimonial*/
.guest{
	/*border: 1px solid black;*/
	width: 100%;
	height: 170px;
	margin-top: 66.9%;
	position: absolute;
	display: flex;
	background-color: white;
}
.guest h2{
font-size: 45px;
	font-family: trajan;
	margin-left: 43%;
	margin-top: 40px;
}
.guest h3{
	font-size: 20px;
	font-family: trajan;
	margin-left: -13.4%;
	margin-top: 100px;
	color: goldenrod;
}
/*slide testimonial*/
.testimonial{
/*border: 1px solid black;*/
		width: 100%;
	height: 700px;
	margin-top: 78.3%;
	position: absolute;
	display: flex;
	background-color: rgb(234, 236, 238);
}
.pt-4 span{
	font-size: 15px;
}
/*blog*/
.blog{
	/*border: 1px solid black;*/
	width: 100%;
	height: 170px;
	margin-top: 125.5%;
	position: absolute;
	display: flex;
	background-color: white;
}
.blog h2{
font-size: 45px;
	font-family: trajan;
	margin-left: 43%;
	margin-top: 40px;
}
.blog h3{
	font-size: 20px;
	font-family: trajan;
	margin-left: -13.5%;
	margin-top: 100px;
	color: goldenrod;
}
.blog1{
	/*border: 1px solid black;*/
	width: 100%;
	height: 670px;
	margin-top: 137%;
	position: absolute;
	display: flex;
	background-color: white;
}
.bloga{
	/*border: 1px solid black;*/
	width: 25%;
	height: 250px;
	margin-top: 15px;
	margin-left: 110px;
	position: absolute;
	display: flex;
	background-image: url("pics/image33.jpg");
	background-size: 370px 300px;
	box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.blogaa{
border: 1px solid black;
	width: 25%;
	height: 55px;	
	margin-top: 265px;
	margin-left: 110px;
	background-color: black;
	font-size: 12px;
	color: white;
	padding: 2px ;
	text-align: justify;
	box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.blogb{
	/*border: 1px solid black;*/
	width: 25%;
	height: 250px;
	margin-top: 15px;
	margin-left: 550px;
	position: absolute;
	display: flex;
	background-image: url("pics/image5.jpg");
	background-size: 370px 250px;
	box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.blogbb{
border: 1px solid black;
	width: 25%;
	height: 55px;	
	margin-top: 265px;
	margin-left: 70px;
	background-color: black;
	font-size: 12px;
	color: white;
	padding: 2px ;
	text-align: justify;
	box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.blogc{
	/*border: 1px solid black;*/
	width: 25%;
	height: 250px;
	margin-top: 15px;
	margin-left: 1000px;
	position: absolute;
	display: flex;
	background-image: url("pics/image27.jpg");
	background-size: 370px 250px;
	box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.blogcc{
border: 1px solid black;
	width: 25%;
	height: 55px;	
	margin-top: 265px;
	margin-left: 79px;
	background-color: black;
	font-size: 12px;
	color: white;
	padding: 2px ;
	text-align: justify;
	box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.blogd{
	/*border: 1px solid black;*/
	width: 25%;
	height: 250px;
	margin-top: 350px;
	margin-left: 110px;
	position: absolute;
	display: flex;
	background-image: url("pics/image16.jpg");
	background-size: 370px 250px;
	box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.blogdd{
border: 1px solid black;
	width: 25%;
	height: 55px;	
	margin-top: 600px;
	margin-left: -370px;
	background-color: black;
	font-size: 12px;
	color: white;
	padding: 2px ;
	text-align: justify;
	box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.bloge{
	/*border: 1px solid black;*/
	width: 25%;
	height: 250px;
	margin-top: 350px;
	margin-left: 550px;
	position: absolute;
	display: flex;
	background-image: url("pics/image13.jpg");
	background-size: 370px 250px;
	box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.blogee{
border: 1px solid black;
	width: 25%;
	height: 55px;	
	margin-top: 600px;
	margin-left: -820px;
	background-color: black;
	font-size: 12px;
	color: white;
	padding: 2px ;
	text-align: justify;
	box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.blogf{
	/*border: 1px solid black;*/
	width: 25%;
	height: 250px;
	margin-top: 350px;
	margin-left: 1000px;
	position: absolute;
	display: flex;
	background-image: url("pics/image52.jpg");
	background-size: 370px 300px;
	box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.blogff{
border: 1px solid black;
	width: 25%;
	height: 55px;	
	margin-top: 600px;
	margin-left: -811px;
	background-color: black;
	font-size: 12px;
	color: white;
	padding: 2px ;
	text-align: justify;
box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
/*brand*/
.brand{

	border: 1px solid goldenrod;
	width: 100%;
	height: 170px;
	margin-top: 182%;
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
	margin-top: 193%;
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
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
	 <h2 class="slider--el-heading">Blogs & Testimonials</h2>
</div>
<div class="guest">
	<h2>Testimonial</h2>
	<h3>Our Happy Guest Says</h3>
	</div>
	<!-- testimonial slideshow -->
	<div class="testimonial">
		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="heading-section mb-5"></h2>
					</div>
					<div class="col-md-12">
						<div class="featured-carousel owl-carousel">
							<div class="item">
								<div class="row justify-content-center">
									<div class="col-md-11">
										<div class="testimony-wrap d-md-flex">
											<div class="img" style="background-image: url(carousel-08/image/person-1.jpg);"></div>
											<div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
												<div class="desc w-100">
													<p class="h3 mb-5">"Beautiful setting, lovely rooms and amazing views,excellent services"</p>
													<div class="pt-4">
														<p class="name mb-0">&mdash; Amanda Isabella</p>
														<span class="position">Digital Marketing </span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row justify-content-center">
									<div class="col-md-11">
										<div class="testimony-wrap d-md-flex">
											<div class="img" style="background-image: url(carousel-08/image/person-2.jpg);"></div>
											<div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
												<div class="desc w-100">
													<p class="h3 mb-5">"Incredible services and amazing customer support"</p>
													<div class="pt-4">
														<p class="name mb-0">&mdash; Rony Smith</p>
														<span class="position">Project Manager</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row justify-content-center">
									<div class="col-md-11">
										<div class="testimony-wrap d-md-flex">
											<div class="img" style="background-image: url(carousel-08/image/person-3.jpg);"></div>
											<div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
												<div class="desc w-100">
													<p class="h3 mb-5">"Amazing staff, good breakfast, comfortable rooms and outside territory were absolutely lovely"</p>
													<div class="pt-4">
														<p class="name mb-0">&mdash; Jennifer Williams</p>
														<span class="position">Corporate Founder</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- blog -->
	<div class="blog">
		<h2>Recent Blog</h2>
		<h3>Read amazing blogs</h3>
	</div>
	<div class="blog1">
		<div class="bloga"></div>
		<div class="blogaa">The Ascott Sathorn offers luxurious serviced residences in Bangkok’s business capital. Enjoy the city from a spacious and comfortably furnished luxury apartment.</div>
		<div class="blogb"></div>
		<div class="blogbb">Novotel’s luxurious resort and spa located on Karon Beach in Phuket, Thailand. My suite came with it’s own private plunge pool, how cool is that?!</div>
		<div class="blogc"></div>
		<div class="blogcc"> Swimming among skyscrapers in the world’s coolest infinity pool, 57 stories high! The iconic, astonishing Marina Bay Sands in Singapore is one for the bucket list!</div>
		<div class="blogd"></div>
		<div class="blogdd">Leon offers comfortable hotels and low budget hostels – I’m reviewing one of each, both are highly rated and possibly excellent choices for your next stay in this city.</div>
		<div class="bloge"></div>
		<div class="blogee">Centrally located downtown is one of Portland’s top-rated accommodations. Hotel Monaco is a Kimpton owned luxury hotel. Its boutique, upscale and pet friendly.

</div>
		<div class="blogf"></div>
		<div class="blogff">Capsules are some of the cheapest accommodation in Japan; but was sleeping in a capsule pod cramped or comfortable?</div>
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
<!-- testimonial carousel slider -->
	<script src="carousel-08\js\jquery.min.js"></script>
    <script src="carousel-08\js\popper.js"></script>
    <script src="carousel-08\js\bootstrap.min.js"></script>
    <script src="carousel-08\js\owl.carousel.min.js"></script>
    <script src="carousel-08\js\main.js"></script>
     <!-- nav -->
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>