<?php 
$con = mysqli_connect("localhost","root","","exam");
if (!$con){
    die("connection failed: ". mysqli_connect_error());
}
else echo "Connected successfully";
?>
<html>
</html>