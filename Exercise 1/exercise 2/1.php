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

    //print 10 row of 5 star eacc

    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            echo "*";
        }
        echo "<br>";
    }



    ?>

    <br>
    <br>
    <br>
    <hr>
    <br><br><br>

    <?php

    //array that contains 5 prime numbers

    $prime = array(1, 2, 3, 5, 7);

    for ($i = 0; $i < count($prime); $i++) {
        $product = $prime[$i] * 2;
        $power = $prime[$i] ** 2;
        $cube = $prime[$i] ** 3;
        echo "<pre>" . $product . "\t" . $power  . "\t" . $cube  . "</pre>";
    }

    ?>

    <hr>
    <table>
        <tbody>
            <tr>

            </tr>
        </tbody>
    </table>
    <?php

    //print table with 1 column but alternate color
    echo "<table style='width: 150px'>";
    echo "<tbody>";
    for ($i = 1; $i <= 5; $i++) {
        if ($i % 2 == 0) {
            echo "<tr style='background-color: green;'>";
            echo "<td>" . $i . "</td>";
            echo "</tr>";
        } else {
            echo "<tr style='background-color: blue;'>";
            echo "<td>" . $i . "</td>";
            echo "</tr>";
        }
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</body>

</html>