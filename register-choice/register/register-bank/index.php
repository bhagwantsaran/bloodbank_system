<!DOCTYPE html>
<?php
session_start();
 require 'connect.ini.php';


            $uname='';
            $pass='';
            $nam='';
            $em='';
            $mob=('');
            $citi='';
            $add='';
  $flag=10;
  if(isset($_POST['submit']))
  {

            $uname=$_POST['user-name'];
            $pass=md5($_POST['password']);
            $nam=$_POST['bank-name'];
            $em=$_POST['email'];
            $mob=($_POST['mobile']);
            $citi=$_POST['city'];
            $add=$_POST['address'];
            
        if(isset($_POST['bank-name']) && isset($_POST['password']) && isset($_POST['user-name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['term']) && !empty($_POST['bank-name']) && !empty($_POST['user-name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['city']) && !empty($_POST['address']))
       {


            $nam=strtolower($nam);
            $citi=strtolower($citi);
             $add=strtolower($add);


            $flag=1;
                /*********************************************************************************/
              if(strpos($uname,' '))
              {
                //  echo "<h style='color:red;'>Username should not contain space<br></h>";
                  $flag=0;
              }
             if(strlen($mob)!=10 )
              {

                 // echo "<h style='color:red;'>Invalid Mobile Number<br></h>"; 
                  $flag=0;
              }
              if(strlen($mob)==10)
              {
                
                  for($i=0;$i<10;$i++)
                  {
                    if(!is_numeric($mob[$i]))
                    {
                      $flag=0;
                      
                      break;
                    }
                  }

              }
          
             
              if($flag==1)
              {
              
                //  $query='INSERT INTO bank(name,address,city,mobile,email,username) VALUES ("'.$nam.'","'.$add.'","'.$citi.'",'.$mob.'","'.$em.'","'.$uname.');';
                  $query= 'INSERT INTO `bank`(`name`, `address`, `city`, `mobile`, `email`, `username`, `password`) VALUES ("'.$nam.'","'.$add.'","'.$citi.'","'.$mob.'","'.$em.'","'.$uname.'","'.$pass.'");';
                  
                 // $query='select * from bank';
                  if(mysqli_query($con,$query))
                  {
                    echo "You are registered! Thank You!";
          //    $query= 'INSERT INTO `blood`(`name`, `address`, `city`, `mobile`, `email`, `username`, `password`) VALUES ("'.$nam.'","'.$add.'","'.$citi.'","'.$mob.'","'.$em.'","'.$uname.'","'.$pass.'");';
                         $query= "INSERT INTO `bblood`(`username`, `bloodG`, `units`) VALUES ('$uname','A+',0)";
     mysqli_query($con,$query);
      $query= "INSERT INTO `bblood`(`username`, `bloodG`, `units`) VALUES ('$uname','A-',0)";
     mysqli_query($con,$query);
      $query= "INSERT INTO `bblood`(`username`, `bloodG`, `units`) VALUES ('$uname','B+',0)";
     mysqli_query($con,$query);
      $query= "INSERT INTO `bblood`(`username`, `bloodG`, `units`) VALUES ('$uname','B-',0)";
     mysqli_query($con,$query);
      $query="INSERT INTO `bblood`(`username`, `bloodG`, `units`) VALUES ('$uname','AB+',0)";
     mysqli_query($con,$query);
      $query= "INSERT INTO `bblood`(`username`, `bloodG`, `units`) VALUES ('$uname','AB-',0)";
     mysqli_query($con,$query);
      $query= "INSERT INTO `bblood`(`username`, `bloodG`, `units`) VALUES ('$uname','O+',0)";
     mysqli_query($con,$query);
      $query= "INSERT INTO `bblood`(`username`, `bloodG`, `units`) VALUES ('$uname','O-',0)";
     mysqli_query($con,$query);

                $_SESSION['name']=$uname;

                    header('Location: http://localhost/Blood/login-choice/login/log-bank/');
                  }
                  else
                  {
                //   echo "<h style='color:red;'>Sorry! Entered Username already exists!</h>";
                   $flag=2;
                  }
                }

       }
       else
  {
   // echo "<strong> Please enter whole data</strong>";
    $flag=100;
  }
  }

?>

<html >
<head>
  <meta charset="UTF-8">
  <title>Register @ Bank</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

<a href="../../../index.php">

<img src="img/homerd.jpeg" alt="home"  align="left" width="100" height="80">

</a>
  
<h1 style="color:yellow;"><center><strong>REGISTER AS A BANK</strong></center></h1>
<div class="container" style="background:#c0c0c0;">
  <form action='index.php' method='POST'>
    <div class="row">
      <h4>Login Information</h4>
<?php  if($flag==2)   echo "<h style='color:red;'>Sorry! Entered Username already exists!</h>"; 
?>

<?php  if($flag==100)   echo "<h style='color:red;'>Sorry! Please enter whole data!</h>"; 
?>

      <div class="input-group input-group-icon">
        <input type="text" name='bank-name' value='<?php echo $nam; ?>' placeholder="Name of the bank"/>
        <div class="input-icon"><i class="fa fa-heartbeat"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" name='email' value='<?php echo $em; ?>' placeholder="Email Adress"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <?php
       if(strpos($uname,' '))
              {
                  echo "<h style='color:red;'>Username should not contain space<br></h>";
                 
              }
              ?>
       <div class="input-group input-group-icon">
        <input type="user-name" name='user-name'  value='<?php  if(!strpos($uname,' ')) echo $uname; ?>' placeholder="User-Name"/>
        <div class="input-icon"><i class="fa fa-user-secret"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" name='password'  placeholder="Password"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
     <div class="row">
      <h4>Contact Information</h4>
      <?php  $fl=0;
       if(strlen($mob)!=10 && isset($_POST['submit']) )
              {

                  echo "<h style='color:red;'>Invalid Mobile Number<br></h>";  $fl=1;
              }
              else if(strlen($mob)==10 && isset($_POST['submit']))
              {
                
                  for($i=0;$i<10;$i++)
                  {
                    if(!is_numeric($mob[$i]))
                    {
                      $fl=1;
                      echo "<h style='color:red;'>Invalid Mobile Number<br></h>";
                      break;
                    }
                  }

              }

              ?>
      <div class="input-group input-group-icon">
        <input type="text" name='mobile' value='<?php if($fl==0) echo $mob; ?>' placeholder="Mobile No."/>
        <div class="input-icon"><i class="fa fa-mobile"></i></div>
      </div>
       <div class="input-group input-group-icon">
        <input type="text" name='address' value='<?php echo $add; ?>' placeholder="Address"/>
        <div class="input-icon"><i class="fa fa-car"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name='city' value='<?php echo $citi; ?>' placeholder="City"/>
        <div class="input-icon"><i class="fa fa-bullseye"></i></div>
      </div>
     
    
     
    </div>
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" name='term' id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
    <div class="row">
     
      <div class="input-group">
        <input type="submit" id="Submit" name='submit' value='Register'/>
        <label for="Submit"></label>
      </div>
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
