<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hostname = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "wejp";
        $con = mysqli_connect($hostname, $username, $password, $dbname);
        if(!$con){
            die("connection failed:" .mysqli_connect_error());
        }
        else{
       
        }
    ?>
</body>
</html>