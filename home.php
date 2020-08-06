<?php
    include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>


<body>

    <form action="sign_up.php" method="POST">
        <input type="text" name="first" placeholder="First Name">
        <br>
        <input type="text" name="last" placeholder="Last Name">
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type = "submit" name="submit">Sign up</button>
    </form>

</body>





</html>

