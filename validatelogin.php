<?php include('dbconnect.php'); ?>
<?php
session_start();
$errors = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `register` WHERE `email` = '$email' AND `password` = '$password'";

    $result = mysqli_query($con, $query);

    $num_row = mysqli_num_rows($result);

    if ($num_row < 1) {
        $errors['login'] = "Password do not match";

    } else {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($row['role'] == 'user') {
            $_SESSION['email'] = $row['email'];
            header("location: index.php");
        }
        elseif($row['role'] == 'employee'){
            $_SESSION['email'] = $row['email'];
            header("location: Employee.php");
        }
        elseif($row['role'] == 'admin'){
            $_SESSION['email'] = $row['email'];
            header("location: AdminDashboard.php");
        }
        else{
            echo "User type not found";
        }
    }

}
?>
<html>

</html>