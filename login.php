<?php
session_start();
if (isset($_SESSION['err'])) {
    $error = $_SESSION['err'];
    // clear the error in the session, so we don't see it again...
    unset($_SESSION['err']);
} else {
    $error = "";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>
        <?= $error ?><br>
        <form action="login_authenticate.php" method="POST">
            Username: <input type="text" name="username" required><br><br>
            Password: <input type="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </form>
    </body>
</html>


