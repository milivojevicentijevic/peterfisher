<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>execution</title>
</head>
<body>
    <?php
        require 'classes.php';
        $paymentType = new PayFee();
        $gateway = new PaymentGateway();
        $gateway->takePayment($paymentType);
    ?>
</body>
</html>

<!-- (nothing) -->