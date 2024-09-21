<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "<b> OPERATOR </b><br>";
echo "<br> a = $a, b = $b <br>";
echo "<br><b> Aritmatika </b><br>";
echo "Hasil Penjumlahan (a + b): {$hasilTambah} <br>";
echo "Hasil Pengurangan (a - b): {$hasilKurang} <br>";
echo "Hasil Perkalian (a * b): {$hasilKali} <br>";
echo "Hasil Pembagian (a / b): {$hasilBagi} <br>";
echo "Sisa Bagi (a % b): {$sisaBagi} <br>";
echo "Hasil Pangkat (a ** b): {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo " <br><b> Checklist </b><br>";
echo "Apakah a == b? : " . ($hasilSama ? 'True' : 'False') . "<br>";
echo "Apakah a != b? : " . ($hasilTidakSama ? 'True' : 'False') . "<br>";
echo "Apakah a < b? : " . ($hasilLebihKecil ? 'True' : 'False') . "<br>";
echo "Apakah a > b? : " . ($hasilLebihBesar ? 'True' : 'False') . "<br>";
echo "Apakah a <= b? : " . ($hasilLebihKecilSama ? 'True' : 'False') . "<br>";
echo "Apakah a >= b? : " . ($hasilLebihBesarSama ? 'True' : 'False') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo " <br><b> Logic </b><br>";
echo "Hasil dari (a && b): " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil dari (a || b): " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Hasil dari (!a): " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil dari (!b): " . ($hasilNotB ? 'True' : 'False') . "<br>";

echo " <br><b> Assignment </b><br>";
$a += $b;
echo "a += b; Nilai a sekarang: {$a} <br>";

$a -= $b;
echo "a -= b; Nilai a sekarang: {$a} <br>";

$a *= $b;
echo "a *= b; Nilai a sekarang: {$a} <br>";

$a /= $b;
echo "a /= b; Nilai a sekarang: {$a} <br>";

$a %= $b;
echo "a %= b; Nilai a sekarang: {$a} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo " <br><b> Identity </b><br>";
echo "Apakah a === b? : " . ($hasilIdentik ? 'True' : 'False') . "<br>";
echo "Apakah a !== b? : " . ($hasilTidakIdentik ? 'True' : 'False') . "<br>";
?>