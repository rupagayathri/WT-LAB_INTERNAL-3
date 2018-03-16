<?php
        include "connect.php";
        session_start();
        $type=$_GET['type'];
        $size=$_GET['size'];
?>
<!Doctype html>
<html>
            <div class='request' id='request' >
             <?php 
             $qry="select * from upload where `type_dress`='$type' and `size`='$size'";
             $sql=mysqli_query($conn,$qry);
             if(mysqli_num_rows($sql)>0){
                 while($row=mysqli_fetch_assoc($sql)){
                     $type=$row['type_dress'];
                     $size=$row['size'];
                     $mate=$row['mate'];
                     $des=$row['descr'];
                     echo "<p>$type</p>";
                     echo "<p>$size</p>";
                     echo "<p>$mate</p>";
                     echo "<p>$des</p>";
                 }
             }?>

            <button onclick="myFunction()">Rent</button>
                <script>
                function myFunction() {
                    alert("Done");
            }
            </script>   
            </div>
</html>