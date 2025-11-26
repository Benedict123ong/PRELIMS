<?php
$star = 4.5;

if($star == 5) {
    $result = "Excellent";
}

elseif($star >= 4) {
    $result = "Very Good";
}

elseif($star >= 3) {
    $result = "Good";
}

else {
    $result = "Needs Improvement";
}

?>

<?php include "header.php"; ?>
<body>
    <h2>Evaluation</h2>
    <p>Stars: <?php echo $star; ?></p>
    <p>Result: <?php echo $result; ?></p>
</body>
<?php include "footer.php"; ?>