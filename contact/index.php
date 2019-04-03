



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
	
  text-align:center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
  background:#051B2A;
  text-align:center;
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
  <div>
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
</div>

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
<h1  id="heading" ><a id="textd" href ="index.php"> BANK   <p style="float:left; color:red; margin-left:5px;">BLOOD</p> </a></h1>
</div>
	<header class="invert">
		
       
		<nav >
            <div class="logo-section">
                <a class="logo"></a>
                <button class="hb-button"><i class="fa fa-bars"></i></button>
            </div>
            <ul>
                <li  ><a class="Line noline" href="../index.php">HOME </a></li>
         <li><a  class="LINE noline" href="../usersearch/">SEARCH BLOOD </a></li>
          <li><a  class="LINE noline" href="../register-choice">REGISTER YOURSELF</a></li>
		<li><a class="LINE noline" href="../about-us/">ABOUT US</a></li>
		<li><a class="current" href="index.php" >CONTACT US  </a></li>
		</ul>
        </nav>
		
		
		<div style='border:2px solid green;'>
		</div>
		
<!-- _____________________________________________________________________________________________________________________-->
 <div class='my' style='background:white; height:500px;'>
 	 <img src='img/c1.jpg' width=30% height=30%><img src='img/c2.jpg' width=30% height=30% style='float:right;'><br><br><br><br><br>



 



        <table id="customers">
    <thead>
        <tr>
            <th >Name</th>
            <th >City</th>
            <th >Mobile</th>
            <th >Address</th>
            <th >email</th>
            
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
       
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td> Kashyap Kumar Vishwakarma</td>
            <td>Jaipur</td>
            <td>7239879493</td>
            <td>hostel 6 MNIT</td>
            <td>kashyap987kp@gmail.com</td>
            
           
        </tr>
		<tr>
            <!--Each table column is echoed in to a td cell-->
            <td>Bhagwana Ram</td>
            <td>Jaipur</td>
            <td>7230838314</td>
            <td>hostel 6 MNIT</td>
            <td>bram7886@gmail.com</td>
            
           
        </tr>
       
    </tbody>
</table>
   <br><br><br><br><br><br>
<div class="kash" style='background-color:maroon; height:800px'>
   <img src='img/ph1.jpg' width=300px height=240px style = 'float:left; margin-left:250px; margin-top:50px'>
   <p style='float:right; color:black; font-style:bold;margin-right:400px;margin-top: 150px'> Kashyap </p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <img src='img/ph2.jpg' width=300px height=240px style = 'float:left; margin-left:250px;'>
   <p style='float:right; color:black; font-style:bold;margin-right:400px;margin-top: 150px'>Bhagwan</p><br>
</div>
<div class="kashb" style= height:380px;'>
   <img src='img/map.png' width=1100px height=580px style = 'float:left; margin-left:20px; margin-top:50px ;margin-right:20px'>
</div>
  </div> 
 
<!--___________________________________________________________________________________________________________-->
		</header>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3><span>Bloodbank</span></h3>

				<p class="footer-links">
					<a href="../index.php">Home</a>
					<a href="#">About us</a>
					<a href="../contact/">Contact Us</a>
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
					<a href="https://www.github.com"><i class="fa fa-github" ></i></a>
					<a href="https://www.whatsapp.com"><i class="fa fa-whatsapp" style="background-color:green"></i></a>
				</div>

			</div>

		</footer>

</body>



</body>



