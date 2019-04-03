<!DOCTYPE html>

<?php
 require 'connect.ini.php';
session_start();
            $uname='';
            $pass='';
            $nam='';
            $em='';
            $mob=('');
            $citi='';
            $add='';
            $wt='';
            $day='';
            $mn='';
            $yy='';
            $gen='';
            $flagd=0;
            $flagw=0;
            $BG='';
            $pic='default.png';


  $flag=10;
  if(isset($_POST['submit']))
  {
    $uname=$_POST['user-name'];
    $pass=md5($_POST['password']);
    $nam=$_POST['name'];
   
    $em=$_POST['email'];
    $mob=($_POST['mobile']);
    $citi=$_POST['city'];
    $add=$_POST['address'];
    if(isset($_POST['gender']))
      $gen=($_POST['gender']);
    if(isset($_POST['blood-group']))
    $BG=$_POST['blood-group'];
    $wt=$_POST['weight'];
     $day=($_POST['date']);
     $pic=$_FILES['file']['name'];
      $size=$_FILES['file']['size'];
      $type=$_FILES['file']['type'];
      $temp_name=$_FILES['file']['tmp_name'];
      $extension=substr($pic,strpos($pic,'.'),strlen($pic));

    $location="C:/xampp/htdocs/Blood/login-choice/login/log-donor/img/";


    if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['user-name']) && !empty($_POST['user-name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['term']) && isset($_POST['date'])  && isset($_POST['gender']) && isset($_POST['blood-group']) && isset($_POST['weight']) && !empty($_POST['name'])  && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address']) && !empty($_POST['city'])   && isset($_POST['gender'])  && !empty($_POST['weight']))
  {


     $dob=$day;
      $array=explode('-', $day);
     $yy=$array[0];
    

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
                if(!is_numeric($wt))
              {
                //  echo "<h style='color:red;'>Username should not contain space<br></h>";
                  $flag=0; $flagw=63;
              }
	 if((int)$wt<50)
              {
                //  echo "<h style='color:red;'>Username should not contain space<br></h>";
                  $flag=0; $flagw=64;
              }
                if((int)$yy >= 2001 || (int)$yy <= 1952){
                      $flag=12;  $flagd=12; 
                }

             
             if(!isset($_FILES['file']))
             {
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
              
           

  //  $query='INSERT INTO hospital(name,address,city,mobile,email,username) VALUES ("'.$nam.'","'.$add.'","'.$citi.'",'.$mob.'","'.$em.'","'.$uname.');';
     $query= 'INSERT INTO `donor`(`name`, `address`, `city`, `mobile`, `email`, `username`, `password`, `dob`, `gender`, `bloodG`, `weight`,`pic`) VALUES ("'.$nam.'","'.$add.'","'.$citi.'","'.$mob.'","'.$em.'","'.$uname.'","'.$pass.'","'.$dob.'","'.$gen.'","'.$BG.'","'.$wt.'","'.$uname.$extension.'");';
   
   // $query='select * from hospital';
    if(mysqli_query($con,$query))
    {
   
      echo "You are registered! Thank You!";
      move_uploaded_file($temp_name, $location.$uname.$extension);
         $_SESSION['name']=$uname;
   header('Location: http://localhost/Blood/login-choice/login/log-donor/');
    }
    else
    {
     // echo "Sorry! some error occured!";
        $flag=2;
    }
         }

     /* $query_num_rows=mysqli_num_rows($query_run);
      if($query_num_rows==0)
        echo "No results Found!";
      else
      {
        while($query_row=mysqli_fetch_assoc($query_run))
        {
          echo $query_row['username'];
        }
      }

           */
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
  <title>Reg@ Donor</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background="img/hmoerd.jpeg">

<a href="../../../index.php">

<img src="img/homerd.jpeg" alt="home"  align="left" width="100" height="80">

</a>

  
<h1 style="color:yellow;"><center><strong>REGISTER AS A DONOR</strong></center></h1>
<div class="container" style="background:#c0c0c0;">
  <form action='index.php' method='POST' enctype="multipart/form-data">
    <div class="row">
      <h4>Login Information</h4>
      <?php  if($flag==2)   echo "<h style='color:red;'>Sorry! Entered Username already exists!</h>"; 
?>
<?php  if($flag==100)   echo "<h style='color:red;'>Sorry! Please enter whole data!</h>"; 
?>
      <div class="input-group input-group-icon">
        <input type="text" name='name'  placeholder="Full Name" value='<?php echo $nam; ?>'/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" name='email'  placeholder="Email Adress" value='<?php echo $em; ?>'/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
         <?php
       if(strpos($uname,' '))
              {
                  echo "<h style='color:red;'>Username should not contain space<br></h>";
                 
              }
              ?>
       <div class="input-group input-group-icon">
        <input type="user-name" name='user-name' placeholder="User-Name with Profile Pic" value='<?php  if(!strpos($uname,' ')) echo $uname; ?>' />
        <div class="input-icon"><i class="fa fa-user-secret"></i></div>
      </div>
      <?php if($flag!=10 && !isset($_FILES['file']))
             {
               echo "<h style='color:red;'>Please choose a valid pic!<br></h>";
             }  ?>
         <div class="input-group input-group-icon">
        <input type="file" name='file'  placeholder="" value= ""/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" name='password' placeholder="Password"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
  

    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
          <?php if($flagd==12)
             {
               echo "<h style='color:red;'>Invalid Date</h>";
             }

             ?>
        <div class="input-group">
          <div class="input-group">
            <input type="date" name='date' placeholder="00-00-0000" value='<?php if($flag!=10 && $flagd!=12) echo $day; ?>' />
          </div>
          
        </div>
      </div>
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" <?php  if($flag!=10 && $gen=='male') echo "checked"?> id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" <?php  if($flag!=10 && $gen=='female') echo "checked"?> id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>
    </div>
    <div class="row">
      <h4>Donor Information</h4>
      
      
      <div class="input-group">
        <input type="radio" name="blood-group" <?php  if($flag!=10 && $BG=='A+') echo "checked"?> value="A+" id="b-g-a+" />
        <label for="b-g-a+"><span><i class="fa fa-cc-check"></i>A+</span></label>
        <input type="radio" name="blood-group" <?php  if($flag!=10 && $BG=='A-') echo "checked"?> value="A-" id="b-g-a-" />
        <label for="b-g-a-"><span><i class="fa fa-cc-check"></i>A-</span></label>
        <input type="radio" name="blood-group" <?php  if($flag!=10 && $BG=='B+') echo "checked"?> value="B+" id="b-g-b+"/>
        <label for="b-g-b+"> <span><i class="fa fa-cc-check"></i>B+</span></label>
        <input type="radio" name="blood-group" <?php  if($flag!=10 && $BG=='B-') echo "checked"?> value="B-" id="b-g-b-"/>
        <label for="b-g-b-"> <span><i class="fa fa-cc-check"></i>B-</span></label>
        <input type="radio" name="blood-group" <?php  if($flag!=10 && $BG=='AB+') echo "checked"?> value="AB+" id="b-g-ab+"/>
        <label for="b-g-ab+"> <span><i class="fa fa-cc-check"></i>AB+</span></label>
        <input type="radio" name="blood-group" <?php  if($flag!=10 && $BG=='AB-') echo "checked"?> value="AB-" id="b-g-ab-"/>
        <label for="b-g-ab-"> <span><i class="fa fa-cc-check"></i>AB-</span></label>
        <input type="radio" name="blood-group" <?php  if($flag!=10 && $BG=='O+') echo "checked"?> value="O+" id="b-g-o+"/>
        <label for="b-g-o+"> <span><i class="fa fa-cc-check"></i>O+</span></label>
        <input type="radio" name="blood-group" <?php  if($flag!=10 && $BG=='O-') echo "checked"?> value="O-" id="b-g-o-"/>
        <label for="b-g-o-"> <span><i class="fa fa-cc-check"></i>O-</span></label>
      </div>
 <?php if($flagw==63 )
              {
                 echo "<h style='color:red;'>Weight should be integer</h>";
                
              } ?>
			<?php if($flagw==64 )
              {
                 echo "<h style='color:red;'>Weight should be greater than 50 kg</h>";
                
              } ?>
      <div class="input-group input-group-icon">
        <input type="text" name='weight' placeholder="Weight" value='<?php  if($flag!=10 && $flagw!=63) echo $wt; ?>' />
        <div class="input-icon"><i class="fa fa-circle"></i></div>
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
        <input type="text" name='mobile' placeholder="Mobile No." value='<?php if($fl==0) echo $mob; ?>' />
        <div class="input-icon"><i class="fa fa-mobile"></i></div>
      </div>
       <div class="input-group input-group-icon">
        <input type="text" name='address' placeholder="Address" value='<?php echo $add; ?>' />
        <div class="input-icon"><i class="fa fa-car"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name='city' placeholder="City" value='<?php echo $citi; ?>' />
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
