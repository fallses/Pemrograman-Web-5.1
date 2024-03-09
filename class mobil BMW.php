<?php
class MobilLengkap {
    public function nontonTV() {
        echo "TV dihidupkan, TV Mencari Chanel, TV Menampilkan gambar.\n";
    }
}

class MobilBMW extends MobilLengkap {
    public function HidupkanMobil() {
        echo "Mobil BMW dinyalakan.\n";
    }

    public function MatikanMobil() {
        echo "Mobil BMW dimatikan.\n";
    }

    public function ubahGigi($gigi) {
        echo "Gigi mobil BMW diubah menjadi gigi $gigi.\n";
    }
}

// Contoh penggunaan
$bmw = new MobilBMW();
$bmw->HidupkanMobil();
$bmw->nontonTV();
$bmw->ubahGigi(3);
$bmw->MatikanMobil();
?>
