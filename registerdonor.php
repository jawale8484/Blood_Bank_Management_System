<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Bank 3rd</title>
    <link rel="shortcut icon" href="11.jpg" type="image/x-icon">
    <link rel="stylesheet" href="registerdonor.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="blood.js" type="text/javascript"></script>
    

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
        </nav>
    </div>
<br>
 <?php
               $fullurl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

               if(strpos($fullurl, "donar=registered")==true){
                 echo"<p class='success'>You have been Registered as Donar,Thank You.</p>";
                 

               }
               ?>
<div>
<form action="registerdonorlogic.php" method="POST">
    <fieldset class="f1">
            <legend style="width:210px;margin-left: 4% ">Log-In-Information</legend>
            <table style="margin-left: 2%">
                <tr>
                    <td>
                        <label for="username">User Name:-</label>
                    </td>
                    <td>

                        <input type="text" placeholder="Enter the Username" name = "uname" id="username" maxlength="15">
                    </td>
                </tr>
                <br>
                <tr>
                    <td>
                        <label for="Mo_no">Mobile Number:-</label>
                    </td>
                    <td>
                        <input type="text" id="Mo_no" name="mono" placeholder="Enter mobile number">

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:-</label>
                    </td>
                    <td>
                        <input type="email" id="email" name="email" placeholder="@gmail.com">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Password:-</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Enter the password" name="pass" id="pass" maxlength="10">
                    </td>
                </tr>
                <br>
                <tr>
                    <td>
                        <label for="cnfpass">Confirm password:-</label>
                    </td>
                    <td>
                        <input type="password" id="cnfpass" name="cpass" placeholder="Confirm password" maxlength="10">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                      
                </td>
                </tr>
            </table>

        </fieldset>
<br>
        <fieldset class="f1">
            <legend style="width:210px;margin-left: 4% ">Donor-Information</legend>

            <table style="margin-left: 2%">
                <tr><td>
            <label for="DOB">Date Of Birth:-</label>
            <input type="date" name="dob" min="1990-01-01" max="2020-01-01">
        </td>
        </tr>
        <tr> 
            <td>
                <label for="blood group">Your Blood Group:-</label>
                <select name="group" id="group">
                <option value="A+"></option>
                <option value="A+">A+</option>
                <option value="A+">B+</option>
                <option value="A+">O+</option>
                <option value="A+">A-</option>
                <option value="A+">B-</option>
                <option value="A+">O-</option>
                <option value="A+">AB+</option>
                <option value="A+">AB-</option>
           
              </select>
            </td>
        </tr>
         <tr>
             <td>
                 <label for="gender">Gender:-</label>  &nbsp; &nbsp;
                 <input type="radio" value="male" name="gender">Male
                 &nbsp; &nbsp; &nbsp; 
                 <input type="radio" value="female" name="gender">Female
             </td>
         </tr>
         <tr>
             <td>
                 <label for="weight">Weight (Kg):- </label>
                 <input type="number" name="weight" maxlength="3">
             </td>
         </tr>

         
         
        </table></fieldset>
        
    <br>
        
                <fieldset class="f1">
                    <legend style="width:220px;margin-left: 4% "> Contact-Information</legend>
                    <table style="margin-left: 2%">
                    <tr>
                        <td>
                            <label for="mob">Mobile-no:-</label>
                            <input type="number" name="mono2">
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                          
                        <label for="add">Address:-<label>
                        <textarea name="add" style="width: 180px;margin-left: 20px;" cols="30" rows="5">
                        </textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="city">City:-</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select name="city">
                                <option value="pune"></option>
                                <option value="p">Pune</option>
                                <option value="p">Mumbai</option>
                                <option value="p">jalgaon</option>
                                <option value="p">Aurngabad</option>
                                <option value="p">jijii</option>
                            </select>
                        </td>
                    </tr>
                </table>
               
                </fieldset> <br>
               
  <h6 style="margin-left:30% ">
<input type="radio" name="accept">I have read the Eligibility Criteria and 
                                  confirm that I am eligible to donate blood.
<br>
               
<input type="radio" name="agre">I agree to the Terms and Conditions and consent to 
      have my contact and donor information published <br>
                 &nbsp;&nbsp;&nbsp;&nbsp;
                
       the potential blood recipients.
            
    </h6> <br>
    <center>
            <input type="submit" class="btn btn-danger" name="submit" style="margin-bottom: 10px;" value="submit">
            </form>
        </center>

</div>

</div>


</body>

</html>