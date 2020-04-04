<?php

if(isset($_POST['submit']))
{
   include_once 'server1.php';
  $user = mysqli_real_escape_string($conn,$_POST['user']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
   $pass = mysqli_real_escape_string($conn,$_POST['password']);
   $pass2 = mysqli_real_escape_string($conn,$_POST['password2']);
    

    //error handler
    //check for empty fields
          

                //INSERT THE USER INTO DATABASE

                $sql ="INSERT INTO signup (user,email,pass) VALUES ('$user','$email','$pass');";
             mysqli_query($conn,$sql);
            
             header("Location: signin.html ?signup=userregistered");

                  exit(); 
           
             }


      

    



else
{
   header("Location:../reg.php");
   exit();
}
?>
