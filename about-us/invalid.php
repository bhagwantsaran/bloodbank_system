
<?php
   require 'connect.ini.php';
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
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type ="image/png" href="img"/>
</head> 
<a  href="register-choice/" class="register button ">RESITER</a>
<a  href="login-choice/" class="login button ">LOGIN</a>
<img id="drop"align="left"  src="img/drop.png" />
<h1  id="heading" ><a id="textd" href ="index.html">BLOOD BANK</a></h1>

	<body>
	
	<header class="invert">
		
       
		<nav >
            <div class="logo-section">
                <a class="logo"></a>
                <button class="hb-button"><i class="fa fa-bars"></i></button>
            </div>
            <ul>
                <li  ><a class="current" href="latest.html">HOME </a></li>
         <li><a  href="#">SEARCH DONERS </a></li>
          <li><a  href="register-choice/">RESITER YOURSELF</a></li>
		<li><a  href="#">REQUEST BLOOD</a></li>
		<li><a  href="#">BLOOD TIP</a></li>
		<li><a  href="#">ABOUT US</a></li>
		<li><a  href="#" >CONTACT US  </a></li>

           
        </nav>
<!-- _____________________________________________________________________________________________________________________-->
 <div class='my' style='background:white; height:500px;'>
   <h3 style='color:black;'><strong>INVALID REQUEST! <br> </strong> </h3> 
  
<?php

        
        $BG=$_POST['bloodG'];
        $cit=$_POST['city'];

        $query='select h.name,h.city,h.mobile,h.address,h.email,b.units from hospital h, hblood b  where 
                 h.username=b.username and b.bloodG="'.$BG.'" and h.city="'.$cit.'"';
      
      $query_run=  mysqli_query($con,$query);
      @$query_num_rows=mysqli_num_rows($query_run);
      if($query_num_rows==0)
      	echo "Sorry , no Hospital in your city!";
      else
      {  
      	
        ?>
  

        <table id="customers">
    <thead>
        <tr>
            <th>Name</th>
            <th>City</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>email</th>
            <th>Units</th>
             <th>Send Request</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = mysqli_fetch_assoc($query_run)) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['units']; ?></td>
             <td><input type='checkbox' name='select'> Select me!</td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>
   
<br><br>
<form method='POST'>
   <h2 style='color:black;'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   	 &nbsp &nbsp &nbsp &nbsp
   	  Enter your name: <input type='text' name='user' style='font-size:20px;'>
      <input type='submit' name='submit' value='Request!' style='font-size:20px;' width="50" height="20"> </h2>
      	
      	</form>
       
       <?php 
  
      }
?>

  </div> 
  
<!--___________________________________________________________________________________________________________-->
		</header>
	
		<div class="clsscroll">
		
		</div>
	<div class="box left">
	
	</div>
	<div class="box left"</div>
	<div class="box left"></div>
	
<footer class="f1">
<ul  class="social">
<li> <a href="www.fb.com" target="#" class="fa fa-facebook"></a><a href="#" class="fa fa-twitter"></a> <a href="#" class="fa fa-google-plus"></a></li>
</ul>
 <h2 style="background:#6991AC ;display:inline;float:right;">this website belongd to ©mnit </h2>
</footer >



</body>



