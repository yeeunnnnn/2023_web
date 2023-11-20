<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numbers = range(1, 45);
shuffle($numbers);
$selected_numbers = array_slice($numbers, 0, 6);
sort($selected_numbers);
foreach ($selected_numbers as $number) {
    echo $number . "\n";
}

// 1부터 45까지의 숫자를 배열에 저장
// 배열의 순서를 랜덤하게 섞음
// 섞인 배열에서 앞의 6개 숫자를 추출
// 추출된 숫자를 정렬
// 결과 출력

?>

</body>
</html>
