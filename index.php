
<?php
require_once 'App/init.php';

$XiaomiNote9 = new Xiaomi("Xiaomi", "Note 9", 0);
$XiaomiNote10 = new Xiaomi("Xiaomi", "Note 10", 0);

$SamsungGalaxy = new Samsung("Samsung", "Samsung Galaxy Z Flip4", 0);

$OppoRealme = new Oppo("Oppo", "Oppo Realme 9 Pro", 0);

$daftarHape = new App();
$daftarHape->tambahTipe($XiaomiNote9);
$daftarHape->tambahTipe($XiaomiNote10);
$daftarHape->tambahTipe($SamsungGalaxy);
$daftarHape->tambahTipe($OppoRealme);
echo $daftarHape->cetak();

?>