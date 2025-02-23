<?php

session_start();

//test_input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateCard($cardNumber, $expDate, $securityCode) {
    $total = $_SESSION['total'];
    //checking if the security code is 3 digits in length
    if (strlen($securityCode) != 3) {
        echo "Invalid security code.";
        return;
    }
    //checking for AMEX card first
    if (strlen($cardNumber) == 15) {
        //setting $checkNum equal to the first two digits of the card
        $checkNum = substr($cardNumber, 0, 2);
        if ($checkNum == 34 || $checkNum == 37) {
            echo "AMEX card ending with " . substr($cardNumber, 11, 15) . " has been charged $" . round($total, 2);
        } else {
            echo "Invalid card";
        }
    } elseif (strlen($cardNumber) == 13 || strlen($cardNumber) == 16) {
        $checkMaster = substr($cardNumber, 0, 2);
        $checkVISA = substr($cardNumber, 0, 1);

        if ($checkVISA == 4 && strlen($cardNumber) == 13) {
            echo "VISA card ending with " . substr($cardNumber, 9, 13) . " has been charged $" . round($total, 2);
        } elseif ($checkVISA == 4 && strlen($cardNumber) == 16) {
            echo "VISA card ending with " . substr($cardNumber, 12, 16) . " has been charged $" . round($total, 2);
        }
        if ($checkMaster >= 51 && $checkMaster <= 55) {
            echo "Master card ending with " . substr($cardNumber, 12, 16) . " has been charged $" . round($total, 2);
        }
    } else {
        echo "Invalid card";
    }
}

function isAuthenticated() {
    return isset($_SESSION['username']);
}

function requireLogin() {
    if (!isAuthenticated()) {
        header("Location: login.php");
        exit();
    }
}

?>
