<?php include('validatelogin.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online examination system</title>
</head>
<body>
    <h1 align="center" >Online Examination System</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table align="center">
        <tr>
            <td>UserName:</td> <td> <input type="text" name='name' placeholder="User Name" required></td>
             
        </tr>
        <tr>
            <td>Password: </td><td> <input type="password" name='password'placeholder= "Password" required></td>

        </tr>
        <tr align="center">
            <td>
                <input type="submit" name="submit" value="Login">
            </td>
</tr>
<tr align="center">
            <td>
                <?php 
                if(isset($errors['login'])){
                    echo $errors['login'];
                } ?>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>