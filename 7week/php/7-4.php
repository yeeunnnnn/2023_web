<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7주차 4번</title>
</head>
<body>
<?php
$arr = array(
	"Kim"=>"Seoul",
	"Lee"=>"Pusan, Daegu",
	"Choi"=>"Inchon",
	"Park"=>"Suwon, Daejon",
	"Jung"=>"Kwangju, Chunchon, Wonju"
);

unset($arr["Choi"]);
foreach($arr as $name=>$cities) {
	echo $name . " : " . $cities . "<br>";
}

?>
</body>
</html>