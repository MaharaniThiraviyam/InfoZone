<html>
<head>
<link rel="stylesheet" href="css/stylelogin.css">
<style type="text/css">
  img{
    border-radius: 50%;
  }
</style>
</head>
<body>
<div class="container">
 <div class="card"></div>
 
 <div class="card">
    <div class="toggle"></div>
    <h1 class="title" align="left"><b><font face="Kristen ITC">
Login</font></b>
      <div class="close"></div>
    </h1>
    <form action="" method="post">
      <div class="input-container">
        <input type="email" name="mail_id" required="required"/>
        <label for="#{label}"><b>Mail-id</b></label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" required="required"/>
        <label for="#{label}"><b>Password</b></label>
        <div class="bar"></div>
      </div>
      <center> <input type="checkbox" checked/><font face="Arial" color="#000000" size="+1">Keep me Signed in </font></center><br />
     
      <div class="button-container">
        <input type="submit"   value="SIGN IN" name="signin" class="button1">
      
      </div>
    <br>
    <center><font face="Comic Sans MS" color="#CC0066" size="+2">New User ? </font><a href="signup.php">Sign Up here </a></form></center>
    </form>
  </div>
  
  
   <div class="card alt">
    <div class="toggle"> 
  <img src="images/logo.jpg" height="130" width="100"></img>
  
  </div>
  
     
    <h1 class="title">Register
      <div class="close"></div>
    </h1>

  
   </div>
   </body>
   </html>
   
   <?php
   if(isset($_POST['signin']))
   {   
    
    $mail_id=$_POST['mail_id'];
    $password=$_POST['password'];
  
     
   $host="localhost";
   $user="id5426179_maha";
   $password1="12345";
   $dbname="id5426179_infozone";
 
   $conn = new mysqli($host, $user, $password1, $dbname);
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

       $sql="SELECT name,password FROM id5426179_infozone.user_info where mail_id='$mail_id' and password='$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) 
  {
    $row = $result->fetch_assoc();
  
    ?><script>alert("Welcome"); 
    window.location = 'home.php';
    </script> <?php 
    
  }
  else
  {
    ?><script>  alert("Email-Id or Password invalid"); </script> <?php  
  }
  
   }
   ?>
