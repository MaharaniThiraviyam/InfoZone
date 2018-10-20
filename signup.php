<html>
<head>
 <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
<div class="container">
 <div class="card"></div>
 
 <div class="card">
    <div class="toggle"></div>
    <h1 class="title" align="left"><b><font face="Kristen ITC" >SIGN UP</b></font>
      <div class="close"></div>
    </h1>
    <form method="post" action="">
  <center>Sign UP take less than a minitue !!! </center><br />
      <div class="input-container">
        <input type="text" name="username" required="required"/>
        <label for="#{label}"><b>Username</b></label>
        <div class="bar"></div>
      </div>
    
      <div class="input-container">
        <input type="password" id="password" name="password" required="required"/>
        <label for="#{label}"><b>Password</b></label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password_repeat" name="password_repeat" onfocusout="valid()" required="required"/>
        <label for="#{label}"><b>Repeat Password</b></label>
        <div class="bar"></div>
      </div>
     <div class="input-container">
        <input type="email" name="mailid" required="required"/>
        <label for="#{label}"><b>Mail ID</b></label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" name="mobile" maxlength="10"required="required"/>
        <label for="#{label}"><b>Mobile Number</b></label>
        <div class="bar"></div>
      </div>
     <div class="input-container">
        <input type="text" name="qualification" required="required"/>
        <label for="#{label}"><b>Qualification</b></label>
        <div class="bar"></div>
      </div>
    
     
      <div class="button-container">
        <input type="submit" value="SIGN UP" name="signup" class="button1" >
     </div>
     <br>
       <center><font face="Comic Sans MS" color="#CC0066" size="+2">Registered User   </font><a href="login.php">Login Here </a></form></center>
    </form>
  </div>
  
  
   <div class="card alt">
    <div class="toggle"> 
  <img src="images/pencil.png" height="150" width="150"></img>
  
  </div>
  
      

    <h1 class="title">Register
      <div class="close"></div>
    </h1>

  
   </div>
   </body>
</html>  
  <script>
  function valid()
{
  
  var pwd = document.getElementById("password").value;
  var confrimpwd = document.getElementById("password_repeat").value;
  if(pwd != confrimpwd)
  {
    alert("Password miss match");
  }
  if(pwd==""||confrimpwd=="")
  {
    alert("please enter a valid password");
  }
 }
</script>

<?php
 if(isset($_POST['signup'])){
 
  
  $username=$_POST['username'];
  $mailid=$_POST['mailid'];
  $password=$_POST['password'];
  $repeat=$_POST['password_repeat'];
  $mobile=$_POST['mobile'];
  $qualification=$_POST['qualification'];
  
  
  if($password==$repeat){
  
   $host="localhost";
   $user="id5426179_maha";
   $password1="12345";
   $dbname="id5426179_infozone";
 
  
$conn = new mysqli($host, $user, $password1, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
   $sql="select *from user_info where mail_id='$mailid'";
 
  $result = $conn->query($sql);
if ($result->num_rows > 0) 
{
?><script>  alert("Email-Id registered Already"); </script> <?php 
}
else{

 
   $query="insert into id5426179_infozone.user_info(name,mail_id,password,mobile,qualification)values('$username','$mailid','$password',$mobile,'$qualification')" or die(mysql_error());
   
 $result=mysqli_query($conn,$query);
   
     // Mail sent to admin or company 
  $msg = " \n Warm Welcome,\n   Congrats !!!    Welcome to InfoZone ... \n Thanks for signup . Here we specify the most essential website collections for students who prepare for placement .So You can explore the skills quickly and easily. Do wonders ...
 
 ------------------------

 Username: $username
 Password: $password

 ------------------------

Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
    
\n Thank you.
  With Regards,
  InfoZone Team ...";
   // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,1000);
  

   
   

   // send email
  mail($mailid,"InfoZone Admin Signup Confirmation ...",$msg);
   

   
  echo "<script>  alert('Signup Successfully . Check Your Mail !!! '); </script>";    
   }
   }
   else
       echo"<script>alert('Sorry Password Mismatch. Cannot Signup!!!')</script>";
    
  }  
?>
