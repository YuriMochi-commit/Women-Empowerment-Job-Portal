<?php session_start(); ?>
<?php include('dbconnect.php');
//include ('validatedeletebylink.php');
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination system</title>
</head>
<body>
<?php if(isset($_SESSION['name'])){?>
    <h1 align="center"> Question Bank </h1>
    <p align="right"> login user: <?php echo $_SESSION['name']; ?>| <a href="logout.php">Logout</a><p>
        <p align="center"> <a href="insertquestion.php">Insert</a>|<a href="questionbank.php?" >Delete</a></p>
       
        <?php 
        
        $sql = "select * from questions";
        $result = mysqli_query($con,$sql);
        $num_rows = mysqli_num_rows($result);
        if ($num_rows >0){
            ?>
        <p align="center"> The number of questions: <?php echo $num_rows; ?></p>
       
        <table align="center" border=1>
        <tr><th>NO.</th><th>Questions</th><th>Answers</th></tr>
        <?php 
       for($i=1; $i<= $num_rows;$i++){
     $row = mysqli_fetch_array($result);
     $answer = strtoupper($row['answer']);
        echo "<tr><td>".$i."</td><td>".$row['question']."</td><td>".$answer."</td>";
        ?>
       
        
        <td>
        <a href="validatedeletebylink.php?id=<?php echo $row['id'] ?>">
            <button>Delete</button>
        </a>
        </td>
        
       </tr>
     
        
       <?php
       }
        ?>
        
        
         
            
        
        
        </table>
<?php
        }
    
    
}
else header("location: login.php");
        
        
    ?>
        
              
</body>
</html>