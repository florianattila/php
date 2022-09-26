<?php
//Változó típusa
$a = 3.14159265358979323846264338327950288419716939937510;
print gettype($a);
print "<br/>";
var_dump($a);
print "<p/>";

$a = "20.2" + "30.5";
print $a;
print "<br/>";
$a = (int) $a;
print "$a"."<br/>";
var_dump($a)
?>