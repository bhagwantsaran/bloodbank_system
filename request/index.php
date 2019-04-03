
<?php  
require 'connect.ini.php';
  if(isset($_POST['submit']))
  {
  	if(isset($_POST['request']) && isset($_POST['name']) && isset($_POST['mob']) && !empty($_POST['request']) && !empty($_POST['name']) && !empty($_POST['mob']) )
     {
     	 $query= 'INSERT INTO `newsrequest`(`name`,  `mobile`,`request`,`time`,`date`) VALUES ("'.$_POST['name'].'","'.$_POST['mob'].'","'.$_POST['request'].'",curtime()'.',curdate());';
   
   // $query='select * from hospital';
    if(mysqli_query($con,$query))
    {
   
     
      
    header('Location: success.php');
    }
    else
    {
      echo "Sorry! some error occured!";
    }

     }


  }
?>


	<!DOCTYPE html>
<head>


	<!--____________________________________________________________________________________-->


	<style>

 


#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    color:black;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #F42E40;
    color: white;
}
</style>
<!--________________________________________________________________________________________-->
 <meta charset="utf-8">
        <meta name="viewpost" content="width=device-width; maximum-scale=1">
        <title>BLOODBANK</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/responsive_navbar.js"></script>
        <link rel="stylesheet"href="css/responsive_navbar.css">
		<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" type="text/css" href="min-width.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type ="image/png" href="img"/>
</head> 

	<body  >
	
	
	<div class="mainlogo">
<div class="dropdown1">
<button onclick="myFunction1()" class=" dropbtn1" style="background-color:green">Register</button>
  <div id="myDropdown1" class="dropdown-content1">
<a  href="../register-choice/register/register-donor/">Register as donor</a>
    <a href="../register-choice/register/register-hospital/">Register as hospital</a>
    <a href="../register-choice/register/register-bank/">Register as blood bank</a>
  </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {

    var dropdowns = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


</script>


<div>
<div class="dropdown">
<button onclick="myFunction()" class=" dropbtn"  style="background-color:green">Login</button>
  <div id="myDropdown" class="dropdown-content">
<a href="../login-choice/login/log-donor/">login as donor</a>
    <a href="../login-choice/login/log-hospital/">login as hospital</a>
    <a href="../login-choice/login/log-bank/">login as blood bank</a>
  </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


</script>
</div>
<a id="textd" href ="index.php"><img id="drop"align="left"  src="img/drop.png" /></a>
<h1  id="heading" ><a id="textd" href ="index.php"> BANK 	<p style="float:left; color:red; margin-left:5px;">BLOOD</p> </a></h1>
</div>

	<header class="invert">
		
       
		<nav >
            <div class="logo-section">
                <a class="logo"></a>
                <button class="hb-button"><i class="fa fa-bars"></i></button>
            </div>
            <ul>
                <li  ><a class="current " href="../">HOME </a></li>
         <li><a  class="LINE noline" href="../usersearch/">SEARCH DONORS </a></li>
          <li><a  class="LINE noline" href="../register-choice">REGISTER YOURSELF</a></li>
		<li><a class="LINE noline" href="../request">POST REQUEST</a></li>
		<li><a class="LINE noline" href="../about-us/">ABOUT US</a></li>
		<li><a class="LINE noline" href="../contact/" >CONTACT US  </a></li>
		</ul>
        </nav>
		
		</header>
		<div style="border:2px solid green;">
		
		</div>
		
<!-- _____________________________________________________________________________________________________________________-->
 <div style="background-image: url(./img/reg.png); height:700px;' " >
 <div class="my" >
 	

     <form method="POST" action='index.php'>
     	  <div > <h1 class='re'>Request:</h1> <div class="requestdiv"><textarea style="background:transparent;" name='request' onclick='this.value=""' cols='14' rows='10'>   Enter your request here!</textarea></div>
      <h2>Name:</h2><div><input type='text' name='name' value='Enter your name' onclick='this.value=""'></div>
     <div class='ename'>  <h2>Mobile:</h2><input type='text' name='mob' value='Enter your mobile number' onclick='this.value=""'></div>
   <div class="submitdiv"><input type ='submit' name='submit' value="Post Request"></div>
     
   </div> 
   </form>
<!--___________________________________________________________________________________________________________-->
		
	
	</div>

</div>

<footer class="footer-distributed">

			<div class="footer-left">

				<h3><span>Bloodbank</span></h3>

				<p class="footer-links">
					<a href="../index.php">Home</a>
					<a href="../about-us/index.php">About us</a>
					<a href="../contact/index.php">Contact Us</a>
				</p>

				<p class="footer-company-name">All rights reserved &copy;2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Hostel 6</span> MNIT Jaipur</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>7239879493,7230838314</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:2016ucp1400@mnit.ac.in">2016ucp1400@mnit.ac.in</a></p><br>
					
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:2016ucp1389@mnit.ac.in">2016ucp1389@mnit.ac.in</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the Blood Bank</span>
					Database Project from KB Company. 
					</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com"><i class="fa fa-facebook" style="background-color:blue"></i></a>
					<a href="https://www.twitter.com"><i class="fa fa-twitter" style="background-color:blue"></i></a>
					<a href="https://www.linkedin.com"><i class="fa fa-linkedin" style="background-color:blue"></i></a>
					<a href="https://www.github.com"><i class="fa fa-github"></i></a>
					<a href="https://www.whatsapp.com"><i class="fa fa-whatsapp" style="background-color:green"></i></a>
				</div>

			</div>

		</footer>


</body>
</html>



