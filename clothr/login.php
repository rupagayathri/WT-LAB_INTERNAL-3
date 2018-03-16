<?php
    include "connect.php";
    session_start();
    if(isset($_POST['sub'])) {
        $user_id = $_SESSION['id'];
        $pass=$_POST['password'];
        $qry="select email,password from project where email=`$id` and password=`$pass`;";
        $res=mysqli_query($conn,$qry);
        if(mysqli_num_rows($res)>0)
        {
            echo "success";
        }
         else {
            echo "Invalid login";
             }
            header('location:upload.php');
     }
?>
<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <div class="p">
                <h1>Property Selling</h1>
                <ul class="nav">
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
		        <li><a href="upload.php">Upload</a></li>
		        <li><a href="request.php">Search</a></li>
     
                </ul>
            </div>
            <div class="main-content">
            <h2>Login</h2>
            <form method="post" action="">
            User Id<br> <br><input type="text" id="Your Name" name="Id"> </br><br>
            Password<br><br> <input type="text" id="Password" name="password"></br></br>
            <input type="submit" name="sub" value="Login " class="bold"> 
           </form>
          </div>
      </body>
     </html>
