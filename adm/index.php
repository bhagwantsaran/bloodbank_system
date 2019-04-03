<?php
session_start();
require 'connect.ini.php';
//echo $username;

$query="select * from newsrequest";
      $query_run=  mysqli_query($con,$query);
	  $query_row=mysqli_fetch_assoc($query_run);
      	
         $name=$query_row['name'];
		 $mobile=$query_row['mobile'];
		 $request=$query_row['request'];
		 $time=$query_row['time'];
		 $date=$query_row['date'];
		 $id=$query_row['id'];
?>

	
	
	
<?php
$query_run=  mysqli_query($con,$query);
      @$query_num_rows=mysqli_num_rows($query_run);
      if($query_num_rows==0)
      	echo "no request yet!";
      else
      {  
      	
        ?>
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
<a href="../index.php"  <h11 style='background-color:red; float:right; font-weight:bold ;font-size:45px;margin-top:20px'>Logout</h11></a>
</div>

</div>
 




<a id="textd" href ="index.php"><img id="drop"align="left"  src="img/drop.png" /></a>
<h1  id="heading" ><a id="textd" href ="index.php"> BANK   <p style="float:left; color:red; margin-left:5px;">BLOOD</p> </a></h1>
</div>
	<header class="invert">
		
       
		
		
		
		<div style='border:2px solid green;'>
		</div>
		
<!-- _____________________________________________________________________________________________________________________-->
<h1>NewsRequest:-</h1>
        <table id="customers">
    <thead>
        <tr>
            <th >Name</th>
            <th >Mobile</th>
			
            <th >time</th>
            <th >date</th>
			<th> Request </th>
            
        </tr>
    </thead>
	
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
            <?php while( $row = mysqli_fetch_assoc($query_run)) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td> <?php echo $row['name']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td  style="width: 10%;
   text-align:center;
    border: 1px solid black;
    border-radius: 4px;
    box-sizing: border-box;"><button  style=' 
      width:100%;  padding: 12px 30PX;   border: none;    border-radius: 4px;cursor: pointer;' type='radio' name='selectit' value="abc " onclick="changeValue(this)" class=" aprovebtn"><?php echo $row['request']; ?></button></td>   
        </tr>
          
        <?php  endwhile?>
		
    </tbody>
	
</table>
<br><br>
<div style='width:40%;min-height:400px;margin:20px 0 0 59.5%;; margin-top:20px;'>
<form method='POST' action='a.php'>
	<div ><h3 style='color:black;float:left;margin:15px 62px 10px 0 '> 

   	  Selected Choice:</h3></div> <div style='margin-top:20px;'><input type="text" id="type" name="type" value="" style='font-size:20px;' /></div>
      <input  style='margin-right :40px ; background:red ; hover:none width:20px' type='submit' name='request' value='Put to news' style='font-size:20px; float:left' width="10px" height="20"> 
	  <input  style='margin-right :40px ; background:red ; hover:none width:20px' type='submit' name='delereq' value='Delete' style='font-size:20px; float:left' width="10px" height="20"> 
    
      	</form>
       </div>

<?php 
	  }
	  
?>
   <br><br><br><br><br><br>

<!--___________________________________________________________________________________________________________-->
		</header>
	
	
	<br><br><br><br><br><br><br><br><br>
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
					<p>7239879493</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:2016ucp1400@mnit.ac.in">2016ucp1400@mnit.ac.in</a></p><br>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the Blood Bank</span>
					SOFTWARE ENGINEERING project by Kashyap. 
					</p>

				<div class="footer-icons">

					<a href="http://www.facebook.com"><i class="fa fa-facebook" style="background-color:blue"></i></a>
					<a href="http://www.twitter.com"><i class="fa fa-twitter" style="background-color:blue"></i></a>
					<a href="http://www.linkedin.com"><i class="fa fa-linkedin" style="background-color:blue"></i></a>
					<a href="http://www.github.com"><i class="fa fa-github"></i></a>
					<a href="http://www.whatsapp.com"><i class="fa fa-whatsapp" style="background-color:green"></i></a>

				</div>

			</div>

		</footer>



</body>