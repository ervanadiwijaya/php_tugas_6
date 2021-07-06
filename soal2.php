<?php

$hargaJambu = 15000;
$dus = 6;
$isi = 5;
$hargaDus = 2000;

$totJambu = $dus * $isi;
$penjualan = ($totJambu * $hargaJambu) + ($dus * $hargaDus);

echo "=========================================================";
echo "</br>Harga Jambu = Rp " . $hargaJambu . " /Kg</br>";
echo "Harga Kardus = Rp " . $hargaDus . " /Pcs</br>";
echo "Total Penjualan (Dus dan Jambu) = Rp " . $penjualan . "</br>";
echo "=========================================================";
