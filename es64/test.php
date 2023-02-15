<?php

$data1 = time();
sleep(10);
$data2 = time();
$d1 = date("Y-m-d H:i:s", $data1). "<br>";
$d2 = date("Y-m-d H:i:s", $data2). "<br>";
echo $d1;
echo $d2;

?>