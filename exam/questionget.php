<?php
include('dbconnect.php');
include('validatedelete.php')
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <h1 align="center"> Question Bank </h1>
    <p align="right"> login user:| <a href="logout.php">Logout</a>
    <p>
    <p align="center"> <a href="insertquestion.php">Insert</a>|<a href="questionbank.php?">Delete</a></p>
    <p align="center"> The number of questions: </p>

    <?php
    $sql = "select * from questions";
    $result = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($result);



    ?>
    <table align="center" border=1>
        <tr>
            <th>NO.</th>
            <th>Questions</th>
            <th>Answers</th>
        </tr>
        <?php
        if ($num_rows > 0) {
            for ($i = 1; $i <= $num_rows; $i++) {
                $row = mysqli_fetch_array($result);
                echo "<tr><td>" . $row['id'] . "</td><td>" . $row['question'] . "</td><td>" . $row['answer'] . "</td></td>";
                ?>
                <td>
                    <form action="questionget.php" method="post">
                        <input type="submit" name="delete" value="Delete">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    </form>
                </td>
                </tr>
                <?php
            }
        }


        ?>

    </table>

</body>

</html>