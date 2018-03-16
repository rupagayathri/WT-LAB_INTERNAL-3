<?php
    include "connect.php";
    session_start();
    if(isset($_POST['sub'])) {
        $dress=$_POST['Dress'];
        $mat=$_POST['Material'];
        $size = $_POST['Size'];
        $des=$_POST['Desc'];
        $qry="INSERT INTO `upload` (`type_dress`,`mate`,`size`,`descr`) VALUES('$dress','$mat','$size','$des');";
        mysqli_query($conn,$qry) or die("Error inserting");
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
		    <li><a href="upload.php">Upload</a></li>
		    <li><a href="request.php">Search</a></li>
            <li><a href="logout.php">LogOut</a></li>
                </ul>
            </div>
            <div class="main-content">
                <h2>Upload</h2>
                <form method="post" action="">
                    Type of dress<br> <br><input type="text" id="Dress" name="Dress"> </br><br>
                    Material<br><br> <input type="text" id="Material" name="Material"> </br><br>
		    Sizes<br><br> <input type="text" id="Size" name="Size"> </br> <br>
                    Description<br><br> <textarea rows="5" cols="65" id="Des" name="Desc"> </textarea></br></br>
  		    
                    <input type="submit" name="sub" value="Upload" class="bold"> 
                    </form>
            </div>
            
        </body>
    </html>

