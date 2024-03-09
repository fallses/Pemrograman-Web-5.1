<?php
    class Tablet {
        private $merk;
        private $camera;
        private $memory;

        public function __construct($merk, $camera, $memory) {
            $this->merk = $merk;
            $this->camera = $camera;
            $this->memory = $memory;
        }
    }

    class Handphone extends Tablet {
        private $handphone_baru;

        public function beli_handphone($handphone_baru) {
            $this->handphone_baru = $handphone_baru;
            echo "Anda telah membeli handphone baru: $handphone_baru\n";
        }
    }

    // Contoh penggunaan
    $hp = new Handphone("Samsung", "12 MP", "64 GB");
    $hp->beli_handphone("iPhone 13");
?>
