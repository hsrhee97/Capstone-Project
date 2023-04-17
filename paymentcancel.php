<?php
    session_start();
    $login = $_SESSION['login'];
    if (!isset($login)) {
    header('Location: home.php');
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Payment Status</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="status">
                <h1 class="error">Your PayPal Transaction has been canceled!</h1>
            </div>
            <a href="payment.php" class="btn-link">Back to Products</a>
        </div>
    </div>
</body>
</html>