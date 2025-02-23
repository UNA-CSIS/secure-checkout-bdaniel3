<?php
session_start();
$_SESSION['iphone15'] = $_POST['iphone15'];
$_SESSION['iphone16'] = $_POST['iphone16'];
$_SESSION['iphone16plus'] = $_POST['iphone16plus'];
//variables of quantity in the session
$iphone15 = $_SESSION['iphone15'];
$iphone16 = $_SESSION['iphone16'];
$iphone16plus = $_SESSION['iphone16plus'];
//prices of items
$iphone15Price = 699;
$iphone16Price = 799;
$iphone16plusPrice = 999;
//Adding up the subtotal by multiplying price by quantity selected, then adding all together
$subtotal = ($iphone15 * $iphone15Price) + ($iphone16 * $iphone16Price) + ($iphone16plus * $iphone16plusPrice);
$_SESSION['subtotal'] = $subtotal;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Order Summary Page</title>
    </head>

    <body>
        <h1>Order Summary:</h1>
        <!--
        if statements to check for quantities in each phone option,
        so the order summary shows what is being bought
        -->
        <?php
        if ($iphone15 > 0) {
            echo "iPhone 15 $699 x" . $iphone15;
        }
        if ($iphone16 > 0) {
            echo "<br>iPhone 16 $799 x" . $iphone16;
        }
        if ($iphone16plus > 0) {
            echo "<br>iPhone 16 Plus $999 x" . $iphone16plus;
        }
        ?>
        <h2>Subtotal: $<?php echo $subtotal ?></h2>
        <form action="Taxes.php">
            <input type="submit" value="confirm">
        </form>
    </body>
</html>

