<!DOCTYPE html>
<html>
<head>
	<title>UAS</title>
</head>
<body>
<?php

$g = 0;

while ($g <= 10) {
	$g++;
}
for ($q=0; $q <= 10 ; $q++) { 
	echo $q."<br>";

}

$a = 75;

if ($a >= 75) {
	echo $a." LULUS";
}
else if ($a < 75) {
	echo $a." TIDAK LULUS";
}
else if ($a < 0 || $a > 100) {
	echo $a." NILAI SALAH";
}
$abc = "hello";
$qwer = [x,y];
$array = [$qwer,9][$abc];

printf $array;
?>
</body>
</html>
