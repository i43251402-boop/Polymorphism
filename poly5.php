<?php

interface Notifikasi {

    public function kirim();
}

class Email implements Notifikasi {
    public function kirim() {
    echo " Notifikasi dikirim melalui email";
    }
}

class SMS implements Notifikasi {
    public function kirim() {
    echo " Notifikasi dikirim melalui SMS";
    }
}

class WhatsAPP implements Notifikasi {
    public function kirim() {
    echo " Notifikasi melaui whatsapp";
    }
}

$p1 = new Email();
$p2 = new SMS();
$p3 = new WhatsAPP();

$p1->kirim();
echo "<br>";

$p2->kirim();
echo "<br>";

$p3->kirim();
?>
