<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7주차 1번</title>
</head>
<body>
<?php
$rows = 5;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "<br>";
}

for ($i = $rows - 2; $i >= 0; $i--) {
    for ($j = 0; $j <= $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "<br>";
}
?>
</body>
</html>