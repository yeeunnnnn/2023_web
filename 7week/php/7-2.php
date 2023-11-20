<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7주차 2번</title>
</head>
<body>
<?php
function revsort($arr){
	sort($arr);
	return array_reverse($arr);
}
$arrr = range(1, 50);
shuffle($arrr);
$arr = array_slice($arrr, 0, 15);

echo "정렬 전<br>";
foreach ($arr as $e){
	echo $e . " ";
}

$arr = revsort($arr);
echo "<br>정렬 후<br>";
foreach ($arr as $e){
	echo $e . " ";
}
?>
</body>
</html>