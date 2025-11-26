<?php include "header.php"; ?>
<body>
    <h2>Menu</h2>

<?php
$items = [
    "SeaSalt Latte",
    "Mocha",
    "Americano",
    "Espresso",
    "Caramel Macchiato"
];
$price = [180, 160, 180, 150, 180];

    for ($i = 0; $i < count($items); $i++) {
        echo "<p>{$items[$i]} == ₱{$price[$i]}</p>";
    }
?>
</body>
<?php include "footer.php"; ?>