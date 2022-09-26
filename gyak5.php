<?php

//I. Aritmetikai operátorok
//a) Összeadás
$x=5;
print'x='.$x."<br/>";
$x=$x+5;
print'x+5='.$x;
print"<br/>";
print"<p/>";

//b) Szorzás
$x=3;
print'x='.$x."<br/>";
$x=$x*4;
print'x*4='.$x;
print"<br/>"."<p/>";

//II. Értékadó operátor
//a) Szorzás
$x=2;
$y=6;
$x*=$y;
print$x; //12
print"<br/>";
print$y."<p/>"; //6

$x=2;
$y=6;
$x=$x*$y;
print$x; //12
print"<br/>";
print$y."<p/>"; //6

//b) Osztás
$x=1;
$y=5;
$x/=$y;
print$x; //0.2
print"<br/>";
print$y."<p/>"; //5

$x=1;
$y=5;
$x=$x/$y;
print$x; //0.2
print"<br/>";
print$y."<p/>"; //5

//III. Összehasonlító operátorok (!= nem egyenlő)
//5!=8->true
//5=8->false

//IV. Logikai operátorok
$x=6;
$y=3;
print($x<10&&$y>1);
print($x<10&&$y>1); //true
print"<p/>";

$x=6;
$y=3;
print($x=5 | $y=5);
print($x==5 | $y==5); //false (alt gr+w) -> ||||

?>