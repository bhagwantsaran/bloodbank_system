
<?php

   require 'connect.ini.php';
?>
<?php

  if(isset($_POST['request'])) 
{

  	if(isset($_POST['user']) && isset($_POST['type']) && !empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['mobile']))
  {

        $ar=explode(" ",$_POST['type']);

        $BG=$ar[1];
        echo $BG;
        $hos=$ar[0];
   $query= 'INSERT INTO `userrequest`(`username`, `husername`, `bloodG`,`email`,`mobile`,`choice`,`date`) VALUES ("'.$_POST['user'].'","'.$hos.'","'.$BG.'","'.$_POST['email'].'","'.$_POST['mobile'].'","'.$_POST['sel'].'",curdate());';
   
   // $query='select * from hospital';
    if(mysqli_query($con,$query))
    {
   
      echo "You are registered! Thank You!";
      sleep(2);
      
    header('Location: success.php');
    }
    else
    {
      echo "Sorry! some error occured!";
    }

      

  }
  else
  {
  	header('Location: invalid.php');
  }

}
?>



	<!DOCTYPE html>
<head>


	<!--____________________________________________________________________________________-->
	    <script>
   function changeValue(o){
     document.getElementById('type').value=o.innerHTML;
    }
</script>


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
<body>
 
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
<button onclick="myFunction()" class=" dropbtn" style="background-color:green">Login</button>
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
 




<a id="textd" href ="index.html"><img id="drop"align="left"  src="img/drop.png" /></a>
<h1  id="heading" ><a id="textd" href ="index.html"> BANK   <p style="float:left; color:red; margin-left:5px;">BLOOD</p> </a></h1>
</div>
	<header class="invert">
		
       
  <nav >
            <div class="logo-section">
                <a class="logo"></a>
                <button class="hb-button"><i class="fa fa-bars"></i></button>
            </div>
            <ul>
         <li  ><a class="current " href="../">HOME </a></li>
        <li><a class="LINE noline" href="../request/">POST REQUEST</a></li>
    <li><a class="LINE noline" href="../about-us/">ABOUT US</a></li>
    <li><a class="LINE noline" href="../contact/" >CONTACT US  </a></li>
    </ul>
        </nav>
		<div style='border :1px solid black'></div>
</header>
<div style="min-height:500px;">
<!-- _____________________________________________________________________________________________________________________-->
 <div style='background:white; min-height:300px; margin:0 100px 0 100px;'>
   <h2  style="margin:40px  0 40px 0 ;font-size:200%;;color:black;"><strong>Search Results-:  </strong><hr> </h2> 

<?php
      $sel=$_POST['select'];

        $BG=$_POST['bloodG'];

        $cit=strtolower($_POST['city']);
      
        if(!strcmp($sel,'hospital')){
        $query='select h.username,h.name,h.city,h.mobile,h.address,h.email,b.units from hospital h, hblood b  where 
                 h.username=b.username and b.bloodG="'.$BG.'" and h.city="'.$cit.'"';
      }
      else
      {
         $query='select h.username,h.name,h.city,h.mobile,h.address,h.email,b.units from bank h, bblood b  where 
                 h.username=b.username and b.bloodG="'.$BG.'" and h.city="'.$cit.'"';
      
      }
      $query_run=  mysqli_query($con,$query);
      @$query_num_rows=mysqli_num_rows($query_run);
      if($query_num_rows==0)
      	echo "Sorry , no results in your city!";
      else
      {  
      	
        ?>
      

           <table id="customers">
    <thead>
        <tr>
            <th  style="font-size:100%;text-align:center;padding:10px;color:white;border: 1px solid black;background:#051B2A;border-radius: 4px;box-sizing: border-box;">Name</th>
             <th  style="font-size:100%;text-align:center;padding:10px;color:white;border: 1px solid black;background:#051B2A; border-radius: 4px;box-sizing: border-box;">City</th>
            <th style="font-size:100%;text-align:center;padding:10px;color:white;border: 1px solid black;background:#051B2A;border-radius: 4px;box-sizing: border-box;">Mobile</th>
           <th   style="font-size:100%;text-align:center;padding:10px;color:white;border: 1px solid black;background:#051B2A;border-radius: 4px;box-sizing: border-box;">Address</th>
           <th style="font-size:100%;text-align:center;padding:10px;color:white;border: 1px solid black;background:#051B2A;border-radius: 4px;box-sizing: border-box;">email</th>
          <th  style="font-size:100%;text-align:center;padding:10px;color:white;border: 1px solid black;background:#051B2A;border-radius: 4px;box-sizing: border-box;">Units</th>
            <th   style="font-size:100%;text-align:center;padding:10px;color:white;border: 1px solid black;background:#051B2A;border-radius: 4px;box-sizing: border-box;">Send Request</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = mysqli_fetch_assoc($query_run)) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
     <td  style="width: 20%;text-align:center; border: 1px solid black;border-radius: 4px;box-sizing: border-box;"><?php echo $row['name']; ?></td>
              <td  style="width: 20%;text-align:center; border: 1px solid black;border-radius: 4px;box-sizing: border-box;"><?php echo $row['city']; ?></td>
        <td  style="width: 10%;
   text-align:center;
    border: 1px solid black;
    border-radius: 4px;
    box-sizing: border-box;"><?php echo $row['mobile']; ?></td>
      <td  style="width: 20%;
   text-align:center;
    border: 1px solid black;
    border-radius: 4px;
    box-sizing: border-box;"><?php echo $row['address']; ?></td>
        <td  style="width: 20%;
   text-align:center;
    border: 1px solid black;
    border-radius: 4px;
    box-sizing: border-box;"><?php echo $row['email']; ?></td>
          <td  style="width: 10%;
   text-align:center;
    border: 1px solid black;
    border-radius: 4px;
    box-sizing: border-box;"><?php echo $row['units']; ?></td>
             <td  style="width: 10%;
   text-align:center;
    border: 1px solid black;
    border-radius: 4px;
    box-sizing: border-box;"><button  style=' 
      width:100%;  padding: 12px 30PX;   border: none;    border-radius: 4px;cursor: pointer;' type='radio' name='selectit' value="abc " onclick="changeValue(this)" class=" aprovebtn"><?php echo $row['username'].' '.$BG?></button></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>
 </div> 

<div style='width:40%;min-height:400px;margin:20px 0 0 59.5%;; margin-top:20px;'>
<form method='POST' action='a.php'>
	<div ><h3 style='color:black;float:left;margin:15px 62px 10px 0 '> 

   	  Selected Choice:</h3></div> <div style='margin-top:20px;'><input type="text" id="type" name="type" value="" style='font-size:20px;' /></div>
<div style='margin-top:20px;'><h3 style='color:black;float:left;margin:10px 60px 0 0 '> 
   	  Enter your name: </h3></div> <div><input type='text' name='user' style='font-size:20px;'></div>
     
    	<div style='margin-top:20px;'><h3 style='color:black;float:left; margin:15Px 20px 0 0 '>  Enter mobile number: 
      </h3> </div><div style='margin-top:20px;'><input type='text' name='mobile' style='font-size:20px;'></div>
   	<div style='margin-top:20px;'><h3 style='color:black;float:left;margin:10px 60px 0 0 '> 
        Enter your email: </h3> </div><div style='margin-top:20px;'><input type='text' name='email' style='font-size:20px;'></div>
              <input type='hidden' name='sel' value='<?php echo $sel;?>'>
      <input  style='margin:20px 0 0 54%' type='submit' name='request' value='Request!' style='font-size:20px;' width="50" height="20"> </h3>
    
      	</form>
       </div>
       <?php 
  
      }
?>

    </div>
  
<!--___________________________________________________________________________________________________________-->
		
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



