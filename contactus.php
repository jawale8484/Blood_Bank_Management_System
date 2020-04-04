<?php

if(isset($_POST['submit']))
{
   include_once 'server1.php';
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
   $mn = mysqli_real_escape_string($conn,$_POST['mn']);
  $city = mysqli_real_escape_string($conn,$_POST['city']);
   $msg = mysqli_real_escape_string($conn,$_POST['massage']);
    

    //error handler
    //check for empty fields
          

                //INSERT THE USER INTO DATABASE

                $sql ="INSERT INTO contactus (name,email,mn,city,msg) VALUES ('$name','$email','$mn','$city','$msg');";
             mysqli_query($conn,$sql);
            {
             header("Location: contactus.html ?contactus=messageSent");
            }
                  exit(); 
           
             }

else
{
   header("Location: contactus.html");
   exit();
}
?>
