<?php include "header.php"; ?>
<body>
    <h2>Temperature</h2>
<?php
$customer = "senior";
$price = 200;

if ($customer === "student") {
    $discount =  10;
}elseif ($customer === "senior") {
    $discount =  25;
}else {
    $discount =  0;
}

$totalPrice = $price - $discount;
?>

<p>Customer: <?php echo $customer; ?></p>
<p>Original Price: <?php echo $price; ?></p>
<p>Discount: <?php echo $discount; ?></p>
<p><strong>Discounted Price: ₱<?php echo $totalPrice; ?></strong></p>
</body>
<?php include "footer.php"; ?>