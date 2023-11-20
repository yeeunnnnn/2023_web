<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7주차 5번</title>
</head>
<body>
<?php
$ptr = fopen("client.txt", 'r');

while(!feof($ptr)) {
	$lineStr = trim(fgets($ptr));
	$data = explode('	', $lineStr);
	if (intval($data[1]) >=30) {
		echo "이름 : $data[0], 나이 : $data[1], 성별 : $data[2], 이메일 : $data[3]<br>";
	}
}

?>
</body>
</html>