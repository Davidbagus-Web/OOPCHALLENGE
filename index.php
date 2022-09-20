<?php
require_once 'App/init.php';

$XiaomiNote9 = new Xiaomi("Xiaomi", "Note 9");
$XiaomiNote10 = new Xiaomi("Xiaomi", "Note 10");
$SamsungGalaxy = new Samsung("Samsung", "Galaxy Z Flip4");
$OppoRealme = new Oppo("Oppo", "Realme 9 Pro");

$daftarHape = new App();
$daftarHape->tambahTipe($XiaomiNote9);
$daftarHape->tambahTipe($XiaomiNote10);
$daftarHape->tambahTipe($SamsungGalaxy);
$daftarHape->tambahTipe($OppoRealme);
echo $daftarHape->cetak();

echo "<hr>";

echo $XiaomiNote10->nyalakan();
echo $XiaomiNote10->getMerk();
echo "<br>";
echo $XiaomiNote10->getTipe();
echo "<br>";
echo $XiaomiNote10->getVolume();
 $XiaomiNote10->volumeUp(); // 1
 $XiaomiNote10->volumeUp(); // 2
 $XiaomiNote10->volumeUp(); // 3
 $XiaomiNote10->volumeUp(); // 4
 $XiaomiNote10->volumeUp(); // 5
 $XiaomiNote10->volumeUp(); // 6 (Maksimal Volume 5);
 echo $XiaomiNote10->getVolume();
 echo $XiaomiNote10->volumeDown();
 echo $XiaomiNote10->getVolume();
 echo $XiaomiNote10->capture();
 echo "<br>";
 echo $XiaomiNote10->matikan();

echo "<hr>";

?>
