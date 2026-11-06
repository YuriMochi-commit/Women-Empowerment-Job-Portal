<?php session_start(); ?>
<?php include('dbconnect.php');
include ('validateInsert.php');
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination system</title>
</head>
<body>
<form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <h1 align="center"> Question Bank </h1>
    <p align="right"> login user: <?php echo $_SESSION['name']; ?>| <a href="logout.php">Logout</a><p>
        <p align="center"> <a href="insertquestion.php">Insert</a>|<a href="questionbank.php?" >Delete</a></p>
       
       
        <table align="center" >
            <tr><td>Questions:</td><td><input type="text" name="question" size="150" required></td></tr>
            <tr><td>Answer:</td><td><input type="text" name="answer" required></td></tr>
        <td><input type="submit" name="insert" value="Insert">
        </td>
        <p align="center"><?php if($insertok==1){echo "successfully inserted";}?> </p>
       
       </tr>
        
        </table>
        </form>      
</body>
</html>