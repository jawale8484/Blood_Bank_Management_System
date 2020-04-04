<?php

if(isset($_POST['submit']))
{
   include_once 'server1.php';
  $user = mysqli_real_escape_string($conn,$_POST['uname']);
  $mono = mysqli_real_escape_string($conn,$_POST['mono']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $bgroup = mysqli_real_escape_string($conn,$_POST['group']);
  $uweight = mysqli_real_escape_string($conn,$_POST['weight']);
  $uaddress = mysqli_real_escape_string($conn,$_POST['add']);
  $city = mysqli_real_escape_string($conn,$_POST['city']);
      
    //error handler
    //check for empty fields
   


   
    

             	//hashing the password
                

                //INSERT THE USER INTO DATABASE

                $sql ="INSERT INTO registerdonor (uname,email,mobileno,bgroup,weight,address,city) VALUES ('$user','$email','$mono','$bgroup','$uweight','$uaddress','$city');";
             mysqli_query($conn,$sql);
            
             header("Location: registerdonor.html ?registerdonor=userregistered");
            

                  exit();
           
             }
  

             ?>