<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7주차 3번</title>
</head>
<body>
<?php
$ptr = fopen("exam.txt", 'r');

$line = $word = $chr = 0;
while(!feof($ptr)) {
	$line++;
	$lineStr = trim(fgets($ptr));
	
	$words = explode(' ', $lineStr);
	$word += count($words);

	$chr += mb_strlen(str_replace(' ','',$lineStr), 'UTF-8');
}
echo "줄 수 : " . $line . ", 단어 수 : " . $word . ", 글자 수 : ". $chr ."";
?>
</body>
</html>