<?php 

//array = variable yang mampu menyimpan banyak nilai
$hari = ["senin","selasa","rabu","kamis","jumat", "sabtu"];

//menampilkan array = var_dump() / print_r()

// var_dump($hari);
// echo "<br><br>";
// print_r($hari);
// echo "<br><br>";
// echo "$hari[1]";
// echo "<br><br>";
// echo $hari[2];

var_dump($hari);
echo "<br><br>";
$hari[] = "minggu";
echo "<br><br>";
var_dump($hari);
 ?>