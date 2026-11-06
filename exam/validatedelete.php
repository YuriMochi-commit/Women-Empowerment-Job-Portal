<?php 
$deleteok = 0;
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['delete'])){
echo "id is ".$_POST['id'];
 
    $id = $_POST['id'];
    $sql = "DELETE FROM questions WHERE `questions`.`id` = $id";
  
    $delresult = mysqli_query($con,$sql);
    if($delresult){
        
        $deleteok = 1;
        echo "deleted";
       
       }
    }

}

 ?>       