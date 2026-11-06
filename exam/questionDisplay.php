<?php 
include ('dbconnect.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<h1 align="center"> Question Bank </h1>
<p align="right"> login user:<?php echo $_SESSION['name']; ?>| <a href="logout.php">Logout</a><p>
<p align="center"> <a href="insertquestion.php">Insert</a>|<a href="questionbank.php?" >Delete</a></p>
<p align="center"> The number of questions: </p>
       
<?php 
$sql = "select * from questions";
$result = mysqli_query($con , $sql);
?>
    <table align="center" border=1>
    <tr><th>NO.</th><th>Questions</th><th>Answers</th></tr>
    <tr><td></td><td></td><td></td><td></td></tr>
    </table>

</body>
</html>