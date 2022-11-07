<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSLC1</title>
</head>
<body>

    <?php

        for ($x = 0; $x <= 10; $x++) {
            if($x > 5):
                echo "X is more than 5 : $x <br>";
            elseif($x < 5):
                echo "X is $x <br>";
            endif;
          }

    ?>

</body>
</html>
