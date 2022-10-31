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
    $data = 17;
    if ($data % 2 == 0) {
        echo "<p style='background-color: blue'>$data</p>";
    } else {
        echo "<p style='background-color: green'>$data</p>";
    }
    ?>
</body>

</html>