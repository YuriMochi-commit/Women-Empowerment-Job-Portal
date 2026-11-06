<?php 
$insertok = 0;
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['question'])){
        $question = $_POST['question'];
        $answer = strtoupper($_POST['answer']);
        
        $sql = "INSERT INTO `questions`(`question`, `answer`) VALUES ('$question','$answer')";
        $result = mysqli_query($con,$sql);
        if($result){
           $insertok = 1; 
        }
    }
}
?>