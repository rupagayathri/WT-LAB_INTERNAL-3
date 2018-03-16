<?php
    include "connect.php";
    session_start();
    
    if(isset($_POST['sub'])) {
        $Type=$_POST['type'];
        $size=$_POST['size'];
        $qry="select * from upload where `type_dress`='$Type' and `size`='$size';";
        $res=mysqli_query($conn,$qry);
        if(mysqli_num_rows($res)>0)
        {
            echo "success";
            header('location:search.php');
        }
        else {
            echo "Invalid login";
        }
    }
?>
<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <div class="p">
                <h1>Clothes Rent</h1>
                <ul class="nav">
                    <li><a href="register.php">Register</a></li>
		    <li><a href="upload.php">Upload</a></li>
		    <li><a href="request.php">Search</a></li>
             <li><a href="logout.php">LogOut</a></li>
                </ul>
            </div>
    <div class="main-content">
        <h2>Search</h2>
    <form method="post" action="">
                Type Of Dress<br> <br><input type="text" id="type" name="type"> </br><br>
                Size<br><br> <input type="text" id="size" name="size"></br></br>
                <input type="button" name="sub" value="search" onclick="showRequest();"> 
                  <div id="request" class="request">
               </div>
				<script>
			function showRequest() {
				document.getElementById("request").innerHTML=" ";
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("request").innerHTML += this.responseText;
					}
				};
				var type=document.getElementById("type").value;
				var size=document.getElementById("size").value;
				xhttp.open("GET","search.php?&type="+type+"&size="+size,true);
				xhttp.send();
			}
		</script>
    </form>
</div>
</body>
</html>