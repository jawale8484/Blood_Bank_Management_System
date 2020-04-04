<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Bank</title>

    <link rel="shortcut icon" href="11.jpg" type="image/x-icon">
    <link rel="stylesheet" href="donorrezult.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body class="body">

    <div class="drop">
        <img src="slogn.png" width="160" height="100">

    </div>
    <div class="blood">
        <p style="font-family: 'Times New Roman', Times, serif">Blood Bank</p>
    </div>

    <hr class="hr">

    <div class="topnav">

        <a href="search.html">Search Donor </a>
        <a href="registerdonor.html">Register Donor</a>
        <a href="bloodtips.html">Blood tips</a>
        <a href="aboutus.html">About Us</a>
        <a href="contactus.html">Contact Us</a>
        <a href="login.php" style="font-size: 10px; margin-left:5%;">log Out</a>
        </nav>
    </div>
    <center>
    <h1>List Of All Blood Donars</h1>
<table class="viewtable"  >
    <tr>
        <th>Name <hr> </th>
        <th>Email<hr> </th>
        <th>Phone Number<hr></th>
        <th>Blood Group <hr></th>
        <hr>
    </tr>

    <?php


$servername ="127.0.0.1";
$username = "root";
$password ="";
$dbname ="bloodbank";


$con =mysqli_connect($servername,$username,$password,$dbname);


 

      $sql ="SELECT uname ,email,mobileno,bgroup from registerdonor";
      $result= $con->query($sql);
      if($result-> num_rows >0){
               while($row = $result-> fetch_assoc()){
               echo "<tr><td>".$row["uname"]."</td><td>".$row["email"]."</td><td>".$row["mobileno"]."</td><td>".$row["bgroup"]."</td></tr>";
               }
               
               echo "</table>";
      } 
else{
    echo"0 result";
}
$con->close();
      ?>
<hr>
</table>
</center>








</body>

</html>