<?php
// Song metadata
$title = "Everytime";
$artist = "boy pablo";

// Chorus repetition count
$repeatChorus = (int) "2"; 
$extraLines = 3 + $repeatChorus;

// Word banks
$nouns = ["heart", "keyboard", "fingers", "love"];
$verbs = ["fell", "slammed", "replies", "see", "know", "broken"];
$adjectives = ["oblivious", "broken"];

// Verse 1 lyrics
$verseOneLines = [
    "She hasn't even met him yet, but something's already there",
    "She already " . $verbs[0] . " in " . $nouns[3] . ", like a silent dare",
    "Her " . $nouns[1] . " gets " . $verbs[1] . " by her restless " . $nouns[2],
    "But he just " . $verbs[2] . " with \"okay\"—every time, every time"
];

// Chorus lyrics
$chorusLines = [
    "She doesn't " . $verbs[4] . " who he is",
    "No, she doesn't " . $verbs[4] . " what he's up to, oh",
    "She doesn't " . $verbs[4] . " who he is"
];

// Bridge lyrics
$bridgeLines = [
    "He doesn't even " . $verbs[3] . " her",
    "He " . $verbs[3] . " right through her, like she's not even there"
];

// Final chorus with a twist
$finalChorusLines = [
    $chorusLines[0],
    $chorusLines[1],
    "Her " . $nouns[0] . " feels " . $verbs[5] . " every time, every time",
    $chorusLines[0],
    $chorusLines[1],
    $chorusLines[2],
    "She doesn't know who she is anymore"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "$title - $artist"; ?></title>
    <style>
        body {
            margin: 0;
            background: black;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }

        .song-info h1 {
            font-size: 40px;
            margin: 0 0 10px;
            font-weight: 800;
        }

        .song-info p {
            font-size: 14px;
            color: white;
        }

        h2 {
            font-size: 18px;
            color: rgba(0, 255, 55, 0.8);
            margin-top: 40px;
        }

        p {
            font-size: 14px;
            color: rgba(230, 241, 233, 0.8);
        }

        h1, h2, p {
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="song-info">
        <h1><?php echo $title; ?></h1>
        <p>Artist: <?php echo $artist; ?></p>
    </div>

    <h2>Verse 1</h2>
    <?php foreach ($verseOneLines as $line) echo "<p>$line</p>"; ?>

    <h2>Chorus ×<?php echo $repeatChorus; ?></h2>
    <?php
    for ($i = 0; $i < $repeatChorus; $i++) {
        foreach ($chorusLines as $line) echo "<p>$line</p>";
        echo "<br>";
    }
    ?>

    <h2>Bridge</h2>
    <?php foreach ($bridgeLines as $line) echo "<p>$line</p>"; ?>

    <h2>Final Chorus</h2>
    <?php foreach ($finalChorusLines as $line) echo "<p>$line</p>"; ?>

</body>
</html>