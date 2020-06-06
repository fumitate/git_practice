<?php
$max_num = $_POST['max_num'];
$total = 0;

if (!is_numeric($max_num)) {
	$message = '数字以外が含まれています';
} elseif ($max_num < 1) {
	$message = '１以上の数値を入力して下さい';
} else {
	for ($num = 1; $num <= $max_num; $num++) {
		$total += $num;
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
