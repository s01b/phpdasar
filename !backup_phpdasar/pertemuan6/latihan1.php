<!DOCTYPE html>
<html>
<head>
	<title>Latihan array associative</title>
	<style>
		.kotak{
			width: 30px;
			height: 30px;
			background-color: green;
			text-align: center;
			line-height: 30px;
			margin: 30px;
			float: left;
			transition: 1s;
		}
		.kotak:hover{
			transform: rotate(360deg);
			border-radius: 50%;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>

<?php $angka = [
	[1,2,3],
	[4,5,6],
	[7,8,9]
];
?>

<?php foreach ($angka as $agk) :?>
	<?php foreach($agk as $a) : ?>
		<div class="kotak"><?= $a; ?></div>
	<?php endforeach; ?>
<?php endforeach; ?>
<div class="clear"></div>
</body>
</html>