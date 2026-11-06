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
        if(strcmp($_POST['password'],$_POST['cpassword'])){
            $errors['cpassword']="Password does not match";
        }
    

    if(count($errors)===0){
        $name = mysqli_real_escape_string($con,$_POST['name']);

        $email=mysqli_real_escape_string($con,$_POST['email']);

        $password=hash('sha256',$_POST['password']);

        $phone_number=mysqli_real_escape_string($con,$_POST['phonenumber']);

        $search_query=mysqli_query($con,"SELECT * FROM register WHERE email='$email'");

        $num_row=mysqli_num_rows($search_query);
        if($num_row>=1){
            $errors['email']="Email address is unavaailable";
        }
        else{
            $sql="INSERT INTO `register`(`name`,`email`, `password`, `phonenumber`) 
            VALUES ('$name','$email;','$password','$phone_number')";
            $query=mysqli_query($con,$sql);
            $_POST['name']='';
            $_POST['email']='';
            $_POST['password']='';
            $_POST['phonenumber']='';
            $successfully="Your are successfully registered.";
        }
        
    }
    }
    
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header("Location: index.php");
  
  }
    ?>
</body>
</html>