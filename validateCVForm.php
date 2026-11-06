
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $errors=array();  

    if($_SERVER['REQUEST_METHOD']=='POST'){
    if(count($errors)===0){
        $name = mysqli_real_escape_string($con,$_POST['name']);

        $DateOfBirth=mysqli_real_escape_string($con,$_POST['DateOfBirth']);

        $nationality=mysqli_real_escape_string($con,$_POST['nationality']);

        $NRC=mysqli_real_escape_string($con,$_POST['NRC']);

        $MaritalStatus=mysqli_real_escape_string($con,$_POST['MaritalStatus']);

        $phone=mysqli_real_escape_string($con,$_POST['phone']);

        $religion=mysqli_real_escape_string($con,$_POST['religion']);

        $LanguageKnowledge=mysqli_real_escape_string($con,$_POST['LanguageKnowledge']);

        $qualification=mysqli_real_escape_string($con,$_POST['qualification']);

        $experience=mysqli_real_escape_string($con,$_POST['experience']);

        $address=mysqli_real_escape_string($con,$_POST['address']);


        $search_query=mysqli_query($con,"SELECT * FROM register WHERE name='$name'");

        $num_row=mysqli_num_rows($search_query);
        if($num_row>=1){
            $errors['email']="Email address is unavaailable";
        }
        else{
            $sql="INSERT INTO `cvform`(`name`,`DateOfBirth`, `nationality`, `NRC`, `MaritalStatus`, `phone`, `religion`, `LanguageKnowledge`, `qualification`, `experience`, `address`) 
            VALUES ('$name','$DateOfBirth;','$nationality','$NRC','$MaritalStatus','$phone;','$religion','$LanguageKnowledge','$qualification','$experience;','$address')";
            $query=mysqli_query($con,$sql);
            $_POST['name']='';
            $_POST['DateOfBirth']='';
            $_POST['nationality']='';
            $_POST['NRC']='';
            $_POST['MaritalStatus']='';
            $_POST['phone']='';
            $_POST['religion']='';
            $_POST['LanguageKnowledge']='';
            $_POST['qualification']='';
            $_POST['experience']='';
            $_POST['address']='';
            $successfully="Your are successfully CV Form.";
        }
        
    }

} 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header("Location: SuccessfullyForm.php");
  
  }

    ?>
</body>
</html>