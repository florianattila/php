<?php
$r = 10;  //sugár
print("A kör sugara: ". $r ." cm");
print "<br/>";
print("pi értéke: ". pi());
print "<p/>";

print("A kör kerülete: ". round(pi()*$r*2,4) ." cm");
print "<br/>";
print("A kör területe: ". round(pi()*$r**2,4) ." cm^2");
print "<br/>";
print("A köré írható négyzet kerülete: ". round($r*8) ." cm");
print "<br/>";
print("A köré írható négyzet területe: ". round(($r*2)*($r*2)) ." cm^2");
print "<br/>";

$oldal = ($r**2)+($r**2);
print("A bele írható négyzet kerülete: ". round(sqrt($oldal)*4,4) ." cm");
print "<br/>";
$r = 10;  //sugár
print("A bele írható négyzet területe: ". round((($r*2)*($r*2))/2,4) ." cm^2");
print "<br/>";
?>