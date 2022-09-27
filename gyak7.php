<?php
//1. feladat
$szo1= "Lustaság";
$szo2= "fél";
$szo3= "egészség";
print $szo1." ".$szo2." ".$szo3;

//2. feladat
print "<br/>";
$c = 10000;
$r = 0.08;
$m = 12;
$t = 3;
$fv = $c*(1+$r/$m)**($m*$t);
print "A futamidő végén a betét értéke: ".round($fv,2) ."ft";

//3. feladat
print "<br/>";
$jelenleg = 14;
$ebreszto = 51;
$osszeadva = $jelenleg+$ebreszto;
$napok = $osszeadva%24;
$ora = $jelenleg+$napok;
print "Az ébresztő:".$ora." órakkor ébreszt";
?>