<?ph<?php
    include "connect.php";
    session_start();
    if(isset($_POST['sub'])) {
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $mob = $_POST['Number'];
        $pass=$_POST['password'];
        $retype=$_POST['Retype'];
        $add = $_POST['address'];
        $qry="INSERT INTO `data` (`user_name`,`email`,`mobile`,`password`,`retype`,`address`) VALUES('$name','$email','$mob','$pass','$retype','$add');";
        mysqli_query($conn,$qry) or die("Error inserting");
        header('location:register.php');
    ?>    
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
                <h2>Register</h2>
                <form method="post" action="">
                    Your Name<br> <br><input type="text" id="Your Name" name="Name"> </br><br>
                    Email<br><br> <input type="text" id="Email" name="Email"> </br><br>
		            Mobile<br><br> <input type="text" id="Number" name="Number"> </br> <br>
                    Password<br><br> <input type="text" id="Password" name="password"></br></br>
                    Retype Password<br><br> <input type="text" id="Retype Password" name="Retype"> <br><br> 
		            Address<br><br> <textarea rows="5" cols="65" id="address" name="address"> </textarea></br></br>
                    <input type="submit" name="sub" value="Register " class="bold"> 
                    </form>
         </div>
         </body>
         </html>  
    

