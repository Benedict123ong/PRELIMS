<?php include "header.php"; ?>
<body>
    <h2>Temperature</h2>
<?php
$choice = "SeaSalt Latte";

$temperature = match ($choice) {
    "SeaSalt Latte" => "Iced",
    "Mocha" => "Iced",
    "Americano" => "Hot",
    "Espresso" => "Hot",
    "Caramel Macchiato" => "Iced",
    default => "Unknown"
};
?>
<p>Drink Selected: <?php echo $choice; ?></p>
<p>Temperature: <?php echo $temperature; ?></p>
</body>
<?php include "footer.php"; ?>