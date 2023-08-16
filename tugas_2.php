<?php 
$durasipertama = 36;
$pekerjaI = 12;
$pekerja2 = 24;

echo "$durasipertama Hari = $pekerjaI Pekerja <br>";
echo "X Hari = $pekerja2 Pekerja <br>";
echo "X = .....?";

$durasikedua = ($durasipertama * $pekerjaI) / $pekerja2;
echo "<br>";
echo " Jawaban : $durasikedua";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
$hargaboneka = 50000;
$hargajual = 80000;

echo "Jual = $hargajual <br>";
echo "Beli = $hargaboneka <br>";
echo "Keuntungan = .... ? <br>";

$keuntungan = ($hargajual - $hargaboneka)/$hargaboneka;
$persen = $keuntungan * 100;
echo "Jawaban :  $persen %";
?>