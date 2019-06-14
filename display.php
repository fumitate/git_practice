<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>プロサー</title>
</head>
<body>
<?php
$i = 1;
while ($i <= 100) {
	echo $i;
	if ($i % 3 ==0) {
		echo "プロサー ";
	}
	$i++;
	echo '<br>';
}
?>
