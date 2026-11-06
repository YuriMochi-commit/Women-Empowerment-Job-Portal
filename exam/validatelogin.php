<?php include('dbconnect.php'); ?>
<?php
session_start();
$errors = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'";

    $result = mysqli_query($con, $query);

    $num_row = mysqli_num_rows($result);

    if ($num_row < 1) {
        $errors['login'] = "Password do not match";

    } else {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($row['role'] == 'admin') {
            $_SESSION['name'] = $row['name'];
            header("location: questionget.php");
        }
    }

}
?>
<html>

</html>