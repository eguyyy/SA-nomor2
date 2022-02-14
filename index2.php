<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Total Users</h2>
    <?php
    $connection = mysqli_connect("172.18.0.2","root","final", "Trucorp");

    $sql = "SELECT * FROM users";

    if($result = mysqli_query($connection,$sql)){
        $usercount = mysqli_num_rows($result);

        echo "Total users in database : " .$usercount;
    }
    mysqli_close($connection);
    ?>
</body>
</html>
