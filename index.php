<?php
require 'functions.php';
requireLogin(); //makes sure user is authenticated
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopping Page</title>
    </head>
    <body>
        <form action="OrderSummary.php" method="post">
            iPhone 15: <input type="number" name="iphone15" required> $699 <br>
            iPhone 16: <input type="number" name="iphone16" required> $799 <br>
            iPhone 16 Plus: <input type="number" name="iphone16plus" required>$999 <br>
            <input type="submit">
        </form>

    </body>
</html>
