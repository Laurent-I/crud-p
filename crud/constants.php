<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <?php

    $name = 'Laurent';
    // first argument is constant name
    //second argument is constant value.
    define("Value_of_Pi",3.14);
    define("Value_of_Gravity",9.8);
    echo "PI VALUE:". Value_of_Pi;
    echo "<br>";
    echo "G VALUE:". Value_of_Gravity;

    ?>
</body>
</html>