
<?php

   require 'connect.ini.php';
?>
<?php
  if(isset($_POST['request'])) 
{
       
   $query= 'INSERT INTO `news`(`details`) VALUES ("'.$_POST['type'].'");';
    $query1= 'DELETE FROM newsrequest WHERE request= "'.$_POST['type'].'" ;';
    if(mysqli_query($con,$query) && mysqli_query($con,$query1))
    {
   
      echo "News successfully posted! Thank You!";
    }
    else
    {
      echo "Sorry! some error occured!";
    }
  }

?>


<?php
  if(isset($_POST['delereq'])) {
       
    $query2= 'DELETE FROM newsrequest WHERE request= "'.$_POST['type'].'" ;';
    if( mysqli_query($con,$query2))
    {
   
      echo "You have successfully deleted news request!";
    }
    else
    {
      echo "Sorry! some error occured!";
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



</html>



