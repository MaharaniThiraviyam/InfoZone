<? php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Search Job</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);
html {
  background: rgb(246, 248, 248);
}
body {
  padding: 40px;
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  font-weight: 400;  
}
.promos {
  width: 800px;
  margin: 0 auto;
  margin-top: 50px;
}
.promos1 {
  width: 800px;
  margin: 0 auto;
  margin-top: 500px;
}
.promo {
  width: 250px;
  background: #0F1012; 
  color: #f9f9f9;
  float: left;
}
.deal {
  padding: 10px 0 0 0;
}
.deal span {
  display: block;
  text-align: center;
}
.deal span:first-of-type {
  font-size: 23px;  
}
.deal span:last-of-type {
  font-size: 13px;
}
.promo .price {
  display: block;
  width: 250px;  
  background: #292b2e;
  margin: 15px 0 10px 0;
  text-align: center;
  font-size: 23px;
  padding: 17px 0 17px 0;
}
ul {
  display: block;
  margin: 20px 0 10px 0;
  padding: 0;
  list-style-type: none;
  text-align: center;
  color: #999999;
}
li {
  display: block;
  margin: 10px 0 0 0;
}
.design{
  border: none;
  border-radius: 40px;
  background: #292b2e;
  color: #f9f9f9;
  padding: 10px 37px;
  margin: 10px 0 20px 40px;
}
.scale {
  transform: scale(1.2);
  box-shadow: 0 0 4px 1px rgba(20, 20, 20, 0.8);
}
.scale button {
  background: #64AAA4;
}
.scale .price {
  color: #64AAA4;
}
img{
  border-radius: 50%;
}
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
<h3 align="right"><font color="#ffffff"><a href="home.php">BACK TO HOME</a></font></h3>
  
  <div class="promos">  
  <div class="promo">
  <div class="deal">
    <span>INDEED</span>
    
  </div>
  <span class="price"><img src="images/indeed.png" width="150"></span>
  <ul class="features">
    <li>Some great feature</li>
    <li>Another super feature</li>
    <li>And more...</li>   
  </ul>
   <a class="design" href="https://www.indeed.com">SEARCH NOW</a></button>

</div>
<div class="promo scale">
  <div class="deal">
    <span>NAUKRI</span>
    <span>Best Site For JOB search !!!</span>
  </div>
  <span class="price"><img src="images/naukri.jpg" width="200"></span>
  <ul class="features">
    <li>Some great feature</li>
    <li>Another super feature</li>
    <li>And more...</li>   
  </ul>
  <a class="design" href="https://www.naukri.com">SEARCH NOW</a></button>
</div>
<div class="promo">
  <div class="deal">
    <span>THE LADDERS</span>
    
  </div>
  <span class="price"><img src="images/ladders.jpg" width="170" height="120"></span>
  <ul class="features">
    <li>Choose the one on the left</li>
    <li>We need moneyy</li>
    <li>And more...</li>   
  </ul>
  <a class="design" href="https://www.theladders.com">SEARCH NOW</a></button>

</div>
</div>
  
 


 <!-- SECOND ROW-->

 <div class="promos1">  
  <div class="promo">
  <div class="deal">
    <span>CAREER BUILDER</span>
    
  </div>
  <span class="price"><img src="images/career.png" width="150" height="100"></span>
  <ul class="features">
    <li>Some great feature</li>
    <li>Another super feature</li>
    <li>And more...</li>   
  </ul>
   <a class="design" href="https://www.careerbuilder.com">SEARCH NOW</a></button>

</div>
<div class="promo scale">
  <div class="deal">
    <span>GLASSDOOR</span>
    <span>Best Site For JOB search !!!</span>
  </div>
  <span class="price"><img src="images/glassdoor.png" width="200" height="100"></span>
  <ul class="features">
    <li>Some great feature</li>
    <li>Another super feature</li>
    <li>And more...</li>   
  </ul>
  <a class="design" href="https://www.glassdoor.com">SEARCH NOW</a></button>
</div>
<div class="promo">
  <div class="deal">
    <span>JOB.COM</span>
    
  </div>
  <span class="price"><img src="images/job.jpg" width="170" height="100"></span>
  <ul class="features">
    <li>Choose the one on the left</li>
    <li>We need moneyy</li>
    <li>And more...</li>   
  </ul>
  <a class="design" href="https://www.job.com">SEARCH NOW</a></button>

</div>
</div>
  
  
 

</body>

</html>
