<?php   require 'connect.ini.php'; ?>
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
<button onclick="myFunction1()" class=" dropbtn1" style="background-color:green">Register</button>
  <div id="myDropdown1" class="dropdown-content1">
<a  href="register-choice/register/register-donor/">Register as donor</a>
    <a href="register-choice/register/register-hospital/">Register as hospital</a>
    <a href="register-choice/register/register-bank/">Register as blood bank</a>
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
<a href="login-choice/login/log-donor/">login as donor</a>
    <a href="login-choice/login/log-hospital/">login as hospital</a>
    <a href="login-choice/login/log-bank/">login as blood bank</a>
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
                <li  ><a class="current " href="index.php">HOME </a></li>
         <li><a  class="LINE noline" href="usersearch/">SEARCH BLOOD</a></li>
          <li><a  class="LINE noline" href="register-choice">REGISTER YOURSELF</a></li>
      <li><a  class="LINE noline" href="./admin.php">ADMIN</a></li>

    <li><a class="LINE noline" href="request/">POST REQUEST</a></li>
    <li><a class="LINE noline" href="about-us/">ABOUT US</a></li>
    <li><a class="LINE noline" href="contact/" >CONTACT US  </a></li>
    </ul>
        </nav>
</header>
<div class="slideshow"> 
<img src="./img/p1.jpg" alt="Italian Trulli" width="100%" height="400px">

</div>
<br>
 <div class='belowslideshow' style="background:#101013;"> 
 
  		
  	
 <div class="belowslideshowitem1">
 <div>
 <h2 style="font-size:200%; margin-left:20%;
">Search For Blood</h2>


  <form action="userSearch/index.php" method='POST'>
 
   
    <div class="row">
      <div class="col-25">
        <label for="lname">City*</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="city" placeholder="enter city">
      </div>
    </div>
 
    <div class="row">
      <div class="col-25">
        <label for="bloodgroup">Blood Group*</label>
      </div>
      <div class="col-75">
       
        <select id="" name="bloodG">
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
		  <option value="B-">B-</option><option value="AB+">AB+</option><option value="AB-">AB-</option><option value="O+">O+</option><option value="O-">O-</option>
        </select>
      </div>
    </div>
    <div class="submitbtn">
      <input type="submit" value="Submit">
    </div>
  </form>
  </div>
</div>
  
<div  class="belowslideshowitem">




  <?php
  $query1="select distinct dnr.name , dnr.bloodG, d.time, d.date from donate d,donor dnr where d.dusername=dnr.username order by date DESC, time DESC limit 5;";
 
  $query_run=  mysqli_query($con,$query1);
      @$query_num_rows=mysqli_num_rows($query_run);
      if($query_num_rows==0)
        echo "    No requests yet!!";
      else
      {  
        
       




?>
        
        <h2 style='color:maroon;'> <center>RECENT DONARS</h2>  
        <hr ><br>
        <?php   while( $row = mysqli_fetch_assoc($query_run)) : ?>
        
           
            <!--Each table column is echoed in to a td cell-->
      <center style='color:black;'>  <h3 style='color:#145a32; margin:0.7%'>   <?php echo $row['name']; ?></h3>
          <strong style='color:red;'><?php echo $row['bloodG']; ?> </strong>&nbsp &nbsp
        <strong style='color:#7e5109;'> <?php echo $row['time']; ?>        &nbsp   &nbsp   <?php echo $row['date']; ?></strong>
        <hr style='width:220px; margin:1%'>  </center>
          
    <?php endwhile  ?>
  
    <?php } ?>
</div>


  </div>


  <br><br>
  <div class='belowsearchdoner1'> 
  		 
  		   <div class="countitem1"  style='margin-left:100px;'>
          <h3 style='color:maroon;'> <center>NEWS</h3>
        <hr ><br>
	
        <marquee   direction="up"  direction="top" onmouseover="this.stop();" onmouseout="this.start();"> 

       	
       
  <?php
  $query1="select * from news";
 
  $query_run=  mysqli_query($con,$query1);
      @$query_num_rows=mysqli_num_rows($query_run);
      if($query_num_rows==0)
        echo "    No requests yet!!";
      else
      {  
        
        ?>





        <!--Use a while loop to make a table row for every DB row-->
    
        <?php   while( $row = mysqli_fetch_assoc($query_run)) : ?>
        
           
            <!--Each table column is echoed in to a td cell-->
      <center style='color:black;'>  <p style='color:#0D58CB; margin:0.7%'>   <?php echo $row['details']; ?></p>
            <hr style='width:50%; margin:4%'> 
        </center>
          
    <?php endwhile  ?>
  
    <?php } ?>

</marquee>

          
		  </div>
		  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='belowsearchdoner'> 
  		 
  		   

<footer class="footer-distributed" style='margin-top:49px; margin-right:200px'>

			<div class="footer-left">

				<h3><span>Bloodbank</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					<a href="./about-us/index.php">About us</a>
					<a href="./contact/">Contact Us</a>
				</p>

				<p class="footer-company-name">All rights reserved &copy;2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Hostel 6 </span> MNIT Jaipur</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>7239879493 ,7230838314</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:2016ucp1400@mnit.ac.in">2016ucp1400@mnit.ac.in</a></p>
					</br>
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
					<a href="https://https://www.facebook.com"><i class="fa fa-facebook" style="background-color:blue"></i></a>
					<a href="https://www.twitter.com"><i class="fa fa-twitter" style="background-color:blue"></i></a>
					<a href="https://www.linkedin.com"><i class="fa fa-linkedin" style="background-color:blue"></i></a>
					<a href="https://www.github.com"><i class="fa fa-github" ></i></a>
					<a href="https://www.whatsappweb.com"><i class="fa fa-whatsapp" style="background-color:green"></i></a>
				</div>

			</div>

		</footer>
</div>

</body>
</html>
