<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php


    //Generate Numbers From 1 to 100 Using nested loop
    
    for ($a = 1; $a <= 100; $a = $a + 10) {
        for ($b = $a; $b < $a + 10; $b++) {
            echo $b . "";
        }
        echo "<br>";
    }





    ?>

</body>

</html>