<?php
$jari_jari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;

$nim = "2410817110005"; 
$akhiran_nim = substr($nim, -1); 

if ($akhiran_nim == 0 || $akhiran_nim == 1) {
    $volume = pi() * pow($jari_jari, 2) * $tinggi;
    $bangun_ruang = "Tabung";
} elseif ($akhiran_nim == 2 || $akhiran_nim == 3) {
    $volume = (1/3) * pi() * pow($jari_jari, 2) * $tinggi;
    $bangun_ruang = "Kerucut";
} elseif ($akhiran_nim == 4 || $akhiran_nim == 5) {
        $volume = (4/3) * pi() * pow($jari_jari, 3);
    $bangun_ruang = "Bola";
} elseif ($akhiran_nim == 6 || $akhiran_nim == 7) { 
    $volume = (1/2 * $panjang * $lebar) * $tinggi; 
    $bangun_ruang = "Prisma alas segitiga";
} elseif ($akhiran_nim == 8 || $akhiran_nim == 9) {
        $volume = (1/3) * $panjang * $lebar * $tinggi;
    $bangun_ruang = "Limas alas persegi panjang";
}

echo "Hitung Volume $bangun_ruang <br>";
echo number_format($volume, 3, '.', '') . " m3";
?>