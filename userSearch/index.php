<?php

if(isset($_POST['submit']) &&  isset($_POST['select']) && !empty($_POST['select']))
{
	header('Location: a.php');
}

?>




	<!DOCTYPE html>
<head>
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
  <div>
<div class="dropdown1">
<button onclick="myFunction1()" class=" dropbtn1" style=" background-color:green">Register</button>
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
</div>

<div>
<div class="dropdown">
<button onclick="myFunction()" class=" dropbtn" style=" background-color:green">Login</button>
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
 




<a id="textd" href ="../"><img id="drop"align="left"  src="img/drop.png" /></a>
<h1  id="heading" ><a id="textd" href ="../"> BANK   <p style="float:left; color:red; margin-left:5px;">BLOOD</p> </a></h1>
</div>
  
  <header class="invert">
    
       
    <nav >
            <div class="logo-section">
                <a class="logo"></a>
                <button class="hb-button"><i class="fa fa-bars"></i></button>
            </div>
            <ul>
                <li  ><a class="current " href="../">HOME </a></li>
         <li><a  class="LINE noline" href="../usersearch/">SEARCH BLOOD</a></li>
          <li><a  class="LINE noline" href="../register-choice">REGISTER YOURSELF</a></li>
      

    <li><a class="LINE noline" href="../request/">POST REQUEST</a></li>
    <li><a class="LINE noline" href="../about-us/">ABOUT US</a></li>
    <li><a class="LINE noline" href="../contact/" >CONTACT US  </a></li>
    </ul>
        </nav>
		<div style="border:2px solid green	;"></div>
</header>

  <div style="background-image: url(./img/ka1.jpg); height:700px; margin:0;"> 
<div class='my'>
<div style="
padding-top:60px;
 margin:0 0 -40px 30%;color:white;"><h2 style='font-size:200%; color:black'>Search Blood Bank Or Hospital</h2></div>
<div class='i2' >
		
    <form method='POST' action='a.php' style='float:left;'>
      
      <h2 style="color:black">City:</h2> <input type='text' name='city'  value="<?php if(isset($_POST['city'])) echo $_POST['city'];?>"
       style='  width: 100%;
        padding: 12px 100px;
        margin: 6px 0;color:black;
       	background:white;
        box-sizing: border-box;' 
       placeholder='Enter City'><br><br>
       <h2 style="color:black">Blood Group:</h2>
        <div>
		  <select   style='  width: 100%;
        padding: 12px 20px;
		color:black;
    	background:white;
        box-sizing: border-box;' name="bloodG">	 
          <option  style='  width: 100%;
        padding: 12px 20px;
		color:black;
    	background:white;' value="A+">A+</option>
          <option style='  width: 100%;
        padding: 12px 20px;
		color:black;
    	background:white;' value="A-">A-</option>
          <option style='  width: 100%;
        padding: 12px 20px;
		color:black;
    	background:white;' value="B+">B+</option>
		  <option  style='  width: 100%;
        padding: 12px 20px;
		color:black;
    	background:white;'value="B-">B-</option><option  style='  width: 100%;
        padding: 12px 20px;
		color:black;
    	background:white;' value="AB+">AB+</option><option  style='  width: 100%;
        padding: 12px 20px;
		color:black;
    	background:white;'value="AB-">AB-</option><option  style='  width: 100%;
        padding: 12px 20px;
		color:black;
    	background:white;' value="O+">O+</option><option  style='  width: 100%;
        padding: 12px 20px;
		color:black;
    	background:white;'value="O-">O-</option>
        </select>
		</div>
		
    <br><br>
         <input type='radio' name='select' 
      
     
        value='hospital' ><pre style='margin:-20px 0 0 30px; 	font-size:20px; color:black'>HOSPITAL SEARCH</pre>
        <input type='radio' name='select' 
         style='  
        margin-top:10px;' 
        value='bank' required><pre style='margin:-20px 0 0 30px;font-size:20px; color:black'>BLOOD BANK SEARCH</pre>
  
       <input type='submit'   style='  width: 100%;
        padding: 12px 20px;
		font-size:20px;
        margin: 10px 0;
        box-sizing: border-box;' name='search' value='Search'>
       <br>
        
    </form>
    
    </div> 
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