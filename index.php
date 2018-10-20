<!DOCTYPE html>
<html>
<head>
	<title>INFO ZONE</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Bootstrap carousel" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

<style>
.img1{
 border-radius:75px;
 }
.big {
    line-height: 2.2;
}
.title1{
font-family:"Imprint MT Shadow";
color:#0000FF;
font-size:25px;
}
.text1{
font-family:"Lucida Console";
color:#000000;
font-size:15px;
}
.flash {
   animation-name: flash;
    animation-duration: 0.2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
	font-family:"Courier New";
	font-size:30px;
}
@keyframes flash {
    from {color:blue;}
    to {color: black;}
}
 
body {margin:0;}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #1E90FF;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img1 {
    border-radius: 50%;
}
</style>
</head>
<body style="margin:auto" background="back2.jpg">


     
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->

	<div>
   <table align="center" height="20%" width="90%" border="0" cellpadding="0" cellspacing="0">
     <tr>
      <td align="center" height="15%" width="20%"><img src="images/header1.jpg" height="150" width="150"class="img1" /> </td>
      <td align="center" height="25%" width="30%"><img src="images/homecenter.jpg" height="150" width="350" /> </td>
      <td align="center" height="25%" width="30%"><img src="images/header2.gif" height="150" width="250" /> </td>
	 
     </tr>
	 </table>
	  <hr color="#000099"  />
  <div style="background-image:url(images/back2.jpg);">

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
  <a href="signup.php">Register</a>
  <a href="login.php">Login</a>
  <a href="#aboutus">About Us</a>
  <a href="#contactus">Contact Us</a>

</div>


<span style="font-size:20px;cursor:pointer" onClick="openNav()">&#9776; MENU</span>
<br><br>
 <center>
  <img src="images/centerpic.jpg" >
  </center>
	<br><br><br>
	<h2 class="flash"><center> WELCOME TO ONLINE PLACEMENT TRAINING</center></h2><br><br>
	<!-- End WOWSlider.com BODY section -->
	<br><br>
<center><img src="images/stayhungry.png"></center>
<center><h1 class="title1" id="aboutus">ABOUT US</h1></center>

<p class="text1 big" align="center">
		There is a reason why we take pride in branding ourselves the best online placement training.<br>
 Our instructors, graduates from Stanford University, IITs, IIITs, are Master craftsmen with years of <br>
 industry experience at Facebook, Amazon, American Express, Times Internet, etc.<br><br>
 		At Info Zone, our mission is to continuously innovate the best ways to train the next generation <br>
 of developers and to transform the way tech education is delivered. We’re constantly evolving the ways <br>
 in which we train amazing developers, as staying stagnant is not an option. We approach our educational<br>
  philosophy as a never-ending journey of self-improvement, and we apply it to everything we do.
</p>

<br><br>

     <center>   <h1 class="title1" id="contactus">CONTACT US</h1></center><br>
   
<center><img src="images/contactus.jpg" width="600"><br><br><br>
<p class="text1">  Contact Number :1800-00-1234 (Toll Free) <br><br>
     Email-ID       : infozone@gmail.com <br>
</p>
</center>
   

 <table align="center" height="20%" width="50%" border="0" cellpadding="0" cellspacing="0">
     <tr>
      <td align="center" height="25%" width="30%"><img src="images/contact1.gif" height="150" width="300" /> </td>
      <td align="center" height="25%" width="30%"><img src="images/contact2.gif" height="150" width="250" /> </td>
     
     </tr>
    </table>
	 
</body>
</html>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
