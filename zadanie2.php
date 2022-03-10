<?php
$Kwota=$_POST['Kwota'];
$podatek=$_POST['podatek'];
$Netto;
$podatek=$podatek/100;
$Netto=$Kwota*(1-$podatek);
 echo "Kwota po podatku wynosi: $Netto";
 $Netto
?>

