<?php 
$data1 = $_GET['valor1'];
$data2 = $_GET['valor2'];
echo "$data1<br>";
echo "$data2<hr>";
$dias = (strtotime($data2)-strtotime($data1))/86400;
echo "$dias";
?>