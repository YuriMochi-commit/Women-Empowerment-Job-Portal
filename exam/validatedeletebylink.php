<?php 

include ('dbconnect.php');
 
    $id = $_GET['id'];
    $sql = "DELETE FROM questions WHERE `questions`.`id` = $id";
  
    $delresult = mysqli_query($con,$sql);
    if($delresult){
        
        $deleteok = 1;
        echo "deleted";
        header("location: questionbank.php");
       
       }
    



 ?>       