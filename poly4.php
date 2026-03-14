<?php

class BangunDatar {

    public function hitungluas() {
        echo "BangunDatar menghitungluas";
         }
}

class Segitiga extends BangunDatar {
    public function hitungluas() {
        echo "1/2 x alas x tinggi";
    }
}

class Persegi extends BangunDatar {
    public function hitungluas() {
        echo "sisi x sisi";
    }
}

class Lingkaran extends BangunDatar {
    public function hitungluas() {
        echo " π × jari-jari × jari-jari";
    }
}

$segitiga = new Segitiga();
$persegi = new Persegi();
$lingkaran = new Lingkaran();

$segitiga->Hitungluas();
echo "<br>";

$persegi->HitungLuas();
echo "<br>";

$lingkaran->HitungLuas();
?>