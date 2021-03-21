<!DOCTYPE html>
<html class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser" lang="en-US"><head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="https://www.mercadopago.com/v2/security.js" view=""></script>
</head>
<body>
<?php 

$id = $_GET['payment_id'];
$method = $_GET['payment_type'];
$reference = $_GET["external_reference"];

echo "Payment ID: " . $id . "  ";
echo "Payment method: " . $method . "  ";
echo "External reference: " . $reference ."  ";

echo "Parabéns pela compra";

 ?>
</body>
</html>