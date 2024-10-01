<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo("
a = 10, b = 5 <br> 
a + b = $hasilTambah <br>
a - b = $hasilKurang<br>
a * b = $hasilKali<br>
a / b = $hasilBagi<br>
a % b = $sisaBagi<br>
a ^ b = $pangkat<br>");

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo("
Sama dengan : $hasilSama<br>
Tidak Sama Dengan : $hasilTidakSama<br>
Lebih Kecil : $hasilLebihKecil<br>
Lebih Besar : $hasilLebihBesar<br>
Lebih Kecil Sama : $hasilLebihKecilSama<br>
Lebih Besar Sama : $hasilLebihBesarSama<br>
");

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo("
Hasil And : $hasilAnd<br>
Hasil Or  : $hasilOr<br>
Hasil Not A : $hasilNotA<br>
Hasil Not B : $hasilNotB<br>");

// Assignment Operations
$a = 10;
$a += $b;
echo("a += b = $a<br>");
$a -= $b;
echo("a -= b = $a<br>");
$a *= $b;
echo("a *= b = $a<br>");
$a /= $b;
echo("a /= b = $a<br>");
$a %= $b;
echo("a %= b = $a<br><br>");

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo("
a === b : $hasilIdentik<br>
a !== b : $hasilTidakIdentik<br>
");

$kursi = 45;
$kursiDitempati = 28;
$kursiSisa = $kursi - $kursiDitempati;
$persentase = ($kursiSisa / $kursi) * 100;

echo $persentase, "%";

?>