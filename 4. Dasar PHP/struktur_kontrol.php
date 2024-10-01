<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf : A <br>";
} elseif($nilaiNumerik >= 80 && $nilaiNumerik <= 90){
    echo "Nilai huruf : B";
} elseif($nilaiNumerik >= 70 && $nilaiNumerik <= 80){
    echo "Nilai huruf : C";
} elseif($nilaiNumerik < 70){
    echo "Nilai huruf : D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer <br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total skor ujian adalah $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai : $nilai (Tidak Lulus !) <br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus) <br>";
}

$nilaiMatematika = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$total = 0;
$tertinggi = [$nilaiMatematika[0], $nilaiMatematika[1]];
$terendah = [$nilaiMatematika[0], $nilaiMatematika[1]];

for($i = 0; $i < 10; $i++){
    if($nilaiMatematika[$i] > $tertinggi[0]){
        $tertinggi[0] = $nilaiMatematika[$i];
    } elseif($nilaiMatematika[$i] > $tertinggi[1]){
        $tertinggi[1] = $nilaiMatematika[$i];
    }
    
    if($nilaiMatematika[$i] < $terendah[0]){
        $terendah[0] = $nilaiMatematika[$i];
    } elseif($nilaiMatematika[$i] < $terendah[1]){
        $terendah[1] = $nilaiMatematika[$i];
    }
}

echo "Nilai Yang Masuk Dalam Perhitungan Rata-Rata : <br>";
for($i = 0; $i < 10; $i++){
    if($nilaiMatematika[$i] === $tertinggi[0] || $nilaiMatematika[$i] === $tertinggi[1]){
        continue;
    } elseif($nilaiMatematika[$i] === $terendah[0] || $nilaiMatematika[$i] === $terendah[1]){
        continue;
    } else {
        echo "Nilai : ", $nilaiMatematika[$i], "<br>" ;
        $total+= $nilaiMatematika[$i];

    }
}
$rata2 = $total / 6;
echo "Rata-rata = $rata2 <br>";
echo "Nilai Terendah : (", $terendah[0], "), (", $terendah[1], ")<br>" ;
echo "Nilai : (", $tertinggi[0],"), (", $tertinggi[1], ")<br>" ;

$hargaAwal = 120000.00;
$hargaSetelahDiskon = 0.80 * $hargaAwal;

echo "Harga Awal : $hargaAwal <br> Harga Setelah Diskon : $hargaSetelahDiskon <br>";

$poin = 520;
$hadiah = ($poin > 500) ? "YA" : "TIDAK";


echo "Total skor pemain adalaha : ($poin)<br>
    Apakah pemain Mendapatkan hadiah Tambahan : ($hadiah) <br>";
?>
