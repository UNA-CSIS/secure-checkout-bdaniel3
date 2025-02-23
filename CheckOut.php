<?php
require 'functions.php';
//grabbing total from session
$total = $_SESSION['total'];
//checking if username is in the session
if ($_SESSION['username'] != true) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cardNumber']) && isset($_POST['expDate']) && isset($_POST['securityCode'])) {
        $cardNumber = $_POST['cardNumber'];
        $expDate = $_POST['expDate'];
        $securityCode = $_POST['securityCode'];
        validateCard($cardNumber, $expDate, $securityCode);
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>

        <meta charset="utf-8">
        <title>Pay Me</title>
    </head>

    <body>
        <h1>Checkout</h1>
        <h3>Amount to charge: $<?php echo round($total, 2); ?></h3>
        <form method="POST">
            Name on Card: <input type="text" name="cardName" required><br>
            Card Number: <input type="number" name="cardNumber" required><br>
            Expiration Date[mm/yy]: <input type="text" name="expDate" required><br>
            Security Code: <input type="number" name="securityCode"required><br>
            <input type="submit">
        </form>
    </body>
</html>
