
<?php
require 'connect.ini.php';
session_start();
$adus1='';
$pwus1='';
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Log IN</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>


<body>

<a href="./index.php">

<img src="img/homerd.jpeg" alt="home"  align="left" width="100" height="80">

</a>


  <h1 style="color:yellow;margin:100px 0 0 0;"><center>LOG IN AS A ADMIN</center></h1>
<div class="container" style="width: 500px; margin: 70px auto 0 auto;">
  <form action="./adm/" method="POST">
    <div class="row">
      <h4>Login </h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Username" name="username"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password" name="password"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
	  
<br>
	  <?php
	if(isset($_POST['loginad']))
{
  
	if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password']))
	{
	  $usname=$_POST['username'];
	  $pass=md5($_POST['password']);
    echo $usname;

		 if(!strcmp($adus1,$usname))
		 {
			 echo 'vvkv';
		 }
         
         else
		 {
			 echo "<p style='color:red'>You have not  registered or invalid credentials.</p>";
		 }
  
      }
	else
	{
		 echo "<p style='color:red'>All fields are mandatory.</p>";
	}
}
	?>  
	  
	  <div id="input-group" >
        <input type="submit" placeholder="Login" value="Login" name='loginad' style="background-color:#af111c; color:white;"/>
        
      </div>
    </div>
    
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
