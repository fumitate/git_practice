<?php
$num1 = $_POST['num'];
$total = 0;

if (!is_numeric($num1)) {
	$message = '数字以外が含まれています';
} elseif ($num1 < 1) {
	$message = '１以上の数値を入力して下さい';
} else {
	for ($num2 = 1; $num2 <= $num1; $num2++) {
		$total += $num2;
	}
	$message = '合計：' . $total;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>計算結果</title>
</head>
<body>
<?php echo $message; ?>
</body>
</html>
