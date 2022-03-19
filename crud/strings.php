<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>

    <?php
echo "My name is Laurent";
// (.) dot sign is the addition operator for strings
// we have to remember to add spaces for ourselves
echo "<br>";
$color = "Red";
$shirt = "Turtle-neck";
$combo = $color. " ". $shirt;
echo $combo; 
echo "<br>";

// single quotes dont read the declared variables in the echo function 
echo 'The $combo was really good dawg';
// double quotes accept declared variables in them
echo "<br>";
echo " The $combo was really good dawg";
echo "<br>";
// or u can use {} to use ur variables in quotes
// we can use the .= operator to combine variables
$phrase1 = "student who came late ";
$phrase2 = "must sit at the back with Rock";
$combine = $phrase1;
$combine.= $phrase2;
echo "Original full string:$combine <br>";
echo "<hr>";
    ?>
    uppercase first: <?php echo ucfirst($combine); ?><br>
    uppercase words: <?php echo ucwords($combine); ?>
    <br>
    lowercase: <?php echo strtolower($combine); ?> <br>
    uppercase : <?php echo strtoupper($combine); ?><br>
    <hr><br>

    Find position of any specific word: <?php echo strpos($combine, "came"); ?><br>
    Making substring from one point to another: <?php echo substr($combine,5,10); ?> <br>
    Repeat:<?php echo str_repeat($combine,3); ?><br>
    Find character: <?php echo strchr($combine, "R"); ?> <br> <hr>

    total length of string: <?php echo strlen($combine); ?><br>
    trim (removing white spaces): <?php echo "A". trim(" B,C,D "). "E"; ?> <br>
    find specific and show after: <?php echo strstr($combine, "ca me"); ?> <br>
    Replace word with new: <?php echo str_replace("sit", "stand", $combine); ?>
</body>
</html>