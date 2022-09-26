<?php
/*
Adjunk össze számokat és karakterláncokat
a = "156cm" + "104cm"
*/

$a = "156" + "104";
print $a."<br/>";
var_dump($a);

print "<hr stlye='width:200px; text-align:left; margin-left:0'>"; //vízszintes vonal
print "<br/>";
$a = $a . "cm";
print $a."<br/>"; //sortörés

$a = $a;
print $a . "<br/>";
var_dump($a);
print "<p/>";

$a = true;
print $a . "<br/>";
var_dump($a);
?>