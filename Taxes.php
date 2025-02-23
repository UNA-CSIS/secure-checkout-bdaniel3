<?php
session_start();
//grabbing the subtotal thats in the session from ordersummary
$subtotal = $_SESSION['subtotal'];
$tax = $subtotal * .095;
$total = $subtotal + $tax;
//putting the total variable into the session for checkout.php to use
$_SESSION['total'] = $total;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Total Page</title>
    </head>
    <body>
        <h3>Subtotal: $<?php echo $subtotal ?></h3>
        <h3>Taxes(9.5%): $<?php echo round($tax, 2) ?></h3>
        <h3>------------------------------</h3>
        <h3>Total: $<?php echo round($total, 2) ?></h3>
        <form action="index.php">
            <input type="submit" value="Continue Shopping"><br>
        </form>
        <form action="CheckOut.php">
            <input type="submit" value="Checkout">
        </form>

    </body>
</html>
