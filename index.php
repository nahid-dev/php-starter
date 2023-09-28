<?php
if (isset($_POST['btn'])) {
    $username = $_POST['user_name'];
    $email = $_POST['user_email'];
    $password = $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From In PHP</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">User Name</label>
        <br>
        <input style="margin-bottom: 10px;" type="text" placeholder="User Name" name="user_name">
        <br>
        <label for="">User Email</label>
        <br>
        <input style="margin-bottom: 10px;" type="text" placeholder="User Email" name="user_email">
        <br>
        <label for="">Password</label>
        <br>
        <input style="margin-bottom: 10px;" type="password" placeholder="Password" name="password">
        <br>
        <input type="submit" value="Submit Data" name="btn">
    </form>

    <div>
        <h4>Name: <?php if (isset($username)) {
                        echo $username;
                    }  ?> </h4>
        <h4>Email: <?php if (isset($email)) {
                        echo $email;
                    }  ?> </h4>
        <h4>Password: <?php if (isset($password)) {
                            echo $password;
                        }  ?></h4>
    </div>
</body>

</html>