<?php 

//pengulangan pada array

$numbers = [2,4,8,16,32,64,128,256,512,1024,2048,4096]

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2 PHP - Array</title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color: salmon;
			line-height: 50px;
			text-align: center;
			margin: 3px;
			float: left;
		}
		.clear{clear: both;}
	</style>
</head>
<body>

<?php for ($i=0; $i <count($numbers) ; $i++) { ?>
<div class="kotak"><?php echo "$numbers[$i]"; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $numbers as $number) : ?>
	<div class="kotak"><?= $number; ?></div>
<?php endforeach ?>


</body>
</html>