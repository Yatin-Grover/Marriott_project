<!DOCTYPE html>
<html lang="en">
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
	
  <link rel="stylesheet" href="pure-css-slider-with-custom-effects\css\style.css">
	<title>Home</title>
	<!-- font icon link -->
	<script src="https://kit.fontawesome.com/c22e3c78ef.js"crossorigin="anonymous"></script>
	<link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
<!-- testimonial carousel link -->

<link rel="stylesheet" href="carousel-08\css\owl.carousel.min.css">
    <link rel="stylesheet" href="carousel-08\css\owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="carousel-08\css\animate.css">
		<link rel="stylesheet" href="carousel-08\css\style.css">
		<!--  -->

</head>
<!-- home -->
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Red+Hat+Display:900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
*{
	/*box-sizing: border-box;*/
}
body{
	/*background-color: white;*/
	margin: 0;
	padding: 0;
	background-image: url("pics/image45.jpg");
	background-repeat: no-repeat;
	background-size: 1500px 770px;
	/*max-width: 100%/;*/
	/*height: auto/;*/
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
/*about*/
.about{
	border: 3px solid grey;
		width: 100%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
		height: 670px;
		background-color:white ;
		margin-top:66.9% ;
		float: left;
		font-family: gilroy;
		background-color: grey;
		
}
.about h1{
	margin-left: -800px;
	font-family: tarjan;
	font-size: 90px;
	margin-top: 20px;
}
.image{
	/*border: 3px solid black;*/
	border-radius: 2px;
		width: 45%;
		height: 440px;
		margin-top: 170px;
		margin-left: 70px;
		background-image: url("pics/image21.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
}
.para{
	/*border: 3px solid black;*/
		width: 40%;
		height: 440px;
		margin-top: 170px;
		margin-left: 100px;
}
.para h2{
	font-size: 30px;
}
.para p{
	font-size: 20px;
	text-align: justify;
}
.aboutus{
		/*border: 3px solid grey;*/
		width: 100%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
		height: 600px;
		background-color:white ;
		margin-top:112.1% ;
		float: left;
		/*font-family: ;*/
		
}
.aboutus h1{
	margin-left: 420px;
	font-family: Aviano;
	font-size: 50px;
	margin-top: 40px;
}
.aboutus h2{
	margin-left: -440px;
	font-family: Aviano;
	font-size: 22px;
	margin-top: 100px;
	color: goldenrod;
}
.e{
	/*border:2px solid black ;*/
	width: 220px;
	height: 220px;
	margin-left: 200px;
	margin-top: 230px;
	background-color: rgb(215, 219, 221,.3);

}
.e i{
	font-size: 4vw;
color: goldenrod;
margin-left: 5.2vw;
margin-top: 4vw;
}
.e h3
{
	margin-top: 2vw;
	/*margin-left: 2vw;*/
	text-align: center;
}
.d{
	/*border:2px solid black ;*/
	width: 220px;
	height: 220px;
	margin-left: -450px;
	margin-top: 230px;
	background-color: rgb(215, 219, 221,.3);
}
.d i{
	font-size: 4vw;
color: goldenrod;
margin-left: 5.2vw;
margin-top: 4vw;
}
.d h3{
margin-top: 2vw;
	/*margin-left: 2vw;*/
	text-align: center;
}
.c{
	/*border:2px solid black ;*/
	width: 220px;
	height: 220px;
	margin-left: -450px;
	margin-top: 230px;
	background-color: rgb(215, 219, 221,.3);
}
.c i{
	font-size: 4vw;
color: goldenrod;
margin-left: 5.2vw;
margin-top: 4vw;
}
.c h3
{
	margin-top: 2vw;
	/*margin-left: 2vw;*/
	text-align: center;
}
.b{
	/*border:2px solid black ;*/
	width: 220px;
	height: 220px;
	margin-left: -450px;
	margin-top: 230px;
	background-color: rgb(215, 219, 221,.3);
}
.b i{
	font-size: 4vw;
color: goldenrod;
margin-left: 5.2vw;
margin-top: 4vw;
}
.b h3
{
	margin-top: 2vw;
	/*margin-left: 2vw;*/
	text-align: center;
}

.a{
	/*border:2px solid black ;*/
	width: 220px;
	height: 220px;
	margin-left: -450px;
	margin-top: 230px;
	background-color: rgb(215, 219, 221,.3);
}
.a i{
	font-size: 4vw;
color: goldenrod;
margin-left: 5.2vw;
margin-top: 4vw;
}
.a h3
{
	margin-top: 2vw;
	/*margin-left: 2vw;*/
	text-align: center;
}

/*overlay*/

.overlay {
  position: flex;
  bottom: 100%;
  left: 0;
  right: 0;
  /*background-image: url("C:/Users/ASUS/Desktop/Yatin/hotel/pure-css-slider-with-custom-effects/images/image21.jpg");*/
  overflow: hidden;
  width: 220px;
  height:0;
  transition: .7s ease;
  margin-top:-11.6vw ;
}

.a:hover .overlay {
  bottom: 0;
  height: 100%;
}

.img{
	 display: block;
  width: 100%;
  height: 180px;
  /*z-index: 4;*/
}
.b:hover .overlay {
  bottom: 0;
  height: 100%;
}
.c:hover .overlay {
  bottom: 0;
  height: 100%;
}
.d:hover .overlay {
  bottom: 0;
  height: 100%;
}
.e:hover .overlay {
  bottom: 0;
  height: 100%;
}
/*text overlay*/
.slide-right h3{
	position: flex;
	/*margin-top: 50px;*/
	 transition: .7s ease;
  margin-top:.4vw ;
  /*display: none;*/
  color: goldenrod;
font-style: tarjan;
}
 .a:hover .slide-right{
}
.b:hover .slide-right{
}
.c:hover .slide-right{
}
.d:hover .slide-right{
}
.e:hover .slide-right{
}
/*rooms*/
.rooms{
	/*border: 3px solid grey;*/
	color: white;
		width: 100%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
		height: 955px;
		background-color:white ;
		margin-top:152.6% ;
		float: left;
		font-family: gilroy;
		background-image: url("pics/image42.jpg");

}
.rooms h2{
	font-size: 40px;
	margin-left: 500px;
	margin-top: 40px;
}
.room1{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		background-color:white ;
		margin-top: 120px;
		background-image: url("pics/image1.jpg") ;
		background-size: cover;
}
.room1a{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		background-color:white ;
		margin-top: 120px;
		margin-left: 25%;
		/*background-color: rgb(191, 201, 202);*/
		background-image: url("pics/image68.jpg");
		background-position: cover;
}
.room1a h2{
font-size: 35px;
	margin-left: 30px;
	margin-top: 20px;
	color: black;
	position: absolute;
	display: flex;
}
.room1a h3{
font-size: 20px;
	margin-left: 0px;
	margin-top: 80px;
	color: black;
	text-align: justify;
	padding: 0px 30px;
}
.room2{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		background-color:white ;
		margin-top: 120px;
		margin-left: 50%;
		background-image: url("pics/image70.jpg") ;
		background-size: cover;
		background-repeat: no-repeat;
}
.room2a{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		background-color:white ;
		margin-top: 120px;
		margin-left: 75%;
		background-image: url("pics/image68.jpg");
		background-position: cover;
}
.room2a h2{
font-size: 35px;
	margin-left: 20px;
	margin-top: 20px;
	/*margin-top: 40px;*/
	color: black;
	position: absolute;
	display: flex;
}
.room2a h3{
font-size: 20px;
	margin-left: 0px;
	margin-top: 80px;
	color: black;
	text-align: justify;
	padding: 0px 30px;
}
.room3{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		background-color:white ;
		margin-top: 397px;
		background-image: url("pics/image68.jpg");
		background-position: cover;
}
.room3 h2{
font-size: 35px;
	margin-left: 20px;
	margin-top: 20px;
	/*margin-top: 40px;*/
	color: black;
	position: absolute;
	display: flex;
}
.room3 h3{
font-size: 20px;
	margin-left: 0px;
	margin-top: 80px;
	color: black;
	text-align: justify;
	padding: 0px 30px;
}
.room3a{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		background-color:white ;
		margin-top: 397px;
		margin-left: 25%;
		background-image: url("pics/image58.jpg") ;
		background-size: 370px 280px;
}
.room4{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		background-color:white ;
		margin-top: 397px;
		margin-left: 50%;
		background-image: url("pics/image68.jpg");
		background-position: cover;
}
.room4 h2{
font-size: 35px;
	margin-left: 20px;
	margin-top: 20px;
	/*margin-top: 40px;*/
	color: black;
	position: absolute;
	display: flex;
}
.room4 h3{
font-size: 20px;
	margin-left: 0px;
	margin-top: 80px;
	color: black;
	text-align: justify;
	padding: 0px 30px;
}
.room4a{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		background-color:white ;
		margin-top: 397px;
		margin-left: 75%;
		background-image: url("pics/image65.jpg") ;
		background-size: cover;
		background-repeat: no-repeat;
}
.room5{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		background-color:white ;
		margin-top: 675px;
			background-image: url("pics/image61.jpg") ;
		background-size: 370px 280px;
		background-repeat: no-repeat;
}
.room5a{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		background-color:white ;
		margin-top: 675px;
		margin-left: 25%;
		background-image: url("pics/image68.jpg");
		background-position: cover;
}
.room5a h2{
font-size: 35px;
	margin-left: 20px;
	margin-top: 20px;
	/*margin-top: 40px;*/
	color: black;
	position: absolute;
	display: flex;
}
.room5a h3{
font-size: 20px;
	margin-left: 0px;
	margin-top: 80px;
	color: black;
	text-align: justify;
	padding: 0px 30px;
}
.room6{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		/*background-color:white ;*/
		margin-top: 675px;
		margin-left: 50%;
			background-image: url("pics/image60.jpg") ;
		background-size: 350px 270px;
}
.room6a{
	/*border: 3px solid black;*/
		width: 25%;
		display: flex;
		position: absolute;
		/*position: fixed;*/
		/*box-shadow: 0 5px 15px rgba(0, 0, 0, .5);*/
		height: 280px;
		background-color:white ;
		margin-top: 675px;
		margin-left: 75%;
		background-image: url("pics/image68.jpg");
		background-position: cover;
	
}
.room6a h2{
font-size: 35px;
	margin-left: 20px;
	margin-top: 20px;
	/*margin-top: 40px;*/
	color: black;
	position: absolute;
	display: flex;
}
.room6a h3{
font-size: 20px;
	margin-left: 0px;
	margin-top: 80px;
	color: black;
	text-align: justify;
	padding: 0px 30px;
}
/*overlay suite*/
.suite1,.suite2,.suite3,.suite4,.suite5,.suite6{
	border: 2px black;
	background-color: white;
	width: 100%;
	height: 200px;
 position: absolute;
 display: block;
  bottom: 100%;
  left: 0;
  right: 0;
  overflow: hidden;
  width: 100%;
  height:0px;
  transition: .7s ease;
  margin-top:-11.6vw ;
  background-image: url("pics/image72.jpg");
}
.room1a:hover .suite1 {
  bottom: 0;
  height: 100%;
}
.room2a:hover .suite2 {
  bottom: 0;
  height: 100%;
}
.room3:hover .suite3 {
  bottom: 0;
  height: 100%;
}
.room4:hover .suite4 {
  bottom: 0;
  height: 100%;
}
.room5a:hover .suite5 {
  bottom: 0;
  height: 100%;
}
.room6a:hover .suite6 {
  bottom: 0;
  height: 100%;
}
/*packages*/
.package1, .package2, .package3, .package4, .package5, .package6{
	/*border: 1px solid black;*/
	border-radius: 5px;
	width: 230px;
	height: 190px;
	margin-left:70px;
	margin-top: 70px;
	background-color: rgb(170, 183, 184,.4);


}
.package1 h4{
	font-size: 25px;
	margin-left: 65px;
	color: black;
	margin-top: 20px;
	/*font-weight: 20px;*/
}
.package1 h5{
	font-size: 10px;
	margin-left: 65px;
	color: black;
	/*font-weight: 20px;*/
	margin-left: 120px;
	margin-top: -15px;
}
.package2 h4{
	font-size: 25px;
	margin-left: 65px;
	color: black;
	margin-top: 20px;
	/*font-weight: 20px;*/
}
.package2 h5{
	font-size: 10px;
	margin-left: 65px;
	color: black;
	/*font-weight: 20px;*/
	margin-left: 120px;
	margin-top: -15px;
}
.package3 h4{
	font-size: 25px;
	margin-left: 65px;
	color: black;
	margin-top: 20px;
	/*font-weight: 20px;*/
}
.package3 h5{
	font-size: 10px;
	margin-left: 65px;
	color: black;
	/*font-weight: 20px;*/
	margin-left: 120px;
	margin-top: -15px;
}
.package4 h4{
	font-size: 25px;
	margin-left: 65px;
	color: black;
	margin-top: 20px;
	/*font-weight: 20px;*/
}
.package4 h5{
	font-size: 10px;
	margin-left: 65px;
	color: black;
	/*font-weight: 20px;*/
	margin-left: 120px;
	margin-top: -15px;
}
.package5 h4{
	font-size: 25px;
	margin-left: 65px;
	color: black;
	margin-top: 20px;
	/*font-weight: 20px;*/
}
.package5 h5{
	font-size: 10px;
	margin-left: 65px;
	color: black;
	/*font-weight: 20px;*/
	margin-left: 120px;
	margin-top: -15px;
}
.package6 h4{
	font-size: 25px;
	margin-left: 65px;
	color: black;
	margin-top: 20px;
	/*font-weight: 20px;*/
}
.package6 h5{
	font-size: 10px;
	margin-left: 65px;
	color: black;
	/*font-weight: 20px;*/
	margin-left: 120px;
	margin-top: -15px;
}
/*services*/
.service{
	/*border: 2px solid black;*/
	width: 100%;
	height: 200px;
	margin-top: 215%;
	position: absolute;
	display: flex;
	background-color: white;
}
.service h2{
	font-size: 45px;
	font-family: trajan;
	margin-left: 44%;
	margin-top: 35px;
}
.service h3{
		font-size: 20px;
	font-family: trajan;
	margin-left: -17%;
	margin-top: 100px;
	color: goldenrod;
}
video {
  width: 100%;
  height: auto;
	margin-top: 227.5%;
	position: absolute;
	display: flex;

}
/*restaurant*/
.restaurant{
	/*border: 1px solid black;*/
		width: 100%;
	height: 200px;
	margin-top: 283%;
	position: absolute;
	display: flex;
	background-color: white;
}
.restaurant h2{
font-size: 45px;
	font-family: trajan;
	margin-left: 44%;
	margin-top: 35px;
}
.restaurant h3{
	font-size: 20px;
	font-family: trajan;
	margin-left: -17%;
	margin-top: 100px;
	color: goldenrod;
}
.recipe{
	/*border: 1px solid black;*/
		width: 100%;
	height: 600px;
	margin-top: 295%;
	position: absolute;
	display: flex;
	background-color: rgb(234, 236, 238);
}
.recipe1{
	/*border: 1px solid black;*/
		width: 22%;
	height: 480px;
	margin-left: 105px;
	margin-top: 20px;
	background-image: url("pics/image76.jpg");
	background-repeat: no-repeat;
	background-size: 340px 480px;
}
.recipe2{
	/*border: 1px solid black;*/
		width: 22%;
	height: 480px;
	margin-left: 18px;
	margin-top: 90px;
		background-image: url("pics/image77.jpg");
		background-repeat: no-repeat;
	background-size: 325px 480px;
}
.recipe3{
	/*border: 1px solid black;*/
		width: 43%;
	height: 480px;
	margin-left: 20px;
	margin-top: 80px;
}
.recipe3 h1{
	font-size: 100px;
	margin-top: 30px;
		margin-left: 20px;
	font-family: Dancing Script;
	color: grey;

}
.recipe3 h2{
	font-size: 40px;
	margin-left: 20px;
	margin-top: -23px;
	font-family:  trajan;
}
.recipe3 p{
	font-size: 20px;
	text-align: justify;
	padding: 5px 40px;
}
/*testimonial*/
.guest{
	/*border: 1px solid black;*/
	width: 100%;
	height: 170px;
	margin-top: 335%;
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
	margin-top: 346%;
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
	margin-top: 393%;
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
	margin-top: 404%;
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
/*Contact*/
.contact{
	/*border: 1px solid black;*/
	width: 100%;
	height: 170px;
	margin-top: 449%;
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
	margin-top: 460%;
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
	margin-left: 20px
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
	margin-left: 20px
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
	margin-left: 20px
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
	margin-left: 20px
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
	 <h2 class="slider--el-heading">Welcome to Marriott</h2>
</div>
<!-- about us -->
<div class="about">
	<div class="image"></div>
	<div class="para">
		<h2>Touch Your Dream<h2>
		<p>Being among the most prominent luxury hotels across the globe, this iconic hotel utilizes its website to highlight a touch of luxury and sophistication. The Gramercy Hotel does this by employing various dark hues such as deep crimson and black establishing a sensation that is not only elite and stylish. Moreover, it embodies a brief reservation booking into its unique photo slideshow, ensuring that visitors ultimately check for availability instantly. <br>This way, the brand can exude confidence with the knowledge that it has successfully attracted their target market and that these individuals will feel highly motivated to book right away.The facility should include at least a range of basic equipment: a StairMaster, a treadmill, a stationary bike, free weights, and floor mats. Check out The Edgewater’s Wellness Center for more information about our training studio and classes. At The Edgewater, we offer the additional resort amenities of an on-site spa with massage, facials, and other aesthetic services to help you truly relax and reboot.
</p>
	</div>
	<h1><u>About us</u></h1>
</div>
<!-- overlay -->
<div class="aboutus">
	<h1>A New Vision of Luxury Hotel</h1><br>
	<h2>Make your vacation comfortable</h2>

	<div class="e"><i class="fas fa-door-open"></i>
		<h3>Cozy Rooms </h3>
	 <div class="overlay">
  	<img src="pics/image54.jpg" alt="Avatar" class="img">
  	<div class="slide-right">
				<h3>Delux Suites</h3>	
	</div>
	</div></div>

	<div class="d"><i class="far fa-cocktail"></i>	
		<h3>Reception & Parties</h3>
	 <div class="overlay">
  	<img src="pics/image52.jpg" alt="Avatar" class="img">
  	<div class="slide-right">
				<h3>Special Parties</h3>	
	</div>
	</div></div>

	<div class="c"><i class="fal fa-car"></i>
		<h3>Transfer Services</h3>
	 <div class="overlay">
  	<img src="pics/image50.jpg" alt="Avatar" class="img">
  	<div class="slide-right">
				<h3>Friendly Services</h3>	
	</div>
	</div></div>
	
	<div class="b"><i class="fal fa-burger-soda"></i>
		<h3>Delicious Meals</h3>	
		<div class="overlay">
				<img src="pics/image49.jpg" alt="Avatar" class="img">
				<div class="slide-right">
				<h3>Refreshments & Snacks</h3>	
	</div>
		</div></div>
		  
	<div class="a">
		<i class="fas fa-concierge-bell"></i>
	<h3>Friendly Services</h3>	
	
  <div class="overlay">
  	<img src="pics/image48.jpg" alt="Avatar" class="img">
	
	<div class="slide-right">
				<h3>Amiable Welcome</h3>	
	</div></div>
</div>
</div>
<!-- rooms -->
<div class="rooms">
	<h2>Welcome To Marriott Rooms</h2>
	<div class="room1"></div>
	<div class="room1a">
		<h2>Deluxe Suite</h2>
		<div class="package1">
<h4>280$</h4><h5>One night</h5>
<h4>540$</h4><h5>Two night</h5>
<h4>850$</h4><h5>Three night</h5>
</div>
<div class="suite1">
			 	<h2>Deluxe Suite</h2>
			 	<h3>Delex suite has luxrious japanese doors seprating room,a king size bed and either than L shape sofa bed. You got the facilities like free internet, electronic safe box, soundproof walls, individually smart t.v, branded bathrooms.</h3>

  	</div>
	</div>
	<div class="room2"></div>
	<div class="room2a">
		<h2>Quad Suite</h2>
	<div class="package2">
<h4>270$</h4><h5>One night</h5>
<h4>500$</h4><h5>Two night</h5>
<h4>750$</h4><h5>Three night</h5>
</div>
		<div class="suite2">
			 	<h2>Quad Suite</h2>
			 	<h3>Quad suite is a special and comfortable accommodate four guest. You got the awesome services like free cofee and tea services, internet, included air conditioning and heating, safty free of charges.</h3>
  	</div>
	</div>
	<div class="room3">
		<h2>Standard Suite</h2>
		<div class="package3">
<h4>250$</h4><h5>One night</h5>
<h4>470$</h4><h5>Two night</h5>
<h4>680$</h4><h5>Three night</h5>
</div>
			<div class="suite3">
			 	<h2>Standard Suite</h2>
			 	<h3>Standard suite has single room with king size bed. This room is decorated with basic facilities such as smart t.v, included air conditioning and heating, branded bathrooms, best room services.</h3>
  	</div>
	</div>

	<div class="room3a"></div>
	<div class="room4">
		<h2>Super Deluxe Suite</h2>
			<div class="package4">
<h4>320$</h4><h5>One night</h5>
<h4>600$</h4><h5>Two night</h5>
<h4>900$</h4><h5>Three night</h5>
</div>
			 <div class="suite4">
			 	<h2>Super Deluxe Suite</h2>
			 <h3>Super Deluxe suites are independently rooms that come with a balcony and a part of building unit. These are larger than deluxe rooms and only for guest who like large and spacious rooms with best services.</h3>

  	</div>
	</div>
	<div class="room4a"></div>
<div class="room5"></div>
	<div class="room5a">
		<h2>Executive Suite</h2>
<div class="package5">
<h4>280$</h4><h5>One night</h5>
<h4>540$</h4><h5>Two night</h5>
<h4>850$</h4><h5>Three night</h5>
</div>
			<div class="suite5">
			<h2>Executive Suite</h2>
			 <h3>An executive rooms is a collection of shared offices that are used by exectives or leadership teams. These rooms are with street view or liberty squared prepared with twin  bed or king size bed.</h3></div>
	</div>
	<div class="room6"></div>
	<div class="room6a">
		<h2>Luxury Suite</h2>
			<div class="package6">
<h4>300$</h4><h5>One night</h5>
<h4>560$</h4><h5>Two night</h5>
<h4>880$</h4><h5>Three night</h5>
</div>
			 <div class="suite6">
			 	<h2>Luxury Suite</h2>
			 	<h3>Luxury suite has high quality furnishes with opulent, a quite room with fresh air, original art on the walls, adequate storage, good size flat screen, free cofee maker, awesome view of balcony, branded bathrooms.</h3>
  	</div>
	</div>
</div>
<!-- services -->
<div class="service">
	<h2>Services</h2>
	<h3>Relax Your Soul With Marriott Best Services</h3>
</div>
	<video preload="auto" autoplay muted >
  <source src="video.mp4" type="video/mp4">
</video>
<!-- Restaurant -->
<div class="restaurant">
	<h2>Restaurant</h2>
	<h3>We believe good food offer great smile</h3>
</div>
<div class="recipe">
	<div class="recipe1"></div>
	<div class="recipe2"></div>
		<div class="recipe3">
			<h1>About</h1>
			<h2>Marriott Restaurant</h2>
			<p>For a memorable meal the quality of the service is something that guests often remember as much as the food and drink served. That means that restaurant servers must show extensive knowledge of all types of cuisine and dishes, especially the ingredients and cooking style of the dishes on an a la carte menu. They will need to know and understand the methods of preparation and serving, along with the tools used. It is a self-service cafeteria or a Marriott restaurant good manners, a smart appearance, and impeccable personal hygiene are equally essential.</p>
		</div>
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
			<form action="../project/insert.php" method="post">
			<div class="container1">
	<div class="header">
		<h2>CONTACT</h2>
		<div><i style="font-size:24px" class="fas fa-user-circle"></i></div>
	</div>
	<form class="form" id="form">
		<div class="form-control1">
			<label>UserName:-</label><br>
			<input type="text" name="username" id="username" placeholder="Enter your fullname"><br>
</div>
	<div class="form-control1">
			<label>Email:-</label><br>
			<input type="text" name="email" id="email" placeholder="Enter your Email-@gmail.com"><br>
</div>
	<div class="form-control1">
			<label>Mobile:-</label><br>
			<input type="text" name="mobile" id="mobile" placeholder="Enter your mobile-no"><br>
			</div>	
			<div class="form-control2">
			<label>Message:-</label><br>
			<input type="text" name="message" id="message" placeholder="Your message"><br>
			</div>
			<div class="inbox1">
	<button  type="submit">Submit</button></div>	
</form>
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