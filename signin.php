<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Blood Bank</title>

    <link rel="shortcut icon" href="11.jpg" type="image/x-icon">
    <link rel="stylesheet" href="sigin.css">
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

    <div class="logo">
        <img src="homeimg.jpg" style="width: 600px" height="250px">
    </div>>


    <div class="signin">
        
            <fieldset class="f1">
                <legend style="width:80px;margin-left: 4% ">Sign-In</legend>


                <hr class="hrs" />
    <div class="container-fluid bg">
      <div class="row">
        <div class="col"></div>
        <div class="col">


          <form class="form-container" action="signuplogic.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">User Name</label>
              <input
                type="text"
                class="form-control"
                name="user"
                id="exampleInputEmail1"
                placeholder="User name"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="Email"
                class="form-control"
                name="email"
                id="exampleInputEmail1"
                placeholder="Email"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input
                type="password"
                class="form-control"
                name="password"
                id="exampleInputPassword1"
                placeholder="Enter Password"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirm Password</label>
              <input
                type="password"
                class="form-control"
                name="password2"
                id="exampleInputPassword1"
                placeholder="Confirm Password"
                required
              />
            </div>
            <div class="form-group">
             

              <input
                type="submit"
                class="btn btn-success btn-block btnpd"
                name="submit"
                value="Submit"
              />
              </form>
              
              <p>
                Already a user ?
                <a href="login.php"><b class="log">Log in</b></a>
              </p>
            </div>
          
         
        </div>
        <div class="col"></div>
      </div>
    </div>


            </fieldset>
        
    </div>
    

    <h3 style="margin-left: 220px;">
        Want to become a blood donor?
        <input type="submit" class="btn btn-danger" value="submit" name="submit" style="margin-left:0px">
    </h3>



   




</body>

</html>`